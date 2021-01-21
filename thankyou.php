<?php
if (!session_id())
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
    require './inc/globalSiteTag.html';
    ?>
    <title>The Redecorator | Contact Lucy</title>
    <meta name="description" content="Get in touch with experienced home organizer with excellent design sense.">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/thankyou.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">

</head>

<body>

    <header class="header">

    <?php     require './inc/menu.php';     ?>

        <br><br>
        
        <div class="block1">
            <h2>The <span class="red-text">RE</span>decorator</h2>
        </div>
        <br>

    </header>

    <main class="main">
        <!-- <img src="./img/contact_lucy.png" alt="Lucy sitting at desk with mobile phone, pen & notebook plus old-fashioned phone, lamp and bouquet of flowers"> -->
        <p>Thankyou for your interest.<br> You will receive a reply soon.</p>
        <p>Lucy</p>
        <br>
        <img src="./img/lucy_72.png">



    </main>
    <?php require './inc/footer.php' ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function pretty() {
            $("#contact-form").attr("action", "misc.php");
        }
    </script>

</body>

</html>