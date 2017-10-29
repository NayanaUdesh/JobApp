</<!DOCTYPE html>
<html>
<head>
	<title>Jobs</title>
</head>
<body>
<h2>This is Job result page</h2>
<?php 
echo '<table border=2>';
/*foreach ($col_header as $value) {
	echo '<th>'.$value.'</th>';
}*/
echo'<td>ID</td>
	<td>Title</td>
	<td>Type</td>
	<td>Location</td>
	<td>Job Image</td>';

foreach($result_array as $job){
	echo'<tr>';
	echo'<td>'.$job['id'].'</td>';
	echo'<td><h4>'.$job['title'].'</h4><p>'.$job['description'].'</p></td>';
	echo'<td>'.$job['type'].'</td>';
	echo'<td>'.$job['location'].'</td>';
	echo'<td>'.$job['jobimage'].'</td>';
	echo'</tr>';
}
echo '</table>';
?>
</body>
</html>
