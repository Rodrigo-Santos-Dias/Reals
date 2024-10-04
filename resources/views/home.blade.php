
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <div>
            <h2>Listar todos os usuarios</h2>
        </div>
        
        @foreach ($users as $user)
            <div>
                <h3>{{$user['name']}}</h3>
                <h3>{{$user['cpf']}}</h3>
                <h3>{{$user['email']}}</h3>
                <h3>{{$user['birthdate']}}</h3>
                <h3>{{$user['phone']}}</h3>
                <h3>{{$user['address']}}</h3>
                <h3>{{$user['city']}}</h3>
                <h3>{{$user['state']}}</h3>
            </div>    
        @endforeach
       
    </main>

</body>
</html>