<?php 
// @author: C.A.D. BONDJE DOUE
// @date: 20241122 14:23:35
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
