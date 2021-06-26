<?php

    if(isset($_POST['submit'])) {
        require_once "config.php";
        $db = new config("localhost", "id15916792_takeapicwithproud", "3306", "id15916792_takeapic", "Takeapic-123");
        $db->insertMessages($_POST['name'],$_POST['email'], $_POST['tel'],$_POST['subject'], $_POST['text']);
        header('Location: emailHasBeenSent.html?send=true');
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
     <div id="menu">
         <!--<div class="icon-contact">
             <a href="contact.php" class="text-button">Contact</a>
         </div>-->
         <div class="icon-cv">
             <a class="text-button" href="CV.pdf">CV</a>
         </div>&nbsp;&nbsp;
         <div class="icon-git">
             <a href="https://github.com/alicia573" class="text-button">Github</a>
         </div>
     </div>
    <header id="header">
        <div id="nav-bar">
            <a href="index.html#header" id="banner">Take A pic with proud</a>
        </div>
        <img src="img/Contact-image.jpg" alt="Contact" id="contactImage">
    </header>
        <div id="wrapper">
            <section id="form">
                <h2>Contact</h2>
                <form method="POST" id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="myemailform">
                    <label>Naam<br>
                        <input name="name" type="text" id="name-form" placeholder="Naam"required>
                    </label><br>
                    <label>Email<br>
                        <input name="email" type="email" id="email-form" placeholder="Email" required>
                    </label><br>
                    <label>Telefoonnummer<br>
                        <input name="tel" type="tel" id="tel-form" placeholder="Telefoonnummer" required>
                    </label><br>
                    <label>Onderwerp<br>
                        <input name="subject" placeholder="Onderwerp" id="subject"required>
                    </label><br>
                    <label>Bericht<br>
                        <br><textarea name="text" id="bericht-form" placeholder="Bericht" required></textarea>
                    </label><br>
                    <button type="submit" value="submit" name="submit" id="button">Submit</button>
                </form>

            </section>
        </div>
    <footer>
        <section id="footer-section">
            <br>
            Copyright &copy;  2020 Alicia Fernandes
        </section>
    </footer>
    </body>
</html>

