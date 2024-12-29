<?php
// @author: C.A.D. BONDJE DOUE
// @file: SiteModelUtility.php
// @desc: module utility SiteModelUtility
// @date: 20241012 14:31:20
namespace com\igkdev\projects\SiteNoteBook\ModelUtilities;

use com\igkdev\projects\SiteNoteBook\Models\Sites; 
use IGK\System\Database\DbWhereQueryCondition; 
use IGKDbModelUtility;

///<summary>view entry point</summary>
/**
* view entry point
* @package com\igkdev\projects\SiteNoteBook\ModelUtilities
* @author C.A.D. BONDJE DOUE
*/
class SiteModelUtility extends IGKDbModelUtility{
    /**
     * use to search definition 
     * @param string $key 
     * @return mixed 
     */
    public function search(string $key){
        $g = '%'.str_replace('%', '', html_entity_decode($key)).'%';
        $where = DbWhereQueryCondition::Create([
            '@@'.Sites::FD_NAME()=> $g,
            '@@'.Sites::FD_VAT()=> $g,
            '@@'.Sites::FD_TEL()=> $g
        ], DbWhereQueryCondition::OR_OP);

        return Sites::select_all($where);
    }
}