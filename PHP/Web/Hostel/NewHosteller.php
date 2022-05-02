<?php
if (isset($_POST["submit"])) {
    require "./HostellerModel.php";
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $date_of_birth = $_POST["date_of_birth"];
    $gender = $_POST["gender"];
    $contact_number = $_POST["contact_number"];
    $email_id = $_POST["email_id"];
    $hosteller = new hosteller_model("$first_name", "$middle_name", "$last_name", "$date_of_birth", "$gender", "$contact_number", "$email_id");
    $hosteller->new_hosteller();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Hosteller</title>
    <link rel="stylesheet" href="site.css">
</head>

<body>
    <div class="wrapper">
        <header>
            <img src="./images/Logo.jpg" alt="" class="logo-type-basic">
            <h1>HMS 1.0</h1>
        </header>
        <nav>
            <a href="./Dashboard.php">Dashboard</a>
            <a href="./Room.php">Room</a>
            <a href="./Tariff.php">Tariff</a>
            <a href="./Hosteller.php">Hosteller</a>
            <a href="./Allocation.php">Allocation</a>
            <a href="./Mess.php">Mess</a>
        </nav>
        <main>
            <h1>New Hosteller</h1>
            <form action="" method="post" class="type1">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name">
                <label for="middle_name">Middle Name</label>
                <input type="text" name="middle_name" id="middle_name">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" id="date_of_birth">
                <label for="gender">Gender</label>
                <input type="text" name="gender" id="gender">
                <label for="contact_number">Contact Number</label>
                <input type="text" name="contact_number" id="contact_number">
                <label for="email_id">Email Id</label>
                <input type="email" name="email_id" id="email_id">
                <button type="submit" name="submit">Submit</button>
            </form>
        </main>
        <footer>
            <p>&copy;2022, HMS 1.0</p>
        </footer>
    </div>
</body>

</html>