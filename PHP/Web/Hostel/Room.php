<?php
require "./RoomModel.php";
$room = new roommodel();
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
                <div class="room" id="101" onclick="clickRoom()"><a>101</a>
                    <p><?= $room->get_room_type_desc($room->get_room_type('101')); ?></p>
                </div>
                <div class="room"><a href="">102</a>
                    <p><?= $room->get_room_type_desc($room->get_room_type('102')); ?></p>
                </div>
                <div class="room">103
                <p><?= $room->get_room_type_desc($room->get_room_type('103')); ?></p>
                </div>
                <div class="room">104
                <p><?= $room->get_room_type_desc($room->get_room_type('104')); ?></p>
                </div>
                <div class="room">105
                <p><?= $room->get_room_type_desc($room->get_room_type('105')); ?></p>
                </div>
                <div class="room">106
                <p><?= $room->get_room_type_desc($room->get_room_type('106')); ?></p>
                </div>
                <div class="room">107
                <p><?= $room->get_room_type_desc($room->get_room_type('107')); ?></p>
                </div>
                <div class="room">108
                <p><?= $room->get_room_type_desc($room->get_room_type('108')); ?></p>
                </div>
            </div>
            <hr>
            <div class="room-layout-wrapper">
                <div class="room" id="101" onclick="clickRoom()"><a>201</a></div>
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
    <script>
        function clickRoom() {
            let roomno = document.getElementById("101");
            let roomcolor = window.getComputedStyle(roomno).backgroundImage;
            if (roomcolor == "linear-gradient(rgb(0, 128, 0), rgb(255, 255, 255))") {
                roomno.style.backgroundImage = "linear-gradient(rgb(128, 0, 0), rgb(255, 255, 255))";
            } else {
                roomno.style.backgroundImage = "linear-gradient(rgb(0, 128, 0), rgb(255, 255, 255))";
            }
        }
    </script>
</body>

</html>