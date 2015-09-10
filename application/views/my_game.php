<!DOCTYPE html>
<html>
    <head>
        <title>game</title>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
        <meta http-equiv="Description" content="game">
        <meta http-equiv="Keywords" content="game">
        <script src="<?=base_url();?>js/jquery.js"></script>
        <script src="<?=base_url();?>js/angular/src/angular.js"></script>

        <title></title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />

    </head>
    <style>

        html { width:100%; background:#fff;}
        body {margin: 0 auto; overflow-x:hidden; font-family: Thin, Arial, sans-serif; min-width:960px; font-size: 16px; color:#333333;}
        .layout{
            background: #f7ffd8;
            width: 500px;
            height: 500px;
            position: relative;

        }
        .box{
            background: #ff4007;
            width: 50px;
            height: 50px;
            position: relative;

        }
    </style>
    <script language="javascript">
        var box = $('#box');

        box.on(cl)(function(){
            console.log('good');
            console.log($(this).position());

        });



    </script>
    <body>

        <div class="layout">
            <div id="box" class="box">



            </div>
        </div>




    </body>
</html>