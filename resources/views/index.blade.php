@extends("base")
@section("content")
<!-- Hero section -->
<div class="owl-carousel owl-nav-overlay owl-dots-overlay" data-owl-nav="true" data-owl-dots="true" data-owl-items="1" data-owl-autoPlay="true">
	<!-- Slider box 1 -->
	<div class="section-fullscreen bg-image" data-bg-src="{{ public_path().'/assets/aams/low-angle-cheerful-team-students-passed-test-by-preparing-all-together.jpg' }}">
		<div class="bg-dark-06">
			<div class="container">
				<div class="position-middle">
					<div class="row">
						<div class="col-12 col-sm-10 col-md-9">
							<h1 class="display-4 fw-bold line-height-130">Study and Work Abroad with <span class="text-info">Aams Global</span></h1>
							<a class="button button-xl button-radius button-reveal-left-outline-white mt-4" href="#">Let's Start</a>
						</div>
					</div><!-- end row -->
				</div>
			</div><!-- end container -->
		</div>
	</div>
	<!-- Slider box 2 -->
	<div class="section-fullscreen bg-image" data-bg-src="{{ public_path().'/assets/aams/big-city-park-melbourne.jpg' }}">
		<div class="bg-dark-06">
			<div class="container">
				<div class="position-middle">
					<div class="row">
						<div class="col-12 col-sm-10 col-md-9">
							<h1 class="display-4 fw-bold line-height-130">Give Wings to <span class="text-info">Your Dream</span></h1>
							<a class="button button-xl button-radius button-reveal-left-outline-white mt-4" href="#"><i class="bi bi-arrow-down"></i><span>Start Here</span></a>
						</div>
					</div><!-- end row -->
				</div>
			</div><!-- end container -->
		</div>
	</div>
</div><!-- end owl-carousel -->
<!-- end Hero section -->

<!-- Team section -->
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-12" data-sal="fade" data-sal-delay="40">
				<h6 class="d-inline-block bg-gray border-radius px-3 py-2 line-height-140 font-small uppercase letter-spacing-1 mb-3"><span class="text-gradient-6">Top Universities</span></h6>
				<h3 class="fw-medium">Discover Top Universities</h3>
			</div>
		</div><!-- end row -->
		<div class="row g-4 gy-5 team-wrapper team-box-hover-2 border-radius">
			<div class="owl-carousel" data-owl-nav="false" data-owl-dots="true" data-owl-autoplay="true" data-owl-margin="10" data-owl-xs="1" data-owl-sm="1" data-owl-md="2" data-owl-lg="4" data-owl-xl="4">
				<div class="portfolio-item">
					<div class="portfolio-box">
						<div class="portfolio-img">
							<img src="{{ public_path().'/assets/aams/university-of-bolton.jpg' }}" alt="Univeristy of Bolton"><!-- image source -->
						</div>
						<div class="portfolio-title">
							<div>
								<h4 class="fw-normal">University of Bolton</h4>
								<span class="fi fi-gb"></span>&nbsp;&nbsp;United Kingdom</span>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio-item">
					<div class="portfolio-box">
						<div class="portfolio-img">
							<img src="{{ public_path().'/assets/aams/south-wales-university.jpg' }}" alt="Univeristy of Bolton"><!-- image source -->
						</div>
						<div class="portfolio-title">
							<div>
								<h4 class="fw-normal">University of South Wales</h4>
								<span class="fi fi-gb"></span>&nbsp;&nbsp;United Kingdom</span>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio-item">
					<div class="portfolio-box">
						<div class="portfolio-img">
							<img src="{{ public_path().'/assets/aams/university-of-bath.jpg' }}" alt="Univeristy of Bolton"><!-- image source -->
						</div>
						<div class="portfolio-title">
							<div>
								<h4 class="fw-normal">University of Bath</h4>
								<span class="fi fi-gb"></span>&nbsp;&nbsp;United Kingdom</span>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio-item">
					<div class="portfolio-box">
						<div class="portfolio-img">
							<img src="{{ public_path().'/assets/aams/University_of_Glasgow.jpg' }}" alt="Univeristy of Bolton"><!-- image source -->
						</div>
						<div class="portfolio-title">
							<div>
								<h4 class="fw-normal">University of Glasgow</h4>
								<span class="fi fi-gb"></span>&nbsp;&nbsp;United Kingdom</span>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio-item">
					<div class="portfolio-box">
						<div class="portfolio-img">
							<img src="{{ public_path().'/assets/aams/brighton-university.jpg' }}" alt="Univeristy of Bolton"><!-- image source -->
						</div>
						<div class="portfolio-title">
							<div>
								<h4 class="fw-normal">University of Brighton</h4>
								<span class="fi fi-gb"></span>&nbsp;&nbsp;United Kingdom</span>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div><!-- end row -->
		<div class="row">
			<div class="col-12 text-end">
				<a class="link-social-linkedin fw-bold" href="#">See all Universities <i class="bi bi-arrow-right"></i></a>
			</div>
		</div>
	</div><!-- end container -->
