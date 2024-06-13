<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start ();
    if($_SESSION ['is_logged_in'] != True)
    {
        header("Location: ../form.php");
        exit();
    }

   
    ?>
 
    <h1>Selamat Datang  <?php
    echo $_SESSION ['nama']?></h1>
</body>
</html>