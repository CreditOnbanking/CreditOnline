<?php
session_start();
require_once 'class.user.php';

$reg_user = new USER();

if($reg_user->is_logged_in()!="")
{
	$reg_user->redirect('home.php');
}


if(isset($_POST['btn-signup']))
{
	$uname = trim($_POST['txtuname']);
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtpass']);
	$code = md5(uniqid(rand()));
	
	$stmt = $reg_user->runQuery("SELECT * FROM tbl_users WHERE userEmail=:email_id");
	$stmt->execute(array(":email_id"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if($stmt->rowCount() > 0)
	{
		$msg = "
		      <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Ներեցեք !</strong>  Էլ հասցեն գրանցված է , փորձեք նորը: 
			  </div>
			  ";
	}
	else
	{
		if($reg_user->register($uname,$email,$upass,$code))
		{			
			$id = $reg_user->lasdID();		
			$key = base64_encode($id);
			$id = $key;
			
			$message = "					
						Ողջույն $uname,
						<br /><br />
						Սիրով MyBanking!<br/>
						Որպեսզի ավարտեք գրանցումը, սեղմեք հղիչը <br/>
						<br /><br />
						<a href='http://localhost/x/verify.php?id=$id&code=$code'>MyBanking-ավարտել գրանցումը</a>
						<br /><br />
						Շնորհակալություն,";
						
			$subject = "Confirm Registration";
						
			$reg_user->send_mail($email,$message,$subject);	
			$msg = "
					<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Հաջողվեց Գրանցվել!</strong>  Մենք ուղարկելենք նամակ այս $email հասցեով.
                    Մուտք գօրծեք էլ. հասցե և սեղմեք հղիչը. 
			  		</div>
					";
		}
		else
		{
			echo "Ներեցեք , ձեր հարցումը գոյություն չունի...";
		}		
	}
}
?>
<?php 
$page_title = "Home – My Website";
$page_description = "Description of this page";
$id = "id='signup'"
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
    <div class="container grid center">
    	<div class="grid-cell center">
			<?php if(isset($msg)) echo $msg;  ?>
			<form class="form-signin" method="post">
			<h2 class="form-signin-heading">Գրանցվել</h2><hr />
			<input type="text" class="input-block-level" placeholder="Անուն" name="txtuname" required />
			<input type="email" class="input-block-level" placeholder="Էլ. Հասցե" name="txtemail" required />
			<input type="password" class="input-block-level" placeholder="Գաղտնաբառ" name="txtpass" required />
			<hr />
			<button class="btn btn-large btn-primary" style="display: block; min-width: 152px;margin-bottom: 15px;" type="submit" name="btn-signup">Գրանցվել</button>
			<span style="display: block; margin-bottom: 10px; text-align: left;">Արդեն գրանցվել եք?</span>
			<a href="index.php" style="padding: 4px 20px; max-width: 152px; text-align: left; display: block;" class="btn btn-large">Մուտք գործել</a>
			</form>
    	</div>
	</div>

    <?php include("../include/footer-user.php"); ?>