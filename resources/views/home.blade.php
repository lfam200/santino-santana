<html>
<head>
    <title>Home</title>
</head>
<body>
<h1>Prueba</h1>
<ul>
    @foreach($customers as $customer)

        <li>{{ $customer->person->first_name }}</li>
    @endforeach
</ul>

</body>
</html>