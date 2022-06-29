<!-- Home page displays to posts  -->
<!doctype html>
<html>

<head>
    <!-- Tab title -->
    <title>Cool Tech</title>

    <link rel="stylesheet" href="/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

	<!-- Page heading -->
	<x-header />

    <!-- Grid container -->
    <div class="item3">

        <!-- Sub Heading -->
        <h2 class="homeH2">Posts:</h2>

        <!-- Loop through the database items, and print out their title, a hyperlink, and the first paragraph. -->
        @foreach( $articles as $article )

        <!-- Card Display Style -->
        <div class="w3-card-4">

            <!-- Post title with hyperlink -->
            <header class="w3-container w3-grey">
                <h1>
                    <a href=" {{ url('/article', [$article->article_id]) }} ">{{ $article -> title }}</a>
                </h1>
            </header>

            <!-- Post Content -->
            <div class="w3-container">
                <p class="articleP">{{ $article -> content }}</p>
            </div>

            <!-- Displays date created and article id -->
            <footer class="w3-container w3-grey" style="word-spacing: 400px;">
                Date:{{ $article -> date_published }}
                ID:{{ $article -> article_id }}
            </footer>
        </div>
        <br>
        <br>
        @endforeach
    </div>

    <!-- Cookies disclaimer and footer display -->
    <div class="item5">
        <x-alert />
        <x-footer />
    </div>

</body>

</html>