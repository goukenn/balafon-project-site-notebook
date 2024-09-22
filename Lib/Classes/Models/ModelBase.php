<?php 
// @author: C.A.D. BONDJE DOUE
// @date: 20240922 17:33:51
namespace com\igkdev\projects\SiteNoteBook\Models; 
use IGK\Models\ModelBase as Model;
use SiteNoteBookController;


/** 
 */
abstract class ModelBase extends Model {
	/**
	 * source controller 
	 */
	protected $controller = \SiteNoteBookController::class; 
}
