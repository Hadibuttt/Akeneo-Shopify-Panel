<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{{$cpage->title}}</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">

		<!-- icons -->
		<link rel="apple-touch-icon" href="src/img/apple-touch-icon.png">
		<link rel="shortcut icon" href="favicon.ico">

		<!-- Bootstrap Core CSS file -->
		<link rel="stylesheet" href="{{asset('src\css\bootstrap.min.css')}}">

		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="{{asset('src\css\styles.css')}}">

		<!-- Conditional comment containing JS files for IE6 - 8 -->
		<!--[if lt IE 9]>
			<script src="src/js/html5.js"></script>
			<script src="src/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<!-- Navigation -->
	    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
			<div class="container-fluid">

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Zappos</a>
				</div>
				<!-- /.navbar-header -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#">Men</a></li>
						<li><a href="#">Kid</a></li>
						<li><a href="#">Women</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- /.navbar -->

		<!-- Page Content -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<h1>{{$cpage->title}}</h1>
						<p>Posted by <span class="glyphicon glyphicon-user"></span> <a href="#">Admin User</a> on <span class="glyphicon glyphicon-time"></span> {{$cpage->created_at->format('l j F Y')}}</p>
					</div>
				</div>
			</div>


			<!-- /.row -->

			<div class="row">
				<div class="col-sm-8">

					<!-- Image -->
					<figure class="margin-b-2">
						<img class="img-responsive" src="http://placehold.it/900x400" alt="">
						<figcaption class="margin-t-h">{{$cpage->title}}</figcaption>
					</figure>

					<p class="lead">{!!$cpage->description!!}.</p>
					<!--<p>Vivamus risus ex, varius et libero quis, placerat rhoncus mi. Aenean sit amet aliquam nibh. Aliquam tortor est, consequat vitae libero at, vehicula mattis tellus. In condimentum consequat tempor. Nullam at lorem semper, ultricies mi et, mollis turpis. Mauris ut leo ac magna dapibus luctus. Mauris mi nibh, ornare et ipsum vel, finibus molestie nulla. Nunc eleifend leo eget ipsum pellentesque, vel varius ipsum placerat. Mauris tincidunt sapien et efficitur commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec at pellentesque arcu. Pellentesque justo enim, porttitor a arcu non, mollis venenatis felis.</p>
					<p>Praesent viverra pellentesque enim, vitae porta erat elementum quis. Maecenas posuere mattis velit rutrum iaculis. Duis non efficitur nibh. Aliquam laoreet risus a nulla auctor interdum. Ut cursus leo eu justo laoreet porttitor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse vitae nisi dictum, vulputate odio sed, blandit tortor. Fusce eu turpis ut mi porta bibendum nec eu libero.</p>
					<p>Praesent libero sem, feugiat dapibus mattis et, vehicula eu turpis. In vitae consequat leo, quis venenatis justo. Fusce auctor bibendum aliquet. Nullam eu mi lectus. Maecenas risus mauris, feugiat nec ullamcorper non, efficitur et elit. Sed porta tellus ut aliquam auctor. Vivamus id lectus sed tellus cursus sodales sit amet a velit.</p>
					<p>Quisque eu aliquam leo. Sed feugiat nulla massa, a faucibus nulla sagittis eget. Donec ullamcorper tincidunt risus et pharetra. Vivamus tristique dui metus, vitae gravida nisl volutpat eu. Vivamus dapibus leo sit amet metus luctus dapibus. Vivamus sodales tempor elit, at pellentesque elit eleifend sit amet. Aliquam erat volutpat.</p>-->
					<hr>

					<!-- Comments -->
					<h3>Comments</h3>
					<div class="well">
						<div class="media">
							<div class="media-left">
								<img src="http://placehold.it/70x70" alt="">
							</div>
							<div class="media-body">
								<h4 class="margin-t-0"><a href="#">Mayahuel Rodriguez</a></h4>
								<p><a href="#">12 January 2015 11:13 pm</a></p>
								<p>Lorem ipsum dolor sit amet consect etuer adipi scing elit sed diam nonummy nibh euismod tinunt ut laoreet dolore magna aliquam erat volut</p>
								<p>
									<button class="btn btn-sm btn-default">
										<span class="glyphicon glyphicon-thumbs-up"></span> Upvote
									</button>
									<button class="btn btn-sm btn-default">
										<span class="glyphicon glyphicon-thumbs-down"></span> Downvote
									</button>
									<button class="btn btn-sm btn-default">
										<span class="glyphicon glyphicon-comment"></span> Reply
									</button>
								</p>
							</div>
						</div>
					</div>

					<div class="well">
						<div class="media">
							<div class="media-left">
								<img src="http://placehold.it/70x70" alt="">
							</div>
							<div class="media-body">
								<h4 class="margin-t-0"><a href="#">Mayahuel Rodriguez</a></h4>
								<p><a href="#">12 January 2015 11:13 pm</a></p>
								<p>Lorem ipsum dolor sit amet consect etuer adipi scing elit sed diam nonummy nibh euismod tinunt ut laoreet dolore magna aliquam erat volut</p>
								<p>
									<button class="btn btn-sm btn-default">
										<span class="glyphicon glyphicon-thumbs-up"></span> Upvote
									</button>
									<button class="btn btn-sm btn-default">
										<span class="glyphicon glyphicon-thumbs-down"></span> Downvote
									</button>
									<button class="btn btn-sm btn-default">
										<span class="glyphicon glyphicon-comment"></span> Reply
									</button>
								</p>
							</div>
						</div>
					</div>

					<div class="well">
						<div class="media">
							<div class="media-left">
								<img src="http://placehold.it/70x70" alt="">
							</div>
							<div class="media-body">
								<h4 class="margin-t-0"><a href="#">Mayahuel Rodriguez</a></h4>
								<p><a href="#">12 January 2015 11:13 pm</a></p>
								<p>Lorem ipsum dolor sit amet consect etuer adipi scing elit sed diam nonummy nibh euismod tinunt ut laoreet dolore magna aliquam erat volut</p>
								<p>
									<button class="btn btn-sm btn-default">
										<span class="glyphicon glyphicon-thumbs-up"></span> Upvote
									</button>
									<button class="btn btn-sm btn-default">
										<span class="glyphicon glyphicon-thumbs-down"></span> Downvote
									</button>
									<button class="btn btn-sm btn-default">
										<span class="glyphicon glyphicon-comment"></span> Reply
									</button>
								</p>
							</div>
						</div>
					</div>
					<hr>

					<!-- Comment form -->
					<h3>Leave a comment</h3>
					<p>Please keep in mind that comments are moderated and rel="nofollow" is in use. So, please do not use a spammy keyword or a domain as your name, or else it will be deleted. Thank you!</p>

					<div class="well">
						<form>
							<div class="form-group">
								<label for="contactName">Name</label>
								<input type="email" class="form-control" id="contactName" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<label for="contactEmail">Email</label>
								<input type="email" class="form-control" id="contactEmail" placeholder="Enter email">
								<p class="help-block">Make sure you use a valid email address</p>
							</div>
							<div class="form-group">
								<label for="contactComment">Comment</label>
								<textarea class="form-control" id="contactComment"></textarea>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
					<hr>

					<!-- Pager -->
					<nav>
						<ul class="pager">
							<li class="previous"><a href="#"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Older</a></li>
							<li class="next"><a href="#">Newer <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
						</ul>
					</nav>

				</div>
				<div class="col-sm-4">
					<!-- Search -->
					<div class="well">
						<h4 class="margin-t-0">Search</h4>
						<form action="#">
							<div class="input-group">
								<label class="sr-only" for="search-form">Search the site</label>
								<input type="text" class="form-control" id="search-form">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<span class="glyphicon glyphicon-search"></span>
										<span class="sr-only">Search</span>
									</button>
								</span>
							</div>
						</form>
					</div>

					<!-- list group -->
					<div class="list-group margin-b-3">
					    <a href="#" class="active list-group-item">Category 1</a>
					    <a href="#" class="list-group-item">Category 2</a>
					    <a href="#" class="list-group-item">Category 3</a>
					</div>

                	<!-- Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">Sidebar panel widget</h4>
						</div>
						<div class="panel-body">
							<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>

					<!-- Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">Sidebar panel widget</h4>
						</div>
						<div class="panel-body">
							<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>

				</div>
			</div>
			<!-- /.row -->

			<hr>
			<footer class="margin-tb-3">
				<div class="row">
					<div class="col-lg-12">
						<p>Copyright &copy; Sitename 2015</p>
					</div>
				</div>
			</footer>
		</div>
		<!-- /.container-fluid -->

		<!-- JQuery scripts -->
	    <script src="{{asset('src/js/jquery-1.11.2.min.js')}}"></script>

		<!-- Bootstrap Core scripts -->
		<script src="{{asset('src/js/bootstrap.min.js')}}"></script>
  </body>
</html>