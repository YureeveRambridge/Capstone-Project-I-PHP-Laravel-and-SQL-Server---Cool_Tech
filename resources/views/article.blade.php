<!-- Page displays a post and all it relevant details -->

<!-- Imports Functions from the components folder in slugConverter.php file-->
@include('components.slugConverter')

<!doctype html>
<html>

<head>

    <!-- Loops through the articles table returns the selected article's title -->
    @foreach($articles as $article)
        <title>{{$article -> title }}</title>
    @endforeach

    <link rel="stylesheet" href="/app.css">
</head>

<body>
	<!-- Page heading -->
	<x-header />

    <!-- Loop through the article with the given id, and display the results-->
    <div class="articleItem3">

        <!-- Loops through the articles table returns the selected article's title, content, category, name, tag, id, and date. -->
        @foreach($articles as $article)

        <div class="articleDisplay">
            <!-- Title -->
            <h2 style="text-align: center;">{{$article -> title }}</h2>

            <!-- Category link -->
            <p style="text-align: center;">{{$article -> content }}</p>

            <div style="border-style: dotted; border-color:black; width:fit-content; text-align: center">

                <p>
                    <b>Category: </b>
                    <a href=" {{ url('/category', [$article->name]) }} ">{{categoryName($article -> name) }}</a>
                </p>

                <!-- Tag link -->
                <p><b>Tags:</b>
                    @foreach($tags as $tag)
                        <a href=" {{ url('/tag', [$tag->name]) }} ">#{{tagName($tag->name)}}</a>
                    @endforeach
                </p>

                <!-- Date -->
                <p>
                    <b>Published On:</b> {{$article -> date_published }}
                </p>

                <!-- ID -->
                <p>
                    <b>ID:</b> {{ $article -> article_id }}
                </p>
            </div>

        </div>
        @endforeach
    </div>

    <!-- Cookies disclaimer and footer display -->
    <div>
        <x-alert />
        <x-footer />
    </div>

</body>

</html>