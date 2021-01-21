<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
        font-family: Arial;
        font-size: 20px;
        width: 80%;
        }
    </style>
</head>

<body>

Welcome <?php echo $_POST["fullname"]; ?><br><br>
Your email address is: <?php echo $_POST["email"]; ?><br><br>
Question is:<br>
<?php echo $_POST["message"]; ?><br>

</body>
</html>