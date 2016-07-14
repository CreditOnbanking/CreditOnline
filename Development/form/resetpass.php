<?php
require_once 'class.user.php';
$user = new USER();

if(empty($_GET['id']) && empty($_GET['code']))
{
	$user->redirect('index.php');
}

if(isset($_GET['id']) && isset($_GET['code']))
{
	$id = base64_decode($_GET['id']);
	$code = $_GET['code'];
	
	$stmt = $user->runQuery("SELECT * FROM tbl_users WHERE userID=:uid AND tokenCode=:token");
	$stmt->execute(array(":uid"=>$id,":token"=>$code));
	$rows = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if($stmt->rowCount() == 1)
	{
		if(isset($_POST['btn-reset-pass']))
		{
			$pass = $_POST['pass'];
			$cpass = $_POST['confirm-pass'];
			
			if($cpass!==$pass)
			{
				$msg = "<div class='alert alert-block'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Ներեցեք!</strong>  Գաղտնաբառը չի համընկնում. 
						</div>";
			}
			else
			{
				$password = md5($cpass);
				$stmt = $user->runQuery("UPDATE tbl_users SET userPass=:upass WHERE userID=:uid");
				$stmt->execute(array(":upass"=>$password,":uid"=>$rows['userID']));
				
				$msg = "<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						Գաղտնաբառը փոխվեց.
						</div>";
				header("refresh:5;index.php");
			}
		}	
	}
	else
	{
		$msg = "<div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				Սխալ տվյալներ, փորձեք նորից
				</div>";
				
	}
	
	
}

?>
<?php 
$page_title = "Home – My Website";
$page_description = "Description of this page";
$id = "id='signup'"
?>
<?php include("../include/header.php"); ?>
    <div class="container">
    	<div class='alert alert-success'>
			<strong>Hello !</strong>  <?php echo $rows['userName'] ?> you are here to reset your forgetton password.
		</div>
        <form class="form-signin" method="post">
        <h3 class="form-signin-heading">Փոխել Գաղտնաբառը.</h3><hr />
        <?php
        if(isset($msg))
		{
			echo $msg;
		}
		?>
        <input type="password" class="input-block-level" placeholder="Նոր Գաղտնաբառ" name="pass" required />
        <input type="password" class="input-block-level" placeholder="Հաստատել Նոր Գաղտնաբառը" name="confirm-pass" required />
     	<hr />
        <button class="btn btn-large btn-primary" type="submit" name="btn-reset-pass">Փոխել Գաղտնաբառը</button>
        
      </form>

    </div> <!-- /container -->
 <?php include("../include/footer-user.php"); ?>