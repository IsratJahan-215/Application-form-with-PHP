<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];

if(!empty($firstname)|| !empty($lastname)|| !empty($email)){
    $host="localhost";
    $dbusername="root";
    $dbPassword="234";
    $dbname="db_conn";
    $conn=new mysqli($host,$dbusername,$dbPassword,$dbname);
    if(mysqli_connect_error()){
        die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        $SELECT="SELECT email from register where email = ? Limit 1";
        $INSERT="INSERT into register(firstname,lastname,email) values(?,?,?)";

        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $stmt->close();

            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sss",$firstname,$lastname,$email);
            $stmt->execute();
            echo "New record inserted successfully";
        }else{
            echo "someone already register using this email";
        }
        $stmt->close();
        $conn->close();
    }
} else{
        echo "All field are required";
        die();
    }
    ?>