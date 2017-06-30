    <footer>
        <div class="container">
            <h3>Jenny Bakker</h3>
            <div class="social">
                <a href="https://www.facebook.com/jenny.bakker.7" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                <a href="https://www.instagram.com/jenny_bakker_illustration/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                <a href="https://www.pinterest.com/jennbakker13/" target="_blank"><i class="fa fa-pinterest fa-2x"></i></a>
            </div>
			
			<ul class="contentfooterul">
				<li class="contentfooter"><h6>&copy; Jenny Bakker,  website gemaakt door Flowda</h6></li>
				<li class="contentfooter"> <a href="#"><h6>Privacy</h6></a></li>
				<li class="contentfooter"><a href="#"><h6>Algemene voorwaarden</h6></a></li>
				<li class="contentfooter"><a href="contact.php"><h6>Contact</h6></a></li>
				<li class="contentfooter"><h6>BTW: 1005.11.363.B01</h6></li>
				<li class="contentfooter"><h6>KvK: 000006020755</h6></li>
			</ul>
			
			
			
			 
			
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script> 
$(".mat-input").focus(function(){
  $(this).parent().addClass("is-active is-completed");
});

$(".mat-input").focusout(function(){
  if($(this).val() === "")
    $(this).parent().removeClass("is-completed");
  $(this).parent().removeClass("is-active");
})
</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="views/bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="views/js/custom.js"></script>
    <!-- JS PLUGINS -->
    <script src="views/js/jquery.easing.min.js"></script>
    <script src="views/plugins/WOW/dist/wow.min.js"></script>

</body>

</html>