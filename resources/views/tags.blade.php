<html>
    <head>
        <title>Tags</title>
    </head>

    <body>
            @php
                $count = 0;
            @endphp

            @foreach($tags as $fieldRow)

                @if($count == 0)
                    <h2>tag: {{$fieldRow -> tags }}</h2>
                @endif

                <h2>{{$fieldRow -> title}}</h2>
                    <p>Tags: {{$fieldRow -> tags}}</p>
                    <p>{{$fieldRow -> article}}</p>
                    <p>Created date: {{$fieldRow -> created_date}}</p>
                    <br>
                @php
                    $count++;
                @endphp
                
            @endforeach


    </body>
</html>