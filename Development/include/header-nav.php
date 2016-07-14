<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" type="image/png" sizes="16x16" href="resources/images/favicon-16x16.png">
    <title><?php echo $page_title; ?></title>
    <meta http-equiv="description" content="<?php echo $page_description; ?>" />
    <!-- Bootstrap -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="resources/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="resources/css/default.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/component.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">
    <script src="resources/js/modernizr.custom.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header>
        <div class="main">
            <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
                <div class="cbp-hsinner grid center">
                    <div class="grid-cell logoSection visible-xs-nav" style="width: 100%;">
                        <div class="grid">
                            <div class="grid-cell">
                                <h1 style="margin: 0; "><img class="webLogo" src="resources/images/logo.png" alt=""></h1>  
                            </div>
                            <div class="grid-cell noflex registrationBox">
                                <div class="grid">
                                   <div class="grid-cell" style="margin-right: 10px; text-align: right;"><a href="form/signup.php">Գրանցվել</a></div>
                                <div class="grid-cell"><a href="form/index.php">Մուտք</a></div> 
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="logoSection grid-cell hidden-xs-nav">
                       <h1 style="margin: 0; "><img class="webLogo" src="resources/images/logo.png" alt="" ></h1> 
                    </div>
                    <ul class="cbp-hsmenu grid-cell center-nonText">
                        <li><a href="#">Գլխավոր</a></li>
                        <li>
                            <a href="#">Ծառայությորններ</a>
                            <ul class="cbp-hssubmenu">
                                <li>
                                    <a href="#"><i class="fa fa-car"></i><span>Վարկեր</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart"></i><span>Ավանդներ</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-credit-card"></i><span>Քարտեր</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-archive"></i><span>Պահատուփեր</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Մեր Մասին</a></li>
                        <li><a href="#">Հետադարձ Կապ</a></li>
                    </ul>
                    <div class="registrationBox hidden-xs-nav grid-cell end">
                        <div class="grid">
                            <div class="grid-cell" style="margin-right: 10px; text-align: right;"><a href="form/signup.php">Գրանցվել</a></div>
                            <div class="grid-cell"><a href="form/index.php">Մուտք</a></div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    