<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PESU-OPAC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="content/fontawesome/css/all.css">
    <style rel="stylesheet">
        body{
            background-image: url("content/images/zab CP.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        ul a{
            color: black;
            font-size: large;
            font-weight: bolder;
            border: none;
            background: none;
        }
        ul a:hover,button:hover{
            background-color: lightblue;
        }
        .n{
            padding: 20px;
        }
        .a {
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }
        .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }
        .input-field:focus {
            border: 2px solid dodgerblue;
        }
        .btnL {
            background-color: dodgerblue;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        .btn:hover {
            opacity: 1;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="index.js"></script>
</head>
<body>
    <?php include("includes/header.php");?>
    <?php include("includes/login.php");?>
    <?php include("includes/signUp.php");?>
    <?php include("includes/alert.php");?>
</body>
</html>
<?php
if(isset($_POST["login"])){
    $srn=$_POST["srn"];
    $password=crypt($_POST["password"],"zab");
    if(!empty($srn)&&!empty($password)){
        $connection= mysqli_connect('localhost','root','','libdb');
        $selectQuery="select * from login where srn='$srn' and password='$password'";
        $result=mysqli_query($connection,$selectQuery);
        $rows=mysqli_num_rows($result);
        if($rows==1){
            #echo '<script type="text/javascript">setTimeout(function(){alert("Welcome!")},100);</script>';
            $row = mysqli_fetch_assoc($result);
            $_SESSION['srn'] = $row['srn'];
            ?>
            <script type="text/javascript">$(document).ready(function () {$('#alert').find('.modal-title').text("Success!!!");$('#alert').find('.modal-body').text("Welcome!!!");$('#alert').modal('show');});</script>
            <?php
        }
        else{
            #echo '<script type="text/javascript">setTimeout(function(){alert("Invalid Username and Password.")},100);</script>';
            ?>
            <script type="text/javascript">$(document).ready(function () {$('#alert').find('.modal-title').text("Error...");$('#alert').find('.modal-body').text("Invalid Username and Password.");$('#alert').modal('show');$('.btnAlert').attr('onclick',"$('#loginForm').modal({'backdrop': 'static'});");});</script>
            <?php
        }
        mysqli_close($connection);
    }
}
if(isset($_POST["signUp"])){
    $Srn=$_POST["srn"];
    $Name=$_POST["name"];
    $Email=$_POST["email"];
    $nPassword=crypt($_POST["nPassword"],"zab");
    $cPassword=$_POST["cPassword"];
    if(!empty($Srn)&&!empty($Name)&&!empty($Email)&&!empty($nPassword)&&!empty($cPassword)){
        $connection= mysqli_connect('localhost','root','','libdb');
        $insertQuery="insert into login (srn,name,email,password,usertype) values ('$Srn','$Name','$Email','$nPassword',3)";
        if(mysqli_query($connection,$insertQuery)){
            #echo '<script type="text/javascript">setTimeout(function(){alert("Successfully Registered!")},500);</script>';
            ?>
            <script type="text/javascript">$(document).ready(function () {$('#alert').find('.modal-title').text("Success!!!");$('#alert').find('.modal-body').text("Successfully Registered!");$('#alert').modal('show'); $('.btnAlert').attr('onclick',"$('#loginForm').modal({'backdrop': 'static'});");});</script>
            <?php
        }
        else{
            $sqlError=substr(mysqli_error($connection),0,20);
            if(preg_match("/^Duplicate entry 'PES$/i",$sqlError)){
                ?>
                <script type="text/javascript">$(document).ready(function () {$('#alert').find('.modal-title').text("Error...");$('#alert').find('.modal-body').text("This SRN is already registered with system. Try with correct SRN.");$('#alert').modal('show');$('.btnAlert').attr('onclick',"$('#signUp').modal({'backdrop': 'static'});");});</script>
                <?php
            }
            else if(preg_match("/^Duplicate entry/i",$sqlError)){
                ?>
                <script type="text/javascript">$(document).ready(function () {$('#alert').find('.modal-title').text("Error...");$('#alert').find('.modal-body').text("This Email is already registered with system. Try with correct Email ID.");$('#alert').modal('show');$('.btnAlert').attr('onclick',"$('#signUp').modal({'backdrop': 'static'});");});</script>
                <?php
            }
            else{
                ?>
                <script type="text/javascript">$(document).ready(function () {$('#alert').find('.modal-title').text("Error...");$('#alert').find('.modal-body').text("Error! while registration. Please try again.");$('#alert').modal('show');})</script>
                <?php
            }
        }
        mysqli_close($connection);
    }
}
if(isset($_SESSION['srn'])){
    ?>
    <script type="text/javascript">$(document).ready(function () {$('#login').text("Logout")});</script>
<?php }
else{
    ?>
    <script type="text/javascript">$(document).ready(function () {$('#login').text("Login")});</script>
    <?php
}
?>




