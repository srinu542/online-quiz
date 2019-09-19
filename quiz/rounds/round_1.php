<?php 
require '../db_con.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../js/jquery-1.10.2.min.js"></script>
		<title>Round 1 Multiple choice</title>
		<link rel="stylesheet" href="../css/style.css?v=1.9">
</head>
	<body>
<script>
		var max_time = 30;
		var min_time = 1;
</script>

	<div id='timer'>
			<h1 class="time">30</h1>
       </div>  
<div class="container question">
	<div>
		<form id='login' method="post" action="../finish.php">
		<?php		
			$number_question = 1;
			$join = "SELECT * from teams INNER JOIN round1_ques ON teams.team_id = round1_ques.team_id";
			$join_query = mysqli_query( $con, $join);
			$rowcount = mysqli_num_rows( $join_query );
			$remainder = $rowcount/$number_question;
			$i = 0;
			$j = 1; $k = 1;
			while($row = mysqli_fetch_assoc($join_query)){
			if ( $i == 0) echo "<div class='cont' id='question_splitter_$j'>";?>
		<div id='question<?php echo $k;?>' >
		<h6 class="que" id="qname<?php echo $j;?>"> <?php echo '<p>'.$row['teams'].' Question '. $row['ques_no'].'</p>'. $row['question'];?></h6>
		<div class="ans">
			<label  class="radiol rad" id="1" for="radio1_<?php echo $row['ques_id'];?>" >
			<input type="radio" value="1" id='radio1_<?php echo $row['ques_id'];?>' name='radio<?php echo $row['ques_id'];?>'/>
			<?php echo $row['ans_1'];?></label>
			<br/>
		
			<label  class="radio2 rad" id="2" for="radio2_<?php echo $row['ques_id'];?>">
			<input type="radio" value="2" id='radio2_<?php echo $row['ques_id'];?>' name='radio<?php echo $row['ques_id'];?>'/>
			<?php echo $row['ans_2'];?></label>
			<br/>

			<label  class="radio3 rad" id="3" for="radio3_<?php echo $row['ques_id'];?>">
			<input type="radio" value="3" id='radio3_<?php echo $row['ques_id'];?>' name='radio<?php echo $row['ques_id'];?>'/>
			<?php echo $row['ans_3'];?></label>
			<br/>

			<label  class="radio4 rad" id="4" for="radio4_<?php echo $row['ques_id'];?>">
			<input type="radio" value="4" id='radio4_<?php echo $row['ques_id'];?>' name='radio<?php echo $row['ques_id'];?>'/>	
			<?php echo $row['ans_4'];?></label>
			<br/>
			<input type="radio" value="5" checked style="display:none;"  id='radio4_<?php echo $row['ques_id'];?>' name='radio<?php echo $row['ques_id'];?>'/>	
		</div>		
	</div>
		<?php
		$i++; 
		if ( ( $remainder < 1 ) || ( $i == $number_question && $remainder == 1 ) ) {
		echo "<button id='".$j."' class='previous btn btn-primary' type='button'>Previous</button>
		<button id='".$j."' class='next btn btn-primary' type='submit' name = 'finish'>Finish</button>";
			echo "</div>";
		}  elseif ( $rowcount > $number_question  ) {
		if ( $j == 1 && $i == $number_question ) {
			echo "<button id='".$j."' class='next btn btn-primary' type='button'>Next</button>";
			echo "</div>";
			$i = 0;
			$j++;           
		} elseif ( $k == $rowcount ) { 
			echo "<button id='".$j."' class='previous btn btn-primary' type='button'>Previous</button>
			<button id='".$j."' class='next btn btn-primary' type='submit'>Finish</button>";
			echo "</div>";
			$i = 0;
			$j++;
		} elseif ( $j > 1 && $i == $number_question ) {
			echo "<button id='".$j."' class='previous btn btn-primary' type='button'>Previous</button>
			<button id='".$j."' class='next btn btn-primary' type='button' >Next</button>";
			echo "</div>";
			$i = 0;
			$j++;
		}
		// <button id='".$j."' class='previous btn btn-primary' type='button'>Previous</button>
		}
		$k++;
	   } ?>	
				</form>
			</div>
		</div>
<img src="../logo.png" alt="logo">
<script src="../js/main.js?v=1.2"></script>

</body>
</html>
