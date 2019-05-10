
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">

<!-- Mirrored from 99webpage.com/theme-review/html/bacotna/index-creative-alt2.html by HTTrack Website Copier/3.x [XR&CO 2014], Fri, 19 Apr 2019 15:07:47 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Bacotna is a truly multi purpose template, coming with 50+ ready-to-use Homepages & 100+ HTML Files in one Package. Build whatever you like with this Template.Be it Business, Corporate, Medical, Travel, Construction, Real Estate, Magazine, Portfolio, Agency, Hotel, Yoga, Hosting, Photography, Ecommerce, Industry or Product launch, just everything is possible with bacotna.">
	<meta name="keywords" content=" app, business, construction, corporate, creative, ecommerce, hosting, hotel, magazine, medical, multipurpose, photography, real estate, restaurant, yoga">
	<meta name="robots" content="index,follow">
    <link rel="icon" href="ico/favicon.png">

    <title>Bacotna Creative Agency and Corporate Template</title>

    <!-- Bootstrap Core CSS -->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- RS5.0 Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/revolution/settings.css') }}">

	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/revolution/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/revolution/navigation.css') }}">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Color -->
    <link id="skin" href="{{ asset('skins/default.css') }}" rel="stylesheet">

</head>
<body>
	<!-- Start preloading -->
	<div id="loading" class="loading-invisible">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
			</div>
			<p>Please wait...</p>
		</div>
	</div>
	<!-- End preloading -->


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
