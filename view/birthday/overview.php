<?php
            $lastMonth = 0;
            $lastDay = 0;
            for($i = 0; $i < 12; $i++) {
                $lastDay = 0;
                foreach($birthdays as $birthday) {
                    if($birthday['month'] == $i) {

                       if($lastMonth != $i) {
                            echo "<h1>". date('F', mktime(0, 0, 0, $birthday['month'], 1)). "</h1>";
                            $lastMonth = $birthday['month']; 
                       }

                        if($lastDay != $birthday['day']){
                            echo "<h2>".$birthday['day']."</h2>"; 
                            $lastDay = $birthday['day'];
                        }
                        echo "<a href='edit/" .$birthday['id']. "'><p>" .$birthday['person']. "(" . $birthday['year']  . ")";  
                        echo "<a class='remove' href='delete/". $birthday['id'] ."'>X</a>";
                        echo "</p>";       

                    }
                }
            }
        ?>
<p><a href="<?= URL ?>birthday/create">+ Toevoegen</a></p>