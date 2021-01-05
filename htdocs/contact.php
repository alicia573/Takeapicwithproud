<?php
    $message_sent="false";
    if(isset($_POST['email']) && $_POST['email'] !=""){
        //submit the form

        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];

            $to= "aliciafernandes573@gmail.com";
            $body='';

            $body.= "From: ".$userName."\r\n";
            $body.= "From: ".$userEmail."\r\n";
            $body.= "From: ".$message."\r\n";

            mail($to,$messageSubject,$body);
            $message_sent = false;

     }if($_POST['email'] && $_POST['name'] && $_POST['subject'] && $_POST['message'] == ''){
            echo"one more answer";

        }



    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel = "icon" type = "image/png" href = "img/LogoMakr_9pgnAN.png">
        <title>Take a pic with proud-Alicia Fernandes</title>
        <meta http-equiv="content-language" content="en">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            if(!$message_sent):
        ?>

            <h3> Thanks, we'll be in touch</h3>
            <a href="Index.html">Home</a>

        <?php
            else:

        ?>
        <div id="wrapper">
            <header id="header">
                <div id="nav-bar">
                    <div>
                        <a href="Index.html#header" id="banner">Take A pic with proud</a>
                    </div>
                </div>
                <img src="img/Contact-image.jpg" alt="Contact" id="contactImage">
            </header>
            <section id="form">
                <h2>Contact</h2>
                <form method="post" id="contact-form" action="contact.php" name="myemailform">
                    <label>Naam<br>
                        <input name="name" type="text" id="name-form" placeholder="Naam">
                    </label><br>
                    <label>Email<br>
                        <input name="email" type="email" id="email-form" placeholder="Email">
                    </label><br>
                    <label>Onderwerp<br>
                        <input name="subject" placeholder="Onderwerp" id="subject">
                    </label><br>
                    <label>Bericht<br>
                        <br><textarea name="message" id="bericht-form" placeholder="Bericht"></textarea>
                    </label><br>
                    <button type="submit" value="submit" name="submit" id="button">Submit</button>
                </form>
                <h4 class="sent-notification"></h4>
            </section>
        </div>
    <footer>
        <section id="footer-section">
            <br>
            Copyright &copy;  2020 Alicia Fernandes

        </section>
    </footer>
    <?php
    endif;
    ?>
    </body>
</html>

