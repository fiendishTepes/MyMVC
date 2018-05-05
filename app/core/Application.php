<?php
class Application 
{
    protected $controller = 'homeController'; //Class
    protected $action = 'index'; //Method
    protected $prams = [];
    
    public function __construct()
    {
        $this->prepareURL();
        //echo $this->controller,'<br>',$this->action,'<br>',print_r($this->prams);
        if(file_exists(CONTROLLER. $this->controller.'.php'))
        {
            $this->controller = new $this->controller;
            if(method_exists($this->controller, $this->action))
            {
                call_user_func_array([$this->controller, $this->action], $this->prams);
            }
        }
    }
    
    protected function prepareURL()
    {
        $request = trim($_SERVER['REQUEST_URI'],'/');
        if(!empty($request))
        {
            $url = explode('/', $request);
            //$url = explode('/', filter_var(rtrim($request, '/'), FILTER_SANITIZE_URL));
            $this->controller = isset($url[1]) ? $url[1].'Controller' : 'homeController' ;
            $this->action = isset($url[2]) ? $url[2] : 'index';
            unset($url[1],$url[2]);
            $this->prams = !empty($url) ? array_values($url) : [];
        }
    }
}
