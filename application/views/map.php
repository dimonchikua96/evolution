<!DOCTYPE html>
<html>
<head>

    <script src="<?=base_url();?>js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>css/bootstrap.min.css"></link>
    <script type="application/javascript">

        $(document).ready(function(){
            $(".flip").click(function(){
                $(this).next('.panel').slideToggle("slow");
                $(this).toggleClass('flip_active');
            });
        });

    </script>
<style>
    body{
        background: url('../img/concrete_wall_3.png') repeat scroll 0% 0% #E5E5E5;
    }
    .content-div {
        clear: both;
        width: 1000px;
        margin: 0 auto 10px;
        padding: 10px 10px 30px;
        background: #fff;
        min-height: 300px;
        height: 100%;
        -moz-border-radius: 15px;
        -webkit-border-radius: 15px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0px 1px 10px 2px rgba(1, 1, 1, 0.50);
    }
    .grid1 {
        clear: both;
        width: 100%;
        border-radius: 5px;
        margin: 0 auto;
        text-align: center;
        color: #ffffff;
        padding: 1px;
        font-size: 14pt;
        background-color: green;
        background: -moz-linear-gradient(center top , #5b9b21, #4E841C) repeat scroll 0% 0% transparent;
        box-shadow: 0px 1px 10px 2px rgba(92, 156, 35, 0.50);


    }
    .grid2 {
        margin-top: 20px;
        clear: both;
        width: 100%;
    }
    .grid2 p {
        font-weight: bold;
        line-height: 0.8em;
    }
    .column1{
        width: 40%;
        height: 700px;
        float: left;
    }
    .column2{
        width: 60%;
        overflow: hidden;
        height: 100%;

    }
    .table tr:nth-child(2n+1){
        background-color: #f2f5fc;

    }

    .flip
    {
        padding:5px;
        padding-left: 20px;
        text-align:left;
        background-color:#e5eecc;
        border:solid 1px #c3c3c3;
        border-radius: 2px;
        cursor: pointer;


    }
    .flip_active {
        background: rgb(177, 186, 153);

    }
    .panel
    {   margin: 0 auto;
        border-radius: 0 0 5px 5px;
        display:none;
        width: 98%;
        padding:5px;
        text-align:left;
        overflow: hidden;
        background-color:#e5eecc;
        border:solid 1px #c3c3c3;


    }
    .panel > *
    {
        margin-left:30px;
    }
</style>
</head>

<body>
    <div class="content-div">

        <div class="grid1">
            <p>�������� TS202406</p>
        </div>
        <div class="grid2">
            <div class="column1">
                <table class="table">
                    <tr>
                        <td>������:</td>
                    </tr>
                    <tr>
                        <td>�������� �����:</td>
                    </tr>
                    <tr>
                        <td>������������ ����������:</td>
                    </tr>
                    <tr>
                        <td>���������:</td>
                    </tr>
                    <tr>
                        <td>��������� ������������:</td>
                    </tr>
                    <tr>
                        <td>���� �����������:</td>
                    </tr>
                    <tr>
                        <td>IP-�����:</td>
                    </tr>
                    <tr>
                        <td>���������:</td>
                    </tr>
                    <tr>
                        <td>MikroTik:</td>
                    </tr>
                    <tr>
                        <td>������:</td>
                    </tr>
                    <tr>
                        <td>����� ����������:</td>
                    </tr>
                    <tr>
                        <td>��� ����� ���������:</td>
                    </tr>
                    <tr>
                        <td>��������������:</td>
                    </tr>
                    <tr>
                        <td>Syb-�����:</td>
                    </tr>
                    <tr>
                        <td>����� ������:</td>
                    </tr>
                    <tr>
                        <td>����� �������������:</td>
                    </tr>
                    <tr>
                        <td>����� ����� ����������:</td>
                    </tr>
                    <tr>
                        <td>������ ����� ���:</td>
                    </tr>
                    <tr>
                        <td>������ � �������:</td>
                    </tr>
                    <tr>
                        <td>����������� ������:</td>
                    </tr>
                    <tr>
                        <td>������ �����:</td>
                    </tr>
                    <tr>
                        <td>����������� ������ ����������:</td>
                    </tr>
                    <tr>
                        <td>������������ ����������:</td>
                    </tr>
                    <tr>
                        <td>����������:</td>
                    </tr>
                    <tr>
                        <td>��� � ���:</td>
                    </tr>
                    <tr>
                        <td>����� ��������� � ���:</td>
                    </tr>
                    <tr>
                        <td>�������������� ����������:</td>
                    </tr>

                </table>

            </div>

            <div class="column2">
                <div class="flip"><span class="glyphicon glyphicon-chevron-down"></span> �������� �����</div>
                <div class="panel">
                    <p>Hello world!</p>
                </div>
                <div class="flip">�������� �����</div>
                <div class="panel">
                    <p>Hello world!</p>
                </div>
                <div class="flip">�������� �����</div>
                <div class="panel">
                    <p>Hello world!</p>
                </div>

            </div>
        </div>

    </div>
</body>
</html>