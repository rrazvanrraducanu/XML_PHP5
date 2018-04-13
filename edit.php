<?php
if(isset($_POST['submit'])) {
$id=$_POST['id'];
 $data=simplexml_load_file('data.xml');
foreach($data->date as $date){
    if($date->id==$id){
 $date->nume=$_POST['nume'];
 $date->culoare=$_POST['culoare'];
 $date->marime=$_POST['marime'];
 $date->pret=$_POST['pret'];
    }
}
$handle=fopen("data.xml","wb");
fwrite($handle,$data->asXML());
fclose($handle);
header('location:index.php');
}
  ?>
<?php
$id=$_GET['id'];
$data=simplexml_load_file('data.xml');
foreach($data->date as $date){
    if($date->id==$id){
?>
<form method="post">
<input type = "hidden" name = "id" value="<?php echo $date->id; ?>"> 
Nume: <br>
<input type = "text" name = "nume" value="<?php echo $date->nume; ?>"> <br><br>
Culoare: <br>
<input type = "text" name = "culoare" value="<?php echo $date->culoare; ?>"> <br><br>
Marime: <br>
<input type = "text" name = "marime" value="<?php echo $date->marime; ?>"><br><br>
Pret: <br>
<input type = "text" name = "pret" value="<?php echo $date->pret; ?>"><br><br>
<input type="submit" name="submit" value="Update">
</form>
<?php
    }
}
?>
