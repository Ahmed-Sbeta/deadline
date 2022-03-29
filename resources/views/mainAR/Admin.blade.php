<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Deadline - Login</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap')}}" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('css/skins/default.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>

	</head>
	<body data-plugin-page-transition>

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-nav-main header-nav-main-font-lg header-nav-main-font-lg-upper-2 header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
										<div class="header-nav header-nav-links header-nav-dropdowns-light header-nav-dark-text order-2 order-lg-1">

										<nav class="collapse">

											<ul class="nav nav-pills" id="mainNav">
												<li class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
													<a class="nav-link" href="#" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														 AR
														<i class="fas fa-angle-down"></i>
													</a>
													<div class="dropdown-menu" aria-labelledby="dropdownLanguage">
														<a class="dropdown-item" href="/home"> EN</a>
													</div>
												</li>


												<li>
													<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="ar/home#contact"> تواصل معنا</a>
												</li>

												<li>
													<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="ar/home#clients"> عملائنا</a>
												</li>

												<li class="dropdown">
													<a data-hash class="nav-link" href="#">
														<i class="fas fa-angle-down"></i>

														الحساب
													</a>
													<ul class="dropdown-menu">
														<li><a class="nav-link" href="ar/login">دخول</a></li>
														<li><a class="nav-link" href="ar/signup">التسجيل</a></li>
														<li><a class="nav-link" href="ar/subscribe">الإشتراك</a></li>

													</ul>
												</li>

												<li>
													<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="ar/home#packages">الباقات</a>
												</li>

												<li>
													<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="ar/home#features">الميزات</a>
												</li>

												<li>
													<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="ar/home#about">من نحن</a>
												</li>

												<li class="dropdown">
													<a data-hash class="nav-link active" href="ar/home#home">
														الرئيسية
													</a>

												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							</div>
						<div class="header-column justify-content-end">
								<div class="header-row">

										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
										<div class="header-logo">
											<a href="/ar/home">
												<img alt="Deadline"   src="{{asset('img/deadline logo.png')}}">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="font-weight-bold text-dark">الإدارة</h1>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb d-block text-center">
									<li><a href="/ar/home">الرئيسية</a></li>
									<li class="active">الصفحات</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">

					<div class="row justify-content-center">
						<div class="col-md-12">
							<div class="featured-box featured-box-primary text-end mt-0" >
								<div class="box-content">
									<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-0">قائمة العملاء</h4>
									<p class="text-2 opacity-7">بإمكانك التحكم بقائمة العملاء الخاصة بك في الجدول بالأسفل</p>

									<table class="table table-striped">
										<thead>
											<tr>
												<th>
													النشاط
												</th>
												<th>
													عدد الموظفين
												</th>
												<th>
													تاريخ انتهاء الصلاحية
												</th>
												<th>
													 الكود
												</th>
												<th>
													الإشتراك
												</th>
												<th>
													إسم الشركة
												</th>
												<th>
													الرقم
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<a href="#small-dialog"  class="mt-1 mb-1 me-1 popup-with-zoom-anim icon-trash icons"></a>
													<div id="small-dialog" class="dialog dialog-sm zoom-anim-dialog mfp-hide p-4">
														<h3 class="font-weight-semi-bold text-transform-none mb-3">حذف الشركة</h3>
														<p class="mb-0">هل أنت متأكد من حذف الشركة؟
															<br>
															<a href="#" class="btn btn-light mb-2 col-md-3">إلغاء</a>
															<a href="#" class="btn btn-danger mb-2 col-md-3">حذف</a>


														</p>
													</div>
												</td>
												<td>
													16
												</td>
												<td>
													11-11-2022
												</td>
												<td>
													Maw123
												</td>
												<td>
													<select name="Subscription">
														<option value="Advanced">المتقدمة</option>
														<option value="Standard">العادية</option>
														<option value="Basic">الأساسية</option>
 													  </select>
												</td>
												<td>
													MAWJA
												</td>
												<td>
													1
												</td>
											</tr>
											<tr>
												<td>
													<a href="#small-dialog"  class="mt-1 mb-1 me-1 popup-with-zoom-anim icon-trash icons"></a>
													<div id="small-dialog" class="dialog dialog-sm zoom-anim-dialog mfp-hide p-4">
														<h3 class="font-weight-semi-bold text-transform-none mb-3">حذف الشركة</h3>
														<p class="mb-0">هل أنت متأكد من حذف الشركة؟
															<br>
															<a href="#" class="btn btn-light mb-2 col-md-3">إلغاء</a>
															<a href="#" class="btn btn-danger mb-2 col-md-3">حذف</a>


														</p>
													</div>
												</td>
												<td>
													48
												</td>
												<td>
													1-10-2022
												</td>
												<td>
													Lw4321
												</td>
												<td>
													<select name="Subscription">
														<option value="Advanced">المتقدمة</option>
														<option value="Standard">العادية</option>
														<option value="Basic">الأساسية</option>
 													  </select>
												</td>
												<td>
													LibyanWings
												</td>
												<td>
													2
												</td>
											</tr>
											<tr>
												<td>
													<a href="#small-dialog"  class="mt-1 mb-1 me-1 popup-with-zoom-anim icon-trash icons"></a>
													<div id="small-dialog" class="dialog dialog-sm zoom-anim-dialog mfp-hide p-4">
														<h3 class="font-weight-semi-bold text-transform-none mb-3">حذف الشركة</h3>
														<p class="mb-0">هل أنت متأكد من حذف الشركة؟
															<br>
															<a href="#" class="btn btn-light mb-2 col-md-3">إلغاء</a>
															<a href="#" class="btn btn-danger mb-2 col-md-3">حذف</a>


														</p>
													</div>
												</td>
												<td>
													12
												</td>
												<td>
													5-5-2022
												</td>
												<td>
													Marca678
												</td>
												<td>
													<select name="Subscription">
														<option value="Advanced">المتقدمة</option>
														<option value="Standard">العادية</option>
														<option value="Basic">الأساسية</option>
 													  </select>
												</td>
												<td>
													Marca
												</td>
												<td>
													3
												</td>
											</tr>
										</tbody>
									</table>
									<a href="#" class="btn btn-primary mb-2 col-md-2">حفظ</a>

								</div>
							</div>
						</div>

					</div>

				</div>

			</div>

			<footer id="footer" class="border-0" style="background:dark ; background-size:cover; background-position: 0 100%;">
				<div class="container py-4">
					<div class="row justify-content-md-center py-5 mt-3">
						<div class="col-md-12 col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start mb-5 mb-lg-0">
							<a href="../Home - Ar/index-corporate.html"><img src="img/logo-flat-light.png" alt="Logo"></a>
						</div>
						<div class="col-md-6 col-lg-2 text-center text-lg-start mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">الصفحات</h5>
							<ul class="list list-unstyled">
								<li class="mb-1"><a href="../Home - Ar/Login.html" class="link-hover-style-1"> دخول </a></li>
								<li class="mb-1"><a href="../Home - Ar/Signup.html" class="link-hover-style-1"> تسجيل </a></li>
								<li class="mb-1"><a href="../Home - Ar/Subscribe.html" class="link-hover-style-1"> إشتراك </a></li>
							</ul>
						</div>

						<div class="col-md-6 col-lg-5 text-center text-lg-start">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4" dir="rtl">أخر الأخبار</h5>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>تمت العملية بنجاح</strong> تم إضافتك الى قائمة اخر الاخبار
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mb-3 mb-md-0">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="email">
									<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
								</div>
							</form>
                            <p class="mt-3 mb-0 text-center text-lg-start">
                                <i class="fab fa-whatsapp text-color-primary"></i><span class="text-color-light opacity-7 ps-2">(218) 92 5160515</span>
                                <i class="far fa-envelope text-color-primary ms-4"></i><a href="mailto:info@deadlinee.com" class="opacity-7 ps-2 text-color-light">info@Deadline.com</a>
                            </p>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2 bg-transparent footer-top-light-border">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
								<p>Deadline © Copyright 2021.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('vendor/lazysizes/lazysizes.min.js')}}"></script>
		<script src="{{asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{asset('vendor/vivus/vivus.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('js/theme.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('js/theme.init.js')}}"></script>
		<!-- Examples -->
		<script src="{{asset('js/examples/examples.lightboxes.js')}}"></script>

	</body>
</html>
