<div class="middle">


        <div class="one_row " >
            <p class="main_p">���������� � ����</p><br>
            <?

            $this ->html = '<table class="table table-bordered">
                                <tr  class="active">
                                    <th >����������� �����</th>
                                    <th width="100"  >�����������</th>
                                    <th width="100" >�������</th>
                                    <th width="100" >�����</th>
                                    <th width="100" >�������</th>
                                    <th width="100" >�������</th>
                                    <th width="100" >�������</th>
                                    <th width="100" >�����������</th>
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
            <p class="white_p">��������� ���������� ����������:</p>
            <p >4 ������� - 200 ���</p>
            <p>8 ������� - 300 ���</p>
            <p>������� ������� - 50 ���</p>
            <p>����� �� ������ ���������� ��� ������������ ���, ����������� �� ��������: +38 (093) 010 98 43</p>


        </div>

</div>
