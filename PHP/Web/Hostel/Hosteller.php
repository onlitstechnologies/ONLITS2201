<?php
require_once "./HostellerModel.php";

if (isset($_POST["submit_new"])) {
    $new_first_name = $_POST["new_first_name"];
    $new_middle_name = $_POST["new_middle_name"];
    $new_last_name = $_POST["new_last_name"];
    $new_date_of_birth = $_POST["new_date_of_birth"];
    $new_gender = $_POST["new_gender"];
    $new_contact_number = $_POST["new_contact_number"];
    $new_email_id = $_POST["new_email_id"];
    $hosteller = new hosteller_model();
    $hosteller->new_hosteller("$new_first_name", "$new_middle_name", "$new_last_name", "$new_date_of_birth", "$new_gender", "$new_contact_number", "$new_email_id");
} elseif (isset($_POST["submit_edit"])) {
    $edit_hosteller_id = $_POST["edit_hosteller_id"];
    $edit_first_name = $_POST["edit_first_name"];
    $edit_middle_name = $_POST["edit_middle_name"];
    $edit_last_name = $_POST["edit_last_name"];
    $edit_date_of_birth = $_POST["edit_date_of_birth"];
    $edit_gender = $_POST["edit_gender"];
    $edit_contact_number = $_POST["edit_contact_number"];
    $edit_email_id = $_POST["edit_email_id"];
    $hosteller = new hosteller_model();
    $hosteller->edit_hosteller("$edit_hosteller_id","$edit_first_name", "$edit_middle_name", "$edit_last_name", "$edit_date_of_birth", "$edit_gender", "$edit_contact_number", "$edit_email_id");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Using Grid</title>
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
            <a class="active">Hosteller</a>
            <a href="./Allocation.php">Allocation</a>
            <a href="./Mess.php">Mess</a>
        </nav>
        <main>
            <h1>Hosteller</h1>
            <button type="button" onclick="showNewHostellerModal()">New Hosteller</button>

            <table>
                <tr>
                    <th>Hosteller Id</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th colspan="2">Options</th>
                </tr>
                <?php
                $hosteller = new hosteller_model();
                $rows = $hosteller->display_all();
                $len = count($rows);
                for ($i = 0; $i < $len; $i++) {
                ?>
                    <tr>
                        <td><?= $rows[$i]['hosteller_id'] ?></td>
                        <td><?= $rows[$i]['first_name'] ?></td>
                        <td><?= $rows[$i]['middle_name'] ?></td>
                        <td><?= $rows[$i]['last_name'] ?></td>
                        <td><?= $rows[$i]['date_of_birth'] ?></td>
                        <td><?= $rows[$i]['gender'] ?></td>
                        <td><?= $rows[$i]['contact_number'] ?></td>
                        <td><?= $rows[$i]['email_id'] ?></td>
                        <td><button type="button" onclick="showEditHostellerModal(this.id)" id="<?= $rows[$i]['hosteller_id'] ?>">Edit</button></td>
                        <td>Delete</td>
                    </tr>
                <?php
                }
                ?>
            </table>

            <!------------------- Modal for new hosteller ------------------>
            <div class="modal-container" id="new_hosteller_modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-header-text">New Hosteller</span>
                        <span class="close-button" id="new-close-button"> x </span>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" class="type1">
                            <label for="first_name">First Name</label>
                            <input type="text" name="new_first_name" id="new_first_name">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" name="new_middle_name" id="new_middle_name">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="new_last_name" id="new_last_name">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" name="new_date_of_birth" id="new_date_of_birth">
                            <label for="gender">Gender</label>
                            <input type="text" name="new_gender" id="new_gender">
                            <label for="contact_number" minlength="10" maxlength="10">Contact Number</label>
                            <input type="text" name="new_contact_number" id="new_contact_number">
                            <label for="email_id">Email Id</label>
                            <input type="email" name="new_email_id" id="new_email_id">
                            <button type="submit" name="submit_new">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>

                </div>
            </div>

            <!------------------- Modal for edit hosteller ------------------>
            <div class="modal-container" id="edit_hosteller_modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-header-text">Edit Hosteller</span>
                        <span class="close-button" id="edit-close-button"> x </span>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" class="type1">
                            <label for="first_name">First Name</label>
                            <input type="text" name="edit_first_name" id="edit_first_name">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" name="edit_middle_name" id="edit_middle_name">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="edit_last_name" id="edit_last_name">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" name="edit_date_of_birth" id="edit_date_of_birth">
                            <label for="gender">Gender</label>
                            <input type="text" name="edit_gender" id="edit_gender">
                            <label for="contact_number" minlength="10" maxlength="10">Contact Number</label>
                            <input type="text" name="edit_contact_number" id="edit_contact_number">
                            <label for="email_id">Email Id</label>
                            <input type="email" name="edit_email_id" id="edit_email_id">
                            <button type="submit" name="submit_edit">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>

                </div>
            </div>
        </main>
        <footer>
            <p>&copy;2022, HMS 1.0</p>
        </footer>
    </div>
    <script>
        function showNewHostellerModal() {
            let modal = document.getElementById("new_hosteller_modal")
            modal.style.display = "block"
        }

        function showEditHostellerModal(hostellerId) {
            let xhr = new XMLHttpRequest()
            let hosteller
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    hosteller = JSON.parse(this.response)
                    document.getElementById("edit_first_name").value = hosteller.first_name
                    document.getElementById("edit_middle_name").value = hosteller.middle_name
                    document.getElementById("edit_last_name").value = hosteller.last_name
                    document.getElementById("edit_date_of_birth").value = hosteller.date_of_birth
                    document.getElementById("edit_gender").value = hosteller.gender
                    document.getElementById("edit_contact_number").value = hosteller.contact_number
                    document.getElementById("edit_email_id").value = hosteller.email_id
                }
            }
            xhr.open("GET", "DisplayHosteller.php?id=" + hostellerId, true)
            xhr.send();
            let modal = document.getElementById("edit_hosteller_modal")
            modal.style.display = "block"
        }

        new_close_button = document.getElementById("new-close-button")
        new_close_button.onclick = function() {
            document.getElementById("new_hosteller_modal").style.display = "none"
        }

        edit_close_button = document.getElementById("edit-close-button")
        edit_close_button.onclick = function() {
            document.getElementById("edit_hosteller_modal").style.display = "none"
        }
    </script>
</body>

</html>