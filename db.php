<?php
include "settings.php";
$conn = new mysqli($url, $user, $password,$db);
?>
<style type="text/css">

.tftable {font-size:40px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:40px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#ffffff;}
.tftable td {font-size:40px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffff99;}
</style>
<table class="tftable" border="1">
<tr><th>ID</th><th>Куки</th><th>Команда</th>
<?php $sql = 'SELECT * FROM users';
    if($result = $conn->query($sql)){
    foreach($result as $row){
         
        $userid = $row["id"];
        $UUID = $row["UUID"];
        $team = $row["team"];
        echo "<tr><td>". $userid ."</td><td>". $UUID."</td><td>".$team ."</td></tr>";
        }
    }
    ?>


</table>
