<?php
// @author: C.A.D. BONDJE DOUE
// @file: SiteUsers.php
// @date: 20241122 14:23:35
namespace com\igkdev\projects\SiteNoteBook\Models;


use com\igkdev\projects\SiteNoteBook\Models\ModelBase;

///<summary>registrated users</summary>
/**
* registrated users
* @package com\igkdev\projects\SiteNoteBook\Models
* @author C.A.D. BONDJE DOUE
* @property int $id
* @property string|\IGK\Models\Users $user_id
* @property string $account
* @property string|datetime $Create_At ="Now()"
* @property string|datetime $Update_At ="Now()"
* @method static string FD_ID() - `id` full column name 
* @method static string FD_USER_ID() - `user_id` full column name 
* @method static string FD_ACCOUNT() - `account` full column name 
* @method static string FD_CREATE_AT() - `Create_At` full column name 
* @method static string FD_UPDATE_AT() - `Update_At` full column name 
* @method static ?array joinOnStuId($call=null, ?string $type=null, string $op=\IGK\System\Database\JoinTableOp::EQUAL) - macros function 
* @method static ?string targetOnStuId() - macros function
* @method static ?self Add(string|\IGK\Models\Users $user_id, string $account, string|datetime $Create_At ="Now()", string|datetime $Update_At ="Now()") add entry helper
* @method static ?self AddIfNotExists(string|\IGK\Models\Users $user_id, string $account, string|datetime $Create_At ="Now()", string|datetime $Update_At ="Now()") add entry if not exists. check for unique column.
* */
class SiteUsers extends ModelBase{
	const FD_ID="stu_id";
	const FD_USER_ID="stu_user_id";
	const FD_ACCOUNT="stu_account";
	const FD_CREATE_AT="stu_Create_At";
	const FD_UPDATE_AT="stu_Update_At";
	/**
	* table's name
	*/
	protected $table = "%prefix%site_users";
	/**
	* override primary key 
	*/
	protected $primaryKey = "stu_id";
	/**
	* override refid key 
	*/
	protected $refId = "stu_id";
	/**
	*override display key
	*/
	protected $display = "stu_user_id";
	protected $unique_columns = array (
	  0 => 
	  array (
	    0 => 'stu_user_id',
	  ),
	);
}