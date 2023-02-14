@extends("base")
@section("content")
<!-- Hero section -->
<div class="bg-gray border-radius-1 section-sm px-4 px-lg-5 mx-4 mx-lg-5">
	<div class="container">
		<div class="row align-items-center g-4 g-lg-5">
			<div class="col-12 col-lg-7 order-lg-2">
				<div class="owl-carousel" data-owl-items="1" data-owl-autoplay="true">
					<div>
						<img src="{{ public_path().'/assets/aams/study-abroad.jpg' }}" alt="">
					</div>
					<div>
						<img src="{{ public_path().'/assets/aams/uk-skyline.jpg' }}" alt="">
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-5 order-lg-1">
				<ul class="list-inline mb-3">
					<li><i class="bi bi-check-circle-fill text-gradient-6 pe-2"></i>Professional Team</li>
					<li><i class="bi bi-check-circle-fill text-gradient-6 pe-2"></i>Fast & Friendly Support</li>
				</ul>
				<h1 class="fw-medium">Study and Work Abroad with <span class="text-spring-red">AAMS GLOBAL</span></h1>
				<a class="button button-md button-rounded button-spring-red mt-3 mt-lg-4" href="#">Know More</a>
			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</div>
<!-- end Hero section -->

<!-- Clients section -->
<div class="n-margin-3">
	<div class="container">
		<div class="bg-white box-shadow p-4 p-lg-5">
			<div class="owl-carousel" data-owl-dots="false" data-owl-nav="true" data-owl-autoplay="true" data-owl-margin="40" data-owl-xs="1" data-owl-sm="2" data-owl-md="3" data-owl-lg="4" data-owl-xl="5">
				<div class="client-box">
					<span class="fi fi-us"></span>&nbsp;&nbsp;<a href="#">USA</a>
				</div>
				<div class="client-box">
					<span class="fi fi-gb"></span>&nbsp;&nbsp;<a href="#">United Kingdom</a>
				</div>
				<div class="client-box">
					<span class="fi fi-ca"></span>&nbsp;&nbsp;<a href="#">Canada</a>
				</div>
				<div class="client-box">
					<span class="fi fi-gr"></span>&nbsp;&nbsp;<a href="#">Germany</a>
				</div>
				<div class="client-box">
					<span class="fi fi-au"></span>&nbsp;&nbsp;<a href="#">Australia</a>
				</div>
				<div class="client-box">
					<span class="fi fi-nz"></span>&nbsp;&nbsp;<a href="#">New Zealand</a>
				</div>
				<div class="client-box">
					<span class="fi fi-ir"></span>&nbsp;&nbsp;<a href="#">Ireland</a>
				</div>
				<div class="client-box">
					<span class="fi fi-fr"></span>&nbsp;&nbsp;<a href="#">France</a>
				</div>
			</div><!-- end owl-carousel -->
		</div>
	</div><!-- end container -->
</div>
<!-- end Clients section -->

