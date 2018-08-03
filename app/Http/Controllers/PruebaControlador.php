<?php

namespace projectoLaravel\Http\Controllers;

use projectoLaravel\Http\Controllers\Controller;

class PruebaControlador extends Controller {
    public function prueba(){
        return 'Estoy dentro de PruebaController';
    }
}