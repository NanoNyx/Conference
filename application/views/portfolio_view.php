<h1>Список учасників</h1>
<p>
<table>
Нижче розміщено перелік учасників майбутнього заходу.
<tr><td>№</td><td>Ф.І.О.</td><td>Організація</td><td>EMAIL</td></tr>
<?php

	foreach($data as $row)
	{
		echo '<tr><td>'.$row['№'].'</td><td>'.$row['nickname'].'</td><td>'.$row['org'].'</td><td>'.$row['email'].'</td></tr>';
	}
	
?>
</table>
</p>
