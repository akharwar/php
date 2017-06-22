<?php
$name = $_POST['name'];
$rollno = $_POST['rollno'];
$arrlength=count($name);
for($x=0;$x<$arrlength;$x++)
  {
  echo $name[$x]."--".$rollno[$x] ;
  echo "<br>";
  }
?>
<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td>Name</td>
    <td><?php
    $arrlength1=count($name);
for($x=0;$x<$arrlength1;$x++)
  {
  echo "<input type='hidden' name='name[]' value='$name[$x]' /> " ;
  echo "<input type='hidden' name='rollno[]' value='$rollno[$x]' /> " ;
   }
        ?>
        <input type="text" name="name[]" id="textfield" /></td>
  </tr>
  <tr>
    <td>Roll No.</td>
    <td><input type="text" name="rollno[]" id="textfield2" /></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="button" id="button" value="Submit" /></td>
  </tr>
</table>
</form>