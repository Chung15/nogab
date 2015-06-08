<?php

 $db_host="localhost";
 $db_username="root";
  $db_pass=""; 
  $db_name="dictionary";
  @mysql_connect("$db_host", "$db_username", "$db_pass") or die ("could not connect to mysql");
  @mysql_select_db("$db_name") or die ("no database");
  echo"successful connection";

mysql_query('SET NAMES utf8');

function search ($query) 
{ 
    $query = trim($query); 
    $query = mysql_real_escape_string($query);
    $query = htmlspecialchars($query);

    if (!empty($query)) 
    { 
        if (strlen($query) < 3) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 128) {
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else { 
            $q = "SELECT 'ID', 'nom', 'possesseur', 'console', 'prix', 'nbre_joueurs_max' , 'commentaires'
                  FROM 'jeux_video' WHERE 'text' LIKE '%$query%'
                  OR 'nom' LIKE '%$query%' OR 'meta_k' LIKE '%$query%'
                  OR 'meta_d' LIKE '%$query%'";

            $result = mysql_query($q);

            if (mysql_affected_rows() > 0) { 
                $row = mysql_fetch_assoc($result); 
                $num = mysql_num_rows($result);

                $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';

                do {
                    // Делаем запрос, получающий ссылки на статьи
                    $q1 = "SELECT `link` FROM `table_name` WHERE `uniq_id` = '$row[page_id]'";
                    $result1 = mysql_query($q1);

                    if (mysql_affected_rows() > 0) {
                        $row1 = mysql_fetch_assoc($result1);
                    }

                    $text .= '<p><a> href="'.$row1['link'].'/'.$row['category'].'/'.$row['uniq_id'].'" title="'.$row['title_link'].'">'.$row['title'].'</a></p>
                    <p>'.$row['desc'].'</p>';

                } while ($row = mysql_fetch_assoc($result)); 
            } else {
                $text = '<p>По вашему запросу ничего не найдено.</p>';
            }
        } 
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 
 /* //collect
  $output = '';
if (isset($_POST['search'])) {
	$searchq = $_POST['search'];
	//$searchq = preg_replace("", replacement, subject);
	$query = mysql_query("SELECT * FROM jeux_video WHERE  LIKE '%$searchq%' or definition LIKE'%$searchq%' ")
	or die ("could not search") ;
	$count=mysql_num_rows($query);
	if ($count == 0){
		$output = 'there was no search results';
	}

		else{
			while ($row = mysql_fetch_array($query)){
				$fname=$row['name'];
				$fdefinition=$row['definition'];
				$id=$row['id'];
				$output.='<div>'.$fname. ' ' .$definition. '</div>' ;
			}
		}
	}


print ("$output");*/

?>