<!-- Team section -->
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-12" data-sal="fade" data-sal-delay="40">
				<h6 class="d-inline-block bg-gray border-radius px-3 py-2 line-height-140 font-small uppercase letter-spacing-1 mb-3"><span class="text-gradient-6">Top Universities</span></h6>
				<h2 class="fw-medium">Discover Top Universities</h2>
			</div>
		</div><!-- end row -->
		<div class="row g-4 gy-5 team-wrapper team-box-hover-2 border-radius">
			<div class="owl-carousel" data-owl-nav="true" data-owl-dots="false" data-owl-autoplay="true" data-owl-margin="10" data-owl-xs="1" data-owl-sm="1" data-owl-md="2" data-owl-lg="4" data-owl-xl="4">
				<div>
					<div class="team-img">
						<img src="{{ public_path().'/assets/aams/university-of-bolton.jpg' }}" alt="Univeristy of Bolton"><!-- image source -->
					</div>
					<h5 class="fw-medium m-0">University of Bolton</h5>
					<span><span class="fi fi-gb"></span>&nbsp;&nbsp;United Kingdom</span>
				</div>
				<div>
					<div class="team-img">
						<img src="{{ public_path().'/assets/aams/south-wales-university.jpg' }}" alt="Univeristy of Bolton">
					</div>
					<h5 class="fw-medium m-0">University of South Wales</h5>
					<span><span class="fi fi-gb"></span>&nbsp;&nbsp;United Kingdom</span>
				</div>				
				<div>
					<div class="team-img">
						<img src="{{ public_path().'/assets/aams/university-of-bath.jpg' }}" alt="Univeristy of Bolton">
					</div>
					<h5 class="fw-medium m-0">University of Bath</h5>
					<span><span class="fi fi-gb"></span>&nbsp;&nbsp;United Kingdom</span>
				</div>
				<div>
					<div class="team-img">
						<img src="{{ public_path().'/assets/aams/University_of_Glasgow.jpg' }}" alt="Univeristy of Bolton">
					</div>
					<h5 class="fw-medium m-0">University of Glasgow</h5>
					<span><span class="fi fi-gb"></span>&nbsp;&nbsp;United Kingdom</span>
				</div>
				<div>
					<div class="team-img">
						<img src="{{ public_path().'/assets/aams/brighton-university.jpg' }}" alt="Univeristy of Bolton">
					</div>
					<h5 class="fw-medium m-0">University of Brighton</h5>
					<span><span class="fi fi-gb"></span>&nbsp;&nbsp;United Kingdom</span>
				</div>
			</div>
		</div><!-- end row -->
		<div class="row">
			<div class="col-12 text-end">
			<a class="button button-md button-reveal-right-outline-dark mt-3" href="#"><i class="bi bi-arrow-right"></i><span>Explore More Universities</span></a>
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
				<h2 class="fw-medium">Explore Top Study Destinations</h2>
			</div>
		</div><!-- end row -->
		<div class="row icon-3xl g-4 g-lg-5 text-center">
			<div class="col-12 col-md-4 img-link-box">
				<a href="javascript:void(0)"><img class="border-radius" src="{{ public_path().'/assets/aams/study-uk.jpg' }}" alt=""></a>
				<h5 class="fw-normal mt-4 text-spring-red">Study in UK</h5>
				<p class="text-justify">The UK is a world-renowned location to study abroad. Home to four of the top ten universities in the world according to the 2022 QS World University Rankings (University of Cambridge, University of Oxford, Imperial College London and University College London). It’s also where one in four world leaders have studied, showing that an education in the UK really can take you to the top.</p>
			</div>
			<div class="col-12 col-md-4 img-link-box">
				<a href="javascript:void(0)"><img class="border-radius" src="{{ public_path().'/assets/aams/study-canada.jpg' }}" alt=""></a>
				<h5 class="fw-normal mt-4 text-spring-red">Study in Canada</h5>
				<p class="text-justify">Ranked number one for the country with the best quality of life, Canada has plenty to offer international students. There’s a wide range of educational options open to you, whether you want to be based in a large vibrant city or a smaller campus out in the beautiful Canadian countryside. You’ll be met by the traditional warm welcome that this country is famous for.</p>
			</div>
			<div class="col-12 col-md-4 img-link-box">
				<a href="javascript:void(0)"><img class="border-radius" src="{{ public_path().'/assets/aams/study-ireland.jpg' }}" alt=""></a>
				<h5 class="fw-normal mt-4 text-spring-red">Study in Ireland</h5>
				<p class="text-justify">With University College Dublin (UCD) ranked in the top 1% of higher education institutions in the world and Dublin itself named as Conde Nast’s friendliest city in Europe, it’s easy to see why people from around the globe come to study in Ireland. Outside of its capital city, this is a country of rich history and rugged, wild beauty, as well as a country with great craic.</p>
			</div>
			<div class="col-12 col-md-4 img-link-box">
				<a href="javascript:void(0)"><img class="border-radius" src="{{ public_path().'/assets/aams/study-australia.jpg' }}" alt=""></a>
				<h5 class="fw-normal mt-4 text-spring-red">Study in Australia</h5>
				<p class="text-justify">Australia, the land down under, is an ideal place to enjoy a world class education and an outstanding quality of life. It offers a diverse range of study options for international students, with more than 1,100 institutions and 22,000 courses to choose from.</p>
			</div>
			<div class="col-12 col-md-4 img-link-box">
				<a href="javascript:void(0)"><img class="border-radius" src="{{ public_path().'/assets/aams/study-usa.jpg' }}" alt=""></a>
				<h5 class="fw-normal mt-4 text-spring-red">Study in United States</h5>
				<p class="text-justify">The USA has long been seen as the land of opportunity and more than a million international students a year choose it as the place to kickstart their career opportunities. With half of the top ten universities in the world in the USA, (MIT, Stanford, Harvard, Caltech and the University of Chicago) and several thousand colleges and universities to choose from, there is something for everyone here.</p>
			</div>
			<div class="col-12 col-md-4 img-link-box">
				<a href="javascript:void(0)"><img class="border-radius" src="{{ public_path().'/assets/aams/study-new-zealand.jpg' }}" alt=""></a>
				<h5 class="fw-normal mt-4 text-spring-red">Study in New Zealand</h5>
				<p class="text-justify">Top-notch education and globally competitive job opportunities amidst a breathtaking environment? Discover your pathway to this new adventure if you plan to study in New Zealand. But apart from long names, New Zealand is famous for its top-quality education and outstanding work opportunities. The country can also boast multicultural cities, friendly locals, scenic slopes, beaches, and lakes. </p>
			</div>			
		</div>
		<div class="row">
			<div class="col-12 text-end">
			<a class="button button-md button-reveal-right-outline-dark mt-3" href="#"><i class="bi bi-arrow-right"></i><span>Explore More Destinations</span></a>
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
				<h2 class="fw-medium">Explore Top courses</h2>
			</div>
		</div><!-- end row -->
		<div class="row g-4 gy-5 team-wrapper team-box-hover-2 border-radius">
			<div class="owl-carousel" data-owl-nav="true" data-owl-dots="false" data-owl-autoplay="true" data-owl-margin="10" data-owl-xs="1" data-owl-sm="1" data-owl-md="2" data-owl-lg="4" data-owl-xl="4">
				<div>
					<div class="team-img">
						<img src="{{ public_path().'/assets/aams/cs-and-it.jpg' }}" alt=""><!-- image source -->
					</div>
					<h5 class="fw-medium m-0">Computer Sciences and IT</h5>
				</div>
				<div>
					<div class="team-img">
						<img src="{{ public_path().'/assets/aams/business-management.jpg' }}" alt=""><!-- image source -->
					</div>
					<h5 class="fw-medium m-0">Business and Management</h5>
				</div>				
				<div>
					<div class="team-img">
						<img src="{{ public_path().'/assets/aams/law-and-legal.jpg' }}" alt=""><!-- image source -->
					</div>
					<h5 class="fw-medium m-0">Law and Legal Studies</h5>
				</div>
				<div>
					<div class="team-img">
						<img src="{{ public_path().'/assets/aams/doctor-students.jpg' }}" alt=""><!-- image source -->
					</div>
					<h5 class="fw-medium m-0">Health and Science</h5>
				</div>
				<div>
					<div class="team-img">
						<img src="{{ public_path().'/assets/aams/eng-students.jpg' }}" alt=""><!-- image source -->
					</div>
					<h5 class="fw-medium m-0">Engineering</h5>
				</div>
			</div>
		</div><!-- end row -->
		<div class="row">
			<div class="col-12 text-end">
			<a class="button button-md button-reveal-right-outline-dark mt-3" href="#"><i class="bi bi-arrow-right"></i><span>Explore More Courses</span></a>
			</div>
		</div>
	</div><!-- end container -->
</div>
<!-- end Team section -->

@endsection