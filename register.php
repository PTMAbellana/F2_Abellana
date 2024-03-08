<?php
    include 'connect.php';

?>
<header class="header-container">
    <div class="nav-container">
        <h2>TeknoEvents</h2>
    </div>
</header>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styleRegister.css">
    <title>TeknoEvents Register</title>
</head>

<div class="container" id="container">
    <div class="form-container sign-in">
        <form method = "post">
            <h1>Create Account</h1>
            <span>using your school details</span>
            <input type="text" name="txtfirstname" placeholder="First Name">
            <input type="text" name="txtlastname" placeholder="Last Name">
               Gender:
            <select name="txtgender" placeholder="Gender">
            		<option value="">----</option>
            		<option value="Male">Male</option>
            		<option value="Female">Female</option>
            </select>
            <input type="email" name="txtemail" placeholder="Email">
            <input type="text" name="txtusername" placeholder="Username">
            <input type="password" name="txtpassword" placeholder="Password">
            <button name="btnRegister"> Register</button>
        </form>
    </div>

    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Enter your personal details to use all of site features</p>
                <a href = "login.php">
                <button class="hidden" id="login">Log In</button>
                </a>


            </div>
        </div>
    </div>
</div>

<?php
	if(isset($_POST['btnRegister'])){
		//retrieve data from form and save the value to a variable
		//for tbluserprofile
		$fname=$_POST['txtfirstname'];
		$lname=$_POST['txtlastname'];
		$gender=$_POST['txtgender'];

		//for tbluseraccount
		$email=$_POST['txtemail'];
		$uname=$_POST['txtusername'];
		$pword=$_POST['txtpassword'];

		//save data to tbluserprofile
		$sql1 ="Insert into tbluserprofile(firstname,lastname,gender) values('".$fname."','".$lname."','".$gender."')";
		mysqli_query($connection,$sql1);

		//Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
		$sql2 ="Select * from tbluseraccount where username='".$uname."'";
		$result = mysqli_query($connection,$sql2);
		$row = mysqli_num_rows($result);
		if($row == 0){
			$sql ="Insert into tbluseraccount(emailadd,username,password) values('".$email."','".$uname."','".$pword."')";
			mysqli_query($connection,$sql);
			echo "<script language='javascript'>
						alert('New record saved.');
				  </script>";
			//header("location: index.php");
		}else{
			echo "<script language='javascript'>
						alert('Username already existing');
				  </script>";
		}


	}


?>

<?php require_once 'includes/footer.php'; ?>