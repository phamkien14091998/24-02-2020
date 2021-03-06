<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 19/10/2018
 * Time: 5:37 CH
 */
?>
<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('dist/js/select2.min.js')}}"></script>

<!-- datatables -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.ja.js')}}"></script>
<!--iCheck系-->
<link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>

<script type="text/javascript">
    $(function(){
        setTimeout(function () {
            $(".alert ").fadeOut('slow');
        }, 5000);
    });


    $(function() {
        // checkbox(iCheck.css,iCheck.読み込み必須
        // ツールチップ
        $('[data-toggle="tooltip"]').tooltip();

       
    });

    $(document).on('keyup', '#inputTel', function () {
        var tel = $(this).val();
        tel = tel.replace(/-/gi, '');
        tel = tel.replace(/ /gi, '');
        $('#tel_submit').val(tel.trim()); 
    });
    $(function () {
        console.log(2);
        $('#inputTel').trigger('keyup');
    });

   



$('.date-picker').datepicker({
      format: 'yyyy年mm月dd日',
      language:'ja',
      
});


    $(document).on('click', '.msg-report', function (e) {
        e.preventDefault();
        $('#modal-report-content #content').html('');
        var content = $(this).parents('.text-center').find('a').attr('content');
        if (content.trim()) {
            $('#modal-report-content #content').html(content);
            $('#modal-report-content').fadeIn('slow');
        }
    });

    $(document).on('click', '#modal_close', function (e) {
        e.preventDefault();
        $('#modal-report-content').fadeOut();
    });

    $(document).on('click', '.update_ng', function(e) {
        e.preventDefault();
        var id = $(this).attr('data-id'),
            keywork = $(this).parents('.row-item').find('input').val(),
            _token = '{{csrf_token()}}';

        if(keywork) {
            $.ajax({
                method: 'post',
                url: '/home/update_ngwork/' + id,
                data: {keywork: keywork, _token: _token},
                success:function(responve) {
                    alert(responve.msg);
                    location.reload();
                }
            });
        }
    });
</script>

@if(Request::is('home') || Request::is('/'))
    <script type="text/javascript">
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('timmer').innerHTML =
                h + ":" + m;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
        startTime();
    </script>
@endif
@if(Request::is('franchise') || Request::is('franchise/*'))
    <script type="text/javascript">
        $(document).ready(function () {
           $('#select-area').select2();
        });

        $(document).on('click', '.del-img', function () {
           var id = $(this).attr('data-id');
           $('#'+id).val('');
           alert('画像が削除されました');
        });
    </script>
@endif
