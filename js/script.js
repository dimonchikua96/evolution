    $(document).ready( function(){
        $( "#show" ).delay( 800 ).fadeIn( 400 );
        $("#you_phone").mask("+38 (099) 999-99-99");
        $("#send_msg").on('click',function(){
            var form = $("#msg_form");
            var form_arr = form.serializeArray();
            var error = 0;
             jQuery.each( form_arr, function( i, field ) {
                 var field_name = field.name;
                 $("#"+field_name).removeClass("alert");
                 if($("#"+field_name).val()==''){
                     $("#"+field_name).addClass("alert");
                     error = 1;
                 }else{

                     if (field_name == 'you_name'){
                         var pattern = /^[a-zA-Zà-ÿÀ-ß¨¸Úú0-9_-]{2,30}$/;
                         if(!pattern.test($("#you_name").val())){
                             $("#you_name").addClass("alert");
                             error = 1;
                         }
                     }else if (field_name == 'you_mail'){
                         var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                         if(!pattern.test($("#you_mail").val())){
                             $("#you_mail").addClass("alert");
                             error = 1;
                         }
                     }else if(field_name == 'you_phone'){
                         if (($("#you_phone").val().indexOf("_") != -1)) {
                             $("#you_phone").addClass("alert");
                             error = 1;
                         }
                     }else if(field_name == 'you_message'){
                         var pattern = /^[a-zA-Zà-ÿÀ-ß¨¸Úú_-]{10,1000}$/;
                         if(!pattern.test($("#you_message").val())){
                             $("#you_message").addClass("alert");
                             error = 1;
                         }
                     }
                 }

            });
            if (error===0){
                $.ajax({
                    type: 'POST',
                    url: '/service/send_message',
                    data:  $("#msg_form").serialize(),
                    success: function(data) {
                        console.log(data);

                    }
                });
            }
            return false;
        });

    });

    function ChangeImg() {
        if(document.images) {
            eval("document."+ChangeImg.arguments[0]+
                ".src=('"+ChangeImg.arguments[1]+"')");
        }
    }

    function preload() {
        if (document.images) {
            var imgsrc = preload.arguments;
            arr=new Array(imgsrc.length);
            for (var j=0; j<imgsrc.length; j++) {
                arr[j] = new Image;
                arr[j].src = imgsrc[j];
            }
        }
    }


