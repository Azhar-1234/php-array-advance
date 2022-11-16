<?php

	$students = [ 
		["name"=>"azhar","age"=>"20","city"=>"feni"],
		["name"=>"raihan","age"=>"30", "city"=>"dhaka"]];
		function creatTableHeader($values,$key){
			echo "<th>".ucfirst($key)."</th>";
		}
		function printRow($item){
			echo "<tr>";
				array_walk($item, "printCell");
			echo "</tr>";
		}
		function printCell($item){
			echo "<td>";
				echo $item;
			echo "</td>";
		}
?>
<table border="1">
	<?php
		 array_walk($students[0], "creatTableHeader");
		 array_walk($students, "printRow");
	?>
</table>