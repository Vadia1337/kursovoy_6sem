@extends('LinksAndScripts')
@section('main')
<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-md-5">
									<div class="card">
										<div class="card-body">
											<div class="text-center title-style mb-6">
												<h1 class="mb-2">Авторизация</h1>
												<hr>
												<div id="errors"><p class="text-muted">Войдите в свой аккаунт</p></div>
											</div>
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-user"></i>
													</div>
												</div>
												<input id="login-form-login" type="text" class="form-control" placeholder="Логин">
											</div>
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-lock"></i>
													</div>
												</div>
												<input id="login-form-pass" type="password" class="form-control" placeholder="Пароль">
											</div>
											<div class="row">
												<div class="col-12">
													<button id="login-btn" type="button" class="btn  btn-primary btn-block px-4">Войти</button>
												</div>
												<div class="col-12 text-center">
													<a href="forgot-password.html" class="btn btn-link box-shadow-0 px-0">Забыли пароль?</a>
												</div>
											</div>
											<div class="text-center pt-4">
												<div class="font-weight-normal fs-16">У вас нет аккаунта? <a class="btn-link font-weight-normal" href="/register">Зарегистрируйтесь</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection