<?php
// @author: C.A.D. BONDJE DOUE
// @file: SitesModelUtility.php
// @desc: module utility SitesModelUtility
// @date: 20240917 17:32:37
namespace com\igkdev\projects\SiteNoteBook\ModelUtilities;

use com\igkdev\projects\SiteNoteBook\Models\Sites;
use IGKDbModelUtility;

///<summary>view entry point</summary>
/**
* view entry point
* @package com\igkdev\projects\SiteNoteBook\ModelUtilities
* @author C.A.D. BONDJE DOUE
*/
class SitesModelUtility extends IGKDbModelUtility{
    /**
     * register stites
     * @param string $uri 
     * @param string $name 
     * @return null|Sites 
     */
    public function regSite(string $uri, string $name){
        return Sites::Add($uri, $name);
    }
    public function dropSite(Sites $model){
        return $model->delete();
    }
}