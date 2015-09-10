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
            <p>Терминал TS202406</p>
        </div>
        <div class="grid2">
            <div class="column1">
                <table class="table">
                    <tr>
                        <td>Модель:</td>
                    </tr>
                    <tr>
                        <td>Серийный номер:</td>
                    </tr>
                    <tr>
                        <td>Приоритетное устройство:</td>
                    </tr>
                    <tr>
                        <td>Поставщик:</td>
                    </tr>
                    <tr>
                        <td>Сервисное обслуживание:</td>
                    </tr>
                    <tr>
                        <td>Дата инсталляции:</td>
                    </tr>
                    <tr>
                        <td>IP-адрес:</td>
                    </tr>
                    <tr>
                        <td>Провайдер:</td>
                    </tr>
                    <tr>
                        <td>MikroTik:</td>
                    </tr>
                    <tr>
                        <td>Статус:</td>
                    </tr>
                    <tr>
                        <td>Среда размещения:</td>
                    </tr>
                    <tr>
                        <td>Тип места установки:</td>
                    </tr>
                    <tr>
                        <td>Принадлежность:</td>
                    </tr>
                    <tr>
                        <td>Syb-бранч:</td>
                    </tr>
                    <tr>
                        <td>Бранч Радиус:</td>
                    </tr>
                    <tr>
                        <td>Бранч клиентопотока:</td>
                    </tr>
                    <tr>
                        <td>Бранч куста инкассации:</td>
                    </tr>
                    <tr>
                        <td>Группа купюр ТСО:</td>
                    </tr>
                    <tr>
                        <td>Работа с валютой:</td>
                    </tr>
                    <tr>
                        <td>Принимаемые валюты:</td>
                    </tr>
                    <tr>
                        <td>Группа риска:</td>
                    </tr>
                    <tr>
                        <td>Возможность ночной инкассации:</td>
                    </tr>
                    <tr>
                        <td>Расположение устройства:</td>
                    </tr>
                    <tr>
                        <td>Установлен:</td>
                    </tr>
                    <tr>
                        <td>Код в ЕСА:</td>
                    </tr>
                    <tr>
                        <td>Место установки в ЕСА:</td>
                    </tr>
                    <tr>
                        <td>Географические координаты:</td>
                    </tr>

                </table>

            </div>

            <div class="column2">
                <div class="flip"><span class="glyphicon glyphicon-chevron-down"></span> Доходные счета</div>
                <div class="panel">
                    <p>Hello world!</p>
                </div>
                <div class="flip">Доходные счета</div>
                <div class="panel">
                    <p>Hello world!</p>
                </div>
                <div class="flip">Доходные счета</div>
                <div class="panel">
                    <p>Hello world!</p>
                </div>

            </div>
        </div>

    </div>
</body>
</html>