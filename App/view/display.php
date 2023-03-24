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
                    <td> ID </td>
                    <td> NAME </td>
                    <td> NICK_NAME </td>
                    <td> SEX </td>
                    <td> DATE </td>
                    <td> EMAIL </td>
                    <td> CPF </td>
                    <td> PASSWORD </td>
                    <td> DELETE </td>
                </tr>

            
        ";

        // loop through the PHP array
        foreach ($user_list as $person) {
          // create a table row tag
          echo "\t<tr>\n";
          
          // loop through the sub-elements of the PHP array
          foreach ($person as $key => $value) {
            // create a table cell tag with the value inside
            echo "\t\t<td>$value </td>\n";
        }
        
        $id = ($person['id']);

          echo"<td> <a href='controller/delete.php?id=$id'> DELETE </a></td>";
          // end the table row tag
          echo "\t</tr>\n";
        }
        
        // end the HTML table tag
        echo "</table>\n";

        echo "<br><a href='view/register.html'><button>register</button></a><br>";
        
    }


}

