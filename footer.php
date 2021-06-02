<!-- <footer>
    <p>© 2021 Copyright : Portfolio Tomy SOTTY</p>
</footer> -->

<!-- scripts -->
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<script src="js/script.js"></script>

<!-- bouge la div selon la position du scroll -->
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script>
    $(function() {

var offset = $(".me").offset();
var topPadding = 80;

    $(window).scroll(function() {
    
        if ($(window).scrollTop() > offset.top) {
        
 $(".me").stop().animate({
            
 marginTop: $(window).scrollTop() - offset.top + topPadding
            
            });
        
        } else {
        
            $(".me").stop().animate({
            
                marginTop: 0
            
            });    
        }
 
    });

});
</script>
