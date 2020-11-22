<?php include ("coneccion.php");?>
	<?php mysql_select_db($baseDatos);?>
	<?php 
		$sql="select * from barcosbd where precio=".$_GET['precio'];
		$res=mysql_query($sql);
		/*while ($fila=mysql_fetch_array($res)){
		echo $fila['nombre'];
		}*/
	?>

Maquinas:
<select name="maquinas" >	
	<?php while ($fila=mysql_fetch_array($res)){ ?>
	<option value="<?php echo $fila['id']?>"><?php echo $fila['precio']?></option>
<?php }?>
</select>
