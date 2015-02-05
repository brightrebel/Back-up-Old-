			
<script>
	$(document).ready(function(){
		// Disable textboxes on startup
		$('#txtFacebook').attr('disabled', 'disabled');
		$('#txtTwitter').attr('disabled', 'disabled');
		$('#txtGooglePlus').attr('disabled', 'disabled');
		$('#txtYouTube').attr('disabled', 'disabled');
		$('#txtInstagram').attr('disabled', 'disabled');
	});
	
	// Enable Disable textboxes
	$('#cbFacebook').click(function(){
		if($(this).is(':checked')){
			$('#txtFacebook').removeAttr('disabled');
		} else {
			$('#txtFacebook').attr('disabled', 'disabled');
			$('#txtFacebook').val('');
		}
	});
	$('#cbTwitter').click(function(){
		if($(this).is(':checked')){
			$('#txtTwitter').removeAttr('disabled');
		} else {
			$('#txtTwitter').attr('disabled', 'disabled');
			$('#txtTwitter').val('');
		}
	});
	$('#cbGooglePlus').click(function(){
		if($(this).is(':checked')){
			$('#txtGooglePlus').removeAttr('disabled');
		} else {
			$('#txtGooglePlus').attr('disabled', 'disabled');
			$('#txtGooglePlus').val('');
		}
	});
	$('#cbYouTube').click(function(){
		if($(this).is(':checked')){
			$('#txtYouTube').removeAttr('disabled');
		} else {
			$('#txtYouTube').attr('disabled', 'disabled');
			$('#txtYouTube').val('');
		}
	});
	$('#cbInstagram').click(function(){
		if($(this).is(':checked')){
			$('#txtInstagram').removeAttr('disabled');
		} else {
			$('#txtInstagram').attr('disabled', 'disabled');
			$('#txtInstagram').val('');
		}
	});
	
</script>

<div id="updatelibtnarea" style="display: none;">
  <div type="submit" name="addcontent" class="updatelibtn" value="" data-toggle="modal" data-target="#myModal"></div>
</div>


<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
		
				<div class="form">
							
					<form action="" method="POST">
						<div class="col-md-2">
							<input type="checkbox" name="ITcheckbox"></input>
							<br>
							<label>IT</label>
						</div>
						<div class="col-md-2">
							<input type="checkbox" name="Artcheckbox"></input>
							<br>
							<label>ART</label>
						</div>
						<div class="col-md-2">
							<input type="checkbox" name="Maincheckbox"></input>
							<br>
							<label>MAIN</label>
						</div>
						<div class="col-md-2">
							<input type="checkbox" name="Studiocheckbox"></input>
							<br>
							<label>MEDIA</label>
						</div>
						<div class="col-md-2">
							<input type="checkbox" name="Retailcheckbox"></input>
							<br>
							<label>RETAIL</label>
						</div>
						<div class="col-md-2">
						</div>
						<br/>
				      </div>

				      <div class="modal-body">

						<div class="form-group">
						<label for="txtFirstName">Name:</label>
						<input id="txtFirstName" class="form-control" type="text" name="firstname">
						</div>
						<div class="form-group">
						<label for="txtDateTime">Date & Time:</label>
						<input id="txtDateTime" class="form-control" type="text" name="lastname">
						</div>					
						<div class="form-group">
						<label for="txtLocation">Location:</label>
						<input id="txtLocation" class="form-control" type="text" name="lastname">
						</div>
		
				
					
						
							<div class="col-md-12">
							<div class="col-md-6">
							Logo Here (805px by 150px):<br>
							<input type="file" name="">
							<br>
							Banner Here (205px by 150px):<br>
							<input type="File" name="">
							<br>
							Movies Here:<br>
							<input type="file" name="">
								<br/>
							</div>
							<div class="col-md-6">
							Background Image Here:<br>
							<input type="file" name="">
							<br>
							Article Background Here:<br>
							<input type="File" name="">
							<br>
							
							</div>
							
							</div>
						
						

					

						<div class="form-group">

						<input id="cbFacebook" type="checkbox" name="facebookpage" value="yes"><b> Facebook url:</b><br>
						<input id="txtFacebook" class="form-control" type="text">

						<br>

						<input id="cbTwitter" type="checkbox" name="twitterpage" value="yes"><b> Twiter url:</b><br>
						<input id="txtTwitter" class="form-control" type="text">
						<br>

						<input id="cbGooglePlus" type="checkbox" name="googlepluspage" value="yes"><b> Google plus url:</b><br>
						<input id="txtGooglePlus" class="form-control" type="text">
						

						<br>

						<input id="cbYouTube" type="checkbox" name="youtubepage" value="yes"><b> Youtube url:</b><br>
						<input id="txtYouTube" class="form-control" type="text">
						

						<br>

						<input id="cbInstagram" type="checkbox" name="instagrampage" value="yes"><b> Instagram url:</b><br>
						<input id="txtInstagram" class="form-control" type="text">
						</div>

					<br>
					<br>

						<div class="form-group">
						<label for="txtShortInfo">Short Info:</label>
						<input id="txtShortInfo" class="form-control" type="text">
						</div>
						<br>
						<div class="form-group">
						<label for="txtExtendedInfo">Extended Info:</label>
						<input id="txtExtendedInfo" class="form-control" type="text">
						<br>
						</div>

				
			
				</form>
				
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="submit" >Submit</button>
      </div>
    </div>
  </div>
</div>
 <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->