<div class="middle">


        <div class="one_row " >
            <p class="main_p">Расписание и цены</p><br>
            <?

            $this ->html = '<table class="table table-bordered">
                                <tr  class="active">
                                    <th >Направление танца</th>
                                    <th width="100"  >Понедельник</th>
                                    <th width="100" >Вторник</th>
                                    <th width="100" >Среда</th>
                                    <th width="100" >Четверг</th>
                                    <th width="100" >Пятница</th>
                                    <th width="100" >Суббота</th>
                                    <th width="100" >Воскресенье</th>
                               </tr>';

            foreach ($shedule as $val){
                $this ->html.= '<tr>
                                    <td class="td-bl">'.$val["direction"].'</th>
                                    <td class="td-bw td-bs">'.$val["d1"].'</th>
                                    <td class="td-bw td-bs">'.$val["d2"].'</th>
                                    <td class="td-bw td-bs">'.$val["d3"].'</th>
                                    <td class="td-bw td-bs">'.$val["d4"].'</th>
                                    <td class="td-bw td-bs">'.$val["d5"].'</th>
                                    <td class="td-bw td-bs">'.$val["d6"].'</th>
                                    <td class="td-bw">'.$val["d7"].'</th>
                                </tr>';
            }


            $this ->html.= '</table>';
            echo($this ->html);
            ?>
            <br>
            <p class="white_p">Стоимость абонемента составляет:</p>
            <p >4 занятия - 200 грн</p>
            <p>8 занятия - 300 грн</p>
            <p>Разовое занятие - 50 грн</p>
            <p>Также Вы можете арендовать наш танцевальный зал, подробности по телефону: +38 (093) 010 98 43</p>


        </div>

</div>
