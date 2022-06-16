<?php

function checkUserEligibilityToVote()
{
   $age = 18;
   $name = "Keepon";
   if($age >=18) {
       echo $name. ", you are eligible to vote";
   }
   else {
       echo $name. ", you are not eligible to vote";
   }
}
// checkUserEligibilityToVote();

function gradingSystem() {
    $marks = 45;
    if($marks >= 80) {
        $grade = "A(plain)";
    }
    else if($marks >=75)
    {
        $grade = "A-";
    }
    else if($marks >=65){
        $grade = "B+";
    }
    else if($marks >=60){
        $grade = "B";
    }
    else if($marks >=50){
        $grade = "C+";
    }
    else {
        $grade = "FAIL";
    }
    echo "Your score is: " .$grade;
    
}
gradingSystem();

?>