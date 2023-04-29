<?php

    $connection = mysqli_connect("locallhost", "root", "omar", "book_db");
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $adress = $_POST['adress'];
        $location = $_POST['location'];
        $persons = $_POST['persons'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = "insert into book_form(name, email, phone, adress, location, persons, arrivals, leaving) values ('$name', '$email', '$phone',
        '$adress', '$location', '$persons', '$arrivals', '$leaving')";

        mysqli_query($connection, $request);

        header('location:book.php');

    }else{
        echo "somthing went wrong try again";
    }

 ?>   