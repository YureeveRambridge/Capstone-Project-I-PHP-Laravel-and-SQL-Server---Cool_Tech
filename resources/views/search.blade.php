<!-- Page displays the three search fields. -->

<!doctype html>
<html>
    <head>
        <!-- Tab Heading -->
        <title>Search Cool Tech</title>
        <link rel="stylesheet" href="/app.css">
    </head>

    <body>
		<!-- Page heading -->
		<x-header />

        <!-- Page Sub heading -->
        <div class="categoryItem3">
            <h2>Search:</h2>

            <!-- Search for article by its ID -->
            <form method='POST' action="{{route('search_result')}}">

                <!-- Forces action to execute  -->
                @csrf
                <label for="article_id">Search by article ID:</label><br>

                <input style="width: 21%;" class="form" placeholder="Choose article ID..." type="number" id="article_id" name="article_id" min="0" max="6">

                <input class="searchButton" type="submit" value="Search"><br><br>
            </form>

            <!-- Search for article by its category -->
            <form method='POST' action="{{route('search_result')}}">

                <!-- Forces action to execute  -->
                @csrf
                <label for="category">Search by article category:</label><br>

                <!-- Article category options-->
                <select class='form' id="category" name="category">

                    <option>Choose category...</option>

                    <option value="hardware-reviews">
                        Hardware reviews
                    </option>

                    <option value="opinion-pieces">
                        Opinion pieces
                    </option>

                    <option value="software-reviews">
                        Software reviews
                    </option>

                    <option value="tech-news">
                        Tech news
                    </option>

                    <option value="learning-resources">
                        Learning resources
                    </option>
                </select>

                <!-- Submit button for categories -->
                <input class="searchButton" type="submit" value="Search"><br><br>
            </form>

            <!-- Search for article by its tag -->
            <form method='POST' action="{{route('search_result')}}">

                <!-- Forces action to execute  -->
                @csrf
                <label for="tag">Search by article tag:</label><br>

                <!-- Article tag options -->
                <select class='form' id="tag" name="tag">

                    <option>
                        Choose tag...
                    </option>

                    <option value="ai">
                        Artificial intelligence
                    </option>

                    <option value="google">
                        Google
                    </option>

                    <option value="high-performance-computing">
                        High performance computing
                    </option>

                    <option value="singularity">
                        Singularity
                    </option>
                    
                    <option value="coding-101">
                        Coding 101
                    </option>
                </select>

                <!-- Submit button for tags -->
                <input class="searchButton" type="submit" value="Search"><br><br>
            </form>
        </div>

        <!-- Cookies disclaimer and footer display -->
        <div class="item5" style="margin-top: 3%;">
            <x-alert />
            <x-footer />
        </div>

    </body>
</html>