<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add subject</title>
</head>
<body>
<form method="POST"action="{{route('question.store')}}">
  @csrf
  <input type="hidden" name="subject_id" placeholder="question" value="{{$subject->id}}">
    <label for="question">Question</label>
    <input type="text" id="question" name="question" placeholder="question">
  
    <input type="submit" value="Add">
  </form>
</body>
</html>