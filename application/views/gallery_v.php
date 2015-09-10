<script language="JavaScript">
    $(document).ready(
        function(){

            var fl =  $('.foto_link');
            var vl = $('.video_link');

            fl.mouseover(function() {
                ChangeImg('ImgName1','<?=base_url()?>img/gallery/site_miniature/photo_gallery.jpg');
            });
            fl.mouseout(function() {
                ChangeImg('ImgName1','<?=base_url()?>img/gallery/site_miniature/photo_gallery_grey.jpg');
            });
            vl.mouseover(function() {
                ChangeImg('ImgName2','<?=base_url()?>img/gallery/site_miniature/video_gallery.jpg');
            });
            vl.mouseout(function() {
                ChangeImg('ImgName2','<?=base_url()?>img/gallery/site_miniature/video_gallery_grey.jpg');
            });
        }
    );
</script>
<div class="middle">
    <div class="content ">
        <table>
             <tr>
                 <td class='gall1'>
                     <a title="Фото" class="foto_link"  href="<?=base_url()?>main/foto">
                         <img name="ImgName1" width=450px; class='news_picture' src='<?=base_url()?>img/gallery/site_miniature/photo_gallery_grey.jpg'>
                     </a>
                 </td>
                 <td class='gall2'>
                     <a title="Видео" class="video_link" href="<?=base_url()?>main/video">
                         <img name="ImgName2" width=450px; class='news_picture' src='<?=base_url()?>img/gallery/site_miniature/video_gallery_grey.jpg'>
                     </a>
                 </td>

             </tr>
            <tr>
                <td class="text_align">
                    <a class="white_p read_more foto_link" title="Фото" href="<?=base_url()?>main/foto">Фото</a>
                </td>
                <td class="text_align">
                    <a class="white_p read_more video_link" title="Видео" href="<?=base_url()?>main/video">Видео</a>
                </td>
            </tr>

            </table>

    </div>
</div><!-- .middle-->
