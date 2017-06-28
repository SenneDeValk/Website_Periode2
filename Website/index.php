<html>
 <head>
<?php 
	$hoogten = 1;
	if (isset($hoogten)) {
    echo"<title> Senne's website </title>";
} ?>
  <link id="size-stylesheet" rel="stylesheet" type="text/css" href="data/files/site.css">
  <link rel="stylesheet" href="data/WOW-master/css/libs/animate.css">
  <link rel="shortcut icon" href="data/favi.ico"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="data/files/jqueryvalidate.js"></script>
  <script src="data/simplr-smoothscroll-master/lib/jquery.simplr.smoothscroll.min.js"></script>
    
	<!-- jquery en smoothscroll scripts -->
	<?php include 'data/files/script.php'; //bevat ook de banner ?>
  
 </head>
 <body>
  <section>
	 <!-- pagina 1 -->
	 <?php include 'data/files/sectie1.php'; //bevat ook de banner ?>
	 
	 <!-- pagina 2 -->
	 <?php include 'data/files/sectie2.php'; ?>
	 
	 <!-- pagina 3 -->
	 <?php include 'data/files/sectie3.php'; ?>

	 <!-- pagina 4 -->
	 <?php include 'data/files/sectie4.php'; ?>
		
	 <!-- pagina 5 -->
	 <?php include 'data/files/sectie5.php'; ?>
	 
	 <!-- pagina 6 -->
	 <?php include 'data/files/sectie6.php'; ?>
	 
  </section> 
				<!-- wow.js plugin script -->
   <script src="data/WOW-master/dist/wow.min.js"></script>
              <script>
			  wow = new WOW(
                      {
                      animateClass: 'animated', 
                      offset:       -300,    
                    }
                    )
                    wow.init();

</script>	
 </body>
</html>