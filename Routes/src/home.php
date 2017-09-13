<?php
    class HomeRota
    {
        public function __construct()
        {
            include "./Controller/Home.php";
            $ctrl = new HomeController();
            $ctrl->Index();
        }
    }