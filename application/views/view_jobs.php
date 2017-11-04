</<!DOCTYPE html>
<html>
<head>
	<title>Jobs</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/StylesForJobTable.css"); ?>">
</head>
<body>
<h2>This is Job result page</h2>
<?php 
echo '<table>';
/*foreach ($col_header as $value) {
	echo '<th>'.$value.'</th>';
}*/
echo'<th>ID</th>
	<th>Title</th>
	<th>Type</th>
	<th>Location</th>
	<th>Job Image</th>';

foreach($result_array as $job){
	echo'<tr class=hov>';
	echo'<td>'.$job['id'].'</td>';
	echo'<td><h4>'.$job['title'].'</h4><p class=description>'.$job['description'].'</p></td>';
	echo'<td>'.$job['type'].'</td>';
	echo'<td>'.$job['location'].'</td>';
	echo'<td>'.$job['jobimage'].'</td>';
	echo'</tr>';
}
echo '</table>';
?>
</body>
</html>
