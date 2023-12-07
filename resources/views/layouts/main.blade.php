
<!doctype html>
<html class="no-js" lang="en">

@include('includes.head')

<body>
@include('includes.header')

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>@yield('title')</h2>
							<ul class="bread-list">
								<li><a href="index.html">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">@yield('title')</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
@yield('content')

@include('includes.footer')



</body>

</html>