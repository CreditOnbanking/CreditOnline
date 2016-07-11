<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
	$user_login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtupass']);
	
	if($user_login->login($email,$upass))
	{
		$user_login->redirect('home.php');
	}
}
?>
<?php 
$page_title = "Home – My Website";
$page_description = "Description of this page";
$id = "id='login'"
?>
<?php include("../include/header.php"); ?>
<style type="text/css">
  body {
    background-image: url('../resources/images/signup-bg.jpg'); 
    background-size: cover; 
    background-position: center center; 
    background-repeat: no-repeat; 
    width: 100%; 
    min-height: 100vh;
  }
  .container {
    max-width: 400px;
  }
  .form-signin-heading {
    color: #fff;
  }
  input {
    height: 45px !important;
      border-radius: 0px !important;
      background: rgb(230, 234, 244) !important;
      border-width: 5px !important;
      border-color: #b6bbba !important;
  }
  input:focus {
    outline: none !important;
    box-shadow: none !important;
  }
  input:focus:invalid, textarea:focus:invalid, select:focus:invalid {
    border-color: rgba(255, 0, 0, 0.61) !important;
  }
  input:focus:invalid:focus, textarea:focus:invalid:focus, select:focus:invalid:focus {
    border-color: rgba(255, 0, 0, 0.61) !important;
  }
  .btn {
    border: none !important;
    border-radius: 0 !important;
    box-shadow: none !important;
  }
</style>

 <!--  <body id="login"> -->
    <div class="container">
		<?php 
		if(isset($_GET['inactive']))
		{
			?>
            <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Ներեցեք!</strong> Ձեր էթջը ակտիվացրած չէ: Ակտիվացրեք այն գրանցված Էլ. հասցեից: 
			</div>
            <?php
		}
		?>
        <form class="form-signin" method="post">
        <?php
        if(isset($_GET['error']))
		{
			?>
            <div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Սխալ տվյալներ!</strong> 
			</div>
            <?php
		}
		?>
        <h2 class="form-signin-heading">Մուտք գործել</h2><hr />
        <input type="email" class="input-block-level" placeholder="Էլ. Հասցե" name="txtemail" required />
        <input type="password" class="input-block-level" placeholder="Գաղտնաբառ" name="txtupass" required />
     	<hr />
        <button class="btn btn-large btn-primary" type="submit" name="btn-login">Մուտք գործել</button>
        <a href="signup.php" style="float:right;" class="btn btn-large">Գրանցվել</a><hr />
        <a href="fpass.php">Մոռացել եք գաղտնաբառը ? </a>
      </form>

    </div> <!-- /container -->
<?php include("../include/footer-user.php"); ?>