</div>
<!-- end Team section -->

<!-- Team section -->
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-12" data-sal="fade" data-sal-delay="40">
				<h6 class="d-inline-block bg-gray border-radius px-3 py-2 line-height-140 font-small uppercase letter-spacing-1 mb-3"><span class="text-gradient-6">Popular Places</span></h6>
				<h3 class="fw-medium">Explore Top Study Destinations</h3>
			</div>
		</div><!-- end row -->
		<div class="row icon-3xl g-4 g-lg-5 text-center">
			<div class="col-12 col-md-4">
				<div class="hoverbox-6">
					<a href="javascript:void(0)"><img src="{{ public_path().'/assets/aams/study-uk.jpg' }}" alt="">
					<div class="content top bg-color-turquiose">
						<span class="font-family-tertiary font-small fw-normal uppercase m-0 text-white">Study in UK</span>
					</div>
					</a>					
				</div>
				<div class="">
					<p class="text-justify">The UK is a world-renowned location to study abroad. Home to four of the top ten universities in the world according to the 2022 QS World University Rankings (University of Cambridge, University of Oxford, Imperial College London and University College London). It’s also where one in four world leaders have studied, showing that an education in the UK really can take you to the top.</p>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="hoverbox-6">
					<a href="javascript:void(0)"><img src="{{ public_path().'/assets/aams/study-canada.jpg' }}" alt="">
					<div class="content top bg-color-turquiose">
						<span class="font-family-tertiary font-small fw-normal uppercase m-0 text-white">Study in Canada</span>
					</div>
					</a>					
				</div>
				<div class="">
					<p class="text-justify">Ranked number one for the country with the best quality of life, Canada has plenty to offer international students. There’s a wide range of educational options open to you, whether you want to be based in a large vibrant city or a smaller campus out in the beautiful Canadian countryside. You’ll be met by the traditional warm welcome that this country is famous for.</p>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="hoverbox-6">
					<a href="javascript:void(0)"><img src="{{ public_path().'/assets/aams/study-ireland.jpg' }}" alt="">
					<div class="content top bg-color-turquiose">
						<span class="font-family-tertiary font-small fw-normal uppercase m-0 text-white">Study in Ireland</span>
					</div>
					</a>					
				</div>
				<div class="">
					<p class="text-justify">With University College Dublin (UCD) ranked in the top 1% of higher education institutions in the world and Dublin itself named as Conde Nast’s friendliest city in Europe, it’s easy to see why people from around the globe come to study in Ireland. Outside of its capital city, this is a country of rich history and rugged, wild beauty, as well as a country with great craic.</p>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="hoverbox-6">
					<a href="javascript:void(0)"><img src="{{ public_path().'/assets/aams/study-australia.jpg' }}" alt="">
					<div class="content top bg-color-turquiose">
						<span class="font-family-tertiary font-small fw-normal uppercase m-0 text-white">Study in Australia</span>
					</div>
					</a>					
				</div>
				<div class="">
					<p class="text-justify">Australia, the land down under, is an ideal place to enjoy a world class education and an outstanding quality of life. It offers a diverse range of study options for international students, with more than 1,100 institutions and 22,000 courses to choose from. Australia is difficult to beat in terms of standard of living, academic excellence, and support for international students.</p>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="hoverbox-6">
					<a href="javascript:void(0)"><img src="{{ public_path().'/assets/aams/study-usa.jpg' }}" alt="">
					<div class="content top bg-color-turquiose">
						<span class="font-family-tertiary font-small fw-normal uppercase m-0 text-white">Study in United States</span>
					</div>
					</a>					
				</div>
				<div class="">
					<p class="text-justify">The USA has long been seen as the land of opportunity and more than a million international students a year choose it as the place to kickstart their career opportunities. With half of the top ten universities in the world in the USA, (MIT, Stanford, Harvard, Caltech and the University of Chicago) and several thousand colleges and universities to choose from, there is something for everyone here.</p>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="hoverbox-6">
					<a href="javascript:void(0)"><img src="{{ public_path().'/assets/aams/study-new-zealand.jpg' }}" alt="">
					<div class="content top bg-color-turquiose">
						<span class="font-family-tertiary font-small fw-normal uppercase m-0 text-white">Study in New Zealand</span>
					</div>
					</a>					
				</div>
				<div class="">
					<p class="text-justify">Top-notch education and globally competitive job opportunities amidst a breathtaking environment? Discover your pathway to this new adventure if you plan to study in New Zealand. But apart from long names, New Zealand is famous for its top-quality education and outstanding work opportunities. The country can also boast multicultural cities, friendly locals, scenic slopes, beaches, and lakes.</p>
				</div>
			</div>			
		</div>
		<div class="row mt-3">
			<div class="col-12 text-end">
				<a class="link-social-linkedin fw-bold" href="#">See all popular destinations <i class="bi bi-arrow-right"></i></a>
			</div>
		</div>
	</div><!-- end container -->
