<?php

    class Programming{
        public $html;
        public $css;
        private $php;
        protected $js;

        function __construct(){
            $this->html = "I love HTML";
            $this->css = "I know Css";
            $this->php = "I am a PHP Coder";
            $this->js = "I am a java Programmer";
        }
    }