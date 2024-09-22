<?php
// @author: C.A.D. BONDJE DOUE
// @desc: profile list usage
//array of profiles=>[auth-group]
// @date: 20240917 17:24:28

use com\igkdev\projects\SiteNoteBook\Authorizations;
use com\igkdev\projects\SiteNoteBook\Profiles;
use com\igkdev\projects\SiteNoteBook\SiteNoteBookController as ctrl;

return [
    Profiles::User=>[
        Authorizations::View,
    ],
    Profiles::Admin=>Authorizations::GetConstants() 
];

