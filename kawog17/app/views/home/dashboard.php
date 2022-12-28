<h1>This is the image feed dashboard</h1>

<?php
    /**
     * Anything included in the $viewbag, passed from the controller
     * is available here.
     */
?>



<table >
    <thead >
        <tr>
        <?php foreach($viewbag['images'][0] as $header => $value) : ?>
        
            <th><?=$header?></th>
        
        <?php endforeach; ?>
        </tr>
    </thead>
    
    <?php foreach ($viewbag['images'] as $result) : ?>
    
        <tr>
            <?php foreach ($result as $value) : ?>
                <td><?=$value?></td>
            <?php endforeach; ?>
        </tr>
    
    <?php endforeach; ?>
</table>

<!-- From Hagges

<?php 
                        /*henter nyheder fra databasen*/
/*
                            $sql = "SELECT * FROM begivenheder ORDER BY id DESC;";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "" .$row["titel"] . "<div class='underline'></div>" . $row["text"];
                                }
                            } else {
                                echo "0 results";
                            }

                            $conn->close();
                        ?> 

*/

-->