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
                            <form method="post">
                                <div class="col-md-4">
                                    <label class="pd-c col-md-4">電話番号 :</label>
                                    <input class="Select col-md-8" placeholder="プレイ開始" type="text" name="tel"/>
                                </div>
                                <div class="col-md-4">
                                    <label class="pd-c col-md-4">メールアドレス :</label>
                                    <input class="Select col-md-8" placeholder="プレイ開始" type="text" name="email"/>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-3"></div>
                                    <button type="submit" class="bt col-md-5 btn">Search</button>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                            <br><br><br>
                        </div>
                    </div>
                    <div class="box">
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
                                        <td class="text-left">{{}}</td>
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
   