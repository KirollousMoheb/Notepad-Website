
<?php
require 'connect.php';




If(isset($_POST['submit'])){
$name = mysqli_real_escape_string($conn,$_POST['name']);
$title = mysqli_real_escape_string($conn,$_POST['title']);
$note = mysqli_real_escape_string($conn,$_POST['note']);

If($name !=''&&$title!=''&&$note!=''){

$sql="INSERT INTO notes_table (name,title,note) VALUES ('$name','$title','$note');";
mysqli_query($conn,$sql);

echo "<br/><br/><span>Data Inserted successfully...!!</span>";
header("Location:index.php");

}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
?>
