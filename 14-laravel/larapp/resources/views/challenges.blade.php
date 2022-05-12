<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            h1 {
                text-align: center;
            }
            table {
                border-collapse: collapse;
                margin: 20px auto;
                width: 80%;
            }
            table tr:nth-child(even){
                background-color: #666;
            }
            table th{
                background-color: #999;
            }
            table th,
            table td {
                border: 1px solid #999;
                padding:10px
            }
        </style>
</head>
<body>
    <h1 >List All Users</h1>
    <hr>
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->fullname}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
    
