<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "contact";
function generateFormToken($form)
{
    // generate a token from an unique value
    $token = md5(uniqid(microtime(), true));
    // Write the generated token to the session variable to check it against the hidden field when the form is sent
    $_SESSION[$form . '_token'] = $token;
    return $token;
}
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
    <link href="./css/contact.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            pretty();
            document.getElementById("contact-form").submit();
        }
    </script>

</head>

<body>

    <header class="header">

    <?php     require './inc/menu.php';     ?>

        <br><br>
        
        <div class="block1">
            <h2>The <span class="red-text">RE</span>decorator</h2>
        </div>

        <div class="block2">
            <h1>Contact Lucy</h1>
            <p>Make the most of what you already have</p>
        </div>

    </header>

    <main class="main">
        <img src="./img/contact_lucy.png" alt="Lucy sitting at desk with mobile phone, pen & notebook plus old-fashioned phone, lamp and bouquet of flowers">
        <div class="form-container">

            <div class="text-block">
                <div class="spacer10"></div>
                Let’s get started on your project.<br>
                Please send me an email at lucy@theredecorator.com<br>
                or use the form below.
            </div><br>

            <?php
                // generate a new token for the $_SESSION superglobal and put them in a hidden field
                $newToken = generateFormToken('form1');
                ?>


            <form id="contact-form" action="thankyou.php" class="contactform" method="post" name="contactform">

                <!-- <input type="hidden" name="my_email" value="lucy@theredecorator.com"> -->
                <input type="hidden" name="my_email" value="norm.bosse0@gmail.com">

                <label for="first_name">Name:&nbsp;</label>
                <div class="field-block">
                    <input type="text" name="name" size="25">
                </div>

                <input type="hidden" name="token" value="<?php echo $newToken; ?>">

                <label for="email">Contact Information:&nbsp;</label>
                <div class="field-block contact-field">
                    <input maxlength="80" name="email" size="40" type="text">
                </div>

                <label for="message">Describe your project or question:</label>
                <div class="field-block description-field">
                    <textarea cols="40" maxlength="1000" name="message" rows="10" wrap="hard"></textarea>
                </div>

                <div class="button-block">
                    <!-- <button class="button1" href="contact.php">Contact Lucy</button> -->
                    <button class="g-recaptcha submit" data-sitekey="6LfVvccZAAAAAKI3M8bV0-X43nTQxl8cRWrtIAws" data-callback='onSubmit'>Contact Lucy</button><br>
                </div>
            </form>

            <!-- <form id="contact-form" action="thankyou.html" class="contactform" method="post" name="contactform">
                    <label for="name">Name:</label>
                    <input maxlength="50" name="name" size="30" type="text">
                    <input type="hidden" name="token" value="<?php echo $newToken; ?>">
                    <label for="email">Email Address *</label>
                    <input maxlength="80" name="email" size="30" type="text">
                    <label for="message">Comments *</label>
                    <textarea cols="30" maxlength="1000" name="message" rows="5"></textarea> * = required<br>
                    // <input class="submit" type="submit" value="Submit »"> //
                    <button class="g-recaptcha submit" data-sitekey="6Ld82v0UAAAAAIUG_P-YM0zTf9eoRCGEC3WTcf8N" data-callback='onSubmit'>Submit</button><br>
                </form> -->



        </div>

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