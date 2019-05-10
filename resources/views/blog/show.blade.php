@extends('layouts.app')
@section('content')
@include('layouts.nav')
	<!-- Start inner page header -->
	<div class="innerheader-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><i class="fa fa-file-text"></i> {{ $article->title }}</h2>
					<ol class="breadcrumb">
						<li><a href="/"><i class="fa fa-home"></i> Home</a></li>
						<li class="active"><a href="{{ route('blog.index') }}"><i class="fa fa-file-text"></i>Blog Page</a></li>
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
					<!-- Start post 1 -->
					<article class="post single-post">
						<!-- Start article row 1 -->
						<div class="row news-row">
							<div class="col-md-12">
								<div class="news-article-heading margintop-clear">
									<span class="label buttercup-bg">{{ $article->cat->name }}</span>
									<h3><a href="#">{{ $article->title }}</a></h3>
									<div class="meta-post">
										<a href="#" class="author">{{ $article->author->name }}</a> - <span class="date">{{ $article->created_at->diffForHumans() }}</span>
									</div>
									<a href="#" class="comment-label">{{ $article->created_at->diffForHumans() }}</a>
								</div>
							</div>
						</div>
						<!-- End article row 1 -->

						<!-- Start article row 2 -->
						<div class="row news-row">
							<div class="col-md-12">
								<ul class="post-share">
									<li><label>Share :</label></li>
									<li><a class="btn btn-picton btn-3d btn-icon icon-divider btn-sm" href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
									<li><a class="btn btn-turquoise btn-3d btn-icon icon-divider btn-sm" href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
									<li><a class="btn btn-christine btn-3d btn-icon icon-divider btn-sm" href="#"><i class="fa fa-google-plus"></i>Google plus</a></li>
									<li><a class="btn btn-crimson btn-3d btn-icon icon-divider btn-sm" href="#"><i class="fa fa-pinterest"></i>Pinterest</a></li>
								</ul>
							</div>
						</div>
						<!-- End article row 2 -->

						<!-- Start article row 3 -->
						<div class="row news-row">
							<div class="col-md-12">
								<div class="img-wrapper marginbot20">
									<a href="#"><img src="{{ $article->image}}" class="img-responsive" alt="" /></a>
                                </div>
                                <div class="news-content">
									{{ $article->excerpt }}
								</div>
								<div class="news-content">
									{{ $article->body }}
								</div>
							</div>
						</div>
						<!-- End article row 3 -->


					</article>
					<!-- End post 1 -->

					<!-- Start article row 6 -->
					<div class="row news-row">
						<div class="col-md-12">
							<h5>Related article</h5>
						</div>
						<div class="col-md-12">
							<div class="recent-3column owl-carousel owl-theme absolute-topright">
								@foreach ($related as $r)
                                <!-- Start item 1 -->
								<div class="item">
									<div class="news-article">
										<div class="img-wrapper">
											<div class="news-caption thumbs-sm">
												<span class="post-label">{{ $r->cat->name }}</span>
											</div>
											<img src="{{ $r->image }}" class="img-responsive" alt="" />
										</div>
										<div class="news-article-heading">
											<h5><a href="{{ route('blog.show',$r->slug) }}">{{str_limit( $r->title,50) }}</a></h5>
											<div class="meta-post">
												<a href="#" class="author">{{ $r->author->name }}</a> - <span class="date">{{ $r->created_at->diffForHumans() }}</span>
											</div>
											{{-- <a href="#" class="comment-label"></a> --}}
										</div>
									</div>
								</div>
								<!-- Start item 1 -->
                                @endforeach
							</div>
						</div>
					</div>
					<!-- End article row 6 -->

					<div class="divider margintop30 marginbot30"></div>

					<!-- Start article row 7 -->
					<div class="row news-row">
						<div class="col-md-12">
							<h5>Leave a comments</h5>
						</div>
						<div class="col-md-12">
							<form class="row">
								<div class="col-md-12 marginbot30">
									<textarea class="form-control" rows="8" placeholder="Wrote something for us..."></textarea>
								</div>
								<div class="col-md-6 col-sm-6 marginbot30">
									<input type="text" class="form-control" id="exampleInputName" placeholder="Your full name *" />
								</div>
								<div class="col-md-6 col-sm-6 marginbot30">
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your email addres *" />
								</div>
								<div class="col-md-6 col-sm-6 marginbot30">
									<button type="submit" class="btn btn-default">Submit comment</button>
								</div>
							</form>
						</div>
					</div>
					<!-- End article row 7 -->

					<!-- Start article row 8 -->
					<div class="row news-row">
						<div class="col-md-12">
							<h5>Comments (3)</h5>
						</div>
						<div class="col-md-12">
							<div class="media">
								<div class="media-left">
									<a href="#">
										<img class="media-object" src="img/blog/avatar/author01.jpg" alt="" />
									</a>
								</div>
								<div class="media-body">
									<h6 class="media-heading"><a href="#">Janny doe</a></h6>
									<p>
									Sensibus salutandi qualisque vix cu, eu per saperet fastidii. Unum postea alienum vis ei, ea vim paulo mediocrem hendrerit. An ipsum partem eum, augue aliquid at pri.
									</p>
									<p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
								</div>
							</div>

							<div class="media">
								<div class="media-left">
									<a href="#">
										<img class="media-object" src="img/blog/avatar/author02.jpg" alt="" />
									</a>
								</div>
								<div class="media-body">
									<h6 class="media-heading"><a href="#">John doe</a></h6>
									<p>
									Ea sea reque atomorum interpretaris, ex legere propriae cum. Ei eam propriae probatus. Vim illum dolor tamquam in. No omnes nullam inciderint ius, qui ad sale simul. Primis aeterno assueverit mei ut, ei reque primis volutpat his.
									</p>
									<p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
									<div class="media">
										<div class="media-left">
											<a href="#">
												<img class="media-object" src="img/blog/avatar/author03.jpg" alt="" />
											</a>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="#">Jenny doe</a></h6>
											<p>
											Et insolens assentior nec, id mea delicatissimi concludaturque. Ne vis tantas melius quaestio, mucius semper ad mea.
											</p>
											<p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
										</div>
									</div>
								</div>
							</div>

							<div class="media">
								<div class="media-left">
									<a href="#">
										<img class="media-object" src="img/blog/avatar/author04.jpg" alt="" />
									</a>
								</div>
								<div class="media-body">
									<h6 class="media-heading"><a href="#">Jenny doe</a></h6>
									<p>
									Ea meis menandri mei, ex nec malis legendos, quot inani ancillae cu sed. Suas scaevola ius ex, aeque recusabo an duo. Qui brute eloquentiam no. Nibh dicant cotidieque no pri, movet copiosae sit te. Ut summo solet pri, an molestiae assentior suscipiantur mea.
									</p>
									<p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
								</div>
							</div>
						</div>
					</div>
					<!-- End article row 8 -->
				</div>
				<div class="col-md-3 col-sm-4">
					<aside>

						<div class="widget">
							<h5 class="widget-head">Categories</h5>
							<ul class="cat">
								@foreach ($cats as $item)
                                <li><a href="#">{{ $item->name }}</a></li>
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
							<a href="#" class="tag">Web (10)</a>
							<a href="#" class="tag">Flat (16)</a>
							<a href="#" class="tag">App (4)</a>
							<a href="#" class="tag">Clean (8)</a>
							<a href="#" class="tag">Color (2)</a>
							<a href="#" class="tag">Tips (8)</a>
							<a href="#" class="tag">Modern (12)</a>
							<a href="#" class="tag">Logo (11)</a>
							<a href="#" class="tag">News (9)</a>
							<a href="#" class="tag">Graphic (22)</a>
							<a href="#" class="tag">Minimalis (15)</a>
							<a href="#" class="tag">Tutorial (9)</a>
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
