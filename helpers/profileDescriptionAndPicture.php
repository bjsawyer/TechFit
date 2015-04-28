<?
	function profilePictureAndDescriptionModal() {
?>
		<div class="modal fade text-left" id="profileModal">
	            <div class="modal-dialog">
		            <div class="modal-content">
			            <div class="modal-header">
				            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				            <h4 class="modal-title">Edit Profile</h4>
					</div>
					<form id="profileDescAndPicForm" action="upload.php" method="POST"  enctype="multipart/form-data">
						<div class="modal-body">
					                  <div class="form-group">
									<label for="profilePictureUpload">Upload profile picture:</label>
									<input type="file" id="profilePictureUpload" name="profilePictureUpload">
									<p class="help-block">Choose a picture to use for your profile and listings.</p>
								</div>
						</div>
						<div class="modal-footer">
					            <button type="submit" class="btn btn-primary" name="uploadPicture">Register</button>
					            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				            </div>
			            </form>
		            </div><!-- /.modal-content -->
	            </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
<?
	}
?>