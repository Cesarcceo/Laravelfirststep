<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact 1</h1>

    <h3>{{$name}}</h3>

    @if($name == 'Hector')
        Welcome hector
    @else
        you are not Hector
    @endif    
    <ul>
    @foreach([1,2,3,4,5,6] as $item)
        <li>{{$item}}</li>
    @endforeach
</body>
</html>