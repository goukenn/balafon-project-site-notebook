<?php
// @author: C.A.D. BONDJE DOUE
// @file: Default.phtml
// @desc: view action Default
// @date: 20240922 20:18:49
namespace com\igkdev\projects\SiteNoteBook\Actions;

use com\igkdev\projects\SiteNoteBook\Database\Import\SitesImportMapping;
use com\igkdev\projects\SiteNoteBook\Models\Sites;
use Exception;
use IGK\Actions\ActionBase;
use IGK\Helper\JSon;
use IGK\System\Http\JsonResponse;

///<summary>view action</summary>
/**
 * view action
 * @package com\igkdev\projects\SiteNoteBook\Actions
 * @author C.A.D. BONDJE DOUE
 */
class DefaultAction extends ActionBase
{
    public function index_get()
    {
        return [];
    }
    public function export_get()
    {
        // + | --------------------------------------------------------------------
        // + | export site definition 
        // + |
        $raws = Sites::select_all();
        $r = JSon::Encode($raws, ["ignore_empty" => 1], JSON_PRETTY_PRINT);
        return igk_do_response(new JsonResponse($r));
    }
    /**
     * 
     * @return void 
     * @throws Exception 
     * @auth(Edit)
     */
    public function import_post()
    {
        $data = null;
        $file = igk_getv($_FILES, "json");
        if ($file && ($file['error'] == 0)) {
            $data = json_decode(file_get_contents($file['tmp_name']));
            if ($data) {
                $map = new SitesImportMapping(Sites::model());
                array_map($map, $data);
            }
        }
    }
}
