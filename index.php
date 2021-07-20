<?php 

//MySQLi
$conn = mysqli_connect('localhost', 'Equisolve', '[-9j.2rbA6CMCOJp', 'equisolve team');
//check connection
if(!$conn){
echo 'connection error: '. mysqli_connect_error();
}
//write query for all bios
$sql = 'SELECT  * FROM team_bios';

//make query & get results
$results = mysqli_query($conn, $sql);



//fetch the resulting rows as array
$bios = mysqli_fetch_all($results, MYSQLI_ASSOC);


//free result from memory 
mysqli_free_result($results);
//close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>
        
    <?php include('templates/banner.php'); ?>

    <?php include('templates/bios.php'); ?>

    <?php include('templates/bio-page.php'); ?>


    <?php include('templates/footer.php'); ?>

</html>