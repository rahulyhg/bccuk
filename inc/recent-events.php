<?php if (isset($dir_list) && count($dir_list) > 0) { ?>
<div class="section">
	<h3>Recent Events <!-- <small><a href="events">more</a></small> --></h3>
	<div class="list-group" id="recent-event-list2">
	<?php 
	for ($x = 0; $x < count($dir_list); $x++) { 
		$recent_event_name = ucwords(str_replace("-", " ", $dir_list[$x]));
	?>
		<a href="gallery.php?gallery=<?=$dir_list[$x]?>" class="list-group-item">
	    	<h4 class="list-group-item-heading"><?=$recent_event_name?></h4>
	    	<!-- <p class="list-group-item-text">18.07.2014</p> -->
	  	</a>
	<?php } ?>
	  	
	</div>

</div><!-- /section -->
<?php } ?>
