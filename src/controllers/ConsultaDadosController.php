<?php

namespace src\controllers;

use \core\Controller;

class ConsultaDadosController extends Controller {

    public function consulta() {
        $this->render('consulta-dados');
    }
}