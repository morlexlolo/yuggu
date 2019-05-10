@extends('layouts.app')
@section('content')
@include('layouts.nav')
	<!-- Start inner page header -->
	<div class="innerheader-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><i class="fa fa-file-text"></i> Blog <span>page</span></h2>
					<ol class="breadcrumb">
						<li><a href="/"><i class="fa fa-home"></i> Home</a></li>
						<li class="active"><i class="fa fa-file-text"></i> Blog</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- End inner page header -->

	<div class="clearfix"></div>

	<!-- Start contain wrapp -->
	<div class="contain-wrapp padding-bot30">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-8">
                    @forelse ($articles as $post)
                    <!-- Start post 1 -->
					<article class="post">
						<div class="media-wrapper">
							<a href="{{ route('blog.show',$post->slug) }}"><img src="{{ $post->image }}" class="img-responsive" alt="" /></a>
							<ul class="meta-caption">
								<li><a href="{{ route('blog.cat',$post->cat->slug) }}"><i class="fa fa-bars"></i>{{ $post->cat->name }}</a></li>
								<li><a href="#"><i class="fa fa-calendar"></i>{{ $post->created_at->diffForHumans() }}</a></li>
								<li><a href="#"><i class="fa fa-user"></i>{{ $post->author->name }}</a></li>
							</ul>
						</div>

						<h4><a href="{{ route('blog.show',$post->slug) }}">{{ $post->title }}</a></h4>
						<p>
						{{ $post->excerpt }}
						</p>
						<p><a href="{{ route('blog.show',$post->slug) }}" class="btn btn-primary">Read more</a></p>
					</article>
					<!-- End post 1 -->
                    @empty
                    <!-- Start Alert -->
                    <div class="alert alert-info" role="alert" data-out="flipOutX">
                        <i class="fa fa-info"></i>
                        <h6 class="title">Info</h6>
                        <p>There is not post at them moment</p>
                    </div>
                <!-- End Alert -->
                    @endforelse


                    {{ $articles->links('vendor.pagination.default') }}
				</div>
				<div class="col-md-3 col-sm-4">
					<aside>
						<div class="widget">
							<h5 class="widget-head">Recent work</h5>
							<ul class="photostream">
								<li><a href="#"><img src="img/gallery/thumbs/thumb01.jpg" class="img-responsive" alt="" /></a></li>
								<li><a href="#"><img src="img/gallery/thumbs/thumb02.jpg" class="img-responsive" alt="" /></a></li>
								<li><a href="#"><img src="img/gallery/thumbs/thumb03.jpg" class="img-responsive" alt="" /></a></li>
								<li><a href="#"><img src="img/gallery/thumbs/thumb04.jpg" class="img-responsive" alt="" /></a></li>
								<li><a href="#"><img src="img/gallery/thumbs/thumb05.jpg" class="img-responsive" alt="" /></a></li>
								<li><a href="#"><img src="img/gallery/thumbs/thumb06.jpg" class="img-responsive" alt="" /></a></li>
								<li><a href="#"><img src="img/gallery/thumbs/thumb07.jpg" class="img-responsive" alt="" /></a></li>
								<li><a href="#"><img src="img/gallery/thumbs/thumb08.jpg" class="img-responsive" alt="" /></a></li>
							</ul>
						</div>
						<div class="widget">
							<h5 class="widget-head">Categories</h5>
							<ul class="cat">
								@foreach ($cats as $cat)
                                <li><a href="{{ route('blog.cat',$cat->slug) }}"><i class="fa fa-bars"></i>{{ $cat->name }}<i class="fa fa-eye fa-4x"> {{$cat->posts->count()  }}</i></a></li>
                                @endforeach

							</ul>
						</div>
						<div class="widget">
							<h5 class="widget-head">Popular article</h5>
							<div class="recent-widget">
								@foreach ($popular as $p)
                                <div class="post">
									<a href="#" class="post-thumbnail"><img  height="50px" width="50px" src="{{ $p->image }}" class="img-thumb" alt="" /></a>
									<h6><a href="{{ route('blog.show',$p->slug) }}">{{ $p->title }}</a></h6>
								</div>
                                @endforeach

							</div>
						</div>
						<div class="widget">
                                <h5 class="widget-head">Tags</h5>
                            @foreach ($tags as $t)
                            <a href="{{ route('blog.tag',$t->slug) }}" class="tag">{{ $t->name }} ({{ $t->posts->count() }})</a>
                            @endforeach


						</div>
						<div class="widget">
							<h5 class="widget-head">Follow us</h5>
							<a href="#" class="btn btn-primary btn-icon btn-block btn-picton"><i class="fa fa-facebook"></i> Facebook</a>
							<a href="#" class="btn btn-primary btn-icon btn-block btn-turquoise"><i class="fa fa-twitter"></i> Twitter</a>
							<a href="#" class="btn btn-primary btn-icon btn-block btn-christine"><i class="fa fa-google-plus"></i> Google plus</a>
							<a href="#" class="btn btn-primary btn-icon btn-block btn-crimson"><i class="fa fa-pinterest"></i> Pinterest</a>
							<a href="#" class="btn btn-primary btn-icon btn-block btn-amaranth"><i class="fa fa-dribbble"></i> Dribbble</a>
							<a href="#" class="btn btn-primary btn-icon btn-block btn-serria"><i class="fa fa-instagram"></i> Instagram</a>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<!-- End contain wrapp -->



@include('layouts.footer')
@endsection
