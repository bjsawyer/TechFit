<form id="userForm" class="form-horizontal hidden"  method="POST" action="" onsubmit="return checkInputsUser();">
	<fieldset>
		<div class="form-group">
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newUserFirstName" class="required-label">First name</label>
                              <input type="text" class="form-control requiredUser" id="newUserFirstName" name="newFirstName" placeholder="First name">
                      </div>
                  </div>
                  
                  <div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newUserLastName" class="required-label">Last name</label>
					<input type="text" class="form-control requiredUser" id="newUserLastName" name="newLastName" placeholder="Last name">
				</div>
			</div>
			
			 <div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newUserGender">Gender</label>
					<select class="form-control" id="newUserGender" name="newGender">
						<option value="" selected disabled>Gender</option>
						<option value="Female">Female</option>
						<option value="Male">Male</option>
					</select>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newUserEmail" class="required-label">Email</label>
                              <input type="email" class="form-control requiredUser" id="newUserEmail" name="newEmail" placeholder="Email">
                        </div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newUserPassword" class="required-label">Password</label>
					<input type="password" class="form-control requiredUser" id="newUserPassword" name="newPassword" placeholder="Password">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newUserConfirmPassword" class="required-label">Confirm password</label>
					<input type="password" class="form-control requiredUser" id="newUserConfirmPassword" name="newConfirmPassword" placeholder="Confirm password">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newUserAddress" class="required-label">Address</label>
					<input type="text" class="form-control requiredUser" id="newUserAddress" name="newAddress" placeholder="Address">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newUserCity" class="required-label">City</label>
					<input type="text" class="form-control requiredUser" id="newUserCity" name="newCity" placeholder="City">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newUserState" class="required-label">State</label>
					<select class="form-control required newState" name="newState"></select>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newUserZip" class="required-label">Zip</label>
					<input type="text" class="form-control requiredUser" id="newUserZip" name="newZip" placeholder="Zip">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newUserPhone" class="required-label">Phone</label>
					<input type="text" class="form-control requiredUser" id="newUserPhoneNumber" name="newPhone" placeholder="Phone">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newUserSearchingFor">Searching for</label>
					<select class="form-control" id="newUserSearchingFor" name="newSearchingFor">
						<option value="" selected disabled>Searching for</option>
						<option value="Trainer">Trainer</option>
						<option value="Gym">Gym</option>
					</select>
				</div>
			</div>
			
			<div class="row row-padding">
			</div>
			
			<div class="row row-button">
				<button type="submit" name="newUserSubmit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>   Create</button>
			</div>
		</div>
	</fieldset>
</form>
<script>	
	// data validation
	function checkInputsUser() {
		var submitOk = true;
		
		$('.requiredUser').each(function() {
			if ($(this).val() == "") {
				alert("Fields marked with an asterisk (*) are required. Please enter information and try again.");
				submitOk = false;
				return false;
			}			
		});
		
		if (submitOk == true) {
			var zip = $('#newUserZip').val();
			var phone = $('#newUserPhoneNumber').val();
						
			var password = $('#newUserPassword').val();
			var passwordConfirm = $('#newUserConfirmPassword').val();
			
			if (isNaN(zip)) {
				alert("Zip code field must be a number. Please fix and try again.");
				submitOk = false;
			}
			else if (isNaN(phone)) {
				alert("Phone field must be a number. Please fix and try again.");
				submitOk = false;
			}
			else if (isNaN(rate)) {
				alert("Rate field must be a number. Please fix and try again.");
				submitOk = false;
			}
			else if (password != passwordConfirm) {
				alert("Passwords do not match. Please re-enter password password fields and try again.");
				submitOk = false;
			}
		}
		
		return submitOk;
	};
</script>