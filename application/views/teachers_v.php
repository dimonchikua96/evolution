
<div class="middle">
    <div class="content ">
        <?php
        $this ->html.= '<table >';
        foreach ($news as $value){
            $this ->html.=  "<tr id='teacher_".$value['id']."'>
                                <td class='news1'><img width=300px; class='news_picture' src='".base_url()."img/teachers/".$value['photo']."'></th>
                                <td class='news2'>
                                    <span class='news_name main_p'>
                                      ".$value['name'].' '.$value['surname']."
                                    </span>
                                    <span class='news_short_name'>
                                    ".$value['info']."...
                                    </span>
                                     <span class='social_networks'>
                                        ".$value['short_name']."
                                     </span>
                                </td>

                             </tr><tr><td colspan=2><hr></td></tr>";
        }

        $this ->html.= '</table>';
        echo($this ->html);
        //  echo $this->pagination->create_links();
        ?>
    </div>
</div><!-- .middle-->
