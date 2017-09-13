<?php
    class AdminRota
    {
        public function __construct()
        {
            include "./Controller/Admin.php";
            $ctrl = new AdminController();
            $ctrl->Index();
        }
    }