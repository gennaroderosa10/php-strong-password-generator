<?php
require_once './functions.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

</head>

<body>
    <h1>PASSWORD GENERATOR</h1>

    <form action="">
        <input id="length" name="length" type="number" min="5" max="20">
        <label for="length">Lunghezza</label>

        <button>Create</button>
    </form>
    <hr>

    <?php
    if ($password != "") {
    ?>
        <h2>LA TUA PASSWORD</h2>
        <p><?php echo $password; ?></p>

    <?php
    }
    ?>

</body>

</html>