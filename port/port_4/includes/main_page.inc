<?php
	// PANELS VARIABLES
	
	$panelsHeadings = [
		"Title One",
		"Title Two",
		"Title Three",
		"Title Four",
		"Title Five",
		"Title Six",
		"Title Seven",
		"Title Eight",
		"Title Nine",
		"Title Ten"
	];
	
	$panelsBodies = [
		"This is the content related to FIRST body.",	
		"This is the content related to SECOND body.",	
		"This is the content related to THIRD body.",	
		"FOURTH body.",	
		"This is the content related to FIFTH body.",	
		"This is the content related to SIXTH body.",	
		"This is the content related to SIXTH body.",	
		"This is the content related to SIXTH body.",	
		"This is the content related to SIXTH body.",	
		"This is the content related to SIXTH body."
	];
	
	$largerPanelHeading = "Title of the larger Panel";
	$largerPanelBody = "Body of the larger Panel";
?>

<!-- #wrapper -->
<div id="wrapper">

	<!-- #top-box -->
	<div class="top-box">
		<p id="row-1" class="row">
			Lança&shy;mento<span>20<wbr />16</span>
		</p>
		<p id="row-2" class="row">
			10 Moti&shy;vos para eleger o<br />
			Vamos Traba&shy;lhar
		</p>
	</div>
	<!-- #top-box -->
	

	
	<!-- panels BEGIN -->
	<div class="container">
	
		<?php
			$panelsTot = count($panelsHeadings);
		
			for ($i = 0; $i < $panelsTot; $i++) {
			
				echo 
					"<div id='panel-" . ($i + 1) . "' class='panel panel-default smaller-panel'>".
					"<div class='panel-heading'>" . $panelsHeadings[$i] . "</div>".
					"<div class='panel-body'>" . $panelsBodies[$i] . "</div>".
					"</div> <!-- .panel -->";
			}
		?>

		<div id="panel-11" class="panel panel-default larger-panel">
			<div class="panel-heading"><?php echo $largerPanelHeading ?></div>

			<div class="panel-body">
				<div class="panel-content"><?php echo $largerPanelBody ?></div>
				<div class="panel-media"><img src="img/thumbnail.jpg" /></div>
			</div>  <!-- .panel-body -->
		</div> <!-- .panel -->
	
	</div>
	<!-- panels END -->

</div>
<!-- #wrapper -->