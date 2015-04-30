<form id="userForm" class="form-horizontal hidden"  method="POST" action="" onsubmit="return checkInputs();">
	<fieldset>
		<div class="form-group">
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newFirstName" class="required-label">First name</label>
                              <input type="text" class="form-control required" id="newFirstName" name="newFirstName" placeholder="First name">
                      </div>
                  </div>
                  
                  <div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newLastName" class="required-label">Last name</label>
					<input type="text" class="form-control required" id="newLastName" name="newLastName" placeholder="Last name">
				</div>
			</div>
			
			 <div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGender">Gender</label>
					<select class="form-control" id="newGender" name="newGender">
						<option value="" selected disabled>Gender</option>
						<option value="Female">Female</option>
						<option value="Male">Male</option>
					</select>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newEmail" class="required-label">Email</label>
                              <input type="email" class="form-control required" id="newEmail" name="newEmail" placeholder="Email">
                        </div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newPassword" class="required-label">Password</label>
					<input type="password" class="form-control required" id="newPassword" name="newPassword" placeholder="Password">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newConfirmPassword" class="required-label">Confirm password</label>
					<input type="password" class="form-control required" id="newConfirmPassword" name="newConfirmPassword" placeholder="Confirm password">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newAddress" class="required-label">Address</label>
					<input type="text" class="form-control required" id="newAddress" name="newAddress" placeholder="Address">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newCity" class="required-label">City</label>
					<input type="text" class="form-control required" id="newCity" name="newCity" placeholder="City">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newState" class="required-label">State</label>
					<select class="form-control required newState" name="newState"></select>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newZip" class="required-label">Zip</label>
					<input type="text" class="form-control required" id="newZip" name="newZip" placeholder="Zip">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newPhone" class="required-label">Phone</label>
					<input type="text" class="form-control required" id="newPhoneNumber" name="newPhoneNumber" placeholder="Phone">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newSearchingFor">Searching for</label>
					<select class="form-control" id="newSearchingFor" name="newSearchingFor">
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
	function checkInputs() {
		var submitOk = true;
		
		$('.required').each(function() {
			if ($(this).val() == "") {
				alert("Fields marked with an asterisk (*) are required. Please enter information and try again.");
				submitOk = false;
				return false;
			}			
		});
		
		if (submitOk == true) {
			var password = $('#newPassword').val();
			var passwordConfirm = $('#newConfirmPassword').val();
			if (password != passwordConfirm) {
				alert("Passwords do not match. Please re-enter password password fields and try again.");
				submitOk = false;
			}
		}
		
		return submitOk;
	};
</script>