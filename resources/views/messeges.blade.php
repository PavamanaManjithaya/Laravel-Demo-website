@extends('layouts.app')

@section('content')
<h1>Messeges</h1>

@if(count($messeges)>0)
     @foreach ($messeges as $messege)
     <div class="pb-4">
        <ul class="list-group">
            <li class="list-group-item">Name:  {{$messege->name}}</li> 
            <li class="list-group-item">Email:  {{$messege->email}}</li>   
            <li class="list-group-item">Messege:  {{$messege->messege}}</li>       
            </ul>

     </div>
        
@endforeach
@endsection
@endif
@section('sidebar')
    @parent
    <p>This is appended to sidebar..</p>
@endsection