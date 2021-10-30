<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    @foreach($locations as $location)
    <p>{{ $location->name }}</p>
    <p>{{ $location->address }}</p>
    <p>{{ $location->start_date }}</p>
    <p>{{ $location->completion_date }}</p>
    @endforeach
  </div>
</body>
</html>