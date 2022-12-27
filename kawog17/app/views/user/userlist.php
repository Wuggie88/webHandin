<h1>This is the list of users!</h1>

<?php
    /**
     * Anything included in the $viewbag, passed from the controller
     * is available here.
     */
?>

<table >
    <thead >
        <tr>
        <?php foreach($viewbag['users'][0] as $header => $value) : ?>
        
            <th><?=$header?></th>
        
        <?php endforeach; ?>
        </tr>
    </thead>
    
    <?php foreach ($viewbag['users'] as $result) : ?>
    
        <tr>
            <?php foreach ($result as $value) : ?>
                <td><?=$value?></td>
            <?php endforeach; ?>
        </tr>
    
    <?php endforeach; ?>
</table>