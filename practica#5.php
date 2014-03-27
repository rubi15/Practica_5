<html>
	<table border="">
		<?php
			$cont = 1;
			
			for($i=0; $i<10; $i++){
				
				if($i%2 == 0){
				
				echo "<tr style =background-color:blue>";
				
				}else{echo "<tr>";}
				
				for($j=0; $j<10; $j++){
				
					echo "<td>".$cont."</td>";
					$cont++;
				}
				echo "</tr>";
			}
		?>
	</table>
</html>
