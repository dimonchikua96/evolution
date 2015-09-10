<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

            });
            function sendPushNotification(userId) {
                var message = $('#text_' + userId).val();

                $.ajax({
                    url: "<?=base_url()?>push/send_message",
                    type: 'POST',
                    data: {message: message, userId: userId},
                    beforeSend: function () {

                    },
                    success: function (data, textStatus, xhr) {
                        $('.txt_message').val("");
                    },
                    error: function (xhr, textStatus, errorThrown) {

                    }
                });
                return false;
            }
        </script>
        <style type="text/css">
            .container {
                width: 950px;
                margin: 0 auto;
                padding: 0;
            }

            h1 {
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                font-size: 24px;
                color: #777;
            }

            div.clear {
                clear: both;
            }

            ul.devices {
                margin: 0;
                padding: 0;
            }

            ul.devices li {
                float: left;
                list-style: none;
                border: 1px solid #dedede;
                padding: 10px;
                margin: 0 15px 25px 0;
                border-radius: 3px;
                -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.35);
                -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.35);
                box-shadow: 0 1px 5px rgba(0, 0, 0, 0.35);
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                color: #555;
            }

            ul.devices li label, ul.devices li span {
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                font-size: 12px;
                font-style: normal;
                font-variant: normal;
                font-weight: bold;
                color: #393939;
                display: block;
                float: left;
            }

            ul.devices li label {
                height: 25px;
                width: 50px;
            }

            ul.devices li textarea {
                float: left;
                resize: none;
            }

            ul.devices li .send_btn {
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#0096FF), to(#005DFF));
                background: -webkit-linear-gradient(0% 0%, 0% 100%, from(#0096FF), to(#005DFF));
                background: -moz-linear-gradient(center top, #0096FF, #005DFF);
                background: linear-gradient(#0096FF, #005DFF);
                text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3);
                border-radius: 3px;
                color: #fff;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <h1>Зарегистрированных устройств: <?= count($users) ?></h1>
        <hr/>
        <ul class="devices">
            <?
            if (is_array($users) and count($users) > 0) {
                foreach ($users as $row) {
                    ?>
                    <li>
                        <form id="<?= $row["user_id"] ?>" name="" method="post"
                              onsubmit="return sendPushNotification('<?= $row["user_id"] ?>')">
                            <label>Имя: </label> <span><?= $row["user_name"] ?></span>

                            <div class="clear"></div>
                            <div class="send_container">
                                <textarea id="text_<?= $row["user_id"] ?>" rows="3" name="message" cols="25"
                                          class="txt_message" placeholder="Type message here"></textarea>
                                <input type="submit" class="send_btn" value="Send" onclick=""/>
                            </div>
                        </form>
                    </li>
                <? }
            } else { ?>
                <li>
                    Не зарегистрировано ни одного пользователя!
                </li>
            <?php } ?>
        </ul>
    </div>
    </body>
</html>