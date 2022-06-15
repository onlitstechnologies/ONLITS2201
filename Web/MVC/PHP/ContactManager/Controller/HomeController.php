<?php

namespace contact_manager;

class home_controller extends base_controller
{
    function index()
    {
        if (isset($_SESSION['user_id'])) {
            require_once PROJECT_ROOT . "/View/Home.php";
        } else {
            echo "Invalid session";
        }
    }
}
