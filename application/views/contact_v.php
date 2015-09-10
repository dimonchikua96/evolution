<script type="text/javascript" src="https://maps.google.com/maps/api/js?v=3&sensor=false"></script>
<script type="text/javascript">

    $(window).load(function() {
        initialize();
    });
    function initialize() {
        var latlng = new google.maps.LatLng(<?=$address['lat'];?>, <?=$address['lon'];?>);
        var myOptions = {
            zoom: 17,
            center: latlng,
            panControl: false,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
        }

        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        map.draggable=false;
        var image = '<?=base_url()?>img/pic/logo_map.png';
        var latlng = new google.maps.LatLng(<?=$address['lat'];?>, <?=$address['lon'];?>);
        var beachMarker = new google.maps.Marker({
            position: latlng,
            map:map,
            icon: image
        });
    }
</script>

<div class="middle-map">
        <div class="left_block">
            <p class="main_p">Контакты</p></br>
            <p class="white_p">Адрес:</p>
            <p><?=$address['address'];?></p></br>
            <p class="white_p">Телефоны:</p>
            <p><?=$address['phone1'];?></br>
               <?=$address['phone2'];?></p></br>
            <p class="white_p">E-mail:</p>
            <p class="mail"><?=$address['mail1'];?></p></br>
            <p class="white_p">Если у Вас возникли вопросы - мы всегда рады помочь!</p></br>
        </div>
        <div class="right_block">
            <div></div>
            <!--
                <iframe style="border-radius: 5px;" width="543" height="453" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1322.9740572471076!2d35.046584411042645!3d48.457525052427904!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2df318d39a5%3A0xd1205c6b3f81f944!2zMjLQkSwg0JLQuNC60L7QvdC60L7QvNGW0LLRgdGM0LrQsCDQstGD0LsuLCAyMtCRLCDQlNC90ZbQv9GA0L7Qv9C10YLRgNC-0LLRgdGM0LosINCU0L3RltC_0YDQvtC_0LXRgtGA0L7QstGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1408814441170" width="600" height="450" frameborder="0" style="border:0"></iframe>
            -->
            <div onload="initialize()" id="map_canvas" style="width:543px; height:453px;  border-radius: 5px;"></div>
        </div>

</div><!-- .middle-->


