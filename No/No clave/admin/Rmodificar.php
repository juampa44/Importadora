    mysql>  UPDATE tabla SET col1=2; 
<html>
<body>
<?php
if (isset($id)){
// process form
$link = mysql_connect("sql2.pandela.com", "juampa44_db", "ingrid");
mysql_select_db("juampa44_db",$db);
$sql = "UPDATE estudiantesb SET mail='$mail', nickn='$nickn', password='$password' WHERE nombre=$nombre";
$result = mysql_query($sql);
}else{
echo "Debe especificar un 'nombre'.\n";
}
?>
</body>
</html>