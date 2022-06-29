
<!-- Imports Functions from the components folder in slugConverter.php file-->
@include('components.slugConverter')

<!doctype html>

<html >
    <head >
        <!-- Takes the tag and converts it into the tab title -->
    	<title > {{tagName($slug)}} </title >
    	<link rel="stylesheet" href="/app.css">
    </head >

    <body>
		<!-- Page heading -->
		<x-header />

        <!-- Grid Container -->
        <div class="categoryItem3" style="text-align: left;">

        <!-- Displays tags as heading  -->
            <h2 style="text-align: center;">Tag: {{tagName($slug)}}</h2>

           <!-- Loops through all titles of articles in this category then displays and links them -->
           @foreach( $articles as $article )
                
            <ul>
                <li>
                    <h3>
                        <a href=" {{ url('/article', [$article->article_id]) }} ">{{ $article -> title }}</a>
                    </h3>
                    <p>{{ $article -> date_published }}</p>
                </li>
            </ul>

           @endforeach

   		</div>

        <!-- Cookies disclaimer and footer display -->
        <div class="item5" style="margin-top: 11%;">
            <x-alert/>
            <x-footer/>
        </div>

    </body>
</html >