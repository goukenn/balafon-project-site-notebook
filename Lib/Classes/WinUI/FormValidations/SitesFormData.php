<?php
// @author: C.A.D. BONDJE DOUE
// @date: 20240923 09:50:00
namespace com\igkdev\projects\SiteNoteBook\WinUI\FormValidations;

use IGK\System\Html\Forms\Validations\InspectorFormFieldValidationBase; 
use IGK\System\Html\Forms\Validations\Annotations\FormFieldAnnotation as FormField;
///<summary></summary>
/**
* 
* @package com\igkdev\projects\SiteNoteBook\WinUI\FormValidations
* @author C.A.D. BONDJE DOUE
*/
class SitesFormData extends InspectorFormFieldValidationBase{
    /**
     * @FormField(string, required=true)
     **/
    var $name;
    var $site;
    var $title;
    var $desc;
    var $vat;
    var $tel;
    var $number;

   
}