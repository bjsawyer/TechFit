<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
	
	<link href="jquery-ui-1.11.3.custom/jquery-ui.css" rel="stylesheet">
	<script src="jquery-ui-1.11.3.custom/external/jquery/jquery.js"></script>
	<script src="jquery-ui-1.11.3.custom/jquery-ui.js"></script>
	<?
		include('banner.php');
		include('navMenu2.php');
	?>
</head>

<body>
    <div id="contentContainer" class="alignCenter">
        <?
			include('sidebarLeft.php');
			include('sidebarRight.php');
		?>
		<div class="container" align="left">
			<div class="content">
				<h1>Scheduling</h1>
				<form>
					Date: 
					<input type="text" id="datepicker">
					<button id="submitbutton">Save</button>
				</form>
				<h2>Select Classes:</h2>
				<style> <!-- additional styles for #selectable -->
					#feedback { font-size: 1.4em; }
					#selectable .ui-selecting { background: #FECA40; }
					#selectable .ui-selected { background: #F39814; color: white; }
					#selectable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
					#selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
                </style>
				<ol id="selectable">
					<li class="ui-widget-content">Body Pump</li>
					<li class="ui-widget-content">Cycling</li>
					<li class="ui-widget-content">Pilates</li>
					<li class="ui-widget-content">Yoga</li>
				</ol>
				<p id="feedback">
					<span>Classes selected: </span><span id="select-result">none</span> 
				</p>
				<div id="tabs">
					<ul>
						<li><a href="#tabs-1">Step 1</a></li>
						<li><a href="#tabs-2">Step 2</a></li>
						<li><a href="#tabs-3">Step 3</a></li>
					</ul>			
					<div id="tabs-1">
						<p>To become a TechFit member, please create an account on the login page.</p>
					</div>
					<div id="tabs-2">
						<p>Once you have created your account, you can log in using your email and password.</p>
					</div>
					<div id="tabs-3">
						<p>You may now browse our listings of gyms and trainers, book a membership or registration, and start getting fit!</p>
					</div>
				</div>
				<div class="ui-widget">
					<form>
						Search by Specialty:
						<input type="text" id="autocomplete">
					</form>
				</div>
			</div>
		</div>
    </div>
    <?
		include('footer.php');
	?>
	<script>
		$("#datepicker").datepicker();
		
		$("#submitbutton").button({
			icons: {
				primary: "ui-icon-disk"
			}
		});
		
		$("#tabs").tabs({
			event: "mouseover"
		});
		
		$(function() {
			var predefinedTags = [
				"Cardiorespiratory",
				"Mind/Body",
				"Specialty",
				"Strength"
			];
			$("#autocomplete").autocomplete({
				source: predefinedTags
			});
		});
			
	</script>
	<script>				   
		$( "#selectable" ).selectable({
			stop: function() {
				var result = $( "#select-result" ).empty();
				$( ".ui-selected", this ).each(function() {
					var index = $( "#selectable li" ).index( this );
					result.append( " #" + ( index + 1 ) );
				});
			}
		});
	</script>
</body>
</html>