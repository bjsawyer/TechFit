<? function renderTrainerForm() { ?>
		<form id="trainerForm" class="form-horizontal"  method="POST" action="index.php">
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
							<select class="form-control" id="newState" name="newState"></select>
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
                              <label for="newDaysOperation">Days of operation:</label>
                              <p for="newDaysOperation" id="label-notbold"><small><i>*Hold </i><kbd>Ctrl</kbd><i> to select multiple days</i></small></p>
                                <div>
                                    <select multiple class="form-control" id="newDaysOperation">
										<option>Sunday</option>
										<option>Monday</option>
										<option>Tuesday</option>
										<option>Wednesday</option>
										<option>Thursday</option>
										<option>Friday</option>
										<option>Saturday</option>
									</select>            
								</div>
							</div>
                        </div>
					
					<div class="row row-centered row-padding">
						<div class="col-sm-6 col-centered">
                                   <label for="newHoursOperation">Hours of operation:</label>
	                              <div>
		                              <div class="input-group col-sm-5" style="float:left;">
									<input type="text" class="form-control" placeholder="Open" aria-describedby="basic-addon2">
									<span class="input-group-addon" id="basic-addon2" style="padding:6px 7px;">AM</span>
								</div>
								<div class="input-group col-sm-2 text-center" style="float:left;font-size: 22px;">
									<p> - </p>
								</div>
								<div class="input-group col-sm-5" style="float:left;">
									<input type="text" class="form-control" placeholder="Close" aria-describedby="basic-addon2">
									<span class="input-group-addon" id="basic-addon2" style="padding:6px 7px;">PM</span>
								</div>
							</div>
	                         </div>
                         </div>
                 </div>
					
					<div class="row row-padding">
					</div>
					<div class="row row-button">
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>   Create</button>
					</div>
				</div>
			</fieldset>
		</form>
<? } ?>