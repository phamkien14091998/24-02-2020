
@extends('layouts.index')
@section('main')
	<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>日別売上</h1>
			</section>
			<!-- Main content -->
			<section class="content container-fluid">
				<div class="row">
					<form action="{{url('delivery/list')}}" method="post">
						<div class="col-md-12">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="text-center">
								<div id="bg-hearder" class="col-md-12 padding-20">
									<div class="box-body col-md-12">
										<div class="col-md-4">
											<p class='pd-c col-md-4'>エリア:</p>
											<select name="area_cmb" class="Select col-md-4 browser-default custom-select custom-select-lg">
												@foreach($clients as $client)
													<option value="{{$client['data']}}">{{$client['client_name']}}</option>
												@endforeach
											</select>
											<div class="col-md-1"></div>
											<button type="submit" class="bt col-md-3 btn" name="type" value="GET">検索</button>
										</div>
										<div class="col-md-4">
											<p class='pd-c col-md-4'>フリーワード:</p>
											<input class="Select col-md-4" name="bikou" type="text" />
											<div class="col-md-1"></div>
											<button type="submit" class="bt col-md-3 btn" name="type" value="GET_BIKOU">検索</button>
										</div>
										<div class="col-md-4">
											<p class='pd-c col-md-4'>電話番号:</p>
											<input class="Select col-md-4" name="client_tel" type="text"/>
											<div class="col-md-1"></div>
											<button type="submit" class="bt col-md-3 btn" name="type" value="GET_TEL">検索</button>
										</div>
									</div>
									<div class="col-md-12">
										<div class="col-md-4">
											<p class='pd-c col-md-4'>お客様名:</p>
											<input class="Select col-md-4" name="client_name" type="text" />
											<div class="col-md-1"></div>
											<button type="submit" class="bt col-md-3 btn" name="type" value="GET_NAME">検索</button>
										</div>
										<div class="col-md-4">
											<p class='pd-c col-md-4'>日付:</p>
											<input type="text" name="form_date" class="col-md-4 Select date-picker"/>
											<div class="col-md-1"></div>
											<button type="submit" class="bt col-md-3 btn" name="type" value="GET">検索</button>
										</div>
									</div>
								</div>
							</div>
							<div class="box">
								<!--<div class="box-icon pull-left"><i class="fa fa-cny"></i></div> -->
								<div class="box-header">
									<h3 class="box-title">日別売上<small class="d-block small mt-1">1日の売上が各項目ごとに表示されます。</small></h3>

								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<div class="table-responsive">
										<table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
											<thead>
											<tr >
												<th>#</th>
												<th>客名</th>
												<th>種別</th>
												<th>女性名</th>
												<th>コース</th>
												<th>オプション</th>
												<th>お客様</th>
												<th>in / out</th>
												<th>広告・割引</th>
												<th>女性</th>
												<th>FC売上</th>
												<th>入金</th>
												<th>#</th>
												<th>客名</th>
												<th>種別</th>
												<th>女性名</th>
												<th>コース</th>
												<th>オプション</th>
												<th>お客様</th>
												<th>in / out</th>
												<th>広告・割引</th>
												<th>女性</th>
												<th>FC売上</th>

											</tr>
											</thead>
											<tbody>
											<tr>
												<td class="text-left">1</td>
												<td class="text-left">鈴木</td>
												<td class="text-left"><span class="label bg-aqua">新規</span></td>
												<td class="text-left">かなこ</td>
												<td class="text-left">40分</td>
												<td class="text-left">パンティ<br>パンスト</td>
												<td class="text-left">￥30,000</td>
												<td class="text-left">
													10：00<br>12：00
												</td>
												<td class="text-left">ぴゅあらば<br><span class="text-red">￥10,000割引</span></td>
												<td class="text-left">￥3,000</td>
												<td class="text-left">￥2,000</td>
												<td class="text-left"><span class="label bg-lime">入金済</span></td>

												<td class="text-left">1</td>
												<td class="text-left">鈴木</td>
												<td class="text-left"><span class="label bg-aqua">新規</span></td>
												<td class="text-left">かなこ</td>
												<td class="text-left">40分</td>
												<td class="text-left">パンティ<br>パンスト</td>
												<td class="text-left">￥30,000</td>
												<td class="text-left">
													10：00<br>12：00
												</td>
												<td class="text-left">ぴゅあらば<br><span class="text-red">￥10,000割引</span></td>
												<td class="text-left">￥3,000</td>
												<td class="text-left">￥2,000</td>

											</tr>

											</tfoot>
										</table>
									</div>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
					</form>
				</div>
			</section>
			<!-- /.content -->
		</div>
@endsection

