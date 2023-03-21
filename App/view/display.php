<?php

#esta classe tem o intuito de retornar informar

class Display{

    public function test($display)
    {
        $this->display = $display;
        
        echo"$this->display";

    }

    public function table_select(array $user_list){

        echo"
            <table border=1>

                <tr>
                    <td> name </td>
                    <td> nick_name </td>
                    <td> sex </td>
                    <td> date </td>
                    <td> cpf </td>
                    <td> email </td>
                    <td> password </td>
                </tr>

            </table>
        ";

        foreach ($user_list as $user => $value) {
            # code...
        }


    }


}

