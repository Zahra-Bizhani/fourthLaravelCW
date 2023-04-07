<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container">
       

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">sold</th>
                <th scope="col">seen</th>
              </tr>
            </thead>
            <tbody>
                @forelse($result as $res)
              <tr>
                <th scope="row">{{$res->id}}</th>
                <td>{{$res->name}}</td>
                <td>{{$res->sold}}</td>
                <td>{{$res->seen}}</td>
              </tr>
              @empty
              aaadwd

              @endforelse
            </tbody>
          </table>
    </div>
</body>
</html>