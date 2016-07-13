
<?php 
$page_title = "Home – My Website";
$page_description = "Description of this page";
?>
<?php include("include/header-nav.php"); ?>


<!-- body HTML structure here -->
    <section id="section1" data-parallax="scroll" data-image-src="resources/images/firstBg.jpg" class="headInfo">
        <div class="bgShadow">
            <div class="grid center">
                <div class="grid-cell"></div>
                <div class="grid-cell mainText">
                    <h1>Մեր նպատակն է` հնարավորություն ընձեռել Ձեզ` գտնելու անհրաժեշտ ֆինանսական ծառայությունները` Ձեր իսկ նախընտրելի պայմաններով: </h1>
                    <p>Ձեր ներկայացրած հայտերը հասանելի կլինեն մի շարք բանկերի և վարկային կազմակերպությունների համար:</p>
                </div>
            </div>
        </div>
    </section>
    <section id="section2" class="cartBox">
        <div class="container padd90">
            <div class="grid">
                <div class="grid-cell infoBox">
                    <a href="">
                       <div class="infoBox_icon icon1">
                        <div class="infoBox-opacity">
                            <i class="fa fa-car"></i>
                            <span>Վարկեր</span> 
                            <div class="infoBox_bg bg1"></div>
                        </div>
                        </div>
                    </a>
                </div>
                <div class="grid-cell infoBox">
                    <div class="infoBox_icon icon2">
                        <i class="fa fa-university"></i>
                        <span>Ավանդներ</span>
                    </div>
                    <div class="infoBox_bg bg2"></div>
                </div>
                <div class="grid-cell infoBox">
                    <div class="infoBox_icon icon3">
                        <i class="fa fa-credit-card"></i>
                        <span>Քարտեր</span>
                    </div>
                    <div class="infoBox_bg bg3"></div>
                </div>
                <div class="grid-cell infoBox">
                    <div class="infoBox_icon icon4">
                        <i class="fa fa-archive"></i>
                        <span>Պահատուփեր</span>
                    </div>
                    <div class="infoBox_bg bg4"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="section3" class="partners" data-parallax="scroll" data-image-src="resources/images/partners.jpg">
        
    </section>
<!-- End Body HTML structure here -->


<?php include("include/footer.php"); ?>