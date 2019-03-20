<?php include "header.php"?>



<section class="fileupload py-5">
    <div class="container py-5">
		<div class="section-header text-center">
			<h3>File Upload</h3>
			<p>This demo is specifically for the purpose of handling image uploader preview.</p>
		</div>
        <div class="row mt-4">
			<div class="col-md-12 pb-4 pb-md-0">
				<div id="ImgUpload" ng-controller="fileUploadCtrl">
					<div>
						<div img-upload method="POST" url="#"></div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>



<?php include "footer.php"?>
