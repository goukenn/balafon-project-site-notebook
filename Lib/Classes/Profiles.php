<?php
// @author: C.A.D. BONDJE DOUE
// @date: 20240922 07:45:07
namespace com\igkdev\projects\SiteNoteBook;


///<summary></summary>
/**
* 
* @package com\igkdev\projects\SiteNoteBook
* @author C.A.D. BONDJE DOUE
*/
abstract class Profiles{
	/* const ProfileRole="ProfileRoleValue" */
	const User = "User";
	const Admin = "Admin";

	public static function GetDefaultProfile(){
		return self::User;
	}
}