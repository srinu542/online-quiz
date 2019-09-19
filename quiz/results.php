<html>
    <head>
    <link rel="stylesheet" href="css/style.css">        
    </head>
    <body>
        
    </body>
</html>

<?php
require "db_con.php";
$team1_right = 0;
$team1_worng = 0;

$team2_right = 0;
$team2_worng = 0;

$team3_right = 0;
$team3_worng = 0;

$team4_right = 0;
$team4_worng = 0;

$team5_right = 0;
$team5_worng = 0;

$team6_right = 0;
$team6_worng = 0;
$i = 1;

$sel = "SELECT ques_id , answere ,team_id FROM round1_ques";
$sel_query = mysqli_query($con,$sel);
while($row = mysqli_fetch_assoc($sel_query)){
    $ans = $_POST["radio". $i];
    
    if($row['team_id'] == 1){
        if($ans == $row['answere']){
            $team1_right++;
        }else{
            $team1_worng++;
        }   
    }
    
    if($row['team_id'] == 2){
        if($ans == $row['answere']){
            $team2_right++;
        }else{
            $team2_worng++;
        }   
    }
    
    if($row['team_id'] == 3){
        if($ans == $row['answere']){
            $team3_right++;
        }else{
            $team3_worng++;
        }   
    }
    
    if($row['team_id'] == 4){
        if($ans == $row['answere']){
            $team4_right++;
        }else{
            $team4_worng++;
        }   
    }
    
    if($row['team_id'] == 5){
        if($ans == $row['answere']){
            $team5_right++;
        }else{
            $team5_worng++;
        }   
    }
    $i++;
}
echo "team 1 right ". $team1_right."<br/>";
echo "team 1 worng ". $team1_worng."<br/>"."<br/>";

echo "team 2 right ". $team2_right."<br/>";
echo "team 2 worng ". $team2_worng."<br/>"."<br/>";    

echo "team 3 right ". $team3_right."<br/>";
echo "team 3 worng ". $team3_worng."<br/>"."<br/>";    

echo "team 4 right ". $team4_right."<br/>";
echo "team 4 worng ". $team4_worng."<br/>"."<br/>";    

echo "team 5 right ". $team5_right."<br/>";
echo "team 5 worng ". $team5_worng."<br/>"."<br/>";

echo "team 6 right ". $team6_right."<br/>";
echo "team 6 worng ". $team6_worng."<br/>"."<br/>";
?>