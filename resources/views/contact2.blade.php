<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact 2</title>
</head>
<body>
    <h1>
        CONTACT 2
    </h1>
    <h1>
        @if ($name != 'Carolina')
            Tu nombre no es Carolina
       
        @else
            Tu nombre es:{{$name}}    
        @endif    
        
    </h1>
    <h1>
        @for ($i = 1; $i < 11; $i++)
        <li>{{$num}} X {{$i}} = {{$num*$i}}<li>  
        @endfor
    </h1>
</body>
</html>