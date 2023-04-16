<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
  <tr>
    <th>id</th>
    <th>question</th>
   <a href="{{route('question.create',['subject' => $subject->id]) }}"> <button>Add Question</button></a>
  </tr>
<!-- <p>{{$subject}}</p> -->
  @foreach($questions as $question)
  <tr>
    <td>
    {{$question->id}} 
  </td>
<td>{{$question->questions}}</td>
</tr>
  
  @endforeach
</table>
</body>
</html>