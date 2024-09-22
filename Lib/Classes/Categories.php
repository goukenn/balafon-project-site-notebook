<?php
// @author: C.A.D. BONDJE DOUE
// @file: Categories.php
// @date: 20240917 17:41:22
namespace com\igkdev\projects\SiteNoteBook;

use com\igkdev\projects\SiteNoteBook\Models\SiteCategories;
use Exception;
use IGK\Database\ORM\Annotations as ORM; 
use IGK\System\Database\DbConstantTypeBase;
use IGK\System\Traits\EnumeratesConstants;

///<summary></summary>
/**
* 
* @package com\igkdev\projects\SiteNoteBook
* @author C.A.D. BONDJE DOUE
* @ORM\InitDataAnnotation()
*/
abstract class Categories extends DbConstantTypeBase{ 
    protected static $model = SiteCategories::class;
    protected static $field_name = SiteCategories::FD_NAME;
    use EnumeratesConstants; 
    const ENTERTAIMENTS = 'Entertaiments';
    const NEWS = 'News';
    const SEARCHENGINE = 'SearchEngine';
    const STORAGE = 'Storage';
    const PICTURES = 'Pictures';
    const JOBSITES = 'JobSites';
    const ADT = 'Adult';
    const SHOPPING = 'Shopping';
    const MTC = 'MTC';

    /**
     * 
     * @param mixed $field 
     * @param mixed $type 
     * @return void 
     * @throws Exception 
     */
    public static function InsertExtraFields($field, $type){        
        $field->fields[SiteCategories::FD_DESC] = igk_getv([
            self::MTC => 'Multinational Technogoly Company.',
            self::ADT => 'For adult only.',
            self::JOBSITES => 'Job site.'
        ], $type);        
    }
}