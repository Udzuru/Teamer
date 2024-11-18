<?php
include "settings.php";
$conn = new mysqli($url, $user, $password,$db);

$sql = 'SELECT * FROM users';
$result1 = $conn->query($sql);
$all = $result1->num_rows;

$sql = 'SELECT * FROM users WHERE team=1';
$result1 = $conn->query($sql);
$t1 = $result1->num_rows;

$sql = 'SELECT * FROM users WHERE team=2';
$result1 = $conn->query($sql);
$t2 = $result1->num_rows;

$sql = 'SELECT * FROM users WHERE team=3';
$result1 = $conn->query($sql);
$t3 = $result1->num_rows;

$sql = 'SELECT * FROM users WHERE team=4';
$result1 = $conn->query($sql);
$t4 = $result1->num_rows;
?>
<style type="text/css">
    .tftable {font-size:40px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
    .tftable th {font-size:40px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
    .tftable tr {background-color:#ffffff;}
    .tftable td {font-size:40px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
    .tftable tr:hover {background-color:#ffff99;}
    </style>
    <p>Всего людей: <?php echo $all ?></p>
    <table class="tftable" border="1">
    <tr><th>Команда 1</th><th>Команда 2</th><th>Команда 3</th><th>Команда 4</th></tr>
    <tr><td><?php echo $t1 ?></td><td><?php echo $t2 ?></td><td><?php echo $t3 ?>
</td><td><?php echo $t4 ?></td></tr>
    </table>
    