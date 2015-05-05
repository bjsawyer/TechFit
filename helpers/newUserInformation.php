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
					<select class="form-control required newState" name="newState">
						<option selected disabled value="">State</option>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
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