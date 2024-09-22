<?php
// @author: C.A.D. BONDJE DOUE
// @date: 20240922 07:59:48
namespace com\igkdev\projects\SiteNoteBook;

use com\igkdev\projects\SiteNoteBook\Models\SiteUsers;
use IGK\Helper\Authorization;
use IGK\Models\ModelBase;
use IGK\System\Applications\ApplicationUserProfile;

///<summary></summary>
/**
* 
* @package com\igkdev\projects\SiteNoteBook
* @author C.A.D. BONDJE DOUE
*/
class UserProfile extends ApplicationUserProfile{
	protected function registerProfile():void{
		$user = $this->model();
 
		// + | 
		$def=  [
			SiteUsers::FD_USER_ID=>$user->clGuid
		];
		if ($u = SiteUsers::insertIfNotExists($def) || 1){
			// + | register default user autorization 
			Authorization::BindUserToGroup($this->getController(), $user, Profiles::GetDefaultProfile());
		}
	}
}