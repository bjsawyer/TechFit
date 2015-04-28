<?
	// session variable setup
	if (!isset($_SESSION)) {
		session_start();
	}
	ob_start();
?>
<?
	function profilePictureAndDescriptionModal() {
?>
		<div class="modal fade text-left" id="profileModal">
	            <div class="modal-dialog">
		            <div class="modal-content">
			            <div class="modal-header">
				            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				            <h4 class="modal-title"><b>Edit Profile</b></h4>
					</div>
					<form id="profileDescAndPicForm" action="upload.php" method="POST"  enctype="multipart/form-data" style="margin-bottom:0px">
						<div class="modal-body">
								<div class="form-group">
									<label for="profileDescription">Create profile description:</label>
									<div>
										<textarea id="profileDescription" name="profileDescription" onkeyup="countChar(this)" onsubmit="getSubstring(this)"></textarea>
									</div>
									<div id="charNum" style="color:lightgray">140</div>
					                  </div>
					                  <div class="form-group">
									<label for="profilePictureUpload">Upload profile picture:</label>
									<input type="file" id="profilePictureUpload" name="profilePictureUpload">
									<p class="help-block">Choose a picture to use for your profile and listings.</p>
								</div>
						</div>
						<div class="modal-footer">
					            <button type="submit" class="btn btn-primary" name="submit">Register</button>
					            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				            </div>
						<input type="hidden" id="selectedPlan" name="selectedPlan" />
			            </form>
		            </div><!-- /.modal-content -->
	            </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
<?
	}
?>
<script>
	function countChar(val) {
            var len = val.value.length;
            if (len > 140) {
                  $('#charNum').text(140 - len);
                  $('#charNum').css('color', 'red');
            } else {
                  $('#charNum').text(140 - len);
                   $('#charNum').css('color', 'lightgray');
            }
      };
      function getSubstring(val) {
            val.value = val.value.substring(0, 140);
      }
</script>