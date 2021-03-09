<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>home</title>
</head>
<body>
    <nav>
        <ul>
        @foreach ($menu as $val)
            <li>{{$val}}</li>
        @endforeach
        </ul>
    </nav>
    <header>
        <h1>HEADER</h1>
    </header>
    <section>
        <div class="container">
            @foreach ($cards as $item)
            <div class="card">
                <img src="{{$item['img']}}" alt="">
                <h2>{{$item['title']}}</h2>
                <p>{{$item['descrizione']}}</p>
            </div>
                @endforeach
        </div>
    </section>
</body>
</html>