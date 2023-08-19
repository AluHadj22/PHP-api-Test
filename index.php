<?php
require 'connect.php';
header('Content-Type: application/json');

$query = "SELECT * FROM posts";
$posts = mysqli_query($conn, $query);

$postslist = [];

while($post = mysqli_fetch_assoc($posts)) {
    $postslist[] = $post;
}

echo json_encode($postslist);
