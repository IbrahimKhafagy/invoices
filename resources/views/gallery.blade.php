@extends('layouts.master')
@section('css')
<!-- Internal Gallery css -->
<link href="{{URL::asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Page</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Gallery</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">



					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- Gallery -->
				<div class="demo-gallery">
					<ul id="lightgallery" class="list-unstyled row row-sm pr-0">
						<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/1.jpg')}}" data-src="{{URL::asset('assets/img/photos/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4>" >
							<a href="">
								<img class="img-responsive" src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="Thumb-1">
							</a>
						</li>
						<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/2.jpg')}}" data-src="{{URL::asset('assets/img/photos/2.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4>" >
							<a href="">
								<img class="img-responsive" src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="Thumb-1">
							</a>
						</li>
						<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/3.jpg')}}" data-src="{{URL::asset('assets/img/photos/3.jpg')}}" data-sub-html="<h4>Gallery Image 3</h4>" >
							<a href="">
								<img class="img-responsive" src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="Thumb-1">
							</a>
						</li>
						<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/4.jpg')}}" data-src="{{URL::asset('assets/img/photos/4.jpg')}}" data-sub-html="<h4>Gallery Image 4</h4>" >
							<a href="">
								<img class="img-responsive" src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="Thumb-1">
							</a>
						</li>
						<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/5.jpg')}}" data-src="{{URL::asset('assets/img/photos/5.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4>" >
							<a href="">
								<img class="img-responsive" src="{{URL::asset('assets/img/photos/5.jpg')}}" alt="Thumb-1">
							</a>
						</li>
						<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/6.jpg')}}" data-src="{{URL::asset('assets/img/photos/6.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4>" >
							<a href="">
								<img class="img-responsive" src="{{URL::asset('assets/img/photos/6.jpg')}}" alt="Thumb-1">
							</a>
						</li>
						<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/7.jpg')}}" data-src="{{URL::asset('assets/img/photos/7.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4>" >
							<a href="">
								<img class="img-responsive" src="{{URL::asset('assets/img/photos/7.jpg')}}" alt="Thumb-1">
							</a>
						</li>
						<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/8.jpg')}}" data-src="{{URL::asset('assets/img/photos/8.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4>" >
							<a href="">
								<img class="img-responsive" src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="Thumb-1">
							</a>
						</li>
						<li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('assets/img/photos/9.jpg')}}" data-src="{{URL::asset('assets/img/photos/9.jpg')}}" data-sub-html="<h4>Gallery Image 9</h4>" >
							<a href="">
								<img class="img-responsive" src="{{URL::asset('assets/img/photos/9.jpg')}}" alt="Thumb-1">
							</a>
						</li>
					</ul>
					<!-- /Gallery -->

					<!-- Pagination -->
					<div class="row mb-5">
						<div class="col-md-6 mt-1 d-none d-md-block">1 - 10 of 234 photos</div>
						<div class="col-md-6">
							<div class="float-left">
								<ul class="pagination search">
									<li class="page-item page-prev disabled">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item page-next">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</div>
						</div><!-- COL-END -->
					</div>
					<!-- Pagination -->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Gallery js -->
<script src="{{URL::asset('assets/plugins/gallery/lightgallery-all.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/jquery.mousewheel.min.js')}}"></script>
<script src="{{URL::asset('assets/js/gallery.js')}}"></script>
@endsection
