  
	<div id="backtoTop" ng-controller="backTop">
		<a class="backtoTop" href="#" ng-click="scrollToTop();"><i class="fa fa-angle-up"></i></a>
	</div>
   <script src="js/jquery-3.1.0.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <!--<script src="js/angular-date-picker.js"></script> -->
   <script src="js/angular-1.2.10.min.js"></script>
   <script src="js/ng-file-upload.js"></script>
   <script src="js/ng-file-upload-shim.js"></script>
   <script src="js/calendar-tpls.js"></script>
   <script src="js/bootstrap-colorpicker.js"></script>
   <script src="js/script.js"></script>
   <script>
	angular.bootstrap(document.getElementById("MyCalendar"), ['calendarDemoApp']);
	angular.bootstrap(document.getElementById("myHeader"), ['headerMenu']);
	angular.bootstrap(document.getElementById("formValid"), ['formValidation']);
	angular.bootstrap(document.getElementById("ImgUpload"), ['ImgUploadPreview']);
	angular.bootstrap(document.getElementById("helloCalendar"), ['CalendarApp']);
	angular.bootstrap(document.getElementById("mycolorpicker"), ['colorApp']);
	angular.bootstrap(document.getElementById("csreaddplus"), ['contactAddon']);
	angular.bootstrap(document.getElementById("dragdrop"), ['mydragModule']);
	angular.bootstrap(document.getElementById("backtoTop"), ['backtopApp']);
	
	
	// Add slideUp animation to Bootstrap dropdown when collapsing.
	$('.dropdown').on('show.bs.dropdown', function() {
		$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
	});	  
	$('.dropdown').on('hide.bs.dropdown', function() {
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
	});
	//fixed top header background
	$(window).on("load resize scroll",function(){
        if ($(this).scrollTop() > 70) {
            $('.main-nav').addClass("sticky");
        } else {
            $('.main-nav').removeClass("sticky");
        }
    }); 
	//backtoTop
	/* $(document).ready(function(){ 
		$(window).scroll(function(){ 
			if ($(this).scrollTop() > 200) { 
				$('#backtoTop').fadeIn(); 
			} else { 
				$('#backtoTop').fadeOut(); 
			} 
		}); 
		$('#backtoTop').click(function(){ 
			$("html, body").animate({ scrollTop: 200 }, 600); 
			return false; 
		}); 
	}); */
	
	</script>
	 
  </body>
</html>