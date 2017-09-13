<?php
    class Routes
    {
        private $_uri = array();
        private $_method = array();

        public function add($uri, $method = null)
        {
            $this->_uri[] = "/".trim($uri, "/");
            if($method != null)
            {
                $this->_method[] = $method;
            }
        }

        public function submit()
        {
            $uriGetParam = isset($_GET["uri"]) ? "/".$_GET["uri"] : "/";
            foreach($this->_uri as $key => $value)
            {
                if(preg_match("#^$value$#", $uriGetParam))
                {
                    if(is_string($this->_method[$key]))
                    {
                        switch($value)
                        {
                            case "/":
                                include "src/home.php";
                                break;
                            case "/admin":
                                include "src/admin.php";
                                break;
                            case "/sobre":
                                include "src/sobre.php";
                                break;
                        }
                        $useMethod = $this->_method[$key];
                        new $useMethod();
                    }
                }
            }
        }
    }