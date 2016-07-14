<?php
session_start();
require_once 'class.user.php';
$user = new USER();

if($user->is_logged_in()!="")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-submit']))
{
	$email = $_POST['txtemail'];
	
	$stmt = $user->runQuery("SELECT userID FROM tbl_users WHERE userEmail=:email LIMIT 1");
	$stmt->execute(array(":email"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);	
	if($stmt->rowCount() == 1)
	{
		$id = base64_encode($row['userID']);
		$code = md5(uniqid(rand()));
		
		$stmt = $user->runQuery("UPDATE tbl_users SET tokenCode=:token WHERE userEmail=:email");
		$stmt->execute(array(":token"=>$code,"email"=>$email));
		
		$message= "
				   Hello , $email
				   <br /><br />
				   Մենք ստացել ենք գաղտնաբառը փոխելու հրահանգ, եթե դուք պետքե փոխեք այն սեղմեք հետևյալ հղիչը, եթե դուք տեղյակ չեք այս նամակի մասին ուղղակի ջնջեք այն,
				   <br /><br />
				   սեղմեք հետևյալ հղիչը որպեսզի փոխեք գաղտնաբառը 
				   <br /><br />
				   <a href='http://localhost/x/resetpass.php?id=$id&code=$code'>Սեղմեք աըստեղ որպեսզի փոխեք գաղտնաբառը</a>
				   <br /><br />
				   շնորհակալություն :)
				   ";
		$subject = "Password Reset";
		
		$user->send_mail($email,$message,$subject);
		
		$msg = "<div class='alert alert-success'>
					<button class='close' data-dismiss='alert'>&times;</button>
					Մենք ուղարկել ենք նամակ այս $email հասցեին.
                    սեղմեք փոխել գաղտնաբառը հղիչը: 
			  	</div>";
	}
	else
	{
		$msg = "<div class='alert alert-danger'>
					<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Ներեցեք!</strong>  Էլ. հասցեն անհայտ է: 
			    </div>";
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
    <div class="container">

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Վերականգնել Գաղտնաբառը</h2><hr />
        
        	<?php
			if(isset($msg))
			{
				echo $msg;
			}
			else
			{
				?>
              	<div class='alert alert-info'>
				Մուտքագրեք ձեր էլ. հասցեն: Դուք կստանաք գաղտնաբառը փոխելու նամակ !
				</div>  
                <?php
			}
			?>
        
        <input type="email" class="input-block-level" placeholder="Էլ. Հասցե" name="txtemail" required />
     	<hr />
        <button class="btn btn-danger btn-primary" type="submit" name="btn-submit">Ստանալ նոր գաղտնաբառ</button>
      </form>

    </div> <!-- /container -->
    <?php include("../include/footer-user.php"); ?>