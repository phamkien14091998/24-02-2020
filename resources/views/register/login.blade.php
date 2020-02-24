<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 10/13/2018
 * Time: 10:54 AM
 */
?>
@extends('layouts.login')

@section('contents')
    <div class="login-logo text-center">
        <h1>SC SYSTEM</h1>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group has-feedback" >
                <input type="text" name="client_id" value="{{old('client_id')}}" class="form-control input-lg" placeholder="ログインID">
                <span class="fa fa-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control input-lg" name="client_pass" placeholder="パスワード">
                <span class="fa fa-lock form-control-feedback"></span>
            </div>
            <div class="text-center">
                <div class="btn-material">
                    <button type="submit" class="btn btn-lg bg-black">ログイン</button>
                </div>
            </div>
        </form>
        <!-- /.login-box-body -->
    </div>
    @include('message.error_form')
    <!-- /.login-box -->
@endsection

