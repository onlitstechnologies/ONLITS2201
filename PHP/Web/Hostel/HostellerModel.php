<?php
require "./DBConfig.php";

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

    function __construct($first_name, $middle_name, $last_name, $date_of_birth, $gender, $contact_number, $email_id)
    {
        $this->hosteller_id = $this->generate_hosteller_id();
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
        $this->gender = $gender;
        $this->contact_number = $contact_number;
        $this->email_id = $email_id;
    }

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

    function new_hosteller()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $con = dbconfig::get_connection();
        $sql = "INSERT INTO hosteller(hosteller_id, first_name, middle_name, last_name, date_of_birth, gender, contact_number, email_id) VALUES(?,?,?,?,?,?,?,?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssssssss", $this->hosteller_id, $this->first_name, $this->middle_name, $this->last_name, $this->date_of_birth, $this->gender, $this->contact_number, $this->email_id);
        $stmt->execute();
        echo "Hosteller created successfully!";
        $con->close();
    }

    function edit_hosteller()
    {
    }

    function display_all()
    {
    }

    function display($hosteller_id)
    {
        $this->hosteller_id = $hosteller_id;
    }
}

// $hosteller = new hosteller_model("Mrityunjay", "", "Kumar", "2000-01-01", "M", "9874569856", "mrityunjay.kumar@onlits.com");
// $hosteller->new_hosteller();
