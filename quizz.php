<?php
// we are going to crete some formulars for the quizz
?>
<html>
<body>
	<h1> QUIZZ</h1>
	<p> <strong>be sure you check the answers before submitting! enjoy!!</strong></p>

<form action="receive.php" method="POST">
	<p><strong>Question 1</strong></p>
	<p><label>what is the capital of Gabon?</label></p>
	<p><input type="checkbox" name="libreville"/><label>Libreville </label></p>
	<p><input type="checkbox" name="port-gentil"/><label>Port-Gentil </label></p>
	<p><input type="checkbox" name="malabo"/><label>Malabo </label></p>
	
	<p><strong>Question 2</strong></p>
	<p><label>who is the president of Gabon?</label></p>
	<p><input type="checkbox" name="libreville"/><label>Alpha Oamar Konare </label></p>
	<p><input type="checkbox" name="port-gentil"/><label>Ali Ben Bongo </label></p>
	<p><input type="checkbox" name="malabo"/><label>Sangere Malawi </label></p>
	
	<!--<p><label>etes vous vegetarien? <input type="checkbox" name="vegetarien"/></label></p>
	--><p><input type="submit" value= " send"/></p>
	</form>

	</body>
	</html>
