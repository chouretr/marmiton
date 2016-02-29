<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 25/02/2016
 * Time: 18:10
 */

namespace Core\Controller;

class Controller{

    protected $viewPath;
    protected $template;

    public function render($view, $variables = []){
        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require('../app/Views/' . 'templates/' . $this->template . '.php');
    }



}