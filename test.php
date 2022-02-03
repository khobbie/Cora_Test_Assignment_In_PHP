<?php

require_once './Queue.php';

$queue = new Queue();

// Add user
$user = 1;
$queue->AddUser($user);
echo "<br><br> ADD_USER($user) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);


// Add user
$user = 2;
$queue->AddUser($user);
echo "<br><br> ADD_USER($user) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);


// Add user
$user = 3;
$queue->AddUser($user);
echo "<br><br> ADD_USER($user) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);




// Add user
$user = 4;
$queue->AddUser($user);
echo "<br><br> ADD_USER($user) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);




// Add user
$user = 5;
$queue->AddUser($user);
echo "<br><br> ADD_USER($user) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);




// Add user
$user = 6;
$queue->AddUser($user);
echo "<br><br> ADD_USER($user) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);


// removeUserByValue
$user = 2 ;
$queue->removeUserByValue($user);
echo "<br><br> REMOVE_USER($user) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);


// removeUserByValue
$user = 6 ;
$queue->removeUserByValue($user);
echo "<br><br> REMOVE_USER($user) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);


// removeUserByValue
$user = 10 ;
$queue->removeUserByValue($user);
echo "<br><br> REMOVE_USER($user) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);




// moveUsersGivenStartAndEndPosition
$start_position = 3;
$end_position = 1;
$queue->moveUsersGivenStartAndEndPosition($start_position, $end_position );
echo "<br><br> MOVE_USERS($start_position, $end_position) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);


// reverse order of user queue
$queue->reversUsers();
echo "<br><br> REVERSE_USERS <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);


// switchUserGivenTwoPositions
$first_position = 6;
$second_position = 1;
 $queue->switchUserGivenTwoPositions($first_position, $second_position);
echo "<br><br> SWAP($first_position, $second_position) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);



// removeUserByPosition
$position = 3 ;
$queue->removeUserByPosition($position);
echo "<br><br> REMOVE_POSITION_OF_USER($position) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);




// removeUserByValue
$user = 1 ;
$queue->removeUserByValue($user);
echo "<br><br> REMOVE_USER($user) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);


// removeUserByPosition
$position = 6 ;
$queue->removeUserByPosition($position);
echo "<br><br> REMOVE_POSITION_OF_USER($position) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);


// Add user
$user = 7;
$queue->AddUser($user);
echo "<br><br> ADD_USER($user) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);


// Add user
$user = 8;
$queue->AddUser($user);
echo "<br><br> ADD_USER($user) <br> -----------------------------------------------------------------------<br>";
print_r($queue->users);


echo "<br><br> <br>";