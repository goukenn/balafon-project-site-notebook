<?php
// @author: C.A.D. BONDJE DOUE
// @file: SiteCategories.php
// @date: 20240922 19:53:35
namespace com\igkdev\projects\SiteNoteBook\Models;


use com\igkdev\projects\SiteNoteBook\Models\ModelBase;

///<summary></summary>
/**
* 
* @package com\igkdev\projects\SiteNoteBook\Models
* @author C.A.D. BONDJE DOUE
* @property int $id
* @property string $name
* @property string $desc
* @property string|datetime $Create_At ="Now()"
* @property string|datetime $Update_At ="Now()"
* @method static string FD_ID() - `id` full column name 
* @method static string FD_NAME() - `name` full column name 
* @method static string FD_DESC() - `desc` full column name 
* @method static string FD_CREATE_AT() - `Create_At` full column name 
* @method static string FD_UPDATE_AT() - `Update_At` full column name 
* @method static ?array joinOnStcId($call=null, ?string $type=null, string $op=\IGK\System\Database\JoinTableOp::EQUAL) - macros function 
* @method static ?string targetOnStcId() - macros function
* @method static ?self Add(string $name, string $desc, string|datetime $Create_At ="Now()", string|datetime $Update_At ="Now()") add entry helper
* @method static ?self AddIfNotExists(string $name, string $desc, string|datetime $Create_At ="Now()", string|datetime $Update_At ="Now()") add entry if not exists. check for unique column.
* */
class SiteCategories extends ModelBase{
	const FD_ID="stc_id";
	const FD_NAME="stc_name";
	const FD_DESC="stc_desc";
	const FD_CREATE_AT="stc_Create_At";
	const FD_UPDATE_AT="stc_Update_At";
	/**
	* table's name
	*/
	protected $table = "%prefix%site_categories";
	/**
	* override primary key 
	*/
	protected $primaryKey = "stc_id";
	/**
	* override refid key 
	*/
	protected $refId = "stc_id";
	/**
	*override display key
	*/
	protected $display = "stc_name";
}