<?php

namespace App\Core;

class Controller {

    protected $data = [];

    public function __construct() {

    }

    protected function getData() {
        return $this->data;
    }

    public function __call($name, $arguments) {
        $this->loadTemplate('error_404');
    }

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        include 'App/Views/' . $viewName . '.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {

        include 'App/Views/template.php';
    }

    public function loadTemplate2($viewName, $viewData = array()) {
        include 'App/Views/template2.php';
    }

    public function loadTemplateAdmin($viewName, $viewData = array()){
        include 'App/Views/templateadmin.php';
    }

    public function loadViewInTemplate($viewName, $viewData) {
        extract($viewData);
        include 'App/Views/' . $viewName . '.php';
    }

}
