<form id="userForm" class="form-horizontal hidden"  method="POST" action="">
	<fieldset>
		<div class="form-group">
			<div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newFirstName">First name</label>
                              <input type="text" class="form-control" id="newFirstName" name="newFirstName" placeholder="First name">
                      </div>
                  </div>
                  
                  <div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newLastName">Last name</label>
					<input type="text" class="form-control" id="newLastName" name="newLastName" placeholder="Last name">
				</div>
			</div>
			
			 <div class="row row-centered row-padding">
				<div class="col-sm-6 col-centered">
					<label for="newGender">Gender</label>
					<input type="text" class="form-control" id="newGender" name="newGender" placeholder="Gender">
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
					<select class="form-control newState" name="newState"></select>
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
					<input type="text" class="form-control" id="newPhoneNumber" name="newPhoneNumber" placeholder="Phone">
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