@extends('MainPage')

@section('links')
<link href="{{ asset('assets/css/range.css') }}" rel="stylesheet" />
@endsection

@section('main_content')
                        <div class="page-header">
							<div class="page-leftheader">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/"><i class="fe fe-home mr-2 fs-14"></i>Личный кабинет</a></li>
									<li class="breadcrumb-item"><a class="name-label-set" href="/vklad">Вклад</a></li>
								</ol>
							</div>
							
						</div>

                        <div class="row ">
							<div class="col-md-12">
								<div class="card body-plav-stavka">
									<div class="card-header">
										<div class="card-title">
										@if($products !="")
											Редактирование вклада
										@else
										    Расчет вклада
										@endif	
										</div>
									</div>
									<div class="card-body">
										<div id="wizard3">
											<h3>Параметры вклада</h3>
											<section>
												<div class="control-group form-group">
												    <label class="form-label">Сумма вклада</label>
													@if($products !="")
													<input id="input-sum" type="text" value="{{ $products->sum }}" class="form-control required" placeholder="Сумма">
                                                    @else
													<input id="input-sum" type="text" value="1 500 000 Р" class="form-control required" placeholder="Сумма">
													@endif
                                                    <div class="slidecontainer">
													@if($products !="")
													<input type="range" min="10000" max="9000000" value="{{ $products->sum }}" class="slider" id="myRange" onchange="outputUpdate(value)">
													@else
                                                    <input type="range" min="10000" max="9000000" value="1500000" class="slider" id="myRange" onchange="outputUpdate(value)">
													@endif
                                                    </div>

												</div>
											<div class="plav-stavka-ins">
												<div class="control-group form-group">
												<label class="form-label">Срок</label>
												<select class="form-control custom-select select input-vklad-select">
												    @if($products !="")
													<?php $val = $products->startdate;
													$val = substr($val, 0, strpos($val, ' ')); ?>
													<option value="<?php echo $val; ?>" selected>{{ $products->startdate }}</option>
													@else
													<option value="0" selected>Выберете срок вклада</option>
													@endif
													<option value="1">1 Мес</option>
													<option value="3">3 Мес</option>
													<option value="6">6 Мес</option>
													<option value="9">9 Мес</option>
													<option value="12">12 Мес</option>
													<option value="18">18 Мес</option>
													<option value="24">24 Мес</option>
													<option value="36">36 Мес</option>
													<option value="48">48 Мес</option>
													<option value="60">60 Мес</option>
											    </select>
												</div>
												@if($products !="")
												<?php $val = $products->stavka;
												$val = substr($val, 0, strpos($val, ' ')); ?>
												<div class="control-group form-group">
												    <label class="form-label">Ставка банка</label>
													<input value="{{ $val }}" type="number" step="0.5" class="form-control required input-vklad-stavka" placeholder="Ставка">
												</div>
												<div class="text-center">
                                                  <button name="del-product-btn" type="button" class="btn btn-primary">Удалить продукт <i class="fa fa-minus fa-spin ml-2"></i></button>
												</div>
												@else
												<div class="control-group form-group">
												    <label class="form-label">Ставка банка</label>
													<input type="number" step="0.5" class="form-control required input-vklad-stavka" placeholder="Ставка">
												</div>
												<div class="text-center">
                                                  <button name="plav-stavka-btn" type="button" class="btn btn-primary">Плавающая ставка <i class="fa fa-plus fa-spin ml-2"></i></button>
												</div>
												@endif
											</div>
											</section>
											<h3>Итог</h3>
											<section>
												<div class="table-responsive mg-t-20">
													<table class="table table-bordered">
														<tbody>
															<tr>
															    @if($products !="")
																<td class="set-id-product" name="{{ $products->id }}">Ставка</td>
																@else
																<td class="set-id-product" name="0">Ставка</td>
																@endif
																<td class="text-right"><h2 class="price text-right mb-0 stavka-out"></h2></td>
															</tr>
															<tr>
																<td><span>Срок</span></td>
																<td class="text-right"><h2 class="price text-right mb-0 srok-out"></h2></td>
															</tr>
															<tr>
																<td><span>Прибыль</span></td>
																<td class="text-right"><h2 class="price text-right mb-0 pribil-out"></h2></td>
															</tr>
															<tr>
																<td><span>Сумма в конце срока</span></td>
																<td><h2 class="price text-right mb-0 summ-out"></h2></td>
															</tr>
														</tbody>
													</table>
													<div class="text-center set-errors"></div>

												</div>
											</section>
										</div>
									</div>
								</div>
							</div>
						</div>

						
							<div class="row table-plav-stavka" style="display: none;">
									<div class="col-md-12 col-lg-12">
										<div class="card">
											<div class="card-header">
												<h3 class="card-title">Таблица расчетов</h3>
											</div>
											<div class="table-responsive">
												<table class="table card-table table-vcenter text-nowrap table-success tab-plav-stavka" >
													<thead  class="bg-success text-white">
														<tr >
															<th class="text-white">От</th>
															<th class="text-white">До</th>
															<th class="text-white">Ставка %</th>
															<th class="text-white">Прибыль за период</th>
														</tr>
													</thead>
													<tbody class="tbody-plav-stavka">

													</tbody>
												</table>
											</div>
											
										</div>
									</div>
							</div>

							<div class="col-md-12 chart-js-11" style="display: none;">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Сумма вклада и прибыль</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartStacked2" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						
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
<script src="{{ asset('assets/js/range.js') }}"></script>

<script src="{{ asset('assets/plugins/chart/chart.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>
@endsection