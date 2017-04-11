<?php include_once 'connectDB.php';
$query = "update posts set status='publish' where postID=:key;";
$run = $db->prepare($query);
$run->execute(array(
    ':key' => $_GET['id']
));
if ($run) {
    header("location:post_list.php");
}
else {
    echo 'error';
} ?>
