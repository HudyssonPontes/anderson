<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript" src="js/canvasjs.min.js"></script>
<script>
	$( function() {
		$( "#slider-range" ).slider({
			range: true,
			min: 1,
			max: 31,
			values: [ 1, 31 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
			}
		});
		$( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) +
			" - " + $( "#slider-range" ).slider( "values", 1 ) );
	} );
	</script>
</html>