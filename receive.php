<html>
<head>
<meta charset="utf_8" />
<title>G-DICO</title>
</head>
<body>
  

  <p><?php echo htmlspecialchars ($_POST ['what is the capital of Gabon?']); ?></p>
  <?php
  if (isset($_POST['Libreville']))
  {
  	echo '<p>Question1: Yes that is the right ansvwer<p>';
  }
  else
  {
  	echo '<p>  Question1:sorry the answer was Libreville';
  }
?>
   <p><?php echo htmlspecialchars ($_POST ['who is the president of Gabon?']); ?></p>
  <?php
  if (isset($_POST['Ali Ben Bongo']))
  {
    echo '<p>Question2:Yes that is the right ansvwer<p>';
  }
  else
  {
    echo '<p>Question2:sorry the answer was Ali Ben Bongo';
  }
  ?>
</body>
</html>