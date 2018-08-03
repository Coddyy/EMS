<?php foreach($decrpyt as $key)
{

	$pass=$key->password;

?>

<table>
 <tr>
   <th>Email</th>
   <th>|</th>
   <th>|</th>
   <th>Passsword</th>
 </tr>
 <tr>
   <td><?php echo $key->email ; ?></td>
 <td>|</td>
 <th>|</th>
   <td><?php echo $pass; ?></td>
 </tr>
</table>

<?php } ?>