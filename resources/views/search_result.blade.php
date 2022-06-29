<!-- Redirects the user to the correct page according to inputted variable -->

<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // If article id is entered
        if (isset($_POST['article_id'])) {
            $article_id = $_POST['article_id'];
            header("Location: /article/" . $article_id);
            exit();
        }
        // If category is entered 
        else if (isset($_POST['category'])) {
            $category = $_POST['category'];
            header("Location: /category/" . $category);
            exit();
        }
        // If tag  is entered
        else if (isset($_POST['tag'])) {
            $tag = $_POST['tag'];
            header("Location: /tag/" . $tag);
            exit();
        }
    }
?>