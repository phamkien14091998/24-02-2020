@extends('layouts.index')
@section('main')

    {{-- main  --}}

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>タイムテーブルログ</h1>
			</section>

			<!-- Main content -->
			<section class="content container-fluid">

				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<div id="bg-hearder" class="col-md-12">
								<div class="col-md-12">
									<br>
									<div class="col-md-2" >
										<select   class='Select col-md-12'  class="browser-default custom-select custom-select-lg mb-3">
											<option selected>エリア</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
	
									<div class="col-md-2">
										<input   class="Select col-md-12" placeholder="プレイ開始" type="text" />
									</div>
									
									<div class="col-md-2" style="padding-left: 0px;">
										<div class="input-group date col-md-11" data-provide="date-picker">
										{{-- <div class="input-group date col-md-11" data-provide="datepicker"> --}}
								
											<!-- <input type="text" placeholder="D/M/Y" class="Select col-md-10"  class="form-control"> -->
											<input style="margin-left: -13px;" placeholder="DD/MM/YYYY"  type="text" class="Select date-picker"  />
											
											<div id="id-date"  class="input-group-addon col-md-2">
												<span class="glyphicon glyphicon-th"></span>
											</div>
											<div class="col-md-1"></div>
											
										</div>
									</div>	
									<div class="col-md-2">
										<button type="button" style="margin-right: 200px"  class="bt col-md-7 btn">Search </button>
									</div>
									<br><br><br>
								</div>
							</div>

						</div>
						<div class="box">
							<!--<div class="box-icon pull-left"><i class="fa fa-cny"></i></div> 
							<div class="box-header">
								<h3 class="box-title">日別売上<small class="d-block small mt-1">1日の売上が各項目ごとに表示されます。</small></h3>

							</div>
						 /.box-header -->
							<div class="box-body">
								<div class="table-responsive">
									<table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
										<thead>
											<tr >
												<th>時間(time)</th>
												<th>ログ内容</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-left">12/09/20202</td>
												<td class="text-left">12/09/20202 鈴木ysdgysg yhiuws8y88 82828282 72727</td>
											
												
											</tr>
											
										</tfoot>
									</table>
								</div>

								<div class="row">
									
									<div class="col-sm-7">
										
									</div>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>
				</div>
				<!-- /.row 
				<div class="row">
					<div class="col-xs-6 col-md-4 col-lg-2">
						<div class="panel panel-success text-center lead">
							<div class="panel-heading">本数</div>
							<div class="panel-body">50</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 col-lg-3">
						<div class="panel panel-info text-center lead">
							<div class="panel-heading">お客様</div>
							<div class="panel-body">1,000,000</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 col-lg-2">
						<div class="panel panel-danger text-center text-red lead">
							<div class="panel-heading">割引</div>
							<div class="panel-body">500,000</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 col-lg-3">
						<div class="panel panel-warning text-center lead">
							<div class="panel-heading">女性</div>
							<div class="panel-body">300,000</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 col-lg-2">
						<div class="panel panel-default text-center lead">
							<div class="panel-heading">FC売上</div>
							<div class="panel-body">200,000</div>
						</div>
					</div>
				</div>
				/.row -->
				<!--<div class="row">
					<div class="col-lg-8 col-md-7">
						<div class="box">
							<div class="box-icon pull-left"><i class="fa fa-area-chart"></i></div>
							<div class="box-header">
								<h3 class="box-title">時間帯別集客グラフ</h3>
							</div>
							<div class="box-body">
								<div class="chart">
									<canvas id="lineChart" style="height:250px"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-5">
						<div class="box">
							<div class="tab-content">
								<div class="tab-pane active" id="sampleContentA">
									<div class="box-icon pull-left"><i class="fa fa-flag"></i></div>
									<div class="box-header">
										<h3 class="box-title">広告ランキング</h3>
									</div>
									<div class="box-body">
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th class="col-sm-2 text-center">順位</th>
													<th class="col-sm-7">企業名</th>
													<th class="col-sm-3 text-right">数</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">1</td>
													<td>うれせん</td>
													<td class="text-right">500本</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>うれせん</td>
													<td class="text-right">20本</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td>うれせん</td>
													<td class="text-right">5本</td>
												</tr>
												<tr>
													<td class="text-center">4</td>
													<td>うれせん</td>
													<td class="text-right">5本</td>
												</tr>
												<tr>
													<td class="text-center">5</td>
													<td>うれせん</td>
													<td class="text-right">5本</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane" id="sampleContentB">
									<div class="box-icon pull-left"><i class="fa fa-flag"></i></div>
									<div class="box-header">
										<h3 class="box-title">女性ランキング</h3>
									</div>
									<div class="box-body">
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th class="col-sm-2 text-center">順位</th>
													<th class="col-sm-7">女性名</th>
													<th class="col-sm-3 text-right">指名数</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">1</td>
													<td>はなこ</td>
													<td class="text-right">12回</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>あうこ</td>
													<td class="text-right">5回</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td>いうこ</td>
													<td class="text-right">5回</td>
												</tr>
												<tr>
													<td class="text-center">4</td>
													<td>恵右子</td>
													<td class="text-right">5回</td>
												</tr>
												<tr>
													<td class="text-center">5</td>
													<td>おうこ</td>
													<td class="text-right">5回</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane" id="sampleContentC">
									<div class="box-icon pull-left"><i class="fa fa-flag"></i></div>
									<div class="box-header">
										<h3 class="box-title">オプションランキング</h3>
									</div>
									<div class="box-body">
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th class="col-sm-2 text-center">順位</th>
													<th class="col-sm-7">オプション名</th>
													<th class="col-sm-3 text-right">数</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">1</td>
													<td>電マ</td>
													<td class="text-right">30回</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>オナホ</td>
													<td class="text-right">10回</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td>ローター</td>
													<td class="text-right">5回</td>
												</tr>
												<tr>
													<td class="text-center">4</td>
													<td>ローター</td>
													<td class="text-right">3回</td>
												</tr>
												<tr>
													<td class="text-center">5</td>
													<td>ローター</td>
													<td class="text-right">5回</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

							</div>
							<div class="box-footer">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#sampleContentA" data-toggle="tab">広告</a></li>
									<li><a href="#sampleContentB" data-toggle="tab">女性</a></li>
									<li><a href="#sampleContentC" data-toggle="tab">オプション</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->
				<!-- /.row -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->

	

		{{-- @endsection --}}
@endsection