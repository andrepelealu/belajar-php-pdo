<?php include_once 'connectDB.php';
$query = "UPDATE posts SET postTitle= :postTitle, postContent= :postContent WHERE postId=:key;";
$run = $db->prepare($query);
$run->execute(array(
    ':key' => $_POST['postId'],
    ':postTitle' => $_POST['postTitle'],
    ':postContent' => $_POST['postContent']
));
if ($run) {
    header("location:post_list.php");
}
else {
    echo 'error';
} ?>
