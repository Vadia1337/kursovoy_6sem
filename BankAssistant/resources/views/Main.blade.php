@extends('MainPage')

@section('main_content')
<!--Page header-->
                        <div class="page-header">
							<div class="page-leftheader">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/"><i class="fe fe-home mr-2 fs-14"></i>Личный кабинет</a></li>
								</ol>
							</div>
							
						</div>
						<!--End Page header-->

						<!-- Row-1 -->
                    <center>
                        <h4 class="page-title mb-0">Ваши банковские продукты</h4>
                        <div id="select-prod">
                          <button id="add-new-prod-btn" type="button" class="btn btn-primary">Добавить продукт <i class="fa fa-plus fa-spin ml-2"></i></button>
                        </div>
                    </center><br><br>
                        
						<div class="row btn-click-product">
						@if (isset($products))	
						@foreach ($products as $prod)
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0 ">
									<div id="{{ $prod->name }}&&&{{ $prod->id }}" class="card-body">
										<p id="{{ $prod->name }}&&&{{ $prod->id }}" class=" mb-1 ">{{ $prod->name }}</p>
										<h2 id="{{ $prod->name }}&&&{{ $prod->id }}" class="mb-1 number-font">{{ $prod->sum  }} Руб</h2>
										@if($prod->categ == 1)
										<small id="{{ $prod->name }}&&&{{ $prod->id }}" class="fs-12 text-muted">Ожидаемая прибыль: {{ $prod->pribil }}</small>
										<small id="{{ $prod->name }}&&&{{ $prod->id }}" class="fs-12 text-muted">Ежемесячная выплата: {{ $prod->platezh }} Руб</small>
                                        @elseif ($prod->categ == 2)
										<small id="{{ $prod->name }}&&&{{ $prod->id }}" class="fs-12 text-muted">Ожидаемая переплата: {{ $prod->pribil }}</small>
										<small id="{{ $prod->name }}&&&{{ $prod->id }}" class="fs-12 text-muted">Ежемесячный платеж: {{ $prod->platezh }} Руб</small>
										@endif
										<span class="ratio bg-warning">{{ $prod->stavka }}</span>
										<span class="ratio-text text-muted">{{ $prod->startdate }}</span>
									</div>
									@if ($prod->categ == 1)
									<div id="apexchartsjsl0kdrth" class="apexcharts-canvas apexchartsjsl0kdrth light" style="width: 276px; height: 60px;"><svg id="SvgjsSvg1058" width="276" height="60" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1060" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1059"><clipPath id="gridRectMaskjsl0kdrth"><rect id="SvgjsRect1065" width="278" height="62" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskjsl0kdrth"><rect id="SvgjsRect1066" width="278" height="62" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1072" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1073" stop-opacity="0.65" stop-color="rgba(45,206,137,0.65)" offset="0"></stop><stop id="SvgjsStop1074" stop-opacity="0.5" stop-color="rgba(150,231,196,0.5)" offset="1"></stop><stop id="SvgjsStop1075" stop-opacity="0.5" stop-color="rgba(150,231,196,0.5)" offset="1"></stop></linearGradient><filter id="SvgjsFilter1078" filterUnits="userSpaceOnUse"><feFlood id="SvgjsFeFlood1079" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood1079Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1080" in="SvgjsFeFlood1079Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1080Out"></feComposite><feOffset id="SvgjsFeOffset1081" dx="2" dy="2" result="SvgjsFeOffset1081Out" in="SvgjsFeComposite1080Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1082" stdDeviation="3 " result="SvgjsFeGaussianBlur1082Out" in="SvgjsFeOffset1081Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1083" result="SvgjsFeMerge1083Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1084" in="SvgjsFeGaussianBlur1082Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1085" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1086" in="SourceGraphic" in2="SvgjsFeMerge1083Out" mode="normal" result="SvgjsFeBlend1086Out"></feBlend></filter><filter id="SvgjsFilter1089" filterUnits="userSpaceOnUse"><feFlood id="SvgjsFeFlood1090" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood1090Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1091" in="SvgjsFeFlood1090Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1091Out"></feComposite><feOffset id="SvgjsFeOffset1092" dx="2" dy="2" result="SvgjsFeOffset1092Out" in="SvgjsFeComposite1091Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1093" stdDeviation="3 " result="SvgjsFeGaussianBlur1093Out" in="SvgjsFeOffset1092Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1094" result="SvgjsFeMerge1094Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1095" in="SvgjsFeGaussianBlur1093Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1096" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1097" in="SourceGraphic" in2="SvgjsFeMerge1094Out" mode="normal" result="SvgjsFeBlend1097Out"></feBlend></filter></defs><line id="SvgjsLine1064" x1="0" y1="0" x2="0" y2="60" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="60" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1098" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1099" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1102" class="apexcharts-grid"><line id="SvgjsLine1104" x1="0" y1="60" x2="276" y2="60" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1103" x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1068" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1069" class="apexcharts-series" seriesName="TotalxUser" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1076" d="M0 60L0 37.41935483870968C4.199999999999999 37.41935483870968 7.800000000000001 34.83870967741935 12 34.83870967741935C16.2 34.83870967741935 19.8 -7.105427357601002e-15 24 -7.105427357601002e-15C28.2 -7.105427357601002e-15 31.8 27.096774193548384 36 27.096774193548384C40.2 27.096774193548384 43.8 35.483870967741936 48 35.483870967741936C52.2 35.483870967741936 55.8 20.645161290322577 60 20.645161290322577C64.2 20.645161290322577 67.8 25.16129032258064 72 25.16129032258064C76.2 25.16129032258064 79.8 47.74193548387097 84 47.74193548387097C88.2 47.74193548387097 91.8 33.54838709677419 96 33.54838709677419C100.2 33.54838709677419 103.8 37.41935483870968 108 37.41935483870968C112.2 37.41935483870968 115.8 40 120 40C124.2 40 127.8 32.258064516129025 132 32.258064516129025C136.2 32.258064516129025 139.8 36.12903225806451 144 36.12903225806451C148.2 36.12903225806451 151.8 25.806451612903224 156 25.806451612903224C160.2 25.806451612903224 163.8 30.96774193548387 168 30.96774193548387C172.2 30.96774193548387 175.8 30.32258064516129 180 30.32258064516129C184.2 30.32258064516129 187.8 23.87096774193548 192 23.87096774193548C196.2 23.87096774193548 199.8 25.16129032258064 204 25.16129032258064C208.2 25.16129032258064 211.8 40 216 40C220.2 40 223.8 18.064516129032256 228 18.064516129032256C232.2 18.064516129032256 235.8 19.999999999999993 240 19.999999999999993C244.2 19.999999999999993 247.8 42.58064516129032 252 42.58064516129032C256.2 42.58064516129032 259.8 60 264 60C268.2 60 271.8 44.516129032258064 276 44.516129032258064C276 44.516129032258064 276 44.516129032258064 276 60M276 44.516129032258064C276 44.516129032258064 276 44.516129032258064 276 44.516129032258064 " fill="url(#SvgjsLinearGradient1072)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskjsl0kdrth)" filter="url(#SvgjsFilter1078)" pathTo="M 0 60L 0 37.41935483870968C 4.199999999999999 37.41935483870968 7.800000000000001 34.83870967741935 12 34.83870967741935C 16.2 34.83870967741935 19.8 -7.105427357601002e-15 24 -7.105427357601002e-15C 28.2 -7.105427357601002e-15 31.8 27.096774193548384 36 27.096774193548384C 40.2 27.096774193548384 43.8 35.483870967741936 48 35.483870967741936C 52.2 35.483870967741936 55.8 20.645161290322577 60 20.645161290322577C 64.2 20.645161290322577 67.8 25.16129032258064 72 25.16129032258064C 76.2 25.16129032258064 79.8 47.74193548387097 84 47.74193548387097C 88.2 47.74193548387097 91.8 33.54838709677419 96 33.54838709677419C 100.2 33.54838709677419 103.8 37.41935483870968 108 37.41935483870968C 112.2 37.41935483870968 115.8 40 120 40C 124.2 40 127.8 32.258064516129025 132 32.258064516129025C 136.2 32.258064516129025 139.8 36.12903225806451 144 36.12903225806451C 148.2 36.12903225806451 151.8 25.806451612903224 156 25.806451612903224C 160.2 25.806451612903224 163.8 30.96774193548387 168 30.96774193548387C 172.2 30.96774193548387 175.8 30.32258064516129 180 30.32258064516129C 184.2 30.32258064516129 187.8 23.87096774193548 192 23.87096774193548C 196.2 23.87096774193548 199.8 25.16129032258064 204 25.16129032258064C 208.2 25.16129032258064 211.8 40 216 40C 220.2 40 223.8 18.064516129032256 228 18.064516129032256C 232.2 18.064516129032256 235.8 19.999999999999993 240 19.999999999999993C 244.2 19.999999999999993 247.8 42.58064516129032 252 42.58064516129032C 256.2 42.58064516129032 259.8 60 264 60C 268.2 60 271.8 44.516129032258064 276 44.516129032258064C 276 44.516129032258064 276 44.516129032258064 276 60M 276 44.516129032258064z" pathFrom="M -1 60L -1 60L 12 60L 24 60L 36 60L 48 60L 60 60L 72 60L 84 60L 96 60L 108 60L 120 60L 132 60L 144 60L 156 60L 168 60L 180 60L 192 60L 204 60L 216 60L 228 60L 240 60L 252 60L 264 60L 276 60"></path><path id="SvgjsPath1087" d="M0 37.41935483870968C4.199999999999999 37.41935483870968 7.800000000000001 34.83870967741935 12 34.83870967741935C16.2 34.83870967741935 19.8 -7.105427357601002e-15 24 -7.105427357601002e-15C28.2 -7.105427357601002e-15 31.8 27.096774193548384 36 27.096774193548384C40.2 27.096774193548384 43.8 35.483870967741936 48 35.483870967741936C52.2 35.483870967741936 55.8 20.645161290322577 60 20.645161290322577C64.2 20.645161290322577 67.8 25.16129032258064 72 25.16129032258064C76.2 25.16129032258064 79.8 47.74193548387097 84 47.74193548387097C88.2 47.74193548387097 91.8 33.54838709677419 96 33.54838709677419C100.2 33.54838709677419 103.8 37.41935483870968 108 37.41935483870968C112.2 37.41935483870968 115.8 40 120 40C124.2 40 127.8 32.258064516129025 132 32.258064516129025C136.2 32.258064516129025 139.8 36.12903225806451 144 36.12903225806451C148.2 36.12903225806451 151.8 25.806451612903224 156 25.806451612903224C160.2 25.806451612903224 163.8 30.96774193548387 168 30.96774193548387C172.2 30.96774193548387 175.8 30.32258064516129 180 30.32258064516129C184.2 30.32258064516129 187.8 23.87096774193548 192 23.87096774193548C196.2 23.87096774193548 199.8 25.16129032258064 204 25.16129032258064C208.2 25.16129032258064 211.8 40 216 40C220.2 40 223.8 18.064516129032256 228 18.064516129032256C232.2 18.064516129032256 235.8 19.999999999999993 240 19.999999999999993C244.2 19.999999999999993 247.8 42.58064516129032 252 42.58064516129032C256.2 42.58064516129032 259.8 60 264 60C268.2 60 271.8 44.516129032258064 276 44.516129032258064C276 44.516129032258064 276 44.516129032258064 276 44.516129032258064 " fill="none" fill-opacity="1" stroke="#2dce89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskjsl0kdrth)" filter="url(#SvgjsFilter1089)" pathTo="M 0 37.41935483870968C 4.199999999999999 37.41935483870968 7.800000000000001 34.83870967741935 12 34.83870967741935C 16.2 34.83870967741935 19.8 -7.105427357601002e-15 24 -7.105427357601002e-15C 28.2 -7.105427357601002e-15 31.8 27.096774193548384 36 27.096774193548384C 40.2 27.096774193548384 43.8 35.483870967741936 48 35.483870967741936C 52.2 35.483870967741936 55.8 20.645161290322577 60 20.645161290322577C 64.2 20.645161290322577 67.8 25.16129032258064 72 25.16129032258064C 76.2 25.16129032258064 79.8 47.74193548387097 84 47.74193548387097C 88.2 47.74193548387097 91.8 33.54838709677419 96 33.54838709677419C 100.2 33.54838709677419 103.8 37.41935483870968 108 37.41935483870968C 112.2 37.41935483870968 115.8 40 120 40C 124.2 40 127.8 32.258064516129025 132 32.258064516129025C 136.2 32.258064516129025 139.8 36.12903225806451 144 36.12903225806451C 148.2 36.12903225806451 151.8 25.806451612903224 156 25.806451612903224C 160.2 25.806451612903224 163.8 30.96774193548387 168 30.96774193548387C 172.2 30.96774193548387 175.8 30.32258064516129 180 30.32258064516129C 184.2 30.32258064516129 187.8 23.87096774193548 192 23.87096774193548C 196.2 23.87096774193548 199.8 25.16129032258064 204 25.16129032258064C 208.2 25.16129032258064 211.8 40 216 40C 220.2 40 223.8 18.064516129032256 228 18.064516129032256C 232.2 18.064516129032256 235.8 19.999999999999993 240 19.999999999999993C 244.2 19.999999999999993 247.8 42.58064516129032 252 42.58064516129032C 256.2 42.58064516129032 259.8 60 264 60C 268.2 60 271.8 44.516129032258064 276 44.516129032258064" pathFrom="M -1 60L -1 60L 12 60L 24 60L 36 60L 48 60L 60 60L 72 60L 84 60L 96 60L 108 60L 120 60L 132 60L 144 60L 156 60L 168 60L 180 60L 192 60L 204 60L 216 60L 228 60L 240 60L 252 60L 264 60L 276 60"></path><g id="SvgjsG1070" class="apexcharts-series-markers-wrap"></g><g id="SvgjsG1071" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1105" x1="0" y1="0" x2="276" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1106" x1="0" y1="0" x2="276" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1107" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1108" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1109" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1063" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1100" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1101" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div></div>
								    @elseif ($prod->categ == 2)
                                    <div id="apexchartsekx7hfff" class="apexcharts-canvas apexchartsekx7hfff light" style="width: 276px; height: 60px;"><svg id="SvgjsSvg1060" width="276" height="60" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1062" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1061"><clipPath id="gridRectMaskekx7hfff"><rect id="SvgjsRect1067" width="278" height="62" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskekx7hfff"><rect id="SvgjsRect1068" width="278" height="62" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1074" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1075" stop-opacity="0.65" stop-color="rgba(250,5,122,0.65)" offset="0"></stop><stop id="SvgjsStop1076" stop-opacity="0.5" stop-color="rgba(253,130,189,0.5)" offset="1"></stop><stop id="SvgjsStop1077" stop-opacity="0.5" stop-color="rgba(253,130,189,0.5)" offset="1"></stop></linearGradient><filter id="SvgjsFilter1080" filterUnits="userSpaceOnUse"><feFlood id="SvgjsFeFlood1081" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood1081Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1082" in="SvgjsFeFlood1081Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1082Out"></feComposite><feOffset id="SvgjsFeOffset1083" dx="2" dy="2" result="SvgjsFeOffset1083Out" in="SvgjsFeComposite1082Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1084" stdDeviation="3 " result="SvgjsFeGaussianBlur1084Out" in="SvgjsFeOffset1083Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1085" result="SvgjsFeMerge1085Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1086" in="SvgjsFeGaussianBlur1084Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1087" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1088" in="SourceGraphic" in2="SvgjsFeMerge1085Out" mode="normal" result="SvgjsFeBlend1088Out"></feBlend></filter><filter id="SvgjsFilter1091" filterUnits="userSpaceOnUse"><feFlood id="SvgjsFeFlood1092" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood1092Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1093" in="SvgjsFeFlood1092Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1093Out"></feComposite><feOffset id="SvgjsFeOffset1094" dx="2" dy="2" result="SvgjsFeOffset1094Out" in="SvgjsFeComposite1093Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1095" stdDeviation="3 " result="SvgjsFeGaussianBlur1095Out" in="SvgjsFeOffset1094Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1096" result="SvgjsFeMerge1096Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1097" in="SvgjsFeGaussianBlur1095Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1098" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1099" in="SourceGraphic" in2="SvgjsFeMerge1096Out" mode="normal" result="SvgjsFeBlend1099Out"></feBlend></filter></defs><line id="SvgjsLine1066" x1="0" y1="0" x2="0" y2="60" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="60" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1100" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1101" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1104" class="apexcharts-grid"><line id="SvgjsLine1106" x1="0" y1="60" x2="276" y2="60" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1105" x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1070" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1071" class="apexcharts-series" seriesName="TotalxSales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1078" d="M 0 60L 0 37.41935483870968C 4.199999999999999 37.41935483870968 7.800000000000001 33.54838709677419 12 33.54838709677419C 16.2 33.54838709677419 19.8 32.258064516129025 24 32.258064516129025C 28.2 32.258064516129025 31.8 42.58064516129032 36 42.58064516129032C 40.2 42.58064516129032 43.8 25.16129032258064 48 25.16129032258064C 52.2 25.16129032258064 55.8 44.516129032258064 60 44.516129032258064C 64.2 44.516129032258064 67.8 30.32258064516129 72 30.32258064516129C 76.2 30.32258064516129 79.8 -7.105427357601002e-15 84 -7.105427357601002e-15C 88.2 -7.105427357601002e-15 91.8 25.16129032258064 96 25.16129032258064C 100.2 25.16129032258064 103.8 25.806451612903224 108 25.806451612903224C 112.2 25.806451612903224 115.8 18.064516129032256 120 18.064516129032256C 124.2 18.064516129032256 127.8 20.645161290322577 132 20.645161290322577C 136.2 20.645161290322577 139.8 60 144 60C 148.2 60 151.8 23.87096774193548 156 23.87096774193548C 160.2 23.87096774193548 163.8 36.12903225806451 168 36.12903225806451C 172.2 36.12903225806451 175.8 37.41935483870968 180 37.41935483870968C 184.2 37.41935483870968 187.8 19.999999999999993 192 19.999999999999993C 196.2 19.999999999999993 199.8 47.74193548387097 204 47.74193548387097C 208.2 47.74193548387097 211.8 40 216 40C 220.2 40 223.8 34.83870967741935 228 34.83870967741935C 232.2 34.83870967741935 235.8 35.483870967741936 240 35.483870967741936C 244.2 35.483870967741936 247.8 27.096774193548384 252 27.096774193548384C 256.2 27.096774193548384 259.8 42.58064516129032 264 42.58064516129032C 268.2 42.58064516129032 271.8 30.96774193548387 276 30.96774193548387C 276 30.96774193548387 276 30.96774193548387 276 60M 276 30.96774193548387z" fill="url(#SvgjsLinearGradient1074)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskekx7hfff)" filter="url(#SvgjsFilter1080)" pathTo="M 0 60L 0 37.41935483870968C 4.199999999999999 37.41935483870968 7.800000000000001 33.54838709677419 12 33.54838709677419C 16.2 33.54838709677419 19.8 32.258064516129025 24 32.258064516129025C 28.2 32.258064516129025 31.8 42.58064516129032 36 42.58064516129032C 40.2 42.58064516129032 43.8 25.16129032258064 48 25.16129032258064C 52.2 25.16129032258064 55.8 44.516129032258064 60 44.516129032258064C 64.2 44.516129032258064 67.8 30.32258064516129 72 30.32258064516129C 76.2 30.32258064516129 79.8 -7.105427357601002e-15 84 -7.105427357601002e-15C 88.2 -7.105427357601002e-15 91.8 25.16129032258064 96 25.16129032258064C 100.2 25.16129032258064 103.8 25.806451612903224 108 25.806451612903224C 112.2 25.806451612903224 115.8 18.064516129032256 120 18.064516129032256C 124.2 18.064516129032256 127.8 20.645161290322577 132 20.645161290322577C 136.2 20.645161290322577 139.8 60 144 60C 148.2 60 151.8 23.87096774193548 156 23.87096774193548C 160.2 23.87096774193548 163.8 36.12903225806451 168 36.12903225806451C 172.2 36.12903225806451 175.8 37.41935483870968 180 37.41935483870968C 184.2 37.41935483870968 187.8 19.999999999999993 192 19.999999999999993C 196.2 19.999999999999993 199.8 47.74193548387097 204 47.74193548387097C 208.2 47.74193548387097 211.8 40 216 40C 220.2 40 223.8 34.83870967741935 228 34.83870967741935C 232.2 34.83870967741935 235.8 35.483870967741936 240 35.483870967741936C 244.2 35.483870967741936 247.8 27.096774193548384 252 27.096774193548384C 256.2 27.096774193548384 259.8 42.58064516129032 264 42.58064516129032C 268.2 42.58064516129032 271.8 30.96774193548387 276 30.96774193548387C 276 30.96774193548387 276 30.96774193548387 276 60M 276 30.96774193548387z" pathFrom="M -1 60L -1 60L 12 60L 24 60L 36 60L 48 60L 60 60L 72 60L 84 60L 96 60L 108 60L 120 60L 132 60L 144 60L 156 60L 168 60L 180 60L 192 60L 204 60L 216 60L 228 60L 240 60L 252 60L 264 60L 276 60"></path><path id="SvgjsPath1089" d="M 0 37.41935483870968C 4.199999999999999 37.41935483870968 7.800000000000001 33.54838709677419 12 33.54838709677419C 16.2 33.54838709677419 19.8 32.258064516129025 24 32.258064516129025C 28.2 32.258064516129025 31.8 42.58064516129032 36 42.58064516129032C 40.2 42.58064516129032 43.8 25.16129032258064 48 25.16129032258064C 52.2 25.16129032258064 55.8 44.516129032258064 60 44.516129032258064C 64.2 44.516129032258064 67.8 30.32258064516129 72 30.32258064516129C 76.2 30.32258064516129 79.8 -7.105427357601002e-15 84 -7.105427357601002e-15C 88.2 -7.105427357601002e-15 91.8 25.16129032258064 96 25.16129032258064C 100.2 25.16129032258064 103.8 25.806451612903224 108 25.806451612903224C 112.2 25.806451612903224 115.8 18.064516129032256 120 18.064516129032256C 124.2 18.064516129032256 127.8 20.645161290322577 132 20.645161290322577C 136.2 20.645161290322577 139.8 60 144 60C 148.2 60 151.8 23.87096774193548 156 23.87096774193548C 160.2 23.87096774193548 163.8 36.12903225806451 168 36.12903225806451C 172.2 36.12903225806451 175.8 37.41935483870968 180 37.41935483870968C 184.2 37.41935483870968 187.8 19.999999999999993 192 19.999999999999993C 196.2 19.999999999999993 199.8 47.74193548387097 204 47.74193548387097C 208.2 47.74193548387097 211.8 40 216 40C 220.2 40 223.8 34.83870967741935 228 34.83870967741935C 232.2 34.83870967741935 235.8 35.483870967741936 240 35.483870967741936C 244.2 35.483870967741936 247.8 27.096774193548384 252 27.096774193548384C 256.2 27.096774193548384 259.8 42.58064516129032 264 42.58064516129032C 268.2 42.58064516129032 271.8 30.96774193548387 276 30.96774193548387" fill="none" fill-opacity="1" stroke="#fa057a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskekx7hfff)" filter="url(#SvgjsFilter1091)" pathTo="M 0 37.41935483870968C 4.199999999999999 37.41935483870968 7.800000000000001 33.54838709677419 12 33.54838709677419C 16.2 33.54838709677419 19.8 32.258064516129025 24 32.258064516129025C 28.2 32.258064516129025 31.8 42.58064516129032 36 42.58064516129032C 40.2 42.58064516129032 43.8 25.16129032258064 48 25.16129032258064C 52.2 25.16129032258064 55.8 44.516129032258064 60 44.516129032258064C 64.2 44.516129032258064 67.8 30.32258064516129 72 30.32258064516129C 76.2 30.32258064516129 79.8 -7.105427357601002e-15 84 -7.105427357601002e-15C 88.2 -7.105427357601002e-15 91.8 25.16129032258064 96 25.16129032258064C 100.2 25.16129032258064 103.8 25.806451612903224 108 25.806451612903224C 112.2 25.806451612903224 115.8 18.064516129032256 120 18.064516129032256C 124.2 18.064516129032256 127.8 20.645161290322577 132 20.645161290322577C 136.2 20.645161290322577 139.8 60 144 60C 148.2 60 151.8 23.87096774193548 156 23.87096774193548C 160.2 23.87096774193548 163.8 36.12903225806451 168 36.12903225806451C 172.2 36.12903225806451 175.8 37.41935483870968 180 37.41935483870968C 184.2 37.41935483870968 187.8 19.999999999999993 192 19.999999999999993C 196.2 19.999999999999993 199.8 47.74193548387097 204 47.74193548387097C 208.2 47.74193548387097 211.8 40 216 40C 220.2 40 223.8 34.83870967741935 228 34.83870967741935C 232.2 34.83870967741935 235.8 35.483870967741936 240 35.483870967741936C 244.2 35.483870967741936 247.8 27.096774193548384 252 27.096774193548384C 256.2 27.096774193548384 259.8 42.58064516129032 264 42.58064516129032C 268.2 42.58064516129032 271.8 30.96774193548387 276 30.96774193548387" pathFrom="M -1 60L -1 60L 12 60L 24 60L 36 60L 48 60L 60 60L 72 60L 84 60L 96 60L 108 60L 120 60L 132 60L 144 60L 156 60L 168 60L 180 60L 192 60L 204 60L 216 60L 228 60L 240 60L 252 60L 264 60L 276 60"></path><g id="SvgjsG1072" class="apexcharts-series-markers-wrap"></g><g id="SvgjsG1073" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1107" x1="0" y1="0" x2="276" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1108" x1="0" y1="0" x2="276" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1109" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1110" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1111" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1065" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1102" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1103" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div></div>
									@endif
									<div class="resize-triggers"><div class="expand-trigger"><div style="width: 277px; height: 188px;"></div></div><div class="contract-trigger"></div></div>	
								</div>
							</div>
							@endforeach
                            @endif

						</div>

						<!-- End Row-1 -->

						<!-- Row-2 -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Аналитика счета</h3>
										<div class="card-options">
											
										</div>
									</div>
									<div class="card-body">
										
										     <div id="echart1" style="display: none;"></div>
										
										<div class="chartjs-wrapper-demo">
											<canvas id="chartStacked1" class="h-300"></canvas>
										</div>
										<div class="text-center mt-2">
											<span class="mr-4"><span class="dot-label bg-primary"></span>Приход (Руб)</span>
											<span><span class="dot-label bg-secondary"></span>Расход (Руб)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-2 -->

						<!-- Row-3 -->
						<div class="row">
							<div class="col-xl-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Рекомендации по валютным сделкам</h3>
										<div class="card-options">
											
										</div>
									</div>
									<div class="card-body">
										<div class="list-card">
											<span class="bg-warning list-bar"></span>
											<div class="row align-items-center">
												<div class="col-9 col-sm-9">
													<div class="media mt-0">
														<img src="../../assets/images/flags/us.svg" alt="img" class="avatar brround avatar-md mr-3">
														<div class="media-body">
															<div class="d-md-flex align-items-center mt-1">
																<h6 class="mb-1">USD/RUB</h6>
															</div>
															<span class="mb-0 fs-13 text-muted">Совет: <span class="ml-2 text-success fs-13 font-weight-semibold">Покупать</span></span>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										<div class="list-card">
											<span class="bg-info list-bar"></span>
											<div class="row align-items-center">
												<div class="col-9 col-sm-9">
													<div class="media mt-0">
														<img src="../../assets/images/flags/in.svg" alt="img" class="avatar brround avatar-md mr-3">
														<div class="media-body">
															<div class="d-md-flex align-items-center mt-1">
																<h6 class="mb-1">Indian Rupee/RUB</h6>
															</div>
															<span class="mb-0 fs-13 text-muted">Совет: <span class="ml-2 text-danger fs-13 font-weight-semibold">Продавать</span></span>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										<div class="list-card">
											<span class="bg-danger list-bar"></span>
											<div class="row align-items-center">
												<div class="col-9 col-sm-9">
													<div class="media mt-0">
														<img src="../../assets/images/flags/eu.svg" alt="img" class="avatar brround avatar-md mr-3">
														<div class="media-body">
															<div class="d-md-flex align-items-center mt-1">
																<h6 class="mb-1">EUR/RUB</h6>
															</div>
															<span class="mb-0 fs-13 text-muted">Совет: <span class="ml-2 text-success fs-13 font-weight-semibold">Покупать</span></span>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										<div class="list-card">
											<span class="bg-success list-bar"></span>
											<div class="row align-items-center">
												<div class="col-9 col-sm-9">
													<div class="media mt-0">
														<img src="../../assets/images/flags/ca.svg" alt="img" class="avatar brround avatar-md mr-3">
														<div class="media-body">
															<div class="d-md-flex align-items-center mt-1">
																<h6 class="mb-1">Canada $/RUB</h6>
															</div>
															<span class="mb-0 fs-13 text-muted">Совет: <span class="ml-2 text-danger fs-13 font-weight-semibold">Продавать</span></span>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										<div class="list-card">
											<span class="bg-primary list-bar"></span>
											<div class="row align-items-center">
												<div class="col-9 col-sm-9">
													<div class="media mt-0">
														<img src="../../assets/images/flags/br.svg" alt="img" class="avatar brround avatar-md mr-3">
														<div class="media-body">
															<div class="d-md-flex align-items-center mt-1">
																<h6 class="mb-1">Brazil BRL/RUB</h6>
															</div>
															<span class="mb-0 fs-13 text-muted">Совет: <span class="ml-2 text-success fs-13 font-weight-semibold">Покупать</span></span>
														</div>
													</div>
												</div>
											
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4  col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Московская биржа</h3>
										<div class="card-options">
										</div>
									</div>
									<div class="card-body">
										<div class="country-card">
											<div class="mb-5">
												<div class="d-flex">
													<span class=""><img src="../../assets/images/flags/us.svg" class="w-5 h-5 mr-2" alt="">USD/RUB</span>
													<div class="ml-auto"><span class="text-success mr-1"><i class="fe fe-trending-up"></i></span><span class="number-font">{{$kursival->Valute->USD->Previous}} Руб</span></div>
												</div>
												<div class="progress h-2  mt-1">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 80%"></div>
												</div>
											</div>
											<div class="mb-5">
												<div class="d-flex">
													<span class=""><img src="../../assets/images/flags/in.svg" class="w-5 h-5 mr-2" alt="">Indian Rupee/RUB</span>
													<div class="ml-auto"><span class="text-danger mr-1"><i class="fe fe-trending-down"></i></span><span class="number-font">{{$kursival->Valute->INR->Previous}} Руб</span></div>
												</div>
												<div class="progress h-2  mt-1">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 60%"></div>
												</div>
											</div>
											<div class="mb-5">
												<div class="d-flex">
													<span class=""><img src="../../assets/images/flags/ca.svg" class="w-5 h-5 mr-2" alt="">Canada $/RUB</span>
													<div class="ml-auto"><span class="text-danger mr-1"><i class="fe fe-trending-down"></i></span><span class="number-font">{{$kursival->Valute->CAD->Previous}} Руб</span></div>
												</div>
												<div class="progress h-2  mt-1">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 80%"></div>
												</div>
											</div>
											<div class="mb-5">
												<div class="d-flex">
													<span class=""><img src="../../assets/images/flags/eu.svg" class="w-5 h-5 mr-2" alt="">EUR/RUB</span>
													<div class="ml-auto"><span class="text-success mr-1"><i class="fe fe-trending-up"></i></span><span class="number-font">{{$kursival->Valute->EUR->Previous}} Руб</span></div>
												</div>
												<div class="progress h-2  mt-1">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-teal" style="width: 70%"></div>
												</div>
											</div>
											<div class="mb-5">
												<div class="d-flex">
													<span class=""><img src="../../assets/images/flags/br.svg" class="w-5 h-5 mr-2" alt="">Brazil BRL/RUB</span>
													<div class="ml-auto"><span class="text-success mr-1"><i class="fe fe-trending-up"></i></span><span class="number-font">{{$kursival->Valute->BRL->Previous}} Руб</span></div>
												</div>
												<div class="progress h-2  mt-1">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-indigo" style="width: 60%"></div>
												</div>
											</div>
											<div class="mb-0">
												<div class="d-flex">
													<span class=""><img src="../../assets/images/flags/au.svg" class="w-5 h-5 mr-2" alt="">Australia AUD/RUB</span>
													<div class="ml-auto"><span class="text-success mr-1"><i class="fe fe-trending-up"></i></span><span class="number-font">{{$kursival->Valute->AUD->Previous}} Руб</span></div>
												</div>
												<div class="progress h-2  mt-1">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 40%"></div>
												</div>
											</div>
											<br><br>
											<div class="mb-0">
											    <a href="https://www.cbr-xml-daily.ru/">API для курсов ЦБ РФ</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4  col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Действия с счетом</h3>
										<div class="card-options">
											
										</div>
									</div>
									<div style="height: 448px;" class="card-body">
										<div class="latest-timeline scrollbar3" id="scrollbar3">
											<ul class="timeline mb-0">
												<li class="mt-0">
													<div class="d-flex"><span class="time-data">{{Auth::user()->created_at}}</span><span class="ml-auto text-muted fs-11"></span></div>
													<p class="text-muted fs-12"><span class="text-info">{{Auth::user()->name}}</span> Выполнил действие:<a href="#" class="font-weight-semibold"> Регистрация</a></p>
												</li>
												@if (isset($products))	
						                          @foreach ($products as $prod)
												    <li class="mt-0">
													  <div class="d-flex"><span class="time-data">{{$prod->created_at}}</span><span class="ml-auto text-muted fs-11"></span></div>
													  <p class="text-muted fs-12"><span class="text-info">{{Auth::user()->name}}</span> Открыл:<a href="#" class="font-weight-semibold"> {{$prod->name}}</a></p>
												    </li>
												  @endforeach
                                                @endif
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-3 -->

						<!--Row-->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Ваш инвест портфель</h3>
										<div class="card-options">
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-vcenter text-nowrap mb-0 table-striped table-bordered border-top">
												<thead class="">
													<tr>
														<th>Название</th>
														<th>Текущая цена</th>
														<th>Цена покупки</th>
														<th>Кол-во</th>
														<th>Сумма</th>
														<th>Статус</th>
													</tr>
												</thead>
												<tbody>
													@if(isset($invests))
													@foreach ($invests as $invest)
													<tr>
														<td class="font-weight-bold"> {{ $invest->name }}</td>
														<td><span class="badge badge-primary">{{ $invest->price }}</span></td>
														<td>{{ $invest->price }}</td>
														<td>{{ $invest->kolvo }}</td>
														<td class="number-font">{{ $invest->sum }}</td>
														<td><i class="fa fa-check mr-1 text-success"></i> В портфеле</td>
													</tr>
													@endforeach
													@endif
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/Mainblade.js') }}"></script>
@if(isset($products))
<script> var arrayfromdb = {!! json_encode($products) !!}; </script>
@else
<script> var arrayfromdb = ''; </script>
@endif
@endsection