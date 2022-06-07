<?php
if(!isset($_SESSION)){
    session_start();} 
$error=array();
//connect to database
$db=mysqli_connect('localhost','root','','user');

if(isset($_POST['register'])){
$username=mysqli_real_escape_string($db,$_POST['un']);
$email=mysqli_real_escape_string($db,$_POST['em']);
$password1=mysqli_real_escape_string($db,$_POST['psw1']);
$password2=mysqli_real_escape_string($db,$_POST['psw2']);
if(empty($username)){
    array_push($error,"Username is required");
}
if(empty($email)){
    array_push($error,"Email is required");
}
if(empty($password1)){
    array_push($error,"Password is required");
}
if(empty($password2)){
    array_push($error,"Confirm password is required");
}
if($password1!=$password2){
    array_push($error,"Passwords do not match");
}
if(count($error)==0){
$sql="INSERT INTO register(username,email,password,confirmpassword) Values('$username','$email','$password1','$password2')";
mysqli_query($db,$sql);
}
}
//login
if (isset($_POST['login'])){
    $username = mysqli_real_escape_string($db,$_POST['un']);
    $password = mysqli_real_escape_string($db,$_POST['psw1']);
    if(empty($username)){
        array_push($error,"username is required");
    }
    if (empty($password)){
        array_push($error,"password is required");
    }
    if(count($error)==0){
        $query="SELECT * FROM register WHERE username='$username' AND password='$password'";
        $result = mysqli_query ($db,$query);
        if (mysqli_num_rows($result)==1){
            $_SESSION['username']=$username;
            $_SESSION['sucess']="welcome you are loged in";
            header('location:services.php');}
        }
    }
//logout
if (isset($_GET['logout'])){
    session_destroy();
    unset ($_SESSION['username']);
    header('location:users(log).php');
}
//form rest

if(isset($_POST['booknow'])){
    $fullname=mysqli_real_escape_string($db,$_POST['rnm']);
    $email=mysqli_real_escape_string($db,$_POST['rel']);
    $num=mysqli_real_escape_string($db,$_POST['rph']);
    $guestt=mysqli_real_escape_string($db,$_POST['rgst']);
    $res=mysqli_real_escape_string($db,$_POST['rserv']);
    $from=mysqli_real_escape_string($db,$_POST['rof']);
    $to=mysqli_real_escape_string($db,$_POST['rto']);
    $choice=mysqli_real_escape_string($db,$_POST['choice']);
    $comm=mysqli_real_escape_string($db,$_POST['rcomm']);
    $visa=mysqli_real_escape_string($db,$_POST['cr1']);
    $expdate=mysqli_real_escape_string($db,$_POST['cr2']);
    $cvv=mysqli_real_escape_string($db,$_POST['cr3']);
    $holdname=mysqli_real_escape_string($db,$_POST['cr4']);
    if(count($error)==0){
    $ff="INSERT INTO restaurant(name,phone,email,guest,date,timefrom,timeto	,name_of_rest,comment,visa,expdate,cvv,holdername) Values('$fullname','$num','$email','$guestt','$res',' $from','$to','$choice',' $comm','$visa','$expdate','$cvv','$holdname')";
    mysqli_query($db,$ff);
    echo '<script> alert("Welcome to Geeks for Geeks") </script>';
    header('location:thankk.html');
    }
    }

          //form entertainment 
            if(isset($_POST['log'])){
                $tname=mysqli_real_escape_string($db,$_POST['tnm']);
                $temail=mysqli_real_escape_string($db,$_POST['tel']);
                $tphone=mysqli_real_escape_string($db,$_POST['tph']);
                $tguestt=mysqli_real_escape_string($db,$_POST['tgst']);
                $tdate=mysqli_real_escape_string($db,$_POST['tserv']);
                $tfrom=mysqli_real_escape_string($db,$_POST['tof']);
                $tto=mysqli_real_escape_string($db,$_POST['tto']);
                $tcomm=mysqli_real_escape_string($db,$_POST['tcomm']);
                $tchoice=mysqli_real_escape_string($db,$_POST['tchoice']);
                $tvisa=mysqli_real_escape_string($db,$_POST['tcr1']);
                $texpdate=mysqli_real_escape_string($db,$_POST['tcr2']);
                $tcvv=mysqli_real_escape_string($db,$_POST['tcr3']);
                $tholdname=mysqli_real_escape_string($db,$_POST['tcr4']);
                
                if(count($error)==0){
                $tian="INSERT INTO entertain(emtname,emtemail,emtphone,emtguest,emtdate,emtfrom,emtto,emtcomment,name_of_place,enter_visa,enter_exdate,enter_cvv,enter_holder) Values('$tname','$temail','$tphone','$tguestt','$tdate',' $tfrom','$tto',' $tcomm','$tchoice','$tvisa','$texpdate','$tcvv','$tholdname')";
                mysqli_query($db,$tian);
                header('location:thankk.html');
                }
                }
                //from day-use
            if(isset($_POST['done'])){
                $dname=mysqli_real_escape_string($db,$_POST['dnm']);
                $demail=mysqli_real_escape_string($db,$_POST['del']);
                $dphone=mysqli_real_escape_string($db,$_POST['dph']);
                $dguestt=mysqli_real_escape_string($db,$_POST['dgst']);
                $ddate=mysqli_real_escape_string($db,$_POST['dserv']);
                $dfrom=mysqli_real_escape_string($db,$_POST['dof']);
                $dto=mysqli_real_escape_string($db,$_POST['dto']);
                $dcomm=mysqli_real_escape_string($db,$_POST['dcomm']);
                $dchoice=mysqli_real_escape_string($db,$_POST['dchoice']);
                $dvisa=mysqli_real_escape_string($db,$_POST['dcr1']);
                $dexpdate=mysqli_real_escape_string($db,$_POST['dcr2']);
                $dcvv=mysqli_real_escape_string($db,$_POST['dcr3']);
                $dholdname=mysqli_real_escape_string($db,$_POST['dcr4']);
                if(count($error)==0){
                $day="INSERT INTO dayuse(dayname,dayemail,dayphone,dayguest,daydate,dayfrom,dayto,daycomment,name_of_hotel,day_visa,day_date,day_cvv,day_holder) Values('$dname','$demail','$dphone','$dguestt','$ddate',' $dfrom','$dto',' $dcomm','$dchoice','$dvisa','$dexpdate','$dcvv','$dholdname')";
                mysqli_query($db,$day);
                header('location:thankk.html');
                }
                }