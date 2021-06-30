<?php 

class Profile {

    function __construct()
    {
        if(array_key_exists('signUp', $_POST)){ $this->signUp(); }
        elseif(array_key_exists('loginUser', $_POST)){ $this->loginUser(); }
        return;
    }


    function loginUser()
    {
        global $db, $report, $count;

        $email = trim(valEmpty($_POST['email'], 'Email', 9));
        $password = $_POST['password'];

        $ck = $db->query("SELECT * FROM user where email='$email' ")or die('cannot select');

        if(mysqli_num_rows($ck) > 0){
            $row = mysqli_fetch_array($ck);
            if(password_verify($password, $row['password'])){
                if($row['status'] > 0){
                    $_SESSION['userid'] = $row['sn'];
                    header('location: dashboard.php');
                }else{ $report = 'shey you no know say dem don decativate ya acct , go meet admin wey you know'; $count =1; }
            }else{ $report = 'incorrect password'; $count =1; }
        }else{
            $report = 'this email does not exits in our database'; $count =1;
        }
    }


    function signUp()
    {
        global $db, $report, $count;
        $email = trim(valEmpty($_POST['email'], 'Email', 9));
        $password = valEmpty($_POST['password'], 'Password', 3);
        $name = trim(valEmpty($_POST['name'], 'Name', 3));

        if(checkEmail($email) > 0){ $report = 'this email does not exits in our database'; }

        if(!isset($count)){
            $pass = password_hash($password, PASSWORD_DEFAULT);  
            $ctime = time();
            $ins = $db->query("INSERT INTO user (name,email,password,status,ctime) 
            VALUES('$name','$email', '$pass', '1', '$ctime' ) ")or die('server error');
            $report = 'signup successful';
            header('location: dashboard.php');
        }

        return;
    }

}

$pro  = new Profile;