@extends('layouts.index')
@section('main')

    <!-- main  -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>出勤一覧表</h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="box-body col-md-12">
                    <div class="text-center">
                        <div id="bg-hearder" class="col-md-12">
                            <br>
                            <div class="col-md-4">
                                <label class='pd-c col-md-4'>TELL :</label>
                                <input id="bg" class="Select col-md-4" type="number"/>
                                <div class="col-md-1"></div>
                                <button type="button" class="bt col-md-3 btn">BCD</button>
                            </div>
                            <div class="col-md-2">
                                <label class="pd-c"> NHAP 5 SO ĐUÔI</label>
                            </div>
                            <div class="col-md-2">
                                <label class="pd-c" style="color:Tomato;"> Ikuka 日別売上</label>
                            </div>
                            <div class="col-md-2">
                                <label class="pd-c" style="color:Tomato;"> 44967</label>
                            </div>
                            <div class="col-md-2">
                                <label class="pd-c" style="color:Tomato;"> User</label>
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
                                        <th>女の子</th>
                                        <th>客名</th>
                                        <th>種別</th>
                                        <th>女性名</th>
                                        <th>コース</th>
                                        <th>オプション</th>
                                        <th>お客様</th>
                                        <th>in / out</th>
                                        <th>Update / Delete</th>
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
                                        <td class="text-center">
                                            <a class="btn btn-success" data-toggle="modal" data-target="#myModal"
                                               href="#"> Sua </a>
                                            <a class="btn btn-danger" href="#"> Xoa </a>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div  id="md-1" class="modal-dialog">

                    <!-- Modal content-->
                    <div id="modal" class="modal-content">
                        <div class="modal-header">
                            <button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="lb col-md-4">
                                        <div class="col-md-12">
                                            <label class="col-md-6">Ten :</label>
                                            <p class="col-md-6">ABC</p>
                                        </div>
                                        <br><br>
                                        <div class="col-md-12">
                                            <label class="col-md-6">SDT :</label>
                                            <p class="col-md-6">0087977688</p>
                                        </div>
                                        <br><br>
                                        <div class="col-md-12">
                                            <label class="col-md-6">id :</label>
                                            <p class="col-md-6">ABC</p>
                                        </div>
                                        <br><br>
                                        <div class="col-md-12">
                                            <label class="col-md-6">bcbc :</label>
                                            <p class="col-md-6">jjshs hshs</p>
                                        </div>
                                        <br><br>
                                        <div class="col-md-12">
                                            <label style="color: tomato" class="col-md-12">gdg dhhd d j</label>

                                        </div>
                                        <br><br>
                                        <div class="col-md-12">
                                            <label class="col-md-6">Select :</label>
                                            <select class='Select col-md-4'
                                                    class="browser-default custom-select custom-select-lg mb-3">
                                                <option selected>Open</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="lb col-md-4">

                                        <!-- Default unchecked -->
                                        <div class="col-md-12 custom-control custom-checkbox">
                                            <input type="checkbox" class="col-md-2 custom-control-input"
                                                   id="defaultUnchecked">
                                            <p class="col-md-5 custom-control-label" for="defaultUnchecked">check
                                                nnn</p>
                                        </div>
                                        <br><br>
                                        <div class="col-md-12">
                                            <p class="">非表示 非表示</p>
                                        </div>
                                        <br><br>
                                        <div class="col-md-12">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="3"></textarea>

                                        </div>
                                    </div>
                                    <div class="lb col-md-4">
                                        <div class="col-md-12">
                                            <div id="header" class="col-md-12">
                                                <label class="text-center" for="">オプション</label>
                                            </div>
                                            <div id="container" class="col-md-12">
                                                <label for="">オプション</label>
                                                <br>
                                                <label for="">オプション</label>
                                                <br>
                                                <label for="">オプション</label>
                                                <br>
                                                <label for="">オプション</label>
                                            </div>
                                            <div id="footer" class="col-md-12">
                                                <label class="text-center" for="">オプシ</label>
                                            </div>

                                        </div>


                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-5"></div>
                                    <button class="bt btn col-md-2">非表示非表示</button>
                                    <div class="col-md-5"></div>
                                </div>


                                <div class="col-md-12">
                                    <div class="modal-body">
                                        <table id="classTable" class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>客名</th>
                                                <th>種別</th>
                                                <th>女性名</th>
                                                <th>コース</th>
                                                <th>オプション</th>
                                                <th>お客様</th>
                                                <th>in / out</th>
                                                <th>広告・割引</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>CLN</td>
                                                <td>Last Updated Date</td>
                                                <td>Class Name</td>
                                                <td># Tests</td>
                                                <td>Test Coverage (Instruction)</td>
                                                <td>Test Coverage (Complexity)</td>
                                                <td>Complex Covered</td>
                                                <td>Complex Total</td>
                                                <td>okn0n</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default">非表示</button>
                            <button type="button" class="btn btn-default">削除</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->


@endsection