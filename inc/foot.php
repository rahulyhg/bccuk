<!-- CODE -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/holder.js"></script>
<script src="owl-carousel/owl.carousel.js"></script>
<script src="js/jquery-dateFormat.min.js"></script>


				<footer class="navbar-fixed-bottom2" style="display: one;">
<!-- 			<div class="container p-foot">
				<div class="row">
					<div class="col-sm-6 text-left">
						<p><a id="expand-foot-detail" href="index.html">Contact, Privacy &amp; Terms <i class="fa fa-angle-down fa-button"></i></a></p>
					</div>

				</div>
			</div> -->
			<div id="foot-content" class="foot-content">
				<div class="container">
					
					<div class="row">

						<div class="col-md-4 foot-section">
							<a href="about">About</a><br>
							<a href="services.php">Services</a><br>
							<a href="news.html">News</a><br>
							<a href="constitution.html">Constitution</a><br>
							<a href="executive-members">Members</a><br>
							<a href="contact">Contact</a>
					  	</div>

					  	<div class="col-md-4">
						  <p>Phone: 07877 825939 
						  </p>
						  <p>Email: <a href="mailto:info@bccuk.co.uk">info@bccuk.co.uk</a>
						  </p>
					  	</div>

						<div class="col-md-4">
						  <p>Buddhist Community Centre UK (BCCUK)<br>
						  8 High street <br/>
						  Aldershot <br/>
						  GU11 1TW
						  </p>
					  	</div>

				


					 



					</div>
					<div class="col-md-12"><br/>
					<p class="text-center">Copyright &copy; 2014 BCCUK</p>
					</div>
				</div>
			</div>
		</footer>	












	  	<script>

			// Enable Tooltips
			$("[data-toggle='tooltip']").tooltip();

			$( document ).ready(function() {
			  $("#expand-foot-detail").click(function(e){
				  e.preventDefault();
				  $("#foot-detail").slideToggle(200);
			  });
			});

			$(document).ready(function(){
				$("body").removeClass("preload");

				$(".jump-next").click(function() {
					$("html, body").animate({
						scrollTop: $("section").offset().top-60
					},450);
				});

			});

		
			$(document).ready(function(){
				$(".flexslider").flexslider({animation:"slide"});

			})

			$(document).ready(function() {
 
			  $("#owl-demo").owlCarousel({
			 
			      autoPlay: 3000, //Set AutoPlay to 3 seconds
			 
			      items : 3,
			      itemsDesktop : [1199,3],
			      itemsDesktopSmall : [979,3]
			 
			  });
 			});
		









	  	</script>

	  	<script>
  function listEvents(root) {
    var feed = root.feed;
    var entries = feed.entry || [];
    var str = "";
    var flash_str = "";

    for (var i = 0; i < entries.length; ++i) {
      var entry = entries[i];
      var title = (entry.title.type == 'html') ? entry.title.$t : escape(entry.title.$t);
      var start = (entry['gd$when']) ? entry['gd$when'][0].startTime : "";	
      var formatted_date = $.format.date(start, "ddd, dd MMMM");
      if (i < 6 )
      	str += '<a href="#" class="list-group-item"><h4 class="list-group-item-heading">' + unescape(title) + '</h4><p class="list-group-item-text">' + formatted_date +  '</p></a>';
      if (i < 3 )
      	flash_str += '<li><a href="" title=""><p><strong>' + unescape(title) + '</strong> - ' + formatted_date + '</p></a></li>' 
    }

    $("#event-list").html(str);
    $("#events-slide").html(flash_str);

  }
</script>
<script src="http://www.google.com/calendar/feeds/bccuk.co.uk%40gmail.com/public/full?alt=json-in-script&callback=listEvents&orderby=starttime&sortorder=a"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53772427-1', 'auto');
  ga('send', 'pageview');

</script>
	</body>
</html>
