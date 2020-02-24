<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 19/10/2018
 * Time: 5:37 CH
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>home</title>
    <!-- Tell the browser to be responsive to screen width -->
    @include('layouts.head')
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini fixed">

<div class="wrapper">
    <!-- Main Header -->
    @include('layouts.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.sidebar')

    {{-- main  --}}

        <!-- Content Wrapper. Contains page content -->
            @include('message.error_form')
            @include('message.message_alert')
            @yield('main')
        <!-- /.content-wrapper -->
        
    <!-- /.content-wrapper -->
</div>
</body>
</html>
@include('layouts.footer')
