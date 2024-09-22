<?php
// @author: C.A.D. BONDJE DOUE
// @file: SiteSubscriptions.php
// @date: 20240922 17:33:51
namespace com\igkdev\projects\SiteNoteBook\Models;


use com\igkdev\projects\SiteNoteBook\Models\ModelBase;

///<summary></summary>
/**
* 
* @package com\igkdev\projects\SiteNoteBook\Models
* @author C.A.D. BONDJE DOUE
* @property int $id
* @property string|\com\igkdev\projects\SiteNoteBook\Models\Sites $site_id
* @property int|\com\igkdev\projects\SiteNoteBook\Models\SiteUsers $user_id
* @property string $account
* @property string|datetime $Create_At ="Now()"
* @property string|datetime $Update_At ="Now()"
* @method static string FD_ID() - `id` full column name 
* @method static string FD_SITE_ID() - `site_id` full column name 
* @method static string FD_USER_ID() - `user_id` full column name 
* @method static string FD_ACCOUNT() - `account` full column name 
* @method static string FD_CREATE_AT() - `Create_At` full column name 
* @method static string FD_UPDATE_AT() - `Update_At` full column name 
* @method static ?array joinOnSsuId($call=null, ?string $type=null, string $op=\IGK\System\Database\JoinTableOp::EQUAL) - macros function 
* @method static ?string targetOnSsuId() - macros function
* @method static ?self Add(string|\com\igkdev\projects\SiteNoteBook\Models\Sites $site_id, int|\com\igkdev\projects\SiteNoteBook\Models\SiteUsers $user_id, string $account, string|datetime $Create_At ="Now()", string|datetime $Update_At ="Now()") add entry helper
* @method static ?self AddIfNotExists(string|\com\igkdev\projects\SiteNoteBook\Models\Sites $site_id, int|\com\igkdev\projects\SiteNoteBook\Models\SiteUsers $user_id, string $account, string|datetime $Create_At ="Now()", string|datetime $Update_At ="Now()") add entry if not exists. check for unique column.
* */
class SiteSubscriptions extends ModelBase{
	const FD_ID="ssu_id";
	const FD_SITE_ID="ssu_site_id";
	const FD_USER_ID="ssu_user_id";
	const FD_ACCOUNT="ssu_account";
	const FD_CREATE_AT="ssu_Create_At";
	const FD_UPDATE_AT="ssu_Update_At";
	/**
	* table's name
	*/
	protected $table = "%prefix%site_subscriptions";
	/**
	* override primary key 
	*/
	protected $primaryKey = "ssu_id";
	/**
	* override refid key 
	*/
	protected $refId = "ssu_id";
	protected $unique_columns = array (
	  0 => 
	  array (
	    0 => 'ssu_site_id',
	    1 => 'ssu_user_id',
	  ),
	);
}