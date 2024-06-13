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

    echo $_SESSION ['nama']
    ?>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas est aliquam error? 
        Voluptas nulla repellendus sed sunt molestias. Sit,
         tenetur! Asperiores aspernatur mollitia tempora totam maxime alias eaque ipsam dolore!</p>
</body>

</html>