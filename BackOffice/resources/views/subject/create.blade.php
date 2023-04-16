<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add subject</title>
</head>
<body>
<form method="POST"  action="{{route('subject.store')}}">
    @csrf
    <label for="subject">subject</label>
    <input type="text" id="subject" name="subject" placeholder="Subject">
  
    <button type="submit">Add</button>
  </form>

</body>
</html>