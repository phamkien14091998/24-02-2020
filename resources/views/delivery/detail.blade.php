@extends('layouts.index')
@section('main')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>日別売上</h1>
		</section>

		<!-- Main content -->
		<section id="delivery-content" class="content container-fluid">

			<div class="row">
				<div id="layout" class="col-md-12 col-sm-12 col-12">
					<div id="layout1" class="col-md-5 col-sm-3 col-5">
						<br><br>
						<div class="col-md-12 ">
							<span id="lable-right" class="pd-c col-md-3">女性 :</span>
							<p id="colo"  class="colo pd-c col-md-9">ABC</p>
						</div>
						<br><br>
						<div class="col-md-12">
							<span id="lable-right" class="pd-c col-md-3">受付日時 :</span>
							<div class="col-md-9">
								<input  placeholder="DD/MM/YYYY"  type="text" class="Select width-input-date date-picker"  />
								<input   type="number" class="Select width-input-1"  />
								<span class="pd-c " >時</span>
								<input   type="number" class="Select width-input-1"  />
								<span class="pd-c ">分</span>
							</div>
						</div>
						<br><br>
						<div class="col-md-12">
							<span id="lable-right" class="pd-c col-md-3"></span>
							<span class="pd-c col-md-9">AM0時からは、前日の営業日として売上げが計算されます。</span>
						</div>
						<br><br>
						<div class="col-md-12">
							<span id="lable-right" class="pd-c  col-md-3">お客様の名前 :</span>
							<input id="margin-input-1"  type="text" class="Select col-md-6"  />
						</div>
						<br><br>
						<div class="col-md-12">
							<span id="lable-right" class="pd-c col-md-3">お客様の電話番号 :</span>

							<div class="col-md-9">
								<input   type="text" class="Select width-input"  />
								<input   type="text" class="Select width-input css-spa"  />
								<input   type="text" class="Select width-input css-spa"  />
								<span class="pd-c css-spa">8000示示示</span>
							</div>
						</div>
						<br><br>
						<div class="col-md-12">
							<span id="lable-right" class="pd-c col-md-3">お客様の電話番号2 :</span>

							<div class="col-md-9">
								<input   type="text" class="Select width-input "  />
								<input   type="text" class="Select width-input css-spa"  />
								<input   type="text" class="Select width-input css-spa"  />
							</div>

						</div>
						<br><br>
						<div class="col-md-12">
							<span id="lable-right-3" class="col-md-3">ポイント :</span>

							<div class="col-md-3">
								<label id="radio-3" class="radio-6 pd-c "><input type="radio" name="optradio" checked>使わない</label>
							</div>
							<div class="col-md-3">
								<label id="radio-3" class="radio-6 pd-c "><input type="radio" name="optradio" checked>使う</label>
							</div>
							<div class="col-md-3">
{{--								<label id="radio-3"  type="number" class="Select col-md-8"  />--}}
							</div>

						</div>
						<br><br>
						<div class="col-md-12">
							<span id="lable-right-4" class="col-md-3">場所 :</span>

							<div class="col-md-3">
								<label  id="radio-4" class="radio-6 pd-c "><input type="radio" name="optradio" checked>待ち合わせ</label>
							</div>
							<div class="col-md-3">
								<label  id="radio-4" class="radio-6 pd-c "><input type="radio" name="optradio" checked>デリバリ</label>
							</div>
							<div class="col-md-3">
{{--								<label  id="radio-4"  type="number" class="Select col-md-8"  />--}}
							</div>

						</div>
						<br><br>
						<div class="col-md-12">
							<span id="lable-right" class="pd-c  col-md-3">待ち合わせ場所・駅前 :</span>
							<input id="margin-input-1" type="text" class="Select col-md-6"  />
						</div>
						<br><br>
						<div class="col-md-12" id="pd-radio-top">
							<span id="lable-right-1" class="col-md-3">指名方法 :</span>
							<div id="css-radio-1" class="col-md-9">
								<label  id="radio-1" class="radio-6 pd-c "><input type="radio" name="optradio" checked>写真</label>
								<label  id="radio-1" class="radio-6  pd-c "><input type="radio" name="optradio" checked>本指名</label>
								<label  id="radio-1" class="radio-6  pd-c "><input type="radio" name="optradio" checked>フリー</label>
								<label  id="radio-1" class="radio-6  pd-c "><input type="radio" name="optradio" checked>その他</label>
								<label  id="radio-1" class="radio-6  pd-c "><input type="radio" name="optradio" checked>本指名無料</label>
							</div>
						</div>
						<br><br>
						<div class="col-md-12">
							<span id="lable-right" class="pd-c  col-md-3">交通費 :</span>
							<select id="margin-input-3" class='Select col-md-3'  class="browser-default custom-select custom-select-lg mb-3">
								<option selected>Open</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
							<span id="lable-right" class="pd-c  col-md-2">消費税 :</span>
							<select id="margin-input-4"  class='Select col-md-3'  class="browser-default custom-select custom-select-lg mb-3">
								<option selected>Open</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>

					</div>
					<div id="layout2" class="col-md-3 com-sm-2 col-3">
						<fieldset id="field-set">
							<legend>金額入力</legend>

							<div class="col-md-12">
								<span id="lable-right"  class="pd-c col-md-8">コース料金 :</span>
								<input   type="text" class="Select col-md-4"  />
							</div>

							<div  class="pd-t col-md-12">
								<span id="lable-right" class="pd-c col-md-8">女子コースバック料金 :</span>
								<input   type="text" class="Select col-md-4"  />
							</div>

							<div class="pd-t col-md-12">
								<span id="lable-right" class="pd-c col-md-8">初割・リピ割 :</span>
								<input  type="text" class="Select col-md-4"  />
							</div>

							<div class="pd-t col-md-12">
								<span id="lable-right" class="pd-c col-md-8">交通費 :</span>
								<input   type="text" class="Select col-md-4"  />
							</div>

							<div class="pd-t col-md-12">
								<span id="lable-right" class="pd-c col-md-8">指名料 :</span>
								<input   type="text" class="Select col-md-4"  />
							</div>

							<div class="pd-t col-md-12">
								<span id="lable-right" class="pd-c col-md-8">オプション料金 :</span>
								<input   type="text" class="Select col-md-4"  />
							</div>

							<div class="pd-t col-md-12">
								<span id="lable-right" class="pd-c col-md-8">女の子オプションバック料金 :</span>
								<input   type="text" class="Select col-md-4"  />
							</div>

							<div class="pd-t col-md-12">
								<span id="lable-right" class="pd-c col-md-8">ポイント使用分 :</span>
								<span class="pd-c col-md-3">0</span>
							</div>

							<div class="pd-t col-md-12">
								<div class="col-md-1"></div>
								<button  type="submit" class="bt col-md-10 btn">合計金額自動計算</button>
								<div class="col-md-1"></div>
							</div>

							<div class="pd-t col-md-12">
								<span id="lable-right" class="pd-c col-md-8">料金合計 :</span>
								<span class="pd-c col-md-3">0</span>
							</div>

							<div class="pd-t col-md-12">
								<span id="lable-right" class="pd-c col-md-8">女子バック合計 :</span>
								<span class="pd-c col-md-3">0</span>
							</div>

							<div class="pd-t col-md-12">
								<span id="lable-right" class="pd-c col-md-8">売り上げ金額 :</span>
								<span class="pd-c col-md-3">0</span>
							</div>
						</fieldset>

					</div>
					<div  id="layout3" class="lb col-md-4 col-sm-2 col-4">
						<div id="layout33" class="col-md-12">
							<div id="layout3-1" class="col-md-12">
								<div>
									<label id="lb-detail" class="pd-c col-md-12">2020-02-17 </label>
									<div class="col-md-12">
										<div class="col--md-12">
											<span class="pd-c col-md-8">[girlname]のお仕事 :</span>
										</div>
										<div class="col--md-12">
											<span class="pd-c col-md-8">出勤時間 :</span>
											<span class="pd-c col-md-3">0</span>
										</div>
										<div class="box-body col-md-12">
											<div class="table-responsive">
												<table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
													<thead>
													<tr >
														<th>時間</th>
														<th>場所</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td class="text-left">11:11~12:51</td>
														<td class="text-left">鈴木</td>
													</tr>

													</tfoot>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="layout3-2" class="col-md-12">
								<div class="col-md-12">
									<fieldset id="field-set">
										<legend>ポイント</legend>
										<div class="col-md-12">
											<span class="pd-c col-md-8">今回貯まるポイント :</span>
											<span class="pd-c col-md-3">950</span>
										</div>
										<div class="col-md-12">
											<span class="pd-c col-md-8">特別ポイント付与 :</span>
											<span class="pd-c col-md-3">0</span>
										</div>
									</fieldset>
								</div>

							</div>
							<div id="layout3-3" class="col-md-12">
								<label id="lb-detail" class="pd-c col-md-12">オプション :</label>
								<br><br>
								<div class="col-md-12">
									<span class="pd-c col-md-9">オプ  シプ</span>
									<div class="col-md-2">

									</div>
								</div>
								<br><br>
								<div class="col-md-12">
									<span class="pd-c col-md-9">オプシプオプシ</span>
									<div class="col-md-2">

									</div>
								</div>
							</div>

						</div>
					</div>
{{--					<br><br>--}}
				</div>

				<div id="layout-4" class="col-md-12 col-sm-12 col-12">
					<br>
					<div id="pd-radio-top-1" class="col-md-9 col-sm-12 col-12">
						<span id="lable-right-5" class="col-md-2">支払方法 :</span>
						<div class="col-md-9">
							<label id="radio-5" class="radio-6 pd-c "><input type="radio" name="optradio" checked>現金</label>
							<label id="radio-5" class="radio-6 pd-c "><input type="radio" name="optradio" checked>カード10%</label>
							<label id="radio-5" class="radio-6 pd-c "><input type="radio" name="optradio" checked> カード５％</label>
							<label id="radio-5" class="radio-6 pd-c "><input type="radio" name="optradio" checked>カード0%</label>
						</div>
					</div>
					<div class=" col-md-9 col-sm-12 col-12">
						<span  class="css-lable  col-md-2">一言アドバイス :</span>
						<input  type="text" class="Select col-md-6"  />
					</div>
					<div  class="css-margin-top col-md-9 col-sm-12 col-12">
						<span class="css-lable col-md-2">その他 :</span>
						<input  type="text" class="Select col-md-6"  />
					</div>
					<div class="css-margin-top col-md-9 col-sm-12 col-12">
						<span  class="css-lable  col-md-2">コース :</span>
						<select class='Select col-md-6'  class="browser-default custom-select custom-select-lg mb-3">
							<option selected>Open</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
						<div  class="margin-top-radio col-md-3 ">
							<label  class="radio-6 pd-c "><input type="radio" name="optradio" checked>無し</label>
							<label  class="radio-6  pd-c "><input type="radio" name="optradio" checked>初割り</label>
							<label  class="radio-6  pd-c "><input type="radio" name="optradio" checked>リピ割</label>
						</div>
					</div>
					<div  class="margin-1 col-md-9 col-sm-12 col-12">
						<span class="css-lable  col-md-2">オプション :</span>
						<div class="col-md-6">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="radio-6 form-check-label" for="exampleCheck1">ご様</label>

								<input type="checkbox" class="form-check-input" id="exampleCheck11">
								<label class="radio-6 form-check-label" for="exampleCheck11">1</label>
						</div>
					</div>

					<div  class="margin-2 col-md-9 col-sm-12 col-12">
						<span class="css-lable  col-md-2">プレイ予約時間 :</span>
						<input  type="text" class="Select date-picker col-md-1"  />
						<div class="col-md-9">
							<input type="number" class="Select width-input" />
							<span class="pd-c " >時 </span>

							<input type="number" class="Select width-input" />
							<span class="pd-c " >分 ~ </span>

							<input type="number" class="Select width-input" />
							<span class="pd-c " >時 </span>

							<input type="number" class="Select width-input" />
							<span class="pd-c " >分 </span>

							<span style="color: tomato;" class="pd-c " >プレイ時間は〇〇分</span>
						</div>
					</div>
					<div  class="margin-3 col-md-9 col-sm-12 col-12">
						<span  class="css-lable col-md-2">お仕事フラグ :</span>
						<select class='Select col-md-6'  class="browser-default custom-select custom-select-lg mb-3">
							<option selected>Open</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
					</div>
					<div class="css-margin-top1 col-md-9 col-sm-12 col-12">
						<span  class="css-lable  col-md-2">再送信メールの通知 :</span>
						<div class="form-check-input4 col-md-1">
							<input type="checkbox" class="" id="exampleCheck2">
						</div>

						<span style="color: tomato;text-align: left;" id="lable-right" class="pd-c  col-md-8">これにチェックを入れて【更新】、または、【削除】を押した場合、女性にメールが再送信されます。</span>
					</div>
					<div  class="padding-2 col-md-9 col-sm-12 col-12">
						<span  class="css-lable col-md-2">コンシェルジュ :</span>
						<div  class="margin-5 col-md-8">
							<span  class="pd-c span1 ">ID:</span>
							<span  class="padding-1 " >null</span>
							<span  class="pd-c ">名前:</span>
							<span  class="padding-1 " >null</span>
							<input type="checkbox" class="form-check-input" id="exampleCheck3">
							<label class="radio-6 form-check-label" for="exampleCheck3">コンシェルジュ本指名</label>
						</div>
					</div>
					<div class="col-md-9 col-sm-12 col-12">
						<span  class="css-lable  col-md-2">お泊まり :</span>
						<div class="form-check-input4 col-md-2">
							<input type="checkbox" class="" id="exampleCheck4">
						</div>

					</div>

				</div>

				<div id="layout-5" class="col-md-12">
					<br><br>
					<div class="col-md-1">

					</div>
					<div class="col-md-10">
						<button type="button" id="btn-delivery-1"  class="bt col-md-1 btn ">更新</button>
						<div class="col-md-1"></div>
						<button type="submit" id="btn-delivery-1"  class="bt col-md-1 btn ">削除</button>
						<div class="col-md-1"></div>
						<label style="color: red;" class="pd-c col-md-5 ">お仕事にキャンセルが発生した場合は【削除】を押してください。</label>
						<button type="submit"  id="btn-delivery-2" class="bt col-md-3 btn ">キャンセル（この画面を閉じる）</button>
					</div>
					<div class="col-md-1">

					</div>
				</div>


			</div>
		</section>
		<!-- /.content -->
	</div>
@endsection

