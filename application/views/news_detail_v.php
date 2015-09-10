
<div class="middle">
    <div class="content ">
        <?php
        $this ->html.= '<table >';
        foreach ($news as $value){
            $this ->html.=  "<tr>
                                <td class='news1'></td>
                                <td class='news2'>
                                    <span class='news_name main_p'>
                                      ".$value['name']."
                                    </span>
                                    <span class='news_date'>
                                       ".date('d.m.Y',strtotime($value['date']))."
                                    </span>
                                    <span class='news_short_name'>
                                    <img width=280px; class='news_picture leftimg' src='".base_url()."img/news/".$value['image']."'>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp".$value['body']."
                                    </span>


                             </tr><tr><td colspan=2><hr></td></tr>";
        }

        $this ->html.= '</table>';
        echo($this ->html);
      //  echo $this->pagination->create_links();
        ?>
    </div>
</div><!-- .middle-->
