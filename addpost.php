<?php
include_once 'connectDB.php';
$query = "insert into posts values(NULL, :postTitle, now(), :postContent, :postTag, :status);";
$run = $db->prepare($query);

$run->execute(array(
':postTitle' => $_POST['postTitle'],
':postContent' => $_POST['postContent'],
':postTag' => 'blog', ':status' => 'entry'
));
if ($run) {
header("location:post_list.php");
}
else {
echo 'error';
}

?>
