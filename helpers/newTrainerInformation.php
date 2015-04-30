<form id="trainerForm" class="form-horizontal hidden"  method="POST" action="" onsubmit="return checkInputsTrainer();">
	<fieldset>
		<div class="form-group">
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerFirstName" class="required-label">First name</label>
                         <input type="text" class="form-control requiredTrainer" id="newTrainerFirstName" name="newFirstName" placeholder="First name">
                    </div>
               </div>
               
               <div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerLastName" class="required-label">Last name</label>
					<input type="text" class="form-control requiredTrainer" id="newTrainerLastName" name="newLastName" placeholder="Last name">
				</div>
			</div>
			
			 <div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerGender">Gender</label>
					<select class="form-control" id="newTrainerGender" name="newGender">
						<option value="" selected disabled>Gender</option>
						<option value="Female">Female</option>
						<option value="Male">Male</option>
					</select>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerEmail" class="required-label">Email</label>
                         <input type="email" class="form-control requiredTrainer" id="newTrainerEmail" name="newEmail" placeholder="Email">
                    </div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerPassword" class="required-label">Password</label>
					<input type="password" class="form-control requiredTrainer" id="newTrainerPassword" name="newPassword" placeholder="Password">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerConfirmPassword" class="required-label">Confirm password</label>
					<input type="password" class="form-control requiredTrainer" id="newTrainerConfirmPassword" name="newConfirmPassword" placeholder="Confirm password">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerAddress" class="required-label">Address</label>
					<input type="text" class="form-control requiredTrainer" id="newTrainerAddress" name="newAddress" placeholder="Address">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerCity" class="required-label">City</label>
					<input type="text" class="form-control requiredTrainer" id="newTrainerCity" name="newCity" placeholder="City">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerState" class="required-label">State</label>
					<select class="form-control requiredTrainer newState"  name="newState"></select>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerZip" class="required-label">Zip</label>
					<input type="text" class="form-control requiredTrainer" id="newTrainerZip" name="newZip" placeholder="Zip">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerPhone" class="required-label">Phone</label>
					<input type="text" class="form-control requiredTrainer" id="newTrainerPhoneNumber" name="newPhone" placeholder="Phone">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerRate">Rate</label>
					<div class="input-group col-sm-12">
						<span class="input-group-addon" id="basic-addon2" style="padding:6px 12px;">$</span>
						<input type="text" class="form-control" id="newTrainerRate" name="newRate" placeholder="Rate" aria-describedby="basic-addon2">
						<span class="input-group-addon" id="basic-addon2" style="padding:6px 12px;">/hour</span>
					</div>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newTrainerSpecialities">Specialities</label>
					<p for="newTrainerSpecialities" id="label-notbold"><small><i>*Hold </i><kbd>Ctrl</kbd><i> to select multiple specialities</i></small></p>
	                         <div>
	                               <select multiple class="form-control" name="newSpecialities[]" id="newTrainerSpecialities">
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
					<label for="newTrainerClassesOffered">Classes offered</label>
					<div>
						<select class="form-control" name="newClassesOffered" id="newTrainerClassesOffered">
							<option value="" selected disabled>Classes offered</option>
							<option value="0">No</option>
							<option value="1">Yes</option>
						</select>
					</div>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
                              <label for="newTrainerDaysAvailability">Days of availability</label>
                              <p for="newTrainerDaysAvailability" id="label-notbold"><small><i>*Hold </i><kbd>Ctrl</kbd><i> to select multiple days</i></small></p>
                              <div>
	                          <select multiple class="form-control" id="newTrainerDaysAvailability" name="newDaysAvailability[]">
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
                         <label for="newTrainerHoursAvailability">Hours of availability</label>
	                         <div id="newTrainerHoursAvailability">
	                              <div class="input-group col-sm-5" style="float:left;">
							<input type="text" class="form-control" id="newTrainerAvailabilityFrom"  name="newAvailabilityFrom" placeholder="From" aria-describedby="basic-addon2">
							<span class="input-group-addon" id="basic-addon2" style="padding:6px 8px;">AM</span>
						</div>
						<div class="input-group col-sm-2 text-center" style="float:left;font-size: 22px;">
							<p> - </p>
						</div>
						<div class="input-group col-sm-5" style="float:left;">
							<input type="text" class="form-control" id="newTrainerAvailabilityTo" name="newAvailabilityTo" placeholder="To" aria-describedby="basic-addon2">
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
	function checkInputsTrainer() {
		var submitOk = true;
		
		$('.requiredTrainer').each(function() {
			if ($(this).val() == "") {
				alert("Fields marked with an asterisk (*) are required. Please enter information and try again.");
				submitOk = false;
				return false;
			}			
		});
		
		if (submitOk == true) {
			var zip = $('#newTrainerZip').val();
			var phone = $('#newTrainerPhoneNumber').val();
			var rate = $('#newTrainerRate').val();
			var fromTime = $('#newTrainerAvailabilityFrom').val();
			var toTime = $('#newTrainerAvailabilityTo').val();
			
			var password = $('#newTrainerPassword').val();
			var passwordConfirm = $('#newTrainerConfirmPassword').val();
			
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
				alert("Hours of availability fields must be numbers. Please fix and try again.");
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