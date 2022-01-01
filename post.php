<?php

// server connection
    $hostName       = 'localhost';
    $dbUserName     = 'root';
    $dbUserPass     = '';
    $dbName         = "reg";
    $dbCon            = mysqli_connect($hostName,$dbUserName,$dbUserPass,$dbName);
// Database connection end
    $name           = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
    $emali          = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
    $password       = $_POST["password"];
    $uppercase      = preg_match('@[A-Z]@', $password);
    $lowercase      = preg_match('@[a-z]@', $password);
    $number         = preg_match('@[0-9]@', $password);
    $specialChars   = preg_match('@[^\w]@', $password);
    $conPassword    = $_POST["conPassword"];
    $gender         = filter_var($_POST["gender"],FILTER_SANITIZE_STRING);
    $country        = filter_var($_POST["country"],FILTER_SANITIZE_STRING);
//  Name validation
    if(empty($name)){
        $errMas = "Name field is requerd";
        header('location:index.php?nameErr='.$errMas);
    }
// email validation
    elseif(empty($emali)){
        $errEmail = "Email field is requerd";
        header('location:index.php?mailErr='.$errEmail);
    }elseif(!filter_var($emali,FILTER_VALIDATE_EMAIL)){
        $errEmail = "Your email is not validate";
        header('location:index.php?mailErr='.$errEmail);
    }
// password validation 
    elseif(empty($password)){
        $errPass = "password field is requerd";
        header('location:index.php?passErr='.$errPass);
    }elseif(!$uppercase | !$lowercase | !$number | !$specialChars >= 8){
        $errPass = "password should be strong";
        header('location:index.php?passErr='.$errPass);
    }elseif($password != $conPassword){
        $errPass = "Confirm password are not mach";
        header('location:index.php?cpassErr='.$errPass);
    }
// gender validation
    elseif(empty($gender)){
        $errGen = "Are you gay ?";
        header('location: index.php?genErr='.$errGen);
    }
//  country validation
    elseif(empty($country)){
        $errCon = "requerd field";
        header('location: index.php?conErr='.$errCon);
    }
// send database
    else {
        $insart = "INSERT INTO ragi (name, email, pass, gender, country) VALUES ('$name' ,'$emali' ,'$password' ,'$gender' ,'$country' )";
        mysqli_query($dbCon, $insart);
        $succ = "Your regestation successfull";
        header('location: index.php?success='.$succ);
    }
?>