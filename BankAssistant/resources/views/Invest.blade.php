@extends('MainPage')

@section('links')
<link href="{{ asset('assets/css/range.css') }}" rel="stylesheet" />
@endsection

@section('main_content')
@if(!isset($numbofinvest))
                        <div class="page-header">
							<div class="page-leftheader">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/"><i class="fe fe-home mr-2 fs-14"></i>Личный кабинет</a></li>
                                    <li class="breadcrumb-item"><a class="name-label-set" href="/invest">Инвестиции</a></li>
								</ol>
							</div>						
						</div>
						<div class="text-center"><h2>Инвестиционные идеи</h2></div><br>
                        <div class="row invest-ideas">
							<div class="col-lg-4">
								<div class="card">
									<div id="1" class="card-body">
										<div id="1" class="mb-4 fs-14 font-weight-semibold">
											Инвестиции в золото
										</div>
										<div class="row">
											<div id="1" class="col">
												Годовая прибыль
											</div>
											<div class="col col-auto">
												<span class="text-success h5">+50%</span>
											</div>
										</div>
										<div class="progress progress-sm mb-3 mt-2">
											<div class="progress-bar bg-primary" style="width: 50%"></div>
										</div>
										<div class="row">
											<div class="col">
												<div class="mt-4">
													<h6 class="mb-1 fs-12">Цена ETF</h6>
													<h4 class="mb-0 font-weight-semibold">5 240 Р</h4>
												</div>
											</div>
											<div class="col col-auto">
												<div class="mt-4">
													<h6 class="mb-1 fs-12">Цена ETF через год</h6>
													<h4 class="mb-0 font-weight-semibold">7 860 Р</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div id="2" class="card-body">
										<div id="2" class="mb-4 fs-14 font-weight-semibold">
											Инвестиции в нефтяные компании
										</div>
										<div class="row">
											<div id="2" class="col">
											    Годовая прибыль
											</div>
											<div class="col col-auto">
												<span class="text-success h5">+25%</span>
											</div>
										</div>
										<div class="progress progress-sm mb-3 mt-2">
											<div class="progress-bar bg-secondary" style="width: 25%"></div>
										</div>
										<div class="row">
											<div class="col">
												<div class="mt-4">
													<h6 class="mb-1 fs-12">Цена ETF</h6>
													<h4 class="mb-0 font-weight-semibold">2 700 Р</h4>
												</div>
											</div>
											<div class="col col-auto">
												<div class="mt-4">
													<h6 class="mb-1 fs-12">Цена ETF через год</h6>
													<h4 class="mb-0 font-weight-semibold">3 375 Р</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div id="3" class="card-body">
										<div id="3" class="mb-4 fs-14 font-weight-semibold">
											Инвестиции в сельское хозяйство
										</div>
										<div class="row">
											<div id="3" class="col">
											    Годовая прибыль
											</div>
											<div class="col col-auto">
												<span class="text-success h5">+75%</span>
											</div>
										</div>
										<div class="progress progress-sm mb-3 mt-2">
											<div class="progress-bar bg-success" style="width: 75%"></div>
										</div>
										<div class="row">
											<div class="col">
												<div class="mt-4">
													<h6 class="mb-1 fs-12">Цена ETF</h6>
													<h4 class="mb-0 font-weight-semibold">25 000 Р</h4>
												</div>
											</div>
											<div class="col col-auto">
												<div class="mt-4">
													<h6 class="mb-1 fs-12">Цена ETF через год</h6>
													<h4 class="mb-0 font-weight-semibold">43 750 Р</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
@else
                        <div class="page-header">
							<div class="page-leftheader">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/"><i class="fe fe-home mr-2 fs-14"></i>Личный кабинет</a></li>
                                    <li class="breadcrumb-item"><a class="name-label-set" href="/invest">Инвестиции</a></li>
								</ol>
							</div>						
						</div>
                        <div class="row">
							<div class="col-md-12 wrapper wrapper-content">
								<div class="ibox card">
									<div class="card-body">
										<div class="ibox-content">
											<div class="row mb-3">
												<div class="col-md-12 col-lg-12">
													<div class="row">
														<div class="col-md-4">
															<div class="bg-light text-center br-4">
																<div class="p-2">
																	<img src="../../assets/images/invest/{{ $numbofinvest['img'] }}.jpg" alt="img" class="img-fluid w-100">
																</div>
															</div>
														</div>
														<div class="col-md-8">
															<h3 class="mb-1">
																<a href="#" class="text-navy name-invest">
																{{ $numbofinvest['Name'] }}
																</a>
															</h3>
															<br><br>
															<div>
																<h5>Описание</h5>
																<p>{{ $numbofinvest['Description'] }}</p>
															</div>
															<h3 class="font-weight-bold fs-30 invest-price">{{ $numbofinvest['Price'] }}</h3>
														</div>
													</div>
												</div>
											</div>
										</div>
										<h5>Покупка</h5>
										<div class="control-group form-group">
												    <label class="form-label">Кол-во ETF</label>
													<input type="number" step="1" class="form-control required input-invest" onchange="investchange(value)" placeholder="Количество штук">
										</div>
									   <div class="text-center">
										 <label class="form-label">Сумма:</label>
										 <label class="form-label out-sum-invest"></label>
									   </div>
									</div>
									<div class="ibox-content card-footer text-right">
										<a class="btn btn-success invest-buy-btn">Купить</a>
									</div>
								</div>
								
							</div>
						</div>
	@endif						
@endsection

@section('scripts')

<script src="{{ asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script> <!-- previous and next -->
<script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>

<script src="{{ asset('assets/plugins/formwizard/jquery.smartWizard.js') }}"></script>
<script src="{{ asset('assets/plugins/formwizard/fromwizard.js') }}"></script>

		<!-- INTERNAl Accordion-Wizard-Form js-->
<script src="{{ asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js') }}"></script>
<script src="{{ asset('assets/js/form-wizard.js') }}"></script>
<script src="{{ asset('assets/js/form-wizard2.js') }}"></script>

<script src="{{ asset('assets/js/investjs.js') }}"></script>
@endsection