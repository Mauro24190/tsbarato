<?php

namespace Guanki\App\Controller;

use Guanki\App\Model\User;
use Guanki\Lib\Core\Helper;

class ProfileController {
    public function ingreso() {
        $user = new User();
        Helper::plantilla("Site/Perfil/ingreso", [
            "listado" => $user->listar()
        ]);
    }
}