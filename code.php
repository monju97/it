
<!-- CREATE TABLE Users (
    id INT AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(15),
    password VARCHAR(100),
    PRIMARY KEY (id)

    UPDATE `users` SET `user_type` = '1' WHERE `users`.`id` = 8;


); -->
<?php
include('dbcon.php');
    if(isset($_POST['register_btn'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $user_type=$_POST["user_type"];

        $ins_query ="INSERT INTO users (name, email,phone,password,user_type) values ('$name','$email','$phone','$password','$user_type')";
            
        $entry=$conn->prepare($ins_query);    
        if($entry->execute()){                   
            $success='<script>alert("Registration Success");</script>';  
            header('location: register.php');
                         
            $entry->close();              
            
        // $query_run =mysqli_query($conn,$ins_query);
        // if($query_run){
        //     echo "Registration Success";
        }else{
            echo '<script>alert("There is some problem!");</script>';
            
        }
    }
    //Check Emailand Password  for login 
    if(isset($_POST['login_btn'])){
        $email = $_POST['email'];
        $password=$_POST['password'];
        
        $verify = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $verify_run = mysqli_query($conn, $verify);

        if(mysqli_num_rows($verify_run)>0){
            echo "Logged In Success";
            header('location: home.php');
        }else{
            header('location: index.php');
            echo "Failed! Please check email and password";
        }
    }

?>