<?php
// @author: C.A.D. BONDJE DOUE
// @file: routes.php
// @date: 20240917 17:24:28

use com\igkdev\projects\SiteNoteBook\Actions\DefaultAction;
use com\igkdev\projects\SiteNoteBook\Authorizations;
use IGK\System\Http\Route;

// store the RouteActionHandler for this base controller
// Route::get( $actionClass, string $uriPattern) 
// - $actionClass: middle ware action class
// - $uriPattern : path {name}  
// - $uriPattern : path/{name} with required parameter 
// - $uriPattern : path/{name*} with optional parameter 


// Route::post(DefaultAction::class)
// ->auth($ctrl::name(Authorizations::Edit));
 
// Route::post(DefaultAction::class, '/import')
// ->auth($ctrl::name(Authorizations::Edit));


// Route::post(DefaultAction::class, '/export')
// ->auth($ctrl::name(Authorizations::Edit));

// Route::get(DefaultAction::class, '/querysite', 'index');

// Route::post(DefaultAction::class, '/sites', 'index');