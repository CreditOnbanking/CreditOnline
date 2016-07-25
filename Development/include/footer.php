<footer class="footer">
        <div class="grid center" style="padding: 40px 20px;">
            <div class="grid-cell center"><a href="#">
                <img src="resources/images/logo-grey.png" width="50" height="50" alt=""></a>
            </div>
            <div class="grid-cell center">
                <div class="grid column-orient footer-menu">
                    <div class="grid-cell center footer-menu_item">
                        <ul style="padding:0">
                            <li><a href="index.php">Գլխավոր</a></li>
                            <li><span>|</span></li>
                            <li><a href="services.php">Ծառայությորններ</a></li>
                            <li><span>|</span></li>
                            <li><a href="about.php">Մեր Մասին</a></li>
                            <li><span>|</span></li>
                            <li><a href="contact.php">Հետադարձ Կապ</a></li>
                        </ul>
                    </div>
                    <div class="grid-cell center footer-copyright">
                        <p>Բոլոր իրավունքները պաշտպանված են Copyright © mybanking.am 2016</p>
                    </div>
                </div>
            </div>
            <div class="grid-cell center footer-soc">
                <a href="#"><i class="fa fa-facebook-official fa-2x"></i></a>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/cbpHorizontalSlideOutMenu.min.js"></script>
    <script type="text/javascript" src="resources/js/parallax.min.js"></script>
    <script type="text/javascript" src="resources/js/toucheffects.js"></script>
    <script type="text/javascript" src="resources/js/menu-collapse.js"></script>
    <script type="text/javascript" src="resources/js/menu-detectWidth-toggle.js"></script>
    <script type="text/javascript">
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
                if (target.length) {
                    $('html,body').animate({
                      scrollTop: target.offset().top - 57
                    }, 1000);
                    return false;
                }
            });
        });
    </script>
</body>

</html>
