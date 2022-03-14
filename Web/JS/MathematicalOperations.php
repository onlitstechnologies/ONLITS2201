<?php

$minuend = $_GET['minuend'];
$subtrahend = $_GET['subtrahend'];
$difference = $minuend - $subtrahend;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematical Operations</title>
    <link rel="stylesheet" href="common.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Mathematical Operations</h1>
        </header>
        <main>
            <section id="addition">
                <form action="">
                    <div class="header">
                        <h3>Addition (Client Side)</h3>
                    </div>
                    <div class="main">
                        <label for="augend">Augend</label>
                        <input type="text" name="" id="augend">
                        <label for="addend">Addend</label>
                        <input type="text" name="" id="addend">
                        <label for="sum">Sum</label>
                        <input type="text" name="" id="sum">
                    </div>
                    <div class="footer">
                        <button onclick="add()" type="button">Add</button>
                    </div>
                </form>
            </section>
            <section id="subtraction">
                <form action="" class="alternate" method="GET">
                    <div class="header">
                        <h3>Subttraction (Server Side)</h3>
                    </div>
                    <div class="main">
                        <label for="minuend">Minuend</label>
                        <input type="text" name="minuend" id="minuend" value="<?= $minuend ?>">
                        <label for="subtrahend">Subtrahend</label>
                        <input type="text" name="subtrahend" id="subtrahend" value="<?= $subtrahend ?>">
                        <label for="difference">Difference</label>
                        <input type="text" name="difference" id="difference" value="<?php echo $difference ?>">
                    </div>
                    <div class="footer">
                        <button name="subtract">Subtract</button>
                    </div>
                </form>
            </section>

        </main>
        <footer>
            <p>&copy; 2022, ONLITS TECHNOLOGIES LLP</p>
        </footer>
    </div>

    <script>
        //Event Handler
        function add() {
            let a = Number(document.getElementById("augend").value)
            let b = Number(document.getElementById("addend").value)
            let c = a + b
            document.getElementById("sum").value = c
        }
    </script>

</body>

</html>