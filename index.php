<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    session_start();
    // ANVÄNDS FÖR ATT VISA FORMULÄREN I SLUTET ELLER INTE
    $show_form = true;
    
    // OM DET FINNS ERROR MESSAGE
    if(isset($_SESSION['error_msg'])){
        // Skriv ut error_msg
        echo $_SESSION['error_msg'] . "<br>";
       
        // TA BORT ERROR_MSG
        unset($_SESSION['error_msg']);
    }
    
    // KOLLA OM MAN HAR BESÖKT SIDAN FÖRUT
    if(isset($_SESSION['login'])){
        // har besökt sidan
        
        // OM MAN ÄR INLOGGAD
        if($_SESSION['login'] == "INLOGGAD"){
            $show_form = false; // VISA INTE FORMULÄREN
            echo "Välkommen   ".$_SESSION['name'] . " du är inloggad!"; // VISA VÄLKOMSTTEXT
            ?>

            <!-- Utloggningsformulär -->
            <form action="logout.php">
                <input type="submit" value="Logga ut">
            </form>

            <?php
        }
    }    
    
    // OM VI SKA VISA FORMULÄREN
    if($show_form){
        // Visa formulären
         ?>
        REGISTER:<br>
        <form action="submit.php" method="POST">

            Namn: <input type="text" name="name"><br>
            Mail: <input type="email" name="mail"><br>
            Adress: <input type="text" name="address"><br>
            Postnummer: <input type="text" name="postnummer"><br>
            Ort: <input type="text" name="ort"><br>
            Lösenord: <input type="password" name="pass">
            <input type="submit">

        </form>

        <br><br><br>
        LOGIN:<br>
        <form action="login.php" method="POST">

            Mail: <input type="email" name="mail"><br>
            Lösenord: <input type="password" name="pass">
            <input type="submit">

        </form>
    <?php    
    }
    ?>
</body>

</html>