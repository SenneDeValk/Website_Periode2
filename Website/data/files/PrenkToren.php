
 <?php 	 
	 
	 $ahoogte = $_POST["ahoogte"];
	 $abreedte = $_POST["abreedte"];
	 $breedte = $_POST["breedte"];
	 $gif = $_POST["gif"];	
	
	 if ($gif == 2 || $gif == 3 ) {
		 $kleur = "black";
		 $kleure = "white";
	 }
	 else if ($gif == 1) {
		 $kleur = "#f0f0f0";
		 $kleure = "black";
	 }
	 if ($breedte == "" || $ahoogte == "" || $abreedte == "") {
		 echo("<p style='color: $kleure'> Volgende keer alles invullen! </p>");
	 }
		 
	 else
	 echo "<table cellspacing='0' cellpadding='0'>";
	 for($orgineel=1 ; $orgineel<=$ahoogte ; $orgineel++) {
		
		
		echo("<td>");
		
		for($orgineler=1 ; $orgineler<=$abreedte ; $orgineler++) {
		if  ($gif == "1") {
		echo("<img src='image/pranked.gif' style='width: $breedte%;'>");
		}
		
		else if ($gif == "2") {
		echo("<img src='image/gif2.gif' style='width: $breedte%;'>");	
		}
		
		else
		echo("<img src='image/gif3.gif' style='width: $breedte%;'>");
		 }
		echo("</tr>");
	}
	echo("</table>");
	 
	?>
  
  <style>
body{
	background-color: <?php echo $kleur;?>;
}
</style>