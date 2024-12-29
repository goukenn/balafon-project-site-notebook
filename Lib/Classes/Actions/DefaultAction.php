<?php
// @author: C.A.D. BONDJE DOUE
// @file: Default.phtml
// @desc: view action Default
// @date: 20240922 20:18:49
namespace com\igkdev\projects\SiteNoteBook\Actions;

use com\igkdev\projects\SiteNoteBook\Authorizations;
use com\igkdev\projects\SiteNoteBook\Database\Import\SitesImportMapping;
use com\igkdev\projects\SiteNoteBook\Models\SiteCategories;
use com\igkdev\projects\SiteNoteBook\Models\Sites;
use com\igkdev\projects\SiteNoteBook\System\Http\GraphQlResponse;
use com\igkdev\projects\SiteNoteBook\WinUI\FormValidations\SitesFormData;
use Exception;
use IGK\Actions\ActionBase;
use IGK\Actions\ApiActionBase;
use IGK\Helper\JSon;
use igk\io\GraphQl\GraphQlParser;
use IGK\System\Http\Helper\Response;
use IGK\System\Http\JsonResponse;
use IGK\System\Http\Request;

///<summary>view action</summary>
/**
 * view action
 * @package com\igkdev\projects\SiteNoteBook\Actions
 * @author C.A.D. BONDJE DOUE
 */
class DefaultAction extends ApiActionBase
{ 

    public function graphql(){ 
        igk_require_module('igk\io\GraphQl');
        $ctrl = $this->getController();
        $data = Request::getInstance()->getJsonData() ;        
        $response = GraphQlParser::Parse($data, new GraphQlResponse ($ctrl)); 
        return $response;
    }
    public function index_get(Request $request)
    {  
        return ['index'=>'get']; 
    }
    /**
     * posting data and json with 
     * @param Request $request 
     * @return mixed 
     * @throws Exception 
     */
    public function index_post(?string $path, Request $request){  
        $json = $request->getJsonData();
        if ($json){
            $action = igk_getv($json,'action');
            $map = null;
            switch($action){
                case 'sites':
                    $data = igk_getv($json,'data');
                    if (is_array($data)){
                        $map = new SitesImportMapping; 
                        array_map($map, $data);
                    }
                    break;
                default:
                if (is_array($json)){
                    $map = new SitesImportMapping;
                    array_map($map, $json);
                }
                break;
            } 
           return ["status"=>"200", "count"=>$map->count()];
        }else{
            $arr = (array)$request->getFormData();
            $validation = new SitesFormData; 
            $error = [];  
            if ($validation->validate($arr, $error)){
                extract((array)$validation);  
                $r = Sites::insertIfNotExists([
                    Sites::FD_TITLE=>$title,
                    Sites::FD_NAME=>$name,
                    Sites::FD_SITE=>$site,
                ]);
                if (true === $r){
                    return ['status'=>200, 'msg'=>'success'];
                } 
            }  
        }
        if ($this->fname != IGK_DEFAULT_VIEW){

            if ($view_exits = $this->getController()->getIsViewExists($this->fname)){
                return [];
            }
        }
        return Response::BadRequest();
    }
    /**
     * export data fields
     */
    public function export_get()
    {
        // + | --------------------------------------------------------------------
        // + | export site definition 
        // + |
        $raws = [];
        if (($u = $this->getUser()) && ($u::auths(Authorizations::ExportAll))){ 
            $raws = Sites::select_all();
        }else{

            $query = SiteCategories::selectExpression([SiteCategories::FD_NAME=>"ADT"], ["Columns"=>[SiteCategories::FD_ID]]); 
            $raws = Sites::select_all([
                "!<>".Sites::FD_PRIMARY_CAT_ID => $query 
            ]);
        }
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

    /**
     * handling site args 
     * @return void 
     */
    public function sites($argument, Request $request){
        $q = $request->get('q');
        $response = null;
        if ($q){
            $u = $this->getController()->modelUtility('site');
            $response = $u->search($q);
        }
        return [
            'i'=>20,
            'q'=>$argument,
            'response'=>$response
        ];
    }
}
