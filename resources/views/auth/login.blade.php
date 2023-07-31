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
                                 <img src="{{URL::to('/')}}/public/assets/images/login-images/login-cover.svg" class="img-fluid auth-img-cover-login" width="650" alt=""/>
							</div>
						</div>
						
					</div>
					<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5">
								<div class="">
									<div class="mb-3 text-center">
										<img src="{{URL::to('/')}}/public/assets/images/logo-icon.png" width="60" alt="">
									</div>
									<div class="text-center mb-4">
										<h5 class="">Moonshine Admin</h5>
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('login.custom') }}">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <input type="text" placeholder="Email" id="admin_email" class="form-control" name="email" required >
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="password" placeholder="Password" id="admin_password" class="form-control" name="password" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember"> Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-3">
												<div class="d-grid ">
													<button type="submit" class="btn btn-primary">Login</button>
												</div>
											</div>
										
											<div class="col-12">
												<div class="text-center">
													<p class="mb-0">Don't have an account yet?  <a class="nav-link" href="{{ route('register-user') }}">Sign up here</a>
													</p>
												</div>
											</div>
										</form>
									</div>
									
									<div class="login-separater text-center mb-5"> <span>OR SIGN IN WITH</span>
										<hr>
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
	<script src="{{URL::to('/')}}/public/assets/js/bootstrap.bundle.min.js"></script>
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