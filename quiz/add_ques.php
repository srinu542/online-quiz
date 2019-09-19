<?php 
include "db_con.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Questions</title>
<style>
*{
    font-family: sans-serif;
    font-weight: bold;  
}
table{
    width: 100%;
}
th{
    font-variant-caps: all-petite-caps;
    background: black;
    color: white;
    padding: 10px;
}td{
    font-variant-caps: all-small-caps;
    text-align: center;

}

form{
    width: 400px;
    height: auto;
    padding: 30px;
}
input{
    margin: 10px;
    background: #e2e2e2;
    outline: none;
    width: 350px;
    height: 30px;
    border: none;
}
.btn{
    background: slateblue;
    width: auto;
    color: #fff;
    padding: 10px 25px;
}
a{
text-decoration: none;
position:absolute;
top: 50px;
left: 80%;
}
#ques{
}
</style>
</head>
<body>
    <form action="index.php" method="post">
        
        <label for="ques">Enter Question: </label>
        <input type="text" name="ques" id="ques">
        <br/>

        <label for="1">Enter option 1: </label>
        <input type="text" name="ans_1" id="ans_1">
        <br/>
        <label for="2">Enter option 2: </label>
        <input type="text" name="ans_2" id="ans_2">
        <br/>
        <label for="3">Enter option 3: </label>
        <input type="text" name="ans_3" id="ans_3">
        <br/>
        <label for="4">Enter option 4: </label>
        <input type="text" name="ans_4" id="ans_4">
        <br/>

        <label for="ans">Enter Answere:</label>
        <input type="text" name="ans" id="ans">
        <br/>
        
        <input class="btn" type="submit" value="Submit"  name="submit">
    </form>
    <a href="questions.php" class="btn">Quiz</a>

    <table>
        <tr>
            <th>id</th>
            <th>question</th>
            <th>ans_1</th>
            <th>ans_2</th>
            <th>ans_3</th>
            <th>ans_4</th>
            <th>answere</th>
        </tr>
    <?php 
        $sel = "SELECT * FROM questions";
        $sel_que = mysqli_query($con,$sel);
        
        while($row = mysqli_fetch_assoc($sel_que)){
    ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['question'];?></td>
        <td><?php echo $row['ans_1'];?></td>
        <td><?php echo $row['ans_2'];?></td>
        <td><?php echo $row['ans_3'];?></td>
        <td><?php echo $row['ans_4'];?></td>
        <td><?php echo $row['answere'];?></td>
    </tr>
        <?php }?>
</table>


</body>
</html>

<?php 

if(isset($_POST['submit'])){

    $ques = $_POST['ques'];
    $ans_1 = $_POST['ans_1'];
    $ans_2 = $_POST['ans_2'];
    $ans_3 = $_POST['ans_3'];
    $ans_4 = $_POST['ans_4'];
    $ans = $_POST['ans'];

    $insert = "INSERT INTO questions( question, ans_1, ans_2, ans_3, ans_4, answere) VALUE ('$ques','$ans_1','$ans_2','$ans_3','$ans_4','$ans')";
    $query = mysqli_query($con,$insert);

    if($query){
        echo "query succes";
        header("Location: index.php");
    }else{
        echo "query fail";
        echo mysqli_error($query);
    }

}
