<?php
    require_once(__DIR__ . "/../model/config.php");
    //Show the post on index page
    $query = "SELECT * FROM posts";
    $result = $_SESSION["connection"]->query($query);
    
    if($result) {
        while ($row = mysqli_fetch_array($result)) {
            echo "<div id='post' class='post'>";
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<br />";
            echo "<p>" . $row['post'] . "</p>";
            echo "<br />";
            echo "</div";
        }
    }