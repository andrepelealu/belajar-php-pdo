<?php include_once 'connectDB.php';
$query = "delete from posts where postId=:key;";
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
