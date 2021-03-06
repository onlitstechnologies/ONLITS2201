<?php
require_once "./DBConfig.php";
require_once "./MessageBox.php";

class hosteller_model
{
    private $hosteller_id;
    private $first_name;
    private $middle_name;
    private $last_name;
    private $date_of_birth;
    private $gender;
    private $contact_number;
    private $email_id;


    function generate_hosteller_id()
    {
        $hosteller_id = null;
        $con = dbconfig::get_connection();
        $sql = "SELECT hosteller_id FROM hosteller ORDER BY hosteller_id DESC LIMIT 1";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_array();
            $hosteller_id = $row[0];
            $hosteller_id = substr($hosteller_id, 1);
            $hosteller_id += 1;
            if ($hosteller_id < 10)
                $hosteller_id = "H00" . $hosteller_id;
            elseif ($hosteller_id < 100)
                $hosteller_id = "H0" . $hosteller_id;
            else
                $hosteller_id = "H" . $hosteller_id;
        } else {
            $hosteller_id = "H001";
        }
        $con->close();
        return $hosteller_id;
    }

    function new_hosteller($first_name, $middle_name, $last_name, $date_of_birth, $gender, $contact_number, $email_id)
    {
        $this->hosteller_id = $this->generate_hosteller_id();
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
        $this->gender = $gender;
        $this->contact_number = $contact_number;
        $this->email_id = $email_id;

        $con = dbconfig::get_connection();
        $sql = "INSERT INTO hosteller(hosteller_id, first_name, middle_name, last_name, date_of_birth, gender, contact_number, email_id) VALUES(?,?,?,?,?,?,?,?)";
        if ($stmt = $con->prepare($sql)) {
            $stmt->bind_param("ssssssss", $this->hosteller_id, $this->first_name, $this->middle_name, $this->last_name, $this->date_of_birth, $this->gender, $this->contact_number, $this->email_id);
            if ($stmt->execute()) {
                message_box("HMS 1.0", "Hosteller created successfully!");
                // $con->close();
            } else {
                echo $stmt->error;
            }
        } else {
            echo $stmt->error;
        }
    }

    function edit_hosteller($hosteller_id, $first_name, $middle_name, $last_name, $date_of_birth, $gender, $contact_number, $email_id)
    {
        $this->hosteller_id = $hosteller_id;
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
        $this->gender = $gender;
        $this->contact_number = $contact_number;
        $this->email_id = $email_id;
        $con = dbconfig::get_connection();
        $sql = "UPDATE hosteller SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', date_of_birth='$date_of_birth', gender='$gender', contact_number='$contact_number', email_id='$email_id' WHERE hosteller_id='$hosteller_id'";
        if($con->query($sql)===TRUE) {
            echo "Hosteller record updated successfully";
        } else {
            echo $con->error;
        }
    }

    function display_all()
    {
        $con = dbconfig::get_connection();
        $sql = "SELECT * FROM hosteller";
        $result = $con->query($sql);
        if($result->num_rows>0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
        }
        return $rows;
    }

    function display($hosteller_id)
    {
        $this->hosteller_id = $hosteller_id;
    }

    function display_name($hosteller_id)
    {
        $this->hosteller_id = $hosteller_id;
        $con = dbconfig::get_connection();
        $sql = "SELECT first_name, middle_name, last_name FROM hosteller WHERE hosteller_id='$this->hosteller_id'";
        $result = $con->query($sql);
        if($result->num_rows>0) {
            $row = $result->fetch_assoc();
            if($row['middle_name'] != '') {
                return $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name'];
            } else {
                return $row['first_name'] . " " . $row['last_name'];
            }
        } else {
            echo "<script>alert('No records found')</script>";
        }
    }
    function delete_hosteller($hosteller_id)
    {
        $con = dbconfig::get_connection();
        $sql = "DELETE FROM hosteller WHERE hosteller_id='$hosteller_id'";
        if($con->query($sql)==TRUE) {
            echo "Hosteller deleted successfully";
        } else {
            echo $con->error;
        }
    }
}

// $hosteller = new hosteller_model();
// $hosteller->display_all();