
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
    <title>TeknoEvents Login</title>
</head>


<body>

<div class="container" id="container">

    <div class="form-container sign-in">
        <form method ="post">
            <h1>Log In</h1>
            <!--<div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>-->
            <span>or use your email password</span>
            <input type="text" name="txtusername" placeholder="Username">
            <input type="password" name="txtpassword" placeholder="Password">
            <!--<a href="#">Forget Your Password?</a>-->
            <input type="submit" name="btnLogin" value="Login">
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-right">
                <h1>Welcome, Friend!</h1>
                <p>Enter your personal details to use all of site features</p>
                <a href = "register.php">
                      <button class="hidden" id="register">Register</button>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
	if(isset($_POST['btnLogin'])){
		$uname=$_POST['txtusername'];
		$pwd=$_POST['txtpassword'];
		//check tbluseraccount if username is existing
		$sql ="Select * from tbluseraccount where username='".$uname."'";

		$result = mysqli_query($connection,$sql);

		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);

		if($count== 0){
			echo "<script language='javascript'>
						alert('username not existing.');
				  </script>";
		}else if($row[3] != $pwd) {
			echo "<script language='javascript'>
						alert('Incorrect password');
				  </script>";
		}else{
			$_SESSION['username']=$row[0];
			header("location: home.php");
		}
	}


?>

</body>
<?php
    require_once 'includes/footer.php';
?>