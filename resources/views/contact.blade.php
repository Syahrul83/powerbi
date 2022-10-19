@extends('header')
@section('main')


			<div role="main" class="main">

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div  class="google-map mt-0" style="height: 500px;">


					{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15932.381102355599!2d117.5680815!3d3.3266344!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf222fd1284342d5!2sJuwata%20Airport!5e0!3m2!1sen!2sid!4v1599479465336!5m2!1sen!2sid" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}


                <iframe title="ujicoba" width="1140" height="541.25" src="{!! setting('site.PETA') !!}" frameborder="0" allowFullScreen="true"></iframe>
                </div>

				<div class="container">

					<div class="row py-4">
						<div class="col-lg-6">

							<div class="overflow-hidden mb-1">
								<h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold"> {!!   app()->getLocale() == 'id'? 'Kontak</strong> Kami' : 'Contact</strong> Us' !!}  </h2>
							</div>
							<div class="overflow-hidden mb-4 pb-3">
								<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400"> {!!   app()->getLocale() == 'id'? 'Silahkan Menghubungi kami dan kami siap membantu anda' : 'Please Contact us and we are ready to help you!' !!}</p>


							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">

								<ul class="list list-icons list-icons-style-2 mt-2">
									<li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> {{ setting('site.Alamat') }}</li>
									<li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> {{setting('site.Telepon')}}</li>
									<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:{{setting('site.Email')}}">{{setting('site.Email')}}</a></li>
								</ul>


								<span class="thumb-info-social-icons mb-4">
											<a target="_blank" href="{{ setting('site.Facebook') }}"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="{{ setting('site.Twitter') }}"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="{{ setting('site.Youtube') }}"><i class="fab fa-youtube"></i><span>Linkedin</span></a>
										</span>
							</div>
							</div>

						</div>
						<div class="col-lg-6">



    </div>

</div>

</div>

</div>


@endsection
