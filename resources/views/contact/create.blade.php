<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="createcontactModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">Contact </h5>
                    <button type="button" class="button-24 close_openCreatecontactModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add Contact</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" novalidate>
                                    <h5>MAIN DETAILS:</h5>
                                        <input id="contactCustomer" type="hidden">
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label">Salute</label>
                                        <select id="contactSalute"  class="form-select single-select-clear-field">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="contactFirstName" placeholder="first name" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Minddle Name</label>
                                        <input type="text" class="form-control" id="contactMinddleName" placeholder="Minddle name" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="contactLastName" placeholder="Last name" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">POC</label>
                                        <select id="contactPOC"  class="form-select single-select-clear-field">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Status</label>
                                        <select id="contactStatus"  class="form-select single-select-clear-field">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Section</label>
                                        <select id="contactSection"  class="form-select single-select-clear-field">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Designation</label>
                                        <input type="text" class="form-control" id="contactDesignation" placeholder="Designation" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Sitting Office</label>
                                        <input type="text" class="form-control" id="contactSittingOffice" placeholder="Sitting Office" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Kick Bite</label>
                                        <input type="text" class="form-control" id="contactKickback" placeholder="Kick bite" >
									</div>
                                    <div class="col-md-8">
										<label for="bsValidation13" class="form-label">Official BG</label>
										<textarea class="form-control" id="contactOfficialBg" placeholder="Official BG" rows="3" required></textarea>
									</div>
                                    <h5>CONTACT DETAILS & OTHER DETAILS:</h5>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Mobile Phone</label>
                                        <input type="text" class="form-control" id="contactMobilePhone" placeholder="Mobile Phone" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Landline Office</label>
                                        <input type="text" class="form-control" id="contactLandlineOffice" placeholder="Landline Office" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Email 1</label>
                                        <input type="email" class="form-control" id="contactEmail1" placeholder="Email 1" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Email 2</label>
                                        <input type="email" class="form-control" id="contactEmail2" placeholder="Email 2" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Personal Email</label>
                                        <input type="email" class="form-control" id="contactPersonalEmail" placeholder="Personal Email" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Skype or Others</label>
                                        <input type="text" class="form-control" id="contactSkypeOthers" placeholder="Skype or Others" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">DOB</label>
                                        <input type="date" class="form-control" id="contactDOB" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Age</label>
                                        <input type="text" class="form-control" id="contactAge" placeholder="Age" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Nationality</label>
                                        <select id="contactNationality"  class="form-select single-select-clear-field">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Mother Tongue</label>
                                        <select id="contactMotherTongue"  class="form-select single-select-clear-field">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Religion</label>
                                        <select id="contactReligion"  class="form-select single-select-clear-field">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Gender</label>
                                        <select id="contactGender"  class="form-select single-select-clear-field">
                                        <option selected disabled value>...</option>
                                        <option value='male'>Male</option>
                                        <option value='female'>Female</option>
                                        <option value='other'>Other</option>
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Living in</label>
                                        <input type="text" class="form-control" id="contactLivingin" placeholder="Living in" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label"> Character Pecularities</label>
                                        <input type="text" class="form-control" id="contactCharacterPecularities" placeholder=" Character Pecularities" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation13" class="form-label">Personal BG</label>
										<textarea class="form-control" id="contactPersonalBg" placeholder="Personal BG" rows="3" required></textarea>
									</div>
                                    <h5>PASSPORT DETAILS:</h5>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Passport Details</label>
                                        <input type="text" class="form-control" id="contactPassportDetails" placeholder="Passport Details" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Passport Number</label>
                                        <input type="text" class="form-control" id="contactPassportNumber" placeholder="Passport Number" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Passport Issued At</label>
                                        <input type="text" class="form-control" id="contactPassportIssuedAt" placeholder="Passport Issued At" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Passport Issued Date</label>
                                        <input type="date" class="form-control" id="contactPassportIssuedDate" placeholder="Passport Issued Date" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Passport Expiry Date</label>
                                        <input type="date" class="form-control" id="contactPassportExpiryDate" placeholder="Passport Expiry Date" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label"> Visa Details</label>
                                        <input type="text" class="form-control" id="contactVisaDetails" placeholder="Visa Details" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label"> Date Joined</label>
                                        <input type="date" class="form-control" id="contactDateJoined" placeholder="Date Joined" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label"> Date Left</label>
                                        <input type="date" class="form-control" id="contactDateLeft" placeholder="Date Left" >
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="button" class="btn btn-primary px-4" id="storecontact">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_openCreatecontactModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>