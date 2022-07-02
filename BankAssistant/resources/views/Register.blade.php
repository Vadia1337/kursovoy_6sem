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
												<h1 class="mb-2">Регистрация</h1>
												<hr>
												<div id="errors"> <p class="text-muted">Создайте новый аккаунт</p> </div>
											</div>
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-user"></i>
													</div>
												</div>
												<input id="reg-form-login" type="text" class="form-control" placeholder="Логин">
											</div>
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-mail"></i>
													</div>
												</div>
												<input id="reg-form-email" type="text" class="form-control" placeholder="Почта">
											</div>
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-lock"></i>
													</div>
												</div>
												<input id="reg-form-pass" type="password" class="form-control" placeholder="Пароль">
											</div>
											<div class="row">
												<div class="col-12">
													<button id="reg-form-btn" type="button" class="btn  btn-primary btn-block px-4">Зарегистрироваться</button>
												</div>
											</div>
											<div class="text-center pt-4">
												<div class="font-weight-normal fs-16">Уже есть аккаунт? <a class="btn-link font-weight-normal" href="/login">Авторизуйтесь</a></div>
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