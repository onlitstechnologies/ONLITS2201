<?php
require "./DBConfig.php";

class roommodel
{
    private $room_no;
    private $type;

    function get_room_type($room_no)
    {
        $con = dbconfig::get_connection();
        $sql = "SELECT type FROM room WHERE room_no=?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $room_no);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows>0) {
            $row = $result->fetch_array();
            $stmt->close();
            $con->close();
            return $row[0];
        } else {
            $stmt->close();
            $con->close();
            return "Type not found";
        }
    }

    function get_room_type_desc($room_type)
    {
        $con = dbconfig::get_connection();
        $sql = "SELECT description FROM room_description WHERE type=?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('s', $room_type);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows>0) {
            $desc = null;
            while($row = $result->fetch_array()) {
                $desc = $desc . ' ' . $row[0];
            }
            return $desc;
        } else {
            return "Data not found";
        }
    }

    function get_room_status($room_no)
    {
        /*
            0   -   vacant
            1   -   occupied
        */

        $this->room_no = $room_no;
        $con = dbconfig::get_connection();
        $sql = "SELECT room_no FROM room_allocation WHERE room_no='$room_no' AND checkout_date IS NULL";
        $result = $con->query($sql);
        if($result->num_rows>0)
        {
            return 1;
        } else {
            return 0;
        }
    }
}

// $room = new roommodel();
// $type = $room->get_room_type('101');
// echo $room->get_room_type_desc($type);