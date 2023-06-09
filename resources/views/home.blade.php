<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La vineria</title>

    @vite('resources/js/app.js')
</head>
<body>

    <h1>Home</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Winery</th>
      <th scope="col">Wine</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($wines as $wine)
    <tr>
      <td>{{ $wine->winery }}</td>
      <td>{{ $wine['wine'] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>
