<nav class="menu" id="sm">
	<div class="sm-wrap">
		<div id="logo" class="text-center"><img alt="" title="" src="images/logo.png"/></div>
		<a href="index.php">Home</a>
		<a href="about.php">About Us</a>
		<a href="services.php">Services</a>
		<a href="portfolio.php">Portfolio</a>
		<a href="contact.php">Contact Us</a>	
	</div>
	<!-- Navigation Trigger Button -->
	<div id="sm-trigger"><i id="indication" class="fa fa-arrow-left"></i><p id="vertical-logo">PEZZO</p></div>
</nav>
<script>
function moveRight(){
    $("#indication").animate({left: "+=12"}, 1000,moveLeft)
}

function moveLeft(){
    $("#indication").animate({left: "-=12"}, 1000,moveRight)
}

$(document).ready(function() {

   moveRight();

});
$('#sm-trigger').click(function () {    		
    $('#indication').hide();
});
</script> -->
