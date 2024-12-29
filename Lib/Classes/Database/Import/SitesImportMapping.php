<?php
// @author: C.A.D. BONDJE DOUE
// @file: SitesImportMapping.php
// @date: 20240919 12:34:44
namespace com\igkdev\projects\SiteNoteBook\Database\Import;

use com\igkdev\projects\SiteNoteBook\Categories;
use com\igkdev\projects\SiteNoteBook\Models\SiteCategories;
use com\igkdev\projects\SiteNoteBook\Models\SiteExtraCategories;
use com\igkdev\projects\SiteNoteBook\Models\Sites;
use Exception;
use IGK\Models\ModelBase;
use IGK\System\Database\Import\BaseModel;
use IGK\System\Database\Import\DbModelImporterMap;
use IGKException;

///<summary></summary>
/**
 * 
 * @package com\igkdev\projects\SiteNoteBook\Database\Import
 * @author C.A.D. BONDJE DOUE
 */
class SitesImportMapping extends DbModelImporterMap
{
    private $m_lib_extras;
    /**
     * 
     * @param Sites $model 
     * @return void 
     * @throws Exception 
     * @throws IGKException 
     */
    public function __construct(Sites $model = null)
    {
        $model = $model ?? Sites::model();
        parent::__construct($model);
        $this->autoregister = true;
        $this->addFieldListener("primaryCategory", [$this, 'pimaryCatHandler']);
        $this->addFieldListener("status", [$this, 'statusHandler']);
        $this->m_lib_extras = [];
    }
    protected function pimaryCatHandler(& $tab, $key, $map)
    {
        $v = $tab[$key];
        if (is_array($v)){
            $primaryValue = $v[0];
            $cl = $this->getReservalMapping(Sites::FD_PRIMARY_CAT_ID);
            $v_add_extra = [];
            foreach ($v as $value) {
                if (igk_str_endwith($f = trim($value),'*')){
                    $primaryValue = $value =  rtrim($f,'*');
                }   
                $st = $this->_resolveLinkValue(Sites::FD_PRIMARY_CAT_ID, $cl, $value, $found);
                if ($st)
                $v_add_extra[$value] = $value;
            }
            // + | remove primary from extra
            // + | unset($v_add_extra[$primaryValue]);
            $v = $primaryValue;
            if (count($v_add_extra)>0){
                $this->registerLibExtra('link_extras_categories', $v_add_extra);
            }
        }
        unset($tab[$key]);
        $tab[Sites::FD_PRIMARY_CAT_ID] = $v;
    }
    protected function registerLibExtra($callback, $data){
        $this->m_lib_extras[] = [$callback, $data];
    }
    protected function _onRowInserted(ModelBase $model)
    {
        if ($this->m_lib_extras){
            foreach($this->m_lib_extras as $v){
                list($callback, $data) = $v;
                call_user_func_array([$this, $callback], [$model, $data]);
            }
            // + | --------------------------------------------------------------------
            // + | clear extra lib data 
            // + |
            
            $this->m_lib_extras = [];
        }
    }
    /**
     * 
     * @param Sites $site 
     * @param mixed $categories 
     * @return void 
     */
    protected function link_extras_categories(Sites $site, $categories){
        foreach($categories as $cat_id){
            $cat = Categories::GetCacheData($cat_id);
            if ($cat){
                $cond =  [
                    SiteExtraCategories::FD_CAT_ID=>$cat->id,
                    SiteExtraCategories::FD_SITE_ID=>$site->id
                ];
                SiteExtraCategories::insertIfNotExists($cond); 
            }
            else {
                igk_dev_wln_e("missing catetogies", $cat_id);
            }
        }
    }
    protected function statusHandler(& $tab, $key, $map)
    {
        $v = $tab[$key];
        unset($tab[$key]);
        $tab[Sites::FD_STATUS_ID] = $v;
    }
}
