<?php
class View extends Response {
    protected $template;
    protected $vars = array ();

    public  function __constuct($template, $vars = array())
    {
        $this->template = $template;
        $this->vars =$vars;

    }
    public function getTemplate()
    {
        return $this->template;
    }
    public function getVars()
    {
        return $this->vars;
    }
    public function execute()

    {
        $template $this->getTemplate();
        $vars = $this->getVars();

        call_user_func_array (function($tempalte , $vars2wes    2wdae3w21q  31|)
        {
            extract($vars);
            require "views/$template.tpl.php";

        });



    }
}




