<?php
// @author: C.A.D. BONDJE DOUE
// @file: SiteExtraCategories.php
// @date: 20240922 17:33:51
namespace com\igkdev\projects\SiteNoteBook\Models;


use com\igkdev\projects\SiteNoteBook\Models\ModelBase;

///<summary></summary>
/**
* 
* @package com\igkdev\projects\SiteNoteBook\Models
* @author C.A.D. BONDJE DOUE
* @property int $id
* @property int|\com\igkdev\projects\SiteNoteBook\Models\SiteCategories $cat_id
* @property int|\com\igkdev\projects\SiteNoteBook\Models\Sites $site_id
* @method static string FD_ID() - `id` full column name 
* @method static string FD_CAT_ID() - `cat_id` full column name 
* @method static string FD_SITE_ID() - `site_id` full column name 
* @method static ?array joinOnStbId($call=null, ?string $type=null, string $op=\IGK\System\Database\JoinTableOp::EQUAL) - macros function 
* @method static ?string targetOnStbId() - macros function
* @method static ?self Add(int|\com\igkdev\projects\SiteNoteBook\Models\SiteCategories $cat_id, int|\com\igkdev\projects\SiteNoteBook\Models\Sites $site_id) add entry helper
* @method static ?self AddIfNotExists(int|\com\igkdev\projects\SiteNoteBook\Models\SiteCategories $cat_id, int|\com\igkdev\projects\SiteNoteBook\Models\Sites $site_id) add entry if not exists. check for unique column.
* */
class SiteExtraCategories extends ModelBase{
	const FD_ID="stb_id";
	const FD_CAT_ID="stb_cat_id";
	const FD_SITE_ID="stb_site_id";
	/**
	* table's name
	*/
	protected $table = "%prefix%site_extra_categories";
	/**
	* override primary key 
	*/
	protected $primaryKey = "stb_id";
	/**
	* override refid key 
	*/
	protected $refId = "stb_id";
	protected $unique_columns = array (
	  0 => 
	  array (
	    0 => 'stb_cat_id',
	    1 => 'stb_site_id',
	  ),
	);
}