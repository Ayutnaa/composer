<?php
include 'includes/logincheck.php';
$beldex = $con->prepare("insert into `posts` (user_id, post_title, post_content) values (?,?,?)");
$beldex->bind_param("isb", $user_id, $post_title, $post_content);

$user_id = $user['id'];
$post_title = filter_var($_POST['post_title'], FILTER_SANITIZE_STRING);
$post_content = filter_var($_POST['post_content'], FILTER_SANITIZE_STRING);
$results = $beldex->();

if($results) {
    
}
?>