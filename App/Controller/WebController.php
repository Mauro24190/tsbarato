<?php

namespace Guanki\App\Controller;

use Guanki\Lib\Core\Helper;

class WebController
{

    function index(){
        Helper::plantilla("Site/inicio");
    }

}
?>