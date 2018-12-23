<html>
    <head>
        <title>Visitor is here</title>
        <style>
            p{
                font-size: 14px;
                font-family: sans-serif, Verdana, 'Geneva', Tahoma;
            }
        </style>
    </head>
    <body>
        <ul>
            <li>Name: {{ $visitor->name }}</li>
            <li>Email: {{ $visitor->email }}</li>
            <li>Phone no: {{ $visitor->phone }}</li>
        </ul>
        <p>{{ $visitor->body }}</p>
    </body>
</html>