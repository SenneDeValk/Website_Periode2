<script>
		function adjustStyle(width) {
				width = parseInt(width);
			  if (width < 500) {
				$("#size-stylesheet").attr("href", "data/files/siteMobiel.css");
				offset: -100;
			  } else if (width < 2560) {
				$("#size-stylesheet").attr("href", "data/files/site.css");
			  } else {
				 $("#size-stylesheet").attr("href", "data/files/siteUltraWide.css"); 
			  }
			  }

		$(function() {
		  adjustStyle($(this).width());
		  $(window).resize(function() {
			adjustStyle($(this).width());
									  });
			         });
			</script>
			
			
			<script>
		$(function () {
			$.srSmoothscroll({
			  step: 1000,
			  speed: 1000,
			  ease: 'swing',
			  target: $('body'),
			  container: $(window)
			                })
		})
			</script>	
			
	<style>
		.wow:first-child {
		  visibility: hidden;
		}
    </style>