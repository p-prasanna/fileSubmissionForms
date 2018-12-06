<?php
// Include the database configuration file
include 'dbConfig.php';

// Get files from the database
$query = $db->query("SELECT * FROM resumes ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $fileURL = 'uploads/'.$row["file_name"];
        $name=$row["file_name"];
?>
    <a href="<?php echo $fileURL; ?>" >  <?php echo $name; ?>  </a> 
    <p>
<?php }
}else{ ?>
    <p>No file(s) found...</p>
<?php } ?>