<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$page = 'members';
$gallery_name = (isset($_GET['gallery']) ? $_GET['gallery'] : '');
$gallery_name_len = strlen($gallery_name);

if ($gallery_name_len > 1) {
	$is_gallery = true;
	$gallery_formatted_name = ucwords(str_replace("-", " ", $gallery_name));
} else {
	$is_gallery = false;
}
?>
<?php include("inc/head.php") ?>
<?php include_once('uber/UberGallery.php'); ?>
		<section class="main members-page">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
					<!-- Main content -->
						<div class="panel panel-home">
						 <div class="panel-body gallery <?= ($is_gallery ? 'gallery-full' : 'gallery-summary')?>">
						 	<h1>Photo Gallery <?= ($is_gallery ? ' - ' . $gallery_formatted_name : '')?></h1>
						 	<?php 
						 	if (isset($_GET['gallery'])) {
						 		$gdir = "activities/" . $_GET['gallery'];
						 		if (is_dir($gdir)) {

						 			//$galleryArray = UberGallery::init()->readImageDirectory($gdir);
						 			UberGallery::init()->createGallery($gdir, $gallery_name);
						 		} else {
						 			echo "Sorry gallery doesn't exist.";
						 		}
						 		
						 	} else {
						 		$gdir = "activities";
						 		$files = scan_dir($gdir);
						 		$dir_list = array();

					        	foreach ($files as $file):
					            	$dir = $gdir . "/" . $file;
					            	if (is_dir($dir) && $file != '.' && $file != '..'): 
					            		array_push($dir_list, $file);
										//print_r($dir_list);
					            		$gallery_formatted_name = ucwords(str_replace("-", " ", $file));
					        ?>
					                	<h2><?php echo $gallery_formatted_name; ?> <small><a class="" href="gallery.php?gallery=<?=$file?>">more</a></small></h2>
					                	<?php $gallery = UberGallery::init()->createGallery($dir, $file, 4); ?>
					        <?php 
					        		endif; 
					            endforeach; 
						 	}
						 	?>

						 </div><!-- /panel-body -->
						</div>

		
							
													
					<!-- /Main content -->
					</div>
					<div class="col-md-4 sidebar">
					<!-- Sidebar -->
						<?php //include("inc/news.php") ?>
						<?php include("inc/recent-events.php") ?>	
						<?php include("inc/contact.php") ?>	
					<!-- /Sidebar -->
					</div>
				</div>
				
			</div>
		</section>
<?php include("inc/foot.php") ?>

