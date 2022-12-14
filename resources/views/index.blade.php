@extends('header')
@section('main')

			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 670px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>

							@foreach($slide_utama as $slide1 )
							<li data-transition="fade">
								<img src="{{ Voyager::image($slide1->gambar) }}"
									alt="{{ $slide1->Judul }}"
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="rev-slidebg">
							</li>

						@endforeach



						</ul>
					</div>
				</div>

				<div class="home-intro bg-primary" id="home-intro">
					<div class="container">

						<div class="row align-items-center">
							<div class="col-lg-8">


									<p>
                                        {!! setting('site.Welcome') !!}
										{{-- Welcome to the<span class="highlighted-word"> Power BI</span>

										<span>Check Services and the Latest Information About the Power BI.</span> --}}
									</p>




							</div>
							<div class="col-lg-4">
								<div class="get-started text-left text-lg-right">
									<a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a>

								</div>
							</div>
						</div>

					</div>
				</div>



				<!-- sementara -->
				<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
					<div class="mt-5">
						<div class="container">

							<div class="row">
								<div class="col-lg-12">
                                    <iframe title="ujicoba" width="100%" height="750"  src="{!! setting('site.POWERBI') !!}" frameborder="0" allowFullScreen="true"></iframe>
							</div>


							</div>

							</div>
							</div>
							</div>
				<!-- sementara -->



				<div class="container mb-5 pb-4">



					<hr class="solid my-5">

					<div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
					<div class="col-lg-6">

									<div class="recent-posts mb-5">
										<h2 class="font-weight-normal text-5 mb-4"><strong class="font-weight-extra-bold">Berita</strong> Terbaru</h2>
										<div class="owl-carousel owl-theme dots-title mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'autoplay': true, 'autoplayTimeout': 8000}">

											<div class="row">
												@foreach($berita as $posts)
												<div class="col-lg-6 mb-4 mb-lg-0">
													<article>
														<div class="row">
															<div class="col-auto pr-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">{{ $posts->created_at->format('d') }}</span>
																	<span class="month text-1">{{ $posts->created_at->format('M') }}</span>
																</div>
															</div>
															<div class="col pl-1">
																<h4 class="text-primary text-4"><a class="d-block" href="/berita-post/{{ $posts->id??null }}">	{!! $posts->title !!}
                                                                    </a></h4>
																@php
																$isi_berita = strip_tags($posts->excerpt??null); // membuat paragraf pada isi berita dan mengabaikan tag html
                                                                        $isi = substr($isi_berita,0,60); // ambil sebanyak 100 karakter
                                                                        $isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat

																@endphp
																<p class="pr-4 mb-0">{!! $isi !!}. </p>

																<a href="/berita-post/{{ $posts->id??null }}" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
															</div>
														</div>
													</article>
												</div>
												@endforeach

											</div>

											<div class="row">
												@foreach($berita2 as $posts)
													<div class="col-lg-6 mb-4 mb-lg-0">
														<article>
															<div class="row">
																<div class="col-auto pr-0">
																	<div class="date">
																		<span class="day font-weight-extra-bold">{{ $posts->created_at->format('d') }}</span>
																		<span class="month text-1">{{ $posts->created_at->format('M') }}</span>
																	</div>
																</div>
																<div class="col pl-1">
																	<h4 class="text-primary text-4"><a class="d-block" href="/berita-post/{{ $posts->id??null }}">	{!! $posts->title !!}
																		</a></h4>
																	@php
																		$isi_berita = strip_tags($posts->excerpt??null); // membuat paragraf pada isi berita dan mengabaikan tag html
                                                                        $isi = substr($isi_berita,0,60); // ambil sebanyak 100 karakter
                                                                        $isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat
																	@endphp
																	<p class="pr-4 mb-0">{!! $isi !!}. </p>

																	<a href="/berita-post/{{ $posts->id??null }}" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
																</div>
															</div>
														</article>
													</div>
												@endforeach

											</div>


										</div>
									</div>
								</div>


					</div>

          @if($iklan != null)

					<hr class="solid my-5">

					<div class="row text-center ">
						<div class="col">
							<a href="{{ $iklan->link_iklan }}">
					<img  src=" {{ Voyager::image($iklan->Gambar) }}  " class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
							</a>
					</div>
					</div>

				@endif

					<hr class="solid my-5">

					<div class="row text-center pt-4">
						<div class="col">
							<h2 class="word-rotator slide font-weight-bold text-8 mb-2">


										<span>Big Data </span>
										<span class="word-rotator-words bg-primary">
											<b class="is-visible">Welcome</b>
										</span>
										<span>to Power Bi</span>
									</h2>
									<h4 class="text-primary lead tall text-4">The best and professional service</h4>


						</div>
					</div>

					<div class="row text-center mt-5">
						<div class="owl-carousel owl-theme carousel-center-active-item" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">

							@foreach ($slide_kedua as $slide2)



							<div>
								<img class="img-fluid" src="{{ Voyager::image($slide2->gambar) }}" alt="{{ $slide2->judul  }}">
							</div>

							@endforeach
					</div>

				</div>

				<section class="section section-custom-map appear-animation" data-appear-animation="fadeInUpShorter">
                    <br><br><br><br><br><br><br><br><br><br>
					{{-- <section class="section section-default section-footer">
						<div class="container">
							<div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">

								<div class="col-lg-12">
									@if ( app()->getLocale() == 'id')

										<h2 class="font-weight-normal text-7">Web Link &<strong class="font-weight-extra-bold"> Mitra Kerja</strong></h2>
									  @else
									<h2 class="font-weight-normal text-7">Web Link &<strong class="font-weight-extra-bold"> Work Patner</strong></h2>
									@endif



						</div>


							</div>
						</div>
					</section> --}}
				</section>
			</div>


@endsection
