<?php

namespace App;

use App\Http\Controllers\CorsController;

class HelpMe
{
    static function IsThischek($id){
        return array_key_exists($id,CorsController::Corsinfo());
    }

}
