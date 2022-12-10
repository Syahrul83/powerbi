@extends('header')
@section('main')



			<div role="main" class="main">

				<section class="page-header page-header-classic">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="/">Home</a></li>
									<li class="active">Pages</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col p-static">


							</div>
						</div>
					</div>
				</section>

				<div class="container py-2">

					<div class="row">

						<div class="col">

							<h2 class="font-weight-normal text-7 mb-2"><strong class="font-weight-extra-bold">{!! $hal->Judul !!}</strong></h2>
                            <br>
                            <iframe title="ujicoba" width="100%" height="750"  src="{!! $hal->web_link !!}" frameborder="0" allowFullScreen="true"></iframe>
                            <br>
                            {!! $hal->content !!}

						</div>

					</div>

				</div>

			</div>
@endsection
