<?php 
$page_title = "Մեր Մասին";
$page_description = "Description of this page";
?>
<?php include("include/header-nav.php"); ?>
<style type="text/css">
	#aboutUs {
		background-image: url('resources/images/about.jpg');
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
		min-height: 700px;
		width: 100%;
	}
	#aboutUs h1 {
		color: #fff;
		letter-spacing: 2px;
		text-align: left;
		margin-bottom: 25px;
	}
	 #aboutUs p {
	 	color: #fff;
	 	letter-spacing: 1px;
	 	line-height: 27px;
	 	text-align: left;
	 }
	 #aboutSteps {
	 	background: #e4e4e4;
	 }
	 #aboutSteps>h3 { 
 	    max-width: 615px;
	    margin: 0 auto;
	    text-align: center;
	    padding: 30px 0;
	    border-bottom: 5px solid #fff;
	    color: #1d262d;
	    letter-spacing: 1px;
	    line-height: 35px;
	 }
	 #aboutTeam {
		background-image: url('resources/images/aboutTeam.jpg');
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
		min-height: 400px;
		width: 100%;
	 }
	 .aboutHeading {
	 	margin-top: 25px;
	 }
	 .aboutHeading h2 {
		color: #fff;
		letter-spacing: 1px;
		line-height: 40px;
		max-width: 650px;
	 }
	 .team div span {
	 	color: #fff;
	 	letter-spacing: 2px;
	 }
	 .team div img {
	 	display: block;
	 	margin: 0 auto;
	 	border-radius: 50%;
	 	max-width: 125px;
	 	animation: none;
	 }
	 .spinner {
	 	border-radius: 50%;
	 	border-top: 15px solid #000;
	 	border-bottom: 15px solid #fff;
	 	border-right: 20px solid red;
	 	border-left: 20px solid green;
	 	animation: spin 2s linear infinite;
	 }
	 @keyframes spin {
	    0% { transform: rotate(0deg); }
	    100% { transform: rotate(360deg); }
	}
	.processSteps div img{
		display: block;
		margin: 0 auto;
		margin-bottom: 20px;
	}
	.processSteps div span {

	}
	@media only screen and (max-width : 790px){
		/*.processSteps {
			-webkit-box-orient: vertical;-moz-box-orient: vertical;-webkit-flex-direction:column;-moz-flex-direction:column; -o-flex-direction:column; -ms-flex-direction:column; flex-direction:column;
		}*/
	}
</style>
<section id="aboutUs">
	<div class="grid center" style="min-height: 700px; background: rgba(2, 2, 2, 0.5);">
		<div class="grid-cell center narrow-width" style="padding: 25px;">
			<h1>Մեր Մասին</h1>
			<p>Մեր գլխաոր նպատակն է այս կայքի օգնությամբ հնարավորինս հեշտսցնել վարկեր ավանդներ և այլ բանկային գործընթացների պրոցեսը: Մեր կայքի շնորհիվ դուք կարող եք հեշտությամբ գտնել ձեզ ամենա հարմար բանկը: Ամբողջ լրացման ընդացքը տեվում է ընդամենը 10 րոպե համակարգչի դիմաց: Ձեր կողմից գրանցված բոլոր տվյալները գտնվելու են գաղտնիության դաշտում և կարող են դիտարկվել միայն այն բանկի կւղմից որոնք կցանկանան ձեզ մատուցել ձեր ցանկացած ծառայությունները: Այս հնարավորությունը տրվում է ամբողջովին անվճար:</p>
		</div>
	</div>
</section>
<section id="aboutSteps">
	<h3>Ձեզանից Կպահանջվի ընդամենը 3 քայլ որպեսզի հեշտությամբ ստանաք ձեր վարկը՝</h3>
	<div class="grid">
		<div class="grid-cell center" style="margin: 120px 75px;">
			<div class="grid center processSteps">
				<div class="grid-cell">
					<img src="resources/images/aboutStep1.png" alt="" style="max-width: 100px;">		
					<span>Ընտրել ծառայությունը</span>	
				</div>
				<div class="grid-cell">
					<img src="resources/images/aboutStep2.png" alt="" style="max-width: 100px;">				
					<span>Լրացնել ձևը</span>	
				</div>
				<div class="grid-cell">
					<img src="resources/images/aboutStep3.png" alt="" style="max-width: 100px;">				
					<span>Ստանալ վարկատեսակը</span>	
				</div>
			</div>
		</div>
	</div>
</section>
<section id="aboutTeam">
	<div class="grid center column-orient" style="min-height: 400px; background: rgba(0, 0, 0, 0.55);">
		<div class="grid-cell center">
			<div class="aboutHeading">
				<h2>Մեր թիմը աշխատում է ամեն օր որպեսզի դուք ձեզ անվտանգ զգաք</h2>
			</div>
		</div>
		<div class="grid-cell center">
			<div class="grid center team">
				<div class="grid-cell center spinner">
					<img src="resources/images/co1.png" alt="" />
				</div>
				<div class="grid-cell center spinner" style="margin: 0 50px;">
					<img src="resources/images/co2.png" alt="" />
				</div>
				<div class="grid-cell center spinner" style="margin-right: 50px;">
					<img src="resources/images/co1.png" alt="" />
				</div>
				<div class="grid-cell center spinner">
					<img src="resources/images/co2.png" alt="" />
				</div>
			</div>
		</div>
	</div>
</section>

<?php include("include/footer.php"); ?>