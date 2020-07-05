<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Datepicker - Animations</title>
	<link rel="stylesheet" href="ui/jquery.ui.all.css">
	<script src="ui/jquery-1.8.2.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.effects.core.js"></script>
	<script src="ui/jquery.effects.bounce.js"></script>
	<script src="ui/jquery.ui.datepicker.js"></script>
	<script>
	$(function() {
		$( "#datepicker" ).datepicker();
			$( "#datepicker" ).datepicker( "option", "showAnim", "bounce" );
		});
	</script>
</head>
<body>

<div class="demo">
<p>Date: <input type="text" id="datepicker" size="30"/></p>
</div><!-- End demo -->



</body>
</html>