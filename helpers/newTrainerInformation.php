<form id="trainerForm" class="form-horizontal hidden"  method="POST" action="" onsubmit="return checkInputs();">
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
					<select class="form-control required newState"  name="newState"></select>
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
					<input type="text" class="form-control required" id="newPhoneNumber" name="newPhone" placeholder="Phone">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newRate">Rate</label>
					<div class="input-group col-sm-12">
						<span class="input-group-addon" id="basic-addon2" style="padding:6px 12px;">$</span>
						<input type="text" class="form-control" id="newRate" name="newRate" placeholder="Rate" aria-describedby="basic-addon2">
						<span class="input-group-addon" id="basic-addon2" style="padding:6px 12px;">/hour</span>
					</div>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newSpecialities">Specialities</label>
					<p for="newSpecialities" id="label-notbold"><small><i>*Hold </i><kbd>Ctrl</kbd><i> to select multiple specialities</i></small></p>
	                         <div>
	                               <select multiple class="form-control" name="newSpecialities[]" id="newSpecialities">
							<option value="Balance">Balance</option>
							<option value="Core">Core</option>
							<option value="Endurance">Endurance</option>
							<option value="Flexibility">Flexibility</option>
							<option value="Rehabilitation">Rehabilitation</option>
							<option value="Strength">Strength</option>
							<option value="Water Aerobics">Water aerobics</option>
						</select>            
					</div>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newClassesOffered">Classes offered</label>
					<div>
						<select class="form-control" name="newClassesOffered" id="newClassesOffered">
							<option value="" selected disabled>Classes offered</option>
							<option value="0">No</option>
							<option value="1">Yes</option>
						</select>
					</div>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
                              <label for="newDaysAvailability">Days of availability</label>
                              <p for="newDaysAvailability" id="label-notbold"><small><i>*Hold </i><kbd>Ctrl</kbd><i> to select multiple days</i></small></p>
                              <div>
	                          <select multiple class="form-control" id="newDaysAvailability" name="newDaysAvailability[]">
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
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
                         <label for="newHoursAvailability">Hours of availability</label>
	                         <div id="newHoursAvailability">
	                              <div class="input-group col-sm-5" style="float:left;">
							<input type="text" class="form-control" id="newAvailabilityFrom"  name="newAvailabilityFrom" placeholder="From" aria-describedby="basic-addon2">
							<span class="input-group-addon" id="basic-addon2" style="padding:6px 8px;">AM</span>
						</div>
						<div class="input-group col-sm-2 text-center" style="float:left;font-size: 22px;">
							<p> - </p>
						</div>
						<div class="input-group col-sm-5" style="float:left;">
							<input type="text" class="form-control" id="newAvailabilityTo" name="newAvailabilityTo" placeholder="To" aria-describedby="basic-addon2">
							<span class="input-group-addon" id="basic-addon2" style="padding:6px 8px;">PM</span>
						</div>
					</div>
                    </div>
               </div>
          </div>
			
		<div class="row row-padding">
		</div>
		
		<div class="row row-button">
			<button type="submit"id="newTrainerSubmit" name="newTrainerSubmit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Create</button>
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