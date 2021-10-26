<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h2 {
            padding: 50px;
        }
        h2, li {
            
            text-align: center;
            text-transform: capitalize;
        }
    </style>
</head>
<body>
    <main>
        <h2>
            Hello World
        </h2>

        <h2>
            homepage
        </h2>

        <h2>
            pacco da giu
        </h2>
        <ul>
            @foreach($pacco as $salume)
                <li>
                    <h3>
                        {{ $salume}}
                    </h3>
                </li>
            @endforeach
        </ul>
        
        <a href="{{route('home')}}">homepage</a>
        <a href="{{route('us')}}">about</a>
        <a href="{{route('them')}}">contacts</a>
    </main>
</body> 
</html>