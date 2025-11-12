@extends('layouts.app')

@section('content')

    <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="hs-text">
								<h2>Magyarországi rádióadók gyűjtőoldala</h2>
								<p>Az oldal lehetővé teszi a felhasználók számára, hogy Magyarország különböző rádióadóit feltöltsék és részletesen listázzák, így könnyen áttekinthetők a rendelkezésre álló adatok.</p>
								<a href="{{ route('login') }}" class="site-btn">Bejelentkezés</a>
								<a href="{{ route('diagram') }}" class="site-btn sb-c2">Statisztika</a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="hr-img">
								<img src="{{ asset('hero-bg.png') }}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Intro section -->
	<section class="intro-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>Ingyenes regisztráció</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<p>Az ingyenes regisztráció lehetőségével a felhasználók könnyen hozzáférhetnek a platform összes funkciójához.</p>
					<a href="{{ route('register') }}" class="site-btn">Regisztráció</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->

	<!-- How section -->
	<section class="how-section spad set-bg" data-setbg="img/how-to-bg.jpg">
		<div class="container text-white">
			<div class="section-title">
				<h2>Hogyan működik?</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="how-item">
						<div class="hi-icon">
							<img src="{{ asset('brain.png') }}" alt="">
						</div>
						<h4>Hozz létre egy fiókot</h4>
						<p>Első lépésként regisztráljon vagy ha már van fiókja, jelentkezzen be.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="how-item">
						<div class="hi-icon">
							<img src="{{ asset('pointer.png') }}" alt="">
						</div>
						<h4>Böngésszen</h4>
						<p>Fedezze fel a különböző rádióadókat, módosítsa a listát, amennyiben új adókat szeretne hozzáadni és így a közösségi többi tagja is könnyebben rátalálhat.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- How section end -->


@endsection
