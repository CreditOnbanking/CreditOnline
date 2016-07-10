<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" type="image/png" sizes="16x16" href="resources/images/favicon-16x16.png">
    <title>My Banking</title>
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
                                <h1 style="margin: 0; "><img src="resources/images/logo.png" alt=""></h1>  
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
                       <h1 style="margin: 0; "><img src="resources/images/logo.png" alt=""></h1> 
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
        <!-- <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Գրանցվել</h4>
              </div>
              <div class="modal-body">
                <div class="main">
                    <form class="cbp-mc-form">
                        <div class="cbp-mc-column">
                            <label for="first_name">Անուն *</label>
                            <input type="text" id="first_name" name="first_name" placeholder="">
                            
                            <label for="email">Էլեկտրոնային հասցե *</label>
                            <input type="text" id="email" name="email" placeholder="example@gmail.com">

                            <label for="email">Գաղտնաբառ *</label>
                            <input type="password" id="password" name="password" placeholder="">

                        </div>
                        <div class="cbp-mc-column">
                            <label for="last_name">Ազգանուն *</label>
                            <input type="text" id="last_name" name="last_name" placeholder="">
                            
                            <label for="phone">Հեռախոսահամար *</label>
                            <input type="text" id="phone" name="phone" placeholder="(+374)">

                            <label for="email">Կրկնել Գաղտնաբառը *</label>
                            <input type="password" id="repPassword" name="repPassword" placeholder="">                            
                        </div>
                        <div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" value="ԳՐԱՆՑՎԵԼ" /></div>
                    </form>
                </div>
              </div>
              <div class="modal-footer">
                <a href="" type="button" class="btn btn-secondary" data-dismiss="modal">Փակել</a>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="logIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" style="max-width: 470px;" role="document">
            <div class="modal-content">
              <div class="modal-header" style="background-color: #e34b55;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Մուտք</h4>
              </div>
              <div class="modal-body">
                <div class="main">
                    <form class="cbp-mc-form">
                        <div class="cbp-mc-column" style="width: 100%;">
                            <label for="email">Էլեկտրոնային հասցե *</label>
                            <input type="text" id="email" name="email" placeholder="example@gmail.com">

                            <label for="email">Գաղտնաբառ *</label>
                            <input type="password" id="password" name="password" placeholder="">
                        </div>
                        <a href="" style="display: block; text-align: center;">Մօռացել եմ Գաղտնաբառը/Էլ. Փոստը</a>
                        <div class="cbp-mc-submit-wrap"><input style="background-color: #e34b55;" class="cbp-mc-submit" type="submit" value="Մուտք" /></div>
                    </form>
                </div>
              </div>
              <div class="modal-footer">
                <a href="" type="button" class="btn btn-secondary" data-dismiss="modal">Փակել</a>
              </div>
            </div>
          </div>
        </div> -->
    </header>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/cbpHorizontalSlideOutMenu.min.js"></script>
    <script>
    var menu = new cbpHorizontalSlideOutMenu(document.getElementById('cbp-hsmenu-wrapper'));
    </script>
</body>

</html>
