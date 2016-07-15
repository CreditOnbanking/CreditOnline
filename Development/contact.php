<?php 
$page_title = "Հետադարձ Կապ";
$page_description = "Description of this page";
?>
<?php include("include/header-nav.php"); ?>
<style type="text/css">
	.contactBox {
		background-image:url('./resources/images/contact.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		background-position: left top;
		min-width: 100%;
		height: 100vh;
	}
	#contactUs h2 {
		margin: 20px 0;
		text-align: center;
	}
	input[type="text"] {
		display: block;
		margin: 0;
		width: 100%;
		font-family: sans-serif;
		font-size: 18px;
		appearance: none;
		box-shadow: none;
		border-radius: none;
	}
	input[type="text"]:focus {
	  	outline: none;
	}
	.contactForm {
		min-width: 360px;
	}
	.contactForm textarea {
		min-height: 231px
	}
	.contactForm input[type="text"], .contactForm textarea {
		min-width: 360px;
		margin-bottom: 15px;
		padding: 10px;
		border: none;
		border-bottom: solid 4px #c9c9c9;
		transition: border 0.3s;
		color: #243746;
	}
	.contactForm input[type="text"]:focus,
	.contactForm input[type="text"].focus,
	.contactForm textarea:focus,
	.contactForm textarea.focus {
		border-bottom: solid 4px #969696;
		outline: none;
	}
	.contactForm label {
		display: block;
		color: #243746;
	}
	.number {
	    margin: 20px 0px 50px 0px;
	}
	.number span {
		display: block;
		color: #243746;
		font-size: 20px; 
	}
	.number span i {
		margin-right: 15px;
		color: #fd4a46;
	}
	#map {
		width: 100%;
	}
	#map iframe {
		width: 100%;
		pointer-events: none;
	}
	.btn {
		background-color: #fd4a46;
		color: #fff;

	}
	.btn:hover {
		color: #fff;
	}
	.btn.active.focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn:active:focus, .btn:focus {
		outline: none;
		color: #fff;
	}
	@media only screen and (max-width : 790px){
		.contactForm>.grid {
			-webkit-box-orient: vertical;-moz-box-orient: vertical;-webkit-flex-direction:column;-moz-flex-direction:column; -o-flex-direction:column; -ms-flex-direction:column; flex-direction:column;
		}
	}
</style>
<section id="contactUs">
	<div class="grid center column-orient contactBox">
		<div class="grid-cell" style="margin-top: 125px;">
			<h2>Հետադարձ կապ</h2>
			<form class="contactForm">
				<div class="grid ">
					<div class="grid-cell" style="margin-right: 50px;">
						<label>Անուն</label>
						<input type="text" placeholder="Անուն"/>
						<label>Ազգանունը</label>
						<input type="text" placeholder="Ազգանունը"/>
						<label>Էլ հասցե.</label>
						<input type="text" placeholder="Էլ հասցե"/>
					</div>
					<div class="grid-cell">
						<label>Նամակ</label>
						<textarea name="message" placeholder="Նամակ"></textarea>
					</div>
				</div>
			</form>
		</div>
		<div class="grid-cell center">
			<div>
				<button class="btn" action="submit" type="submit">Հաստատել</button>
			</div>
			<div class="number">
				<span><i class="fa fa-phone"></i>Մեր հեռախոսահամարը : +374 77 77 77</span>
				<span><i class="fa fa-envelope"></i>Մեր էլ. հասցեն : support@mybanking.com</span>
			</div>
		</div>
	</div>
	<div class="" style="width: 100%;">
		<div id="map" class="mapWorkplace">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.4892892846046!2d44.510036814830265!3d40.175923278174565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcf9cffe0b3d%3A0x6f2f1ec0ed266531!2sErebuni+Plaza+Business+Center!5e0!3m2!1sen!2s!4v1468603549575" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</section>

<?php include("include/footer.php"); ?>
<script type="text/javascript">
	$('#map').click(function () {
	    $('#map iframe').css("pointer-events", "auto");
	});
</script>