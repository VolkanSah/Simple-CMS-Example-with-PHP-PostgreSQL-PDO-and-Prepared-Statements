<?php
// Connect to the database
require_once 'database.php';

// Get form data
$title = $_POST['title'];
$content = $_POST['content'];

// Prepare the SQL statement
$stmt = $db->prepare("INSERT INTO pages (title, content) VALUES (:title, :content)");

// Bind placeholders
$stmt->bindParam(':title', $title);
$stmt->bindParam(':content', $content);

// Execute the statement
$stmt->execute();

// Redirect to the page overview
header('Location: pages.php');
exit;
?>
