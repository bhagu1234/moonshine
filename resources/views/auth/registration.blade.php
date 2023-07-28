@include('includes.header')
<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">
					<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
								<img src="{{URL::to('/')}}/public/assets/images/login-images/register-cover.svg" class="img-fluid auth-img-cover-login" width="550" alt=""/>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5">
								<div class="">
									<div class="mb-3 text-center">
										<img src="{{URL::to('/')}}/public/assets/images/logo-icon.png" width="60" alt="" />
									</div>
									<div class="text-center mb-4">
										<h5 class="">Moonshine Admin</h5>
										<p class="mb-0">Please fill the below details to create your account</p>
									</div>
									<div class="form-body">
                                        <form class="row g-3" action="{{ route('register.custom') }}" method="POST">
                                            @csrf
											<div class="col-12">
												<label for="inputUsername" class="form-label">FIrst name</label>
												<input type="text" placeholder="First Name" class="form-control" name="first_name" required >
											</div>
											<div class="col-12">
												<label for="inputUsername" class="form-label">Last name</label>
												<input type="text" placeholder="Last Name" class="form-control" name="last_name" required >
											</div>
											<div class="col-12">
												<label class="form-label">Mobile</label>
												<input type="number" placeholder="Name" class="form-control" name="mobile" minLength='10' maxLength='15' required >
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <input type="text" placeholder="Email" class="form-control"  name="email" required >
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
                                                    <input type="password" placeholder="Password" id="admin_password2" class="form-control"  name="password" required>
												</div>
											</div>
											<div class="col-12">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Sign up</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Already have an account? <a href="authentication-signin.html">Sign in here</a></p>
												</div>
											</div>
										</form>
									</div>
									<div class="login-separater text-center mb-5"> <span>OR SIGN UP WITH EMAIL</span>
										<hr/>
									</div>
									<div class="list-inline contacts-social text-center">
										<a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i class="bx bxl-facebook"></i></a>
										<a href="javascript:;" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i class="bx bxl-twitter"></i></a>
										<a href="javascript:;" class="list-inline-item bg-google text-white border-0 rounded-3"><i class="bx bxl-google"></i></a>
										<a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i class="bx bxl-linkedin"></i></a>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{URL::to('/')}}/public/assets/js/jquery.min.js"></script>
	<script src="{{URL::to('/')}}/public/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{URL::to('/')}}/public/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{URL::to('/')}}/public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{URL::to('/')}}/public/assets/js/app.js"></script>
</body>

</html>