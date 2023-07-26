<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="updatecontactModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">Contact </h5>
                    <button type="button" class="button-24 close_open_update_contactModal" data-dismiss="modal">×</button>
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
                                        <input id="update_contactCustomer" type="hidden">
                                        <input id="contact_idUpdate" type="hidden">
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label">Salute</label>
                                        <select id="update_contactSalute"  class="form-select">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="update_contactFirstName" placeholder="first name" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Minddle Name</label>
                                        <input type="text" class="form-control" id="update_contactMinddleName" placeholder="Minddle name" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="update_contactLastName" placeholder="Last name" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">POC</label>
                                        <select id="update_contactPOC"  class="form-select">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Status</label>
                                        <select id="update_contactStatus"  class="form-select">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Section</label>
                                        <select id="update_contactSection"  class="form-select">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Designation</label>
                                        <input type="text" class="form-control" id="update_contactDesignation" placeholder="Designation" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Sitting Office</label>
                                        <input type="text" class="form-control" id="update_contactSittingOffice" placeholder="Sitting Office" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Kick Bite</label>
                                        <input type="text" class="form-control" id="update_contactKickback" placeholder="Kick Bite" >
									</div>
                                    <div class="col-md-8">
										<label for="bsValidation13" class="form-label">Official BG</label>
										<textarea class="form-control" id="update_contactOfficialBg" placeholder="Official BG" rows="3" required></textarea>
									</div>
                                    <h5>CONTACT DETAILS & OTHER DETAILS:</h5>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Mobile Phone</label>
                                        <input type="text" class="form-control" id="update_contactMobilePhone" placeholder="Mobile Phone" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Landline Office</label>
                                        <input type="text" class="form-control" id="update_contactLandlineOffice" placeholder="Landline Office" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Email 1</label>
                                        <input type="email" class="form-control" id="update_contactEmail1" placeholder="Email 1" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Email 2</label>
                                        <input type="email" class="form-control" id="update_contactEmail2" placeholder="Email 2" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Personal Email</label>
                                        <input type="email" class="form-control" id="update_contactPersonalEmail" placeholder="Personal Email" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Skype or Others</label>
                                        <input type="text" class="form-control" id="update_contactSkypeOthers" placeholder="Skype or Others" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">DOB</label>
                                        <input type="date" class="form-control" id="update_contactDOB" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Age</label>
                                        <input type="text" class="form-control" id="update_contactAge" placeholder="Age" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Nationality</label>
                                        <select id="update_contactNationality"  class="form-select">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Mother Tongue</label>
                                        <select id="update_contactMotherTongue"  class="form-select">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Religion</label>
                                        <select id="update_contactReligion"  class="form-select">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Gender</label>
                                        <select id="update_contactGender"  class="form-select">
                                        <option selected disabled value>...</option>
                                        <option value='male'>Male</option>
                                        <option value='female'>Female</option>
                                        <option value='other'>Other</option>
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Living in</label>
                                        <input type="text" class="form-control" id="update_contactLivingin" placeholder="Living in" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label"> Character Pecularities</label>
                                        <input type="text" class="form-control" id="update_contactCharacterPecularities" placeholder=" Character Pecularities" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation13" class="form-label">Personal BG</label>
										<textarea class="form-control" id="update_contactPersonalBg" placeholder="Personal BG" rows="3" required></textarea>
									</div>
                                    <h5>PASSPORT DETAILS:</h5>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Passport Details</label>
                                        <input type="text" class="form-control" id="update_contactPassportDetails" placeholder="Passport Details" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Passport Number</label>
                                        <input type="text" class="form-control" id="update_contactPassportNumber" placeholder="Passport Number" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Passport Issued At</label>
                                        <input type="text" class="form-control" id="update_contactPassportIssuedAt" placeholder="Passport Issued At" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Passport Issued Date</label>
                                        <input type="date" class="form-control" id="update_contactPassportIssuedDate" placeholder="Passport Issued Date" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Passport Expiry Date</label>
                                        <input type="date" class="form-control" id="update_contactPassportExpiryDate" placeholder="Passport Expiry Date" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label"> Visa Details</label>
                                        <input type="text" class="form-control" id="update_contactVisaDetails" placeholder="Visa Details" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label"> Date Joined</label>
                                        <input type="date" class="form-control" id="update_contactDateJoined" placeholder="Date Joined" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label"> Date Left</label>
                                        <input type="date" class="form-control" id="update_contactDateLeft" placeholder="Date Left" >
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="button" class="btn btn-primary px-4" id="updatcontact">Update</button>
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
                    <button type="button" class="button-57_alt button-58_alt close_open_update_contactModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>