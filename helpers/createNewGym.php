<form id="gymForm" class="form-horizontal hidden"  method="POST" action="">
	<fieldset>
		<div class="form-group">
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGymName">Gym name</label>
                         <input type="text" class="form-control" id="newGymName" name="newGymName" placeholder="Gym name">
                    </div>
               </div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newEmail">Email</label>
                         <input type="email" class="form-control" id="newEmail" name="newEmail" placeholder="Email">
                    </div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newPassword">Password</label>
					<input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Password">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newConfirmPassword">Confirm password</label>
					<input type="password" class="form-control" id="newConfirmPassword" name="newConfirmPassword" placeholder="Confirm password">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newAddress">Address</label>
					<input type="text" class="form-control" id="newAddress" name="newAddress" placeholder="Address">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newCity">City</label>
					<input type="text" class="form-control" id="newCity" name="newCity" placeholder="City">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newState">State</label>
					<select class="form-control newState"  name="newState"></select>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newZip">Zip</label>
					<input type="text" class="form-control" id="newZip" name="newZip" placeholder="Zip">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newPhone">Phone</label>
					<input type="text" class="form-control" id="newPhoneNumber" name="newPhone" placeholder="Phone">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newContactFirstName">Contact first name</label>
                         <input type="text" class="form-control" id="newContactFirstName" name="newContactFirstName" placeholder="Contact first name">
                    </div>
               </div>
               
               <div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newContactLastName">Contact last name</label>
					<input type="text" class="form-control" id="newContactLastName" name="newContactLastName" placeholder="Contact last name">
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newRate">Rate</label>
					<div class="input-group col-sm-12">
						<span class="input-group-addon" id="basic-addon2" style="padding:6px 12px;">$</span>
						<input type="text" class="form-control" id="newRate" placeholder="Rate" aria-describedby="basic-addon2">
						<span class="input-group-addon" id="basic-addon2" style="padding:6px 12px;">/month</span>
					</div>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newAmenities">Amenities</label>
					<p for="newAmenities" id="label-notbold"><small><i>*Hold </i><kbd>Ctrl</kbd><i> to select multiple amenities</i></small></p>
                          <div>
                               <select multiple class="form-control" id="newAmenities">
							<option value="Basketball Court">Basketball</option>
							<option value="Pool">Pool</option>
							<option value="Sauna">Sauna</option>
							<option value="Tanning">Tanning</option>
						</select>            
					</div>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newClassesOffered">Classes offered</label>
					<div class="input-group col-sm-12">
						<input type="number" class="form-control" id="newClassesOffered" placeholder="Classes offered">
					</div>
				</div>
			</div>
			
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
                    <label for="newDaysOperation">Days of operation</label>
                    <p for="newDaysOperation" id="label-notbold"><small><i>*Hold </i><kbd>Ctrl</kbd><i> to select multiple days</i></small></p>
                     <div>
                          <select multiple class="form-control" id="newDaysOperation">
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
                         <label for="newHoursOperation">Hours of operation</label>
                         <div id="newHoursOperation">
                              <div class="input-group col-sm-5" style="float:left;">
							<input type="text" class="form-control" id="newOperationOpen" placeholder="Open" aria-describedby="basic-addon2">
							<span class="input-group-addon" id="basic-addon2" style="padding:6px 8px;">AM</span>
						</div>
						<div class="input-group col-sm-2 text-center" style="float:left;font-size: 22px;">
							<p> - </p>
						</div>
						<div class="input-group col-sm-5" style="float:left;">
							<input type="text" class="form-control" id="newOperationClose" placeholder="Close" aria-describedby="basic-addon2">
							<span class="input-group-addon" id="basic-addon2" style="padding:6px 8px;">PM</span>
						</div>
					</div>
                    </div>
               </div>
          </div>
			
		<div class="row row-padding">
		</div>
		
		<div class="row row-button">
			<button type="submit" name="newGymSubmit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Create</button>
		</div>
	</fieldset>
</form>