</div>
<!-- end Team section -->

<!-- Team section -->
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-12" data-sal="fade" data-sal-delay="40">
				<h6 class="d-inline-block bg-gray border-radius px-3 py-2 line-height-140 font-small uppercase letter-spacing-1 mb-3"><span class="text-gradient-6">Popular Courses</span></h6>
				<h3 class="fw-medium">Explore Top courses</h3>
			</div>
		</div><!-- end row -->
		<div class="row g-4 gy-5 team-wrapper team-box-hover-2 border-radius">
			<div class="owl-carousel" data-owl-nav="false" data-owl-dots="true" data-owl-autoplay="true" data-owl-margin="10" data-owl-xs="1" data-owl-sm="1" data-owl-md="2" data-owl-lg="4" data-owl-xl="4">
				<div class="portfolio-item">
					<div class="portfolio-box">
						<div class="portfolio-img">
							<img src="{{ public_path().'/assets/aams/cs-and-it.jpg' }}" alt=""><!-- image source -->
						</div>
						<div class="portfolio-title">
							<div class="portfolio-title-item">
								<h6 class="uppercase letter-spacing-1">Computer Sciences and IT</h6>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio-item">
					<div class="portfolio-box">
						<div class="portfolio-img">
							<img src="{{ public_path().'/assets/aams/business-management.jpg' }}" alt=""><!-- image source -->
						</div>
						<div class="portfolio-title">
							<div class="portfolio-title-item">
								<h6 class="uppercase letter-spacing-1">Business and Management</h6>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio-item">
					<div class="portfolio-box">
						<div class="portfolio-img">
							<img src="{{ public_path().'/assets/aams/law-and-legal.jpg' }}" alt=""><!-- image source -->
						</div>
						<div class="portfolio-title">
							<div class="portfolio-title-item">
								<h6 class="uppercase letter-spacing-1">Law and Legal Studies</h6>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio-item">
					<div class="portfolio-box">
						<div class="portfolio-img">
							<img src="{{ public_path().'/assets/aams/doctor-students.jpg' }}" alt=""><!-- image source -->
						</div>
						<div class="portfolio-title">
							<div class="portfolio-title-item">
								<h6 class="uppercase letter-spacing-1">Health and Science</h6>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio-item">
					<div class="portfolio-box">
						<div class="portfolio-img">
							<img src="{{ public_path().'/assets/aams/eng-students.jpg' }}" alt=""><!-- image source -->
						</div>
						<div class="portfolio-title">
							<div class="portfolio-title-item">
								<h6 class="uppercase letter-spacing-1">Engineering</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end row -->
		<div class="row">
			<div class="col-12 text-end">
				<a class="link-social-linkedin fw-bold" href="#">See all top courses <i class="bi bi-arrow-right"></i></a>
			</div>
		</div>
	</div><!-- end container -->
</div>
<!-- end Team section -->

@endsection