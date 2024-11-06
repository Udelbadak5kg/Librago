<html>
<table>


<tr>
	<td> test 1</td>
	<td> test 1</td>
	<td> test 1</td>
	<td> test 1</td>
	<td> test 1</td>
</tr>

<?php foreach($content as $a) :?>
<tr>
	<td><?php echo $a['id'];?></td> nb,  
	<td><?php echo $a['isbn'];?></td>
	<td><?php echo $a['judul'];?></td>
	<td><?php echo $a['status'];?></td>
	<td><?php echo $a['sinopsis'];?></td>
</tr>
	

	<?php endforeach ?>



</table>
</html>;
