<?php 
require '../db_con.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../js/jquery-1.10.2.min.js"></script>
		<title>Round 2 Blanks</title>
		<link rel="stylesheet" href="../css/style.css?v=1.1">
</head>
	<body>
<script>
		var max_time = 45;
		var min_time = 1;
</script>

	<div id='timer' class="r2tr">
			<h1 class="time r2t">45</h1>
       </div>  
<div class="container question">
	<div>
		<form id='login' method="post" action="../finish2.php">
		<?php		
			$number_question = 1;
			$join = "SELECT * from teams INNER JOIN round_2 ON teams.team_id = round_2.team_id";
			$join_query = mysqli_query( $con, $join);
			$rowcount = mysqli_num_rows( $join_query );
			$remainder = $rowcount/$number_question;
			$i = 0;
			$j = 1; $k = 1;
			while($row = mysqli_fetch_assoc($join_query)){
			if ( $i == 0) echo "<div class='cont r2' id='question_splitter_$j'>";?>
		<div id='question<?php echo $k;?>'>
		<h6 class="que r2q" id="qname<?php echo $j;?>"> <?php echo '<p>'.$row['teams'].' Question num'. $row['ques_no'].'</p>'. $row['question'];?></h6>
	    </div>
		<?php
		$i++; 
		if ( ( $remainder < 1 ) || ( $i == $number_question && $remainder == 1 ) ) {
		echo "<button id='".$j."' class='r2b previous btn btn-primary' type='button'>Previous</button>
		<button id='".$j."' class='next r2b btn btn-primary' type='submit' name = 'finish'>Finish</button>";
			echo "</div>";
		}  elseif ( $rowcount > $number_question  ) {
		if ( $j == 1 && $i == $number_question ) {
			echo "<button id='".$j."' class='next r2b btn btn-primary' type='button'>Next</button>";
			echo "</div>";
			$i = 0;
			$j++;           
		} elseif ( $k == $rowcount ) { 
			echo "<button id='".$j."' class='r2b previous btn btn-primary' type='button'>Previous</button>
			<button id='".$j."' class='next r2b btn btn-primary' type='submit'>Finish</button>";
			echo "</div>";
			$i = 0;
			$j++;
		} elseif ( $j > 1 && $i == $number_question ) {
			echo "<button id='".$j."' class='previous r2b btn btn-primary' type='button'>Previous</button>
			<button id='".$j."' class='next r2b btn btn-primary' type='button' >Next</button>";
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
<img src="../logo.png" alt="logo" class="r2l">
<script src="../js/main.js"></script>

</body>
</html>
