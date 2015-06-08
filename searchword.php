<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>



	<title>NO GAB</title>

</head>
<body>

<?php

include 'db.php';
if (isset($_POST['query'])) {
	$search =htmlspecialchars(stripslashes(trim($_POST['query'])));
	$sql = "SELECT name,definition FROM word WHERE name LIKE '%$search%' OR definition LIKE '%$search%'";// "%%" or definition LIKE "%$search%"
	$result = mysql_query($sql);
	$text = '';
	if ($num = mysql_num_rows($result) > 0) 
	{

		while ($row = mysql_fetch_assoc($result)) 
			{
				$text.='<p style="font-weight:700">' .$row[name].'</p><p>'. $row[definition].'</p>';
			}

		$bold = '<span style="color:#f00;">' .$search.'</span>';
		$text = str_replace($search,$bold,$text);
	}

	else 
	{

		$text='<p>nothing found</p>';
	}

echo $text;
	
}



?>

</body>
</html>