<?php include('include/header.php') ?>
<?php include('code.php')?>
<?php if(isset($entry)){echo $success;} ?>

<title>Register</title>
     <div class="box">
            <span class="borderLine"></span>
            <form action="code.php" method="POST">
                <h2>User Registration Form</h2>
                <div class="inputbox">
                    <input type="text" name="name" id="name" required>
                    <span>User Name</span>
                    <i></i>                    
                </div>
                <div class="inputbox">
                    <input type="text" name="phone" id="phone" required>
                    <span>Contact No</span>
                    <i></i>                    
                </div>
                <div class="inputbox">
                    <input type="email" name="email" class="form-control" id="Email1" required>
                    <span>Your Email</span>
                    <i></i>                    
                </div>
                <div class="inputbox">
                    <input type="password" name="password" class="form-control" id="Password" required>
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="inputbox">
                    <input type="password" name="password" class="form-control" id="Password" required>
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="form-group">
                    <label for="" class="text-info">User Type  :</label>
                    <input type="radio"  name="user_type" value="1"> Admin  
                    <input type="radio"  name="user_type" value="2"/> User
                </div>
            <input type="submit" name="register_btn" value="Register">
            </form>
        </div>      
         
    </form>

<!-- <?php include('include/footer.php') ?> -->