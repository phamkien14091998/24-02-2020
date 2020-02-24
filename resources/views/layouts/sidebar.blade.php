<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 19/10/2018
 * Time: 5:37 CH
 */

$user = \Illuminate\Support\Facades\Auth::user();
$tree_home = $tree_member = $tree_noti = $tree_user = $report = $noti_expiredate = $convert = $report_regularly = $coin = $event ='';
$member_cre = $member_list  = $noti_list = $noti_cre = $user_list =$user_cre = $page_report = $job_report = $delivery_report = $emergency = $emergency_create ='';
if(Request::is('franchise/*') || Request::is('franchise')) {
    $tree_member = 'active';
    if(Request::is('franchise/create')) {
        $member_cre = 'active';
    }
    else {
        $member_list = 'active';
    }
}
if(Request::is('event/*') || Request::is('event')) {
    $event = 'active';
}
else if(Request::is('notify/*') || Request::is('notify')) {
    $tree_noti = 'active';
    if(Request::is('notify/create')) {
        $noti_cre = 'active';
    }
    else if(Request::is('notify/emergency')){
        $emergency = 'active';
    }
    else if(Request::is('notify/create-emergency')){
        $emergency_create = 'active';
    }
    else {
        $noti_list = 'active';
    }
}
else if(Request::is('user/*') || Request::is('user')) {
    if(Request::is('user/create')) {
        $user_cre = 'active';
        $tree_user = 'active';
    }
    else if (Request::is('user/convert')) {
        $convert = 'active';
    }
    else {
        $tree_user = 'active';
        $user_list = 'active';
    }
}
else if(Request::is('report/send_noti')) {
    $noti_expiredate = 'active';
}
else if((Request::is('report/*') || Request::is('report')) && !Request::is('report/reportRegularly')) {
    $report = 'active';
    if(Request::is('report/job/*') || Request::is('report/job')) {
        $job_report = 'active';
    }
    else if(Request::is('report/delivery/*') || Request::is('report/delivery')){
        $delivery_report = 'active';
    }
    else {
        $page_report = 'active';
    }
}
else if (Request::is('report/reportRegularly')) {
    $report_regularly = 'active';
}
else if (Request::is('girl/coin')) {
    $coin = 'active';
}
else {
    $tree_home = 'active';
}
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image thumbnail-circle thumbnail-circle-sm">
{{--                <img src="{{asset('upload/'.$user->image_name)}}" alt="{{$user->client_name}}">--}}
            </div>
            <div class="pull-left info">
{{--                <p>{{$user->client_name}}</p>--}}
            </div>
        </div>
       

        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{$tree_home}}">
                <a href="{{asset('/deliverys')}}"><i class="fa fa-home fa-fw"></i>
                    <span>タイムテーブル</span>
                </a>
            </li>

            <li class="treeview {{$report}}">
                <a href="#">
                    <i class="fa fa-sitemap fa-fw"></i> <span>ワークレコード</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$page_report}}"><a href="{{asset('/delivery/list')}}"><i class="fa"></i>リスト</a></li>
                    <li class="{{$page_report}}"><a href="{{asset('/delivery/add')}}"><i class="fa"></i>追加</a></li>
                    <li class="{{$job_report}}"><a href="{{url('/delivery/edit')}}"><i class="fa"></i>更新</a></li>
                    <li class="{{$delivery_report}}"><a href="{{url('/delivery/delete')}}"><i class="fa"></i>削除</a></li>
                </ul>
            </li>
            <li class="">
                <a href="{{asset('/syukins')}}">
                    出勤一覧表
                </a>
            </li>
            <li class="">
                <a href="{{asset('/clients')}}">
                    顧客情報
                </a>
            </li>
            <li class=""><a href="{{asset('/logs')}}">
                <span>タイムテーブルログ</span></a>
            </li>
            <li class=""><a href="{{asset('/girls')}}">
                <span>女性検索</span></a>
            </li>
            
            <!--update relationship -->
            <li class=""><a href="{{asset('/matchings')}}">
                <span>強制マッチング・非表示・解除</span></a>
            </li>


        </ul>
    </section>
</aside>
