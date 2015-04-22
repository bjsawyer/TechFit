<? function renderUserForm() { ?>
		<form id="userForm" class="form-horizontal"  method="POST" action="">
			<h4>Sign up as a <b>USER</b></h4>
			<fieldset>
				<div class="form-group">
					<div class="row row-centered row-padding">
						<div class="col-sm-6 col-centered">
                            <input type="text" class="form-control" id="newFirstName" name="newFirstName" placeholder="First name">
                        </div>
                    </div>
                    <div class="row row-centered row-padding">
						<div class="col-sm-6 col-centered">
							<input type="text" class="form-control" id="newLastName" name="newLastName" placeholder="Last name">
						</div>
					</div>
					<div class="row row-centered row-padding">
						<div class="col-sm-6 col-centered">
		                    <input type="email" class="form-control" id="newEmail" name="newEmail" placeholder="Email">
		                </div>
					</div>
					<div class="row row-centered row-padding">
						<div class="col-sm-6 col-centered">
							<input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Password">
						</div>
					</div>
					<div class="row row-centered row-padding">
						<div class="col-sm-6 col-centered">
							<input type="text" class="form-control" id="newAddress" name="newAddress" placeholder="Address">
						</div>
					</div>
					<div class="row row-centered row-padding">
						<div class="col-sm-6 col-centered">
							<input type="text" class="form-control" id="newCity" name="newCity" placeholder="City">
						</div>
					</div>
					<div class="row row-centered row-padding">
						<div class="col-sm-6 col-centered">
							<select class="form-control" id="newState" name="newState"></select>
						</div>
					</div>
					<div class="row row-centered row-padding">
						<div class="col-sm-6 col-centered">
							<input type="text" class="form-control" id="newZip" name="newZip" placeholder="Zip">
						</div>
					</div>
					<div class="row row-centered row-padding">
						<div class="col-sm-6 col-centered">
							<input type="text" class="form-control" id="newPhone" name="newPhone" placeholder="Phone">
						</div>
					</div>
					<div class="row row-centered row-padding">
						<div class="col-sm-6 col-centered">
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
<? } ?>