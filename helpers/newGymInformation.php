<form id="gymForm" class="form-horizontal hidden"  method="POST" action="" onsubmit="return checkInputsGym();">
	<fieldset>
		<div class="form-group">
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymName" class="required-label">Gym name</label>
                         <input type="text" class="form-control requiredGym" id="newGymName" name="newGymName" placeholder="Gym name">
                    </div>
               </div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymEmail" class="required-label">Email</label>
                         <input type="email" class="form-control requiredGym" id="newGymEmail" name="newEmail" placeholder="Email">
                    </div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymPassword" class="required-label">Password</label>
					<input type="password" class="form-control requiredGym" id="newGymPassword" name="newPassword" placeholder="Password">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymConfirmPassword" class="required-label">Confirm password</label>
					<input type="password" class="form-control requiredGym" id="newGymConfirmPassword" name="newConfirmPassword" placeholder="Confirm password">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymAddress" class="required-label">Address</label>
					<input type="text" class="form-control requiredGym" id="newGymAddress" name="newAddress" placeholder="Address">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymCity" class="required-label">City</label>
					<input type="text" class="form-control requiredGym" id="newGymCity" name="newCity" placeholder="City">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymState" class="required-label">State</label>
					<select class="form-control required newState"  name="newState">
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
					<label for="newGymZip" class="required-label">Zip</label>
					<input type="text" class="form-control requiredGym" id="newGymZip" name="newZip" placeholder="Zip">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymPhone" class="required-label">Phone</label>
					<input type="text" class="form-control requiredGym" id="newGymPhoneNumber" name="newPhone" placeholder="Phone">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymContactFirstName" class="required-label">Contact first name</label>
                         <input type="text" class="form-control requiredGym" id="newGymContactFirstName" name="newContactFirstName" placeholder="Contact first name">
                    </div>
               </div>
               
               <div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymContactLastName" class="required-label">Contact last name</label>
					<input type="text" class="form-control requiredGym" id="newGymContactLastName" name="newContactLastName" placeholder="Contact last name">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymRate">Rate</label>
					<div class="input-group col-sm-12">
						<span class="input-group-addon" id="basic-addon2" style="padding:6px 12px;">$</span>
						<input type="text" class="form-control" id="newGymRate" name="newRate" placeholder="Rate" aria-describedby="basic-addon2">
						<span class="input-group-addon" id="basic-addon2" style="padding:6px 12px;">/month</span>
					</div>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymAmenities">Amenities</label>
					<p for="newGymAmenities" id="label-notbold"><small><i>*Hold </i><kbd>Ctrl</kbd><i> to select multiple amenities</i></small></p>
                          <div>
                               <select multiple class="form-control" id="newGymAmenities" name="newAmenities[]">
							<option value="Basketball Court">Basketball</option>
							<option value="Pool">Pool</option>
							<option value="Sauna">Sauna</option>
							<option value="Tanning">Tanning</option>
							<option value="Track">Track</option>
						</select>            
					</div>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymClassesOffered">Classes offered</label>
					<div>
						<select class="form-control" id="newGymClassesOffered">
							<option value="" selected disabled>Classes offered</option>
							<option value="0">No</option>
							<option value="1">Yes</option>
						</select>
					</div>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
                    <label for="newGymDaysOperation">Days of operation</label>
                    <p for="newGymDaysOperation" id="label-notbold"><small><i>*Hold </i><kbd>Ctrl</kbd><i> to select multiple days</i></small></p>
                     <div>
                          <select multiple class="form-control" id="newGymDaysOperation" name="newDaysOperation[]">
						<option value="Sunday">Sunday</option>
						<option value="Monday">Monday</option>
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
						<option value="Friday">Friday</option>
						<option value="Saturday">Saturday</option>
					</select>            
				</div>
              </div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
                         <label for="newGymHoursOperation">Hours of operation</label>
                         <div id="newGymHoursOperation">
                              <div class="input-group col-sm-5" style="float:left;">
							<input type="text" class="form-control" id="newGymOperationOpen" name="newOperationOpen" placeholder="Open" aria-describedby="basic-addon2">
							<span class="input-group-addon" id="basic-addon2" style="padding:6px 8px;">AM</span>
						</div>
						<div class="input-group col-sm-2 text-center" style="float:left;font-size: 22px;">
							<p> - </p>
						</div>
						<div class="input-group col-sm-5" style="float:left;">
							<input type="text" class="form-control" id="newGymOperationClose" name="newOperationClose" placeholder="Close" aria-describedby="basic-addon2">
							<span class="input-group-addon" id="basic-addon2" style="padding:6px 8px;">PM</span>
						</div>
					</div>
                    </div>
               </div>
          </div>
			
		<div class="row row-padding">
		</div>
		
		<div class="row row-button">
			<button type="submit" id="newGymSubmit" name="newGymSubmit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Create</button>
		</div>
	</fieldset>
</form>
<script>	
	// data validation
	function checkInputsGym() {
		var submitOk = true;
		
		$('.requiredGym').each(function() {
			if ($(this).val() == "") {
				alert("Fields marked with an asterisk (*) are required. Please enter information and try again.");
				submitOk = false;
				return false;
			}			
		});
		
		if (submitOk == true) {
			var zip = $('#newGymZip').val();
			var phone = $('#newGymPhoneNumber').val();
			var rate = $('#newGymRate').val();
			var fromTime = $('#newGymOperationOpen').val();
			var toTime = $('#newGymOperationClose').val();
			
			var password = $('#newGymPassword').val();
			var passwordConfirm = $('#newGymConfirmPassword').val();
			
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
			else if (isNaN(fromTime) || isNaN(toTime)) {
				alert("Hours of operation fields must be numbers. Please fix and try again.");
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