<?php

namespace contact_manager;

require_once "./BaseModel.php";
require_once "../.config/bootstrap.php";
class user_model extends base_model
{
    function authenticate($user_id, $password)
    {
        $con = $this->get_connection();
        $sql = "SELECT user_id FROM user WHERE user_id=? AND password=?";
        $stmt = $con->prepare($sql);
        if ($stmt->get_result()) {
            echo "Login Successful!";
        } else {
            echo "Login Failed!";
        }

        $con->close();
    }

    function app_config()
    {

    }
}

// $um = new user_model();
// $um->authenticate("dictator", "dictator");