<?php
/**
 * Created by PhpStorm.
 * User: DungNA
 * Date: 4/12/2017
 * Time: 3:14 PM
 */
?>
<div class="site-index">
    <table>
    <tr>
        <th>username</th>
        <th>password</th>
        <th>full name</th>
        <th>gioi tinh</th>
        <th>email</th>
    </tr>
    <tr><?php unset($listUsers[0]['id']);
        foreach ($listUsers[0] as $key => $value){
            echo "<td>".$value."</td>";
        }
    ?></tr>
    </table>
</div>
