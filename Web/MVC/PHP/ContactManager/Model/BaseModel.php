<?php
namespace contact_manager;
require_once "../.config/env.php";
class base_model
{
    function get_connection()
    {
        return new \mysqli(HOST, USER, PASSWORD, DATABASE);
    }
}