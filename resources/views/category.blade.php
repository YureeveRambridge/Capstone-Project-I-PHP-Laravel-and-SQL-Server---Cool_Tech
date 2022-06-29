<?php

    // Function to convert slugs to full names
    function categoryName($ss){
        if ($ss === 'hardware-reviews') {
            return 'Hardware reviews';
        } else if ($ss === 'opinion-pieces') {
            return 'Opinion pieces';
        } else if ($ss === 'software-reviews') {
            return 'Software reviews';
        } else if ($ss === 'tech-news') {
            return 'Tech news';
        } else if ($ss === 'learning-resources') {
            return 'Learning resources';
        } else {
            return 'Unknown category';
        }
    }
?>

<!doctype html>
<html>

    <head>
        <title> {{categoryName($slug)}} </title>
        <link rel="stylesheet" href="/app.css">
    </head>

    <body>

        <!-- Page Heading -->
        <x-header />

    <!-- If incorrect category name is inputted the following is shown-->
    @if (categoryName($slug) === 'Unknown category')

        <div class="categoryItem3">

                <!-- Error message -->
                <h2>Entered category not found.</h2>

                <!-- All available categories are displayed -->
                <ul style="text-align: left;">
                    <li>
                        <a href=" {{ url('/category/hardware-reviews') }} ">
                            Hardware reviews
                        </a>
                    </li>

                    <li>
                        <a href=" {{ url('/category/opinion-pieces') }} ">
                            Opinion pieces
                        </a>
                    </li>

                    <li>
                        <a href=" {{ url('/category/software-reviews') }} ">
                            Software reviews
                        </a>
                    </li>

                    <li>
                        <a href=" {{ url('/category/tech-news') }} ">
                            Tech news
                        </a>
                    </li>

                    <li>
                        <a href=" {{ url('/category/learning-resources') }} ">
                            Learning resources
                        </a>
                    </li>
                </ul>
        </div>

    <!-- Else the following is shown -->
    @else

        <div class="categoryItem3" style="text-align: left;">

            <h2 style="text-align: center;">"{{categoryName($slug)}}" category:</h2><br>

            <!-- Loop through all articles with this category and list them here, with a link-->
            @foreach( $articles as $article )
            <ul>
                <li>
                    <h3>
                        <a href=" {{ url('/article', [$article->article_id]) }} ">
                            {{ $article -> title }}
                        </a>
                    </h3>
                </li>
            </ul>
            @endforeach
        </div>

    @endif

        <!-- Footer and cookie display message -->
        <div class="item5" style="margin-top: 11%;">

            <x-alert />
            <x-footer />
        </div>

    </body>
</html>