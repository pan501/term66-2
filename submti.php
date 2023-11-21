<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $web = $_POST['web'];
    $role = $_POST['role'];
    $sign1 = $_POST['sign1'];
    $sign2 = $_POST['sign2'];
    $sign3 = $_POST['sign3'];

    $servernane = 'localhost:'
    $usernane = 'root'
    $password = "";
    $dbname = "db_emoployee"

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("". $conn->connect_error);
    }

    $sql = "INSERT INTO employee (username, password, city, webserver,role) 
            VALUES ($email,$passwoed,$cilty,$web,$role)";
    
    $reult = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

    } else{
        echo"error".$sql."<br>"$conn->error;
    }
    $conn->close();
    ?>












    echo '$email: '.$email.'<br>';
    echo '$passward: '.$passward.'<br>';
    echo '$city: '.$city.'<br>';
    echo '$ewb: '.$web.'<br>';
    echo '$role: '.$role.'<br>';
    echo '$sign: '.$sign.'<br>';




?>