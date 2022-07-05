<?php
namespace src\controllers;

use \core\Controller;

class ConsultaDadosController extends Controller {

    public function consultadado() {
        $this->render('consulta-dados');
    }
}