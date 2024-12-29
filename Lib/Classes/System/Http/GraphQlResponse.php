<?php
// @author: C.A.D. BONDJE DOUE
// @file: GraphQlResponse.php
// @date: 20241007 13:35:54
namespace com\igkdev\projects\SiteNoteBook\System\Http;

use com\igkdev\projects\SiteNoteBook\Models\Sites;
use IGK\Controllers\BaseController; 
use igk\io\GraphQl\Http\Response\GraphQLResponseListener; 
use IGK\System\Database\Mapping\ModelArrayMapping;

///<summary></summary>
/**
* use to response to graph ql
* @package com\igkdev\projects\SiteNoteBook\System\Http
* @author C.A.D. BONDJE DOUE
*/
class GraphQlResponse extends GraphQLResponseListener{
    private $m_ctrl;
    public function __construct(BaseController $controller){
        // parent::
        $this->m_ctrl = $controller;
    }

    public function query(): array { 
        return [
            'sites'=>function(){
                return $this->sites();
            }
        ];
    }
    public function sites(){ 
        /**
         * default site mapping
         */
        $r = array_map(new ModelArrayMapping(Sites::model()), Sites::select_all()); 
        return $r;       
    }
}