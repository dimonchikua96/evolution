
<div class="middle">
    <div class="content ">
        <?php
        $this ->html.= '<table >';
        foreach ($articles as $value){
            $this ->html.=  "<tr>
                                <td class='news1'><img width=280px; class='news_picture' src='".base_url()."img/news/".$value['image']."'></td>
                                <td class='news2'>
                                    <span class='news_name main_p'>
                                      ".$value['name']."
                                    </span>
                                    <span class='news_date'>
                                       ".date('d.m.Y',strtotime($value['date']))."
                                    </span>
                                    <span class='news_short_name'>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp".substr($value['short_name'],0,300)."...
                                    </span>
                                     <span class='news_detail'>
                                        <a href='".base_url()."index.php/main/articles_detail/".$value['id']."'><button class='read_more read_more_button'>Подробнее</button></a>
                                    </span></td>

                             </tr><tr><td colspan=2><hr></td></tr>";
        }

        $this ->html.= '</table>';
        echo($this ->html);
        //  echo $this->pagination->create_links();
        ?>
    </div>
</div><!-- .middle-->
