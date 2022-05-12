<?php
require_once "./RoomModel.php";
require_once "./HostellerModel.php";
require_once "./AllocationModel.php";
$room = new roommodel();
$hosteller = new hosteller_model();
$hosteller_id = $_GET['hosteller_id'];

if (isset($_POST['submit'])) {
    $hosteller_id = $_POST['hosteller_id'];
    $room_no = $_POST['room_no'];
    $allocation = new allocation_model();
    $allocation->init_allocation($hosteller_id, $room_no);
    $allocation->new_allocation();
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
            <a class="active">Room</a>
            <a href="./Tariff.php">Tariff</a>
            <a href="./Hosteller.php">Hosteller</a>
            <a href="./Allocation.php">Allocation</a>
            <a href="./Mess.php">Mess</a>
        </nav>
        <main>
            <h1>Room</h1>
            <div class="room-layout-wrapper">
                <div class="room" id="101"><a onclick="clickRoom(this.innerHTML)">101</a>
                    <input type="hidden" name="" id="room_status_101" value="<?= $room->get_room_status('101') ?>">
                    <p><?= $room->get_room_type_desc($room->get_room_type('101')); ?></p>
                </div>
                <div class="room" id="102"><a onclick="clickRoom(this.innerHTML)">102</a>
                    <input type="hidden" name="" id="room_status_102" value="<?= $room->get_room_status('102') ?>">
                    <p><?= $room->get_room_type_desc($room->get_room_type('102')); ?></p>
                </div>
                <div class="room" id="103"><a onclick="clickRoom(this.innerHTML)">103</a>
                    <input type="hidden" name="" id="room_status_103" value="<?= $room->get_room_status('103') ?>">
                    <p><?= $room->get_room_type_desc($room->get_room_type('103')); ?></p>
                </div>
                <div class="room" id="104"><a onclick="clickRoom(this.innerHTML)">104</a>
                    <input type="hidden" name="" id="room_status_104" value="<?= $room->get_room_status('104') ?>">
                    <p><?= $room->get_room_type_desc($room->get_room_type('104')); ?></p>
                </div>
                <div class="room" id="105"><a onclick="clickRoom(this.innerHTML)">105</a>
                    <input type="hidden" name="" id="room_status_105" value="<?= $room->get_room_status('105') ?>">
                    <p><?= $room->get_room_type_desc($room->get_room_type('105')); ?></p>
                </div>
                <div class="room" id="106">106
                    <p><?= $room->get_room_type_desc($room->get_room_type('106')); ?></p>
                </div>
                <div class="room" id="107">107
                    <p><?= $room->get_room_type_desc($room->get_room_type('107')); ?></p>
                </div>
                <div class="room" id="108">108
                    <p><?= $room->get_room_type_desc($room->get_room_type('108')); ?></p>
                </div>
            </div>
            <hr>
            <div class="room-layout-wrapper">
                <div class="room" id="201" onclick="clickRoom()"><a>201</a></div>
                <div class="room"><a href="">202</a></div>
                <div class="room">203</div>
                <div class="room">204</div>
                <div class="room">205</div>
                <div class="room">206</div>
                <div class="room">207</div>
                <div class="room">208</div>
            </div>
        </main>
        <footer>
            <p>&copy;2022, HMS 1.0</p>
        </footer>
    </div>

    <!------------------------------- Modal ------------------------------------------------>
    <div class="modal-container" id="new-allocation">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-header-text">New Allocation</span>
                <span class="close-button" id="close-button"> x </span>
            </div>
            <div class="modal-body">
                <form class="type1" action="" method="post">
                    <label for="room_no">Room Number</label>
                    <input type="text" name="room_no" id="room_no" readonly>
                    <label for="hosteller_id">Hosteller Id</label>
                    <input type="text" name="hosteller_id" id="hosteller_id" onblur="displayName(this.value)">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <button name="submit">Submit</button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>

    <!-------------------------------NewAllocation Modal ------------------------------------------------>
    <div class="modal-container" id="new-allocation">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-header-text">New Allocation</span>
                <span class="close-button" id="close-button"> x </span>
            </div>
            <div class="modal-body">
                <form class="type1" action="" method="post">
                    <label for="room_no">Room Number</label>
                    <input type="text" name="room_no" id="room_no" readonly>
                    <label for="hosteller_id">Hosteller Id</label>
                    <input type="text" name="hosteller_id" id="hosteller_id" onblur="displayName(this.value)">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <button name="submit">Submit</button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>

    <!------------------------------- Existing Allocation Modal ------------------------------------------------>
    <div class="modal-container" id="existing-allocation">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-header-text">Existing Allocation</span>
                <span class="close-button" id="existing-close-button"> x </span>
            </div>
            <div class="modal-body">
                <form class="type1" action="" method="post">
                    <label for="existing_room_no">Room Number</label>
                    <input type="text" name="existing_room_no" id="existing_room_no" readonly>
                    <label for="existing_hosteller_id">Hosteller Id</label>
                    <input type="text" name="existing_hosteller_id" id="existing_hosteller_id" onblur="displayName(this.value)">
                    <label for="existing_name">Name</label>
                    <input type="text" name="existing_name" id="existing_name">
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
    <script>
        // --------------- Getting room status -------------------
        const roomnos = ["101", "102", "103", "104", "105", "106", "107", "108", "201", "202", "203", "204", "205", "206", "207", "208"];
        for (i = 0; i < 5; i++) {
            showRoomStatus(roomnos[i]);
        }

        function showRoomStatus(value) {
            let hidden_status_element = "room_status_" + value;
            if (document.getElementById(hidden_status_element).value == 1) {
                document.getElementById(value).style.backgroundImage = "linear-gradient(rgb(128, 0, 0), rgb(255, 255, 255))"
                document.getElementById(value).style.backgroundColor = "red";
            } else {
                document.getElementById(value).style.backgroundImage = "linear-gradient(rgb(0, 128, 0), rgb(255, 255, 255))"
            }
        }


        close_button = document.getElementById("close-button")
        close_button.onclick = function() {
            document.getElementById("new-allocation").style.display = "none"
        }

        existing_close_button = document.getElementById("existing-close-button")
        existing_close_button.onclick = function() {
            document.getElementById("existing-allocation").style.display = "none"
        }


        function clickRoom(id) {
            let roomno = document.getElementById(id);
            let roomcolor = window.getComputedStyle(roomno).backgroundImage;
            if (roomcolor == "linear-gradient(rgb(0, 128, 0), rgb(255, 255, 255))") {
                document.getElementById("new-allocation").style.display = "block"
                document.getElementById("room_no").value = roomno.id
            } else {
                document.getElementById("existing-allocation").style.display = "block"
                document.getElementById("existing_room_no").value = roomno.id
            }
        }

        function displayName(hostellerId) {
            if (hostellerId.length == 0) {
                return
            } else {
                console.log(hostellerId)
                let xhr = new XMLHttpRequest()
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('name').value = this.responseText
                    }
                }
                xhr.open("GET", "DisplayName.php?id=" + hostellerId, true)
                xhr.send()
            }
            // document.getElementById('name').value = "Hello! " + hostellerId
        }
    </script>
</body>

</html>