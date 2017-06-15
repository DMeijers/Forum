<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'database.php' ;
    $database = new database();
    ?>
    <meta charset="UTF-8">
    <title>Music</title>
    <link rel="stylesheet" href="CSS%20User%20Interface.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
</head>
<body>
<?php
include 'nav.php' ;

    $result = database::execute("SELECT * FROM users");
    echo "<pre>";
    print_r($result);
    echo "</pre>";
?>
<h1>Music Forum </h1>
<div class="headtitle">
    <p>This is a music forum.</p>
    <p>There are lots of music you can talk about here.</p>
    <p>More is added later.</p>
</div>
</body>
</html>