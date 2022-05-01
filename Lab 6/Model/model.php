<?php

require_once 'db_connect.php';

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function booking($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into booking (fName, city, contactNo, date) VALUES (:fName, :city, :contactNo, :eventDate)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':fName'            =>        test_input($data['fname']),
            ':city'             =>        test_input($data['city']),
            ':contactNo'        =>        test_input($data['phoneNo']),
            ':eventDate'        =>        test_input($data['eventDate'])
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return '<span class="green">Booking successfully</span>';
}

function addCustomer($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into user_info (Name, email, uname, pass, image, cpass, gender, dob) VALUES (:name, :email, :uname, :pass, :image, :cpass, :gender, :dob)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name'          =>         test_input($data['name']),
            ':email'         =>         test_input($data['email']),
            ':uname'         =>         test_input($data['uname']),
            ':pass'          =>         test_input($data['pass']),
            ':image'         =>         'Dummy.png',
            ':cpass'         =>         test_input($data['cpass']),
            ':gender'        =>         test_input($data['gender']),
            ':dob'           =>         test_input($data['dob']),
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return '<span class="green">Registered successfully</span>';
}

function showAllVendors(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `photographer` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showVendor($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `photographer` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
