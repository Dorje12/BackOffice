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
      <th>Id</th>  
      <th>Subject</th>
      <th>Action</th>
      <th><a href="{{route('subject.create')}}"><button>Create Subject</button></a></th>
</tr>
@foreach($subjects as $subject)
<tr><td>
    {{$subject->id}}
</td>
<td><a href="{{ route('question.index', ['subject' => $subject->id]) }}">{{ $subject->subject }}</a></td>

</tr>

@endforeach
    </table>
</body>
</html>