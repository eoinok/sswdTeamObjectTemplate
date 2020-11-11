<?php

//setup our Team
$myTeam = new Team("Tigers");

//two weeks ago against Rovers we won 1-0
$myTeam->finalScore(1,0);
//last week against Wanderers we lost 2-3
$myTeam->finalScore(2,3);
//i.e. We've played 2 games and scored 3 goals so the goal average should be 1.5
echo "Our goal average is " . $myTeam->getGoalAverage();

?>