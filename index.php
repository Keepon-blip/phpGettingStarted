<?php

// // Your code goes here
// $myName = "Keepon";
// $finalOutput = "My name is".' '.$myName;
// // echo $finalOutput;

// // arrays
// $students = array("Sheila", "Caleb", "Emmanuel", "Stephen",);
// echo $students[2];
// echo count($students);

$programMarks = array("Assignments" =>25, "CAT" =>20, "Attendance" =>8, "Projects" =>45,);
echo "CAT:" .$programMarks["CAT"];

// Multi-dimensional arrays
$webTechnologies = array(
    'frontend' => array('HTML', 'CSS', 'JS', 'Bootstrap',),
    'backend' => array('PHP', 'JS', 'Python', 'Java',),
    'databases' => array('mySQL', 'postgreSQL', 'mongoDB', 'firebase',),
);
echo $webTechnologies['frontend'][2]; //JS will be our output
echo $webTechnologies['backend'][0];
echo $webTechnologies['databases'][2];
?>