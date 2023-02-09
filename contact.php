<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>The Scribe Review</title>
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png?v=1.4">
<link href="css/bootstrap.min.css?v=1.7" rel="stylesheet">
<link href="css/menu.css?v=1.7" rel="stylesheet">
<link href="css/custom.css?v=2.0" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168167340-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-168167340-1');
</script>

</head>
<body>
<div class="page-wrpper">
<header> 
  <div  id="sticky-anchor"></div>
  <nav class="navbar-expand-lg" id="mainNav">
    <div class="container">
      <div class="row">
      <div class="col-auto  align-self-center">         
        <div class="logo">
         <button type="button" class="navbar-toggle collapsed js-offcanvas-btn"> <span class="hiraku-open-btn-line"></span> </button>
          <strong>The Scribe Review</strong>
       <?php /*?>  <span>Is the only journal in the world dedicated to publishing <br>the academic English essays of high school students.</span><?php */?></div>
         </div>
         <div class="col-auto ml-auto align-self-center pt-lg-5">
        <div class="js-offcanvas">
          <ul class="navbar-nav ">
            <li > <a  href="index.php">Home</a> </li>
            <li > <a href="guidelines.php">Guidelines</a> </li>
            <li> <a href="reviewer.php">Reviewers</a> </li>
            <li class="active contact"> <a href="contact.php">Contact</a> </li>
          </ul>
        
        </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<section class="clearfix">

    <article class="contact-sec">
    	<div class="container">
        	<div class="row">
            	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="contact-text ">
                    	<h2>Contact</h2>
                        <p>Vishnu Bharathram, a high school student in New York City, is the founder and editor-in-chief of this journal. If you have any questions, <br>
please reach out to him at <a href="mailto:help@scribereview.org">help@scribereview.org</a></p>
                    </div>
                </div>
            </div>            
        </div>


</article>
   <footer class="footer-sec" >
    <div class="container">
      <div class="row">
       <div class="col-12 col-md-12 col-lg-12">
        	<div class="footer-info">
            	<p>© 2023 Scribe Review. All rights reserved.</p>
            </div>
        </div>
      </div>
    </div>
  </footer>   
</section>
<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.menu.js"></script>
<!-- Custom JavaScript for this theme -->
<?php /*?><script src="js/jquery.easing.min.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/scrolling-nav.js"></script><?php */?>
<script>
function sticky_relocate() {
   var window_top = $(window).scrollTop();
   var div_top = $('#sticky-anchor').offset().top;
   if (window_top > div_top) {
       $('#mainNav').addClass('stick');
   } else {
       $('#mainNav').removeClass('stick');
   }
}

$(function () {
$(window).scroll(sticky_relocate);
sticky_relocate();
var $grAct = $('.list-group a').click(function(){
$grAct.removeClass('active');
 $(this).addClass('active');
});
 });
$( document ).ready(function() {
$("nav ul li a, .closeNav").click(function(){
$("body").removeClass("js-hiraku-offcanvas-body-left");
$(".js-hiraku-offcanvas").removeClass("js-hiraku-offcanvas-open");
$("body, html").attr('style', '');
 });
});
$(document).ready(function () {
    size_li = $("#myList li").size();
    x=29;
    $('#myList li:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+5 <= size_li) ? x+5 : size_li;
        $('#myList li:lt('+x+')').show();
         $('#showLess').show();
        if(x == size_li){
            $('#loadMore').hide();
        }
		$('#myList').removeClass('active');
    });
    $('#showLess').click(function () {
        x=(x-5<0) ? 9 : x-5;
        $('#myList li').not(':lt('+x+')').hide();
        $('#loadMore').show();
         $('#showLess').show();
        if(x == 9){
            $('#showLess').hide();
        }
			$('#myList').addClass('active');
    });
});
</script>
</div>
</body>
</html>
