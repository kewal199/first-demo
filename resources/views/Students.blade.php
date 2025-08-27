<h4> This is view page </h4>
<table border='1'>
<tr>
    <td>Name</td>
    <td>email</td>
    <td>contact</td>

</tr>
@foreach($students as $student)
<tr>
    <td>{{$student->name}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->contact}}</td>
</tr>
@endforeach
</table>