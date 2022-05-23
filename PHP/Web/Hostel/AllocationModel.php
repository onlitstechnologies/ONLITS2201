<?php
require_once "./DBConfig.php";
require_once "./MessageBox.php";

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
            message_box("HMS 1.0", "Room allocated successfully!");
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

    function search_allocation_by_allocation_id($allocation_id)
    {
        
    }

    function search_allocation_by_hosteller_id()
    {
    }

    function search_allocation_by_room_number($room_no)
    {
        $row = null;
        $con = dbconfig::get_connection();
        $sql = "SELECT * FROM room_allocation WHERE room_no='$room_no'";
        $result = $con->query($sql);
        if($result->num_rows>0) {
            $row = $result->fetch_assoc();
        }
        return $row;
    }

    function display_all_allocations()
    {
    }
}
