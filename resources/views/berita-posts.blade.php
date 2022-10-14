@extends('header')
@section('main')



			<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">



								@if ( app()->getLocale() == 'id')

									<h1 class="text-dark font-weight-bold text-8">Berita</h1>
									<span class="sub-title text-dark">Cek Berita Terbaru Kami!</span>


								@else

									<h1 class="text-dark font-weight-bold text-8">News</h1>
									<span class="sub-title text-dark">Check out our Latest News!</span>

								@endif


							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									@if ( app()->getLocale() == 'id')

										<li><a href="/">Beranda</a></li>
										<li class="active">Berita</li>


									@else

										<li><a href="/">Home</a></li>
										<li class="active">News</li>

									@endif
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">

					<div class="row">
						<div class="col-lg-3">

							<aside class="sidebar">



								@if ( app()->getLocale() == 'id')

									<h5 class="font-weight-bold pt-4">Kategori</h5>


								@else
									<h5 class="font-weight-bold pt-4">Category</h5>


								@endif

								<ul class="nav nav-list flex-column mb-5">



										<li class="nav-item"><a class="nav-link" href="#">All News</a></li>



									@foreach ( $kat as $kategori)


										<li class="nav-item"><a class="nav-link" href="/katberita/{{ $kategori->id }}">{{ $kategori->name }}</a></li>




									@endforeach
								</ul>









										<br> <br> <img src="{{ Voyager::image($iklan->Gambar) }}  " class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />






							</aside>



						</div>
						<div class="col-lg-9">
							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post border-0 m-0 p-0">
									<div class="post-image ml-0">


											@if ($post->image == null)
												<img src="/img/blog/wide/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />

										@else
												<img src=" {{ Voyager::image($post->image) }}  " class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
											@endif
									</div>

									<div class="post-date ml-0">


										<span class="day">{{ $post->created_at->format('d') }}</span>
										<span class="month">{{ $post->created_at->format('M') }}</span>
									</div>

									<div class="post-content ml-0">

										<h2 class="font-weight-bold"><a href="#">{{ $post->title }}</a></h2>

										<div class="post-meta">

											<span><i class="far fa-folder"></i> {{  $post->category_id }} </span>

										</div>

										{!! $post->body !!}

										<div class="post-block mt-5 post-share">
											<h4 class="mb-3">Share this Post</h4>

											<!-- AddThis Button BEGIN -->
											<div class="addthis_toolbox addthis_default_style ">
												<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
												<a class="addthis_button_tweet"></a>
												<a class="addthis_button_pinterest_pinit"></a>
												<a class="addthis_counter addthis_pill_style"></a>
											</div>
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
											<!-- AddThis Button END -->

										</div>






								</article>

							</div>
						</div>
					</div>

				</div>

			</div>




@endsection
