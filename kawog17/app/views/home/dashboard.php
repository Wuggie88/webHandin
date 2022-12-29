<h1>This is the image feed dashboard</h1>

<?php

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


<?php 
/*

                            An idea of how to make the pictures load in with the title having a underline (this would need to be setup in CSS ofc)
                            $sql = "SELECT * FROM image ORDER BY id DESC;";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "" .$row["titel"] . "<div class='underline'></div>" . $row["image"];
                                }
                            } else {
                                echo "0 results";
                            }

                            $conn->close();
                        ?> 

*/
