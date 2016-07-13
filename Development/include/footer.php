<footer class="footer">
        <div class="grid center" style="padding: 80px 20px;">
            <div class="grid-cell center footCollumn">
                <div class="grid column-orient">
                    <div class="grid-cell center"><a href="#">Գլխավոր</a></div>
                    <div class="grid-cell center"><a href="#">Ծառայությորններ</a></div>
                    <div class="grid-cell center"><a href="#">Մեր Մասին</a></div>
                    <div class="grid-cell center"><a href="#">Հետադարձ Կապ</a></div>
                </div>
            </div>
            <div class="grid-cell center footCollumn">
                <div class="grid column-orient">
                    <div class="grid-cell center"><a href="#">Գլխավոր</a></div>
                    <div class="grid-cell center"><a href="#">Ծառայությորններ</a></div>
                    <div class="grid-cell center"><a href="#">Մեր Մասին</a></div>
                    <div class="grid-cell center"><a href="#">Հետադարձ Կապ</a></div>
                </div>
            </div>
             <div class="grid-cell center footCollumn">
                <div class="grid column-orient">
                    <div class="grid-cell center"><a href="#">Գլխավոր</a></div>
                    <div class="grid-cell center"><a href="#">Ծառայությորններ</a></div>
                    <div class="grid-cell center"><a href="#">Մեր Մասին</a></div>
                    <div class="grid-cell center"><a href="#">Հետադարձ Կապ</a></div>
                </div>
            </div>
             <div class="grid-cell center footCollumn">
                <div class="grid column-orient">
                    <div class="grid-cell center"><a href="#">Գլխավոր</a></div>
                    <div class="grid-cell center"><a href="#">Ծառայությորններ</a></div>
                    <div class="grid-cell center"><a href="#">Մեր Մասին</a></div>
                    <div class="grid-cell center"><a href="#">Հետադարձ Կապ</a></div>
                </div>
            </div>
               
            </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/cbpHorizontalSlideOutMenu.min.js"></script>
    <script type="text/javascript" src="resources/js/parallax.min.js"></script>
    <script type="text/javascript">
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 90) {
                if (!$('.main').hasClass('expand') && !$('.cbp-hsinner').hasClass('expand') && !$('.webLogo').hasClass('animLogo'))  {
                    $('.main').addClass('expand') && $('.cbp-hsinner').addClass('expand') && $('.webLogo').addClass('animLogo');
                }
            } else {
                if ($('.main').hasClass('expand') && $('.cbp-hsinner').hasClass('expand') && $('.webLogo').hasClass('animLogo')) {
                    $('.main').removeClass('expand') && $('.cbp-hsinner').removeClass('expand') && $('.webLogo').removeClass('animLogo');
                }
            }
        });
    </script>
    <script>
    var menu = new cbpHorizontalSlideOutMenu(document.getElementById('cbp-hsmenu-wrapper'));
    </script>
</body>

</html>
