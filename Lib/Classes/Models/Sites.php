<?php
// @author: C.A.D. BONDJE DOUE
// @file: Sites.php
// @date: 20240922 19:53:35
namespace com\igkdev\projects\SiteNoteBook\Models;


use com\igkdev\projects\SiteNoteBook\Models\ModelBase;

///<summary></summary>
/**
* 
* @package com\igkdev\projects\SiteNoteBook\Models
* @author C.A.D. BONDJE DOUE
* @property int $id
* @property string $guid
* @property string $site site url
* @property string $name name or company's short name
* @property string $title
* @property string $vat value added tax number
* @property int|?\com\igkdev\projects\SiteNoteBook\Models\SiteCategories $primary_cat_id
* @property string $locale default site locale
* @property string $logo url to logo
* @property int|?\com\igkdev\projects\SiteNoteBook\Models\SiteStatus $status_id
* @property string $tel
* @property string $mail
* @property string $address
* @property string $desc
* @property string|datetime $deactivate_at
* @property string|datetime $Create_At ="Now()"
* @property string|datetime $Update_At ="Now()"
* @method static string FD_ID() - `id` full column name 
* @method static string FD_GUID() - `guid` full column name 
* @method static string FD_SITE() - `site` full column name 
* @method static string FD_NAME() - `name` full column name 
* @method static string FD_TITLE() - `title` full column name 
* @method static string FD_VAT() - `vat` full column name 
* @method static string FD_PRIMARY_CAT_ID() - `primary_cat_id` full column name 
* @method static string FD_LOCALE() - `locale` full column name 
* @method static string FD_LOGO() - `logo` full column name 
* @method static string FD_STATUS_ID() - `status_id` full column name 
* @method static string FD_TEL() - `tel` full column name 
* @method static string FD_MAIL() - `mail` full column name 
* @method static string FD_ADDRESS() - `address` full column name 
* @method static string FD_DESC() - `desc` full column name 
* @method static string FD_DEACTIVATE_AT() - `deactivate_at` full column name 
* @method static string FD_CREATE_AT() - `Create_At` full column name 
* @method static string FD_UPDATE_AT() - `Update_At` full column name 
* @method static ?array joinOnStsId($call=null, ?string $type=null, string $op=\IGK\System\Database\JoinTableOp::EQUAL) - macros function 
* @method static ?string targetOnStsId() - macros function
* @method static ?self Add(string $guid, string $site, string $name, string $title, string $vat, int|?\com\igkdev\projects\SiteNoteBook\Models\SiteCategories $primary_cat_id, string $locale, string $logo, int|?\com\igkdev\projects\SiteNoteBook\Models\SiteStatus $status_id, string $tel, string $mail, string $address, string $desc, string|datetime $deactivate_at, string|datetime $Create_At ="Now()", string|datetime $Update_At ="Now()") add entry helper
* @method static ?self AddIfNotExists(string $guid, string $site, string $name, string $title, string $vat, int|?\com\igkdev\projects\SiteNoteBook\Models\SiteCategories $primary_cat_id, string $locale, string $logo, int|?\com\igkdev\projects\SiteNoteBook\Models\SiteStatus $status_id, string $tel, string $mail, string $address, string $desc, string|datetime $deactivate_at, string|datetime $Create_At ="Now()", string|datetime $Update_At ="Now()") add entry if not exists. check for unique column.
* */
class Sites extends ModelBase{
	const FD_ID="sts_id";
	const FD_GUID="sts_guid";
	const FD_SITE="sts_site";
	const FD_NAME="sts_name";
	const FD_TITLE="sts_title";
	const FD_VAT="sts_vat";
	const FD_PRIMARY_CAT_ID="sts_primary_cat_id";
	const FD_LOCALE="sts_locale";
	const FD_LOGO="sts_logo";
	const FD_STATUS_ID="sts_status_id";
	const FD_TEL="sts_tel";
	const FD_MAIL="sts_mail";
	const FD_ADDRESS="sts_address";
	const FD_DESC="sts_desc";
	const FD_DEACTIVATE_AT="sts_deactivate_at";
	const FD_CREATE_AT="sts_Create_At";
	const FD_UPDATE_AT="sts_Update_At";
	/**
	* table's name
	*/
	protected $table = "%prefix%sites";
	/**
	* override primary key 
	*/
	protected $primaryKey = "sts_id";
	/**
	* override refid key 
	*/
	protected $refId = "sts_id";
	/**
	*override display key
	*/
	protected $display = ["sts_title","sts_name"];
}