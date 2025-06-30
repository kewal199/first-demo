<h4>User Name is : {{$name}}</h4>

<div>
@if($name=='kewal')
    <h4>This is kewal</h4>
@elseif($name=='Anup')
   <h4>This is Anup</h4>
@else
<h4>This is prem</h4>
@endif
</div>

<div>
@foreach($users as $user)
<h4>{{$user}}</h4>
@endforeach
</div>

<div>
@for($i=0;$i<=10;$i++)
  {{$i}}
 @endfor 
</div>

