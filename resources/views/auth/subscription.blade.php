@include('includes.header')
<body>
	<!--wrapper-->
	<div class="wrapper">
		<div class="page-wrapper">
			<!-- <div class="page-content"> -->
               <center> <h6 class="mb-0 text-uppercase">Select your plan</h6></center>
                <hr/>
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                    <div class="col">
                        <div class="card radius-15 bg-primary">
                            <div class="card-body text-center">
                                <div class="p-4 radius-15">
                                    <img src="{{URL::to('/')}}/public/assets/images/gallery/27.png" width="110" height="110" class="rounded-circle shadow p-1 bg-white" alt="">
                                    <h5 class="mb-0 mt-5 text-white">Subscribe</h5>
                                    <p class="mb-3 text-white">For 1 month/ $100</p>
                                    <div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-white radius-15">Buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-15 bg-warning">
                            <div class="card-body text-center">
                                <div class="p-4 radius-15">
                                    <img src="{{URL::to('/')}}/public/assets/images/gallery/27.png" width="110" height="110" class="rounded-circle shadow p-1 bg-white" alt="">
                                    <h5 class="mb-0 mt-5 text-dark">Subscribe</h5>
                                    <p class="mb-3 text-dark">For 2 month/$399</p>
                                    <div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-white radius-15">Buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-15 bg-info">
                            <div class="card-body text-center">
                                <div class="p-4 radius-15">
                                    <img src="{{URL::to('/')}}/public/assets/images/gallery/27.png" width="110" height="110" class="rounded-circle shadow p-1 bg-white" alt="">
                                    <h5 class="mb-0 mt-5 text-dark">Subsribe</h5>
                                    <p class="mb-3 text-dark"> For 6 month/$799</p>
                                    <div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-white radius-15">Buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-15 bg-info">
                            <div class="card-body text-center">
                                <div class="p-4 radius-15">
                                    <img src="{{URL::to('/')}}/public/assets/images/gallery/27.png" width="110" height="110" class="rounded-circle shadow p-1 bg-white" alt="">
                                    <h5 class="mb-0 mt-5 text-dark">Subsribe</h5>
                                    <p class="mb-3 text-dark"> For 1 yesr/$999</p>
                                    <div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item border-0"><i class="bx bxl-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-white radius-15">Buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('includes.footer')
            <!-- </div> -->
        </div>
	</div>
	<!--end wrapper-->
	@include('includes.footer_script')
</body>

</html>