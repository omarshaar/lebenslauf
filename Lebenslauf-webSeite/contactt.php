
<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Assign Variables
    $Uname  = @$_POST['name'];
    $mail   = @$_POST['email'];
    $messag = @$_POST['message'];
    $headers = 'From: ' . $mail . '\n\r';
    $myEmail = 'ode.omarshaar@gmail.com';
    $subject = 'CV WebSite';

}

// mail($myEmail . $subject , $messag , $headers);


?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Src/Icons/Logotab.png"?v <?php echo time(); ?> >
    <style>
        <?php include 'contact.css' ?>

        <?php include 'resbon/resbon.css' ?>

        <?php include 'Src/Normalize/Normalize.css' ?>
    </style>
    
    <title>Kontakt</title>
</head>
<body>

    <div class="menuMobDiv" id="menuMobDiv">

        <nav class="headerNavMob">
            <ul>
                <li><a href="index.html" >Über Mich</a></li>
                <li><a href="lebenslauf.html">Lebenslauf</a></li>
                <li><a href="contactt.php" style=" text-decoration: underline ">Kontakt</a></li>
            </ul>
        </nav>

    </div>

    <!--////////////////////////  Header  ////////////////////////////-->
        <div class="headercontainer"></div>
        <header class="mainHeder">
            <img src="Src/icons/Logo.svg" alt="Logo" class="logo">
             <nav class="headerNav">
                <ul>
                    <li><a href="index.html">Über Mich</a></li>
                    <li><a href="lebenslauf.html">Lebenslauf</a></li>
                    <li><a href="contact.php" style=" text-decoration: underline ">Kontakt</a></li>
                </ul>
            </nav>


            <div id="Menu">

                <div id="MnTbContainer">
                    <div class="MnTop " id="MnTop"></div>
                    <div class="MnBottom " id="MnBottom"></div>
                </div>

            </div>
        </header>

    <!--////////////////////// End Header  //////////////////////////-->


    <div class="bghalcol"></div>


    <!---------------------------------------------------------------------------->
    
    <div class="formContainer">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="ContactForm">

            <span>Name</span> <input type="text" name="name" class="NEInputs"> <br>
            <span>Email</span> <input type="email" name="email" class="NEInputs"> <br>
            <span>Nachricht</span> <br> <textarea type="text" name="message" class="NachrichtIn"></textarea><br />
            <div class="ConBtns">
                <input type="submit" value="Senden" class="srBTNs">
                <input type="reset" value="zurüksetzen" class="srBTNs">
            </div>

        </form>

    </div>

    
    <script src="app.js"></script>
</body>
</html>