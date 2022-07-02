@extends('LinksAndScripts')
@section('main')
			<div class="page-main">

				<!--header-->
				<div class="hor-header header top-header">
					<div class="container">
						<div class="d-flex">
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<a class="header-brand" href="/">
                            <!-- <h2 class="header-brand-img desktop-lgo">Bank Assistant</h2> -->
								 <img src="{{ asset('assets/images/brand/logo.png') }}" width="150" height="75" class="desktop-lgo" alt="Bank Assistant logo">
								<!--<img src="{{ asset('assets/images/brand/logo1.png') }}" class="header-brand-img dark-logo" alt="Admitro logo">
								<img src="{{ asset('aassets/images/brand/favicon.png') }}" class="header-brand-img mobile-logo" alt="Admitro logo">
								<img src="{{ asset('assets/images/brand/favicon1.png') }}" class="header-brand-img darkmobile-logo" alt="Admitro logo"> -->
							</a>
							
							<!-- SEARCH -->
							<div class="d-flex order-lg-2 ml-auto">
								<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
									<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
										<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
									</svg>
								</a>
								
								<div class="dropdown header-notify">
									<a class="nav-link icon" data-toggle="dropdown">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707C3.105 15.48 3 15.734 3 16v2c0 .553.447 1 1 1h16c.553 0 1-.447 1-1v-2c0-.266-.105-.52-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707C6.895 14.52 7 14.266 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zM12 22c1.311 0 2.407-.834 2.818-2H9.182C9.593 21.166 10.689 22 12 22z"/></svg>
										<span class="pulse "></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
										<div class="dropdown-header">
											<h6 class="mb-0">Оповещения</h6>
										</div>
										<div class="notify-menu">

											<a href="#" class="dropdown-item border-bottom d-flex pl-4">
												<div class="notifyimg bg-info-transparent text-info"> <i class="ti-comment-alt"></i> </div>
												<div>
													<div class="font-weight-normal1">Добро пожаловать!</div>
													<div class="small text-muted">Недавно</div>
												</div>
											</a>

										</div>
									</div>
								</div>
								<div class="dropdown profile-dropdown">
									<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
										<span>
											<img src="{{ asset('assets/images/users/2.jpg') }}" alt="img" class="avatar avatar-md brround">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center user pb-0 font-weight-bold">{{Auth::user()->name}}</a>
											<span class="text-center user-semi-title">User</span>
											<div class="dropdown-divider"></div>
										</div>
										<a class="dropdown-item d-flex" href="#">
											<svg class="header-icon mr-3" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
											<div class="">Профиль</div>
										</a>
										<a class="dropdown-item d-flex" href="/logout">
											<svg class="header-icon mr-3" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg>
											<div class="">Выйти</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/header-->

<!--/Horizontal-main -->
				<div class="sticky">
					<div class="horizontal-main hor-menu clearfix">
						<div class="horizontal-mainwrapper container clearfix">
							<!--Nav-->
							<nav class="horizontalMenu clearfix">
								<ul class="horizontalMenu-list" style="width: 660px;">
									<li aria-haspopup="true">
										<a href="/" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
											Главная
										</a>
									</li>
									<li aria-haspopup="true">
										<a href="/vklad" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
											Вклады
										</a>
									</li>
                                    <li aria-haspopup="true">
										<a href="/kredit" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
											Кредиты
										</a>
									</li>
                                    <li aria-haspopup="true">
										<a href="/ipoteka" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
											Ипотека
										</a>
									</li>
                                    <li aria-haspopup="true">
										<a href="/invest" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
											Инвестиции
										</a>
									</li>

								</ul>
							</nav>
							<!--Nav-->
						</div>
				        </div>
				 </div>
				<!--/Horizontal-main -->

				<!-- Hor-Content -->
				<div class="hor-content main-content">
					<div class="container">


                    @yield('main_content')

						

					</div>
				</div>
				<!-- End hor-content-->
			</div>
@endsection