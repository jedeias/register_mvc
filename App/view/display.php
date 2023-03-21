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

            
        ";

        // loop through the PHP array
        foreach ($user_list as $person) {
          // create a table row tag
          echo "\t<tr>\n";
          
          // loop through the sub-elements of the PHP array
          foreach ($person as $key => $value) {
            // create a table cell tag with the value inside
            echo "\t\t<td>$value</td>\n";
          }
          
          // end the table row tag
          echo "\t</tr>\n";
        }
        
        // end the HTML table tag
        echo "</table>\n";

    }


}

