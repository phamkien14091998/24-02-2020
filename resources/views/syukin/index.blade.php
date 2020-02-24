@extends('layouts.index')
@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>女性検索</h1>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div id="bg-hearder" class="box-body col-md-12">
                            <br>
                            <div class="col-md-4">
                                <label class="pd-c col-md-4">電話番号 :</label>
                                <input class="Select col-md-8" placeholder="プレイ開始" type="number"/>
                            </div>

                            <div class="col-md-4">
                                <label class="pd-c col-md-4">メールアドレス :</label>
                                <input class="Select col-md-8" placeholder="プレイ開始" type="number"/>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-3"></div>
                                <button type="button" class="bt col-md-5 btn">Search</button>
                            </div>
                            <br><br><br>
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
                                <table id="example1" class="table table-bordered table-striped dataTable"
                                       aria-describedby="example1_info">
                                    <thead>
                                    <tr>
                                        <th>名前(name)</th>
                                        <th>電話番号(phone)</th>
                                        <th>メールアドレス(email)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-left">pham kien</td>
                                        <td class="text-left">09783979393</td>
                                        <td class="text-left">pham@gmail.com</td>
                                    </tr>
                                    </tbody>
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
        </section>
    </div>
@endsection
   