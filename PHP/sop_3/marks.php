<?php 
 $subject_marks = array('English' =>56 ,'Hindi' =>76, 
 'Marathi'=>56,'Maths' =>57 ,'IT'=>78); 
 $total_marks = $subject_marks['English'] + 
 $subject_marks['Hindi'] + $subject_marks['Marathi'] + 
 $subject_marks['Maths'] + $subject_marks['IT']; 
 echo "English : ".$subject_marks['English']; 
 echo "<br>Hindi : ".$subject_marks['Hindi']; 
 echo "<br>Marathi : ".$subject_marks['Marathi']; 
 echo "<br>Maths : ".$subject_marks['Maths']; 
 echo "<br>IT : ".$subject_marks['IT']; 
 echo "<br><br>Total : ".$total_marks; 
 $percentage = $total_marks/5; 
 echo "<br>Percentage : ".$percentage; 
 ?>