<?php
require_once "./DBConfig.php";
class allocation_model
{
    private $allocation_id;
    private $date;
    private $hosteller_id;
    private $room_no;

    function init_allocation($hosteller_id, $room_no)
    {
        $this->hosteller_id = $hosteller_id;
        $this->room_no = $room_no;
    }

    function new_allocation()
    {
        $con = dbconfig::get_connection();
        $sql = "INSERT INTO room_allocation(date, hosteller_id, room_no) VALUES(CURDATE(), '$this->hosteller_id','$this->room_no')";
        if ($con->query($sql) === TRUE) {
            echo "Room successfully allocated";
        } else {
            echo $con->error;
        }
    }

    function edit_alloction()
    {
    }

    function delete_allocation()
    {
    }

    function search_allocation_by_allocation_id()
    {
    }

    function search_allocation_by_hosteller_id()
    {
    }

    function display_all_allocations()
    {
    }
}
