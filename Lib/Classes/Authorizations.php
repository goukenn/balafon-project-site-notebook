<?php
// @author: C.A.D. BONDJE DOUE
// @date: 20240922 07:59:48
namespace com\igkdev\projects\SiteNoteBook;

use IGK\System\Traits\EnumeratesConstants;

///<summary></summary>
/**
* 
* @package com\igkdev\projects\SiteNoteBook
* @author C.A.D. BONDJE DOUE
*/
abstract class Authorizations{
	/* const AuthorizationName="AuthorizationValue"; */
	use EnumeratesConstants;
	const View = "view";
	const Edit = "edit";
	const Remove = "remove";
	const Dashboard = "dashboard";
}