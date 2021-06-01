@extends('layouts.app')

@section('content')

   <h1>Contact</h1>  
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'NAME')}}
        {{Form::text('name', '',['class'=>'form-control','placeholder'=>'Enter Name..'])}}
     </div>
         
        <div class="form-group">
           {{Form::label('email', 'E-Mail Address')}}
           {{Form::text('email',  '',['class'=>'form-control','placeholder'=>'Enter Mail..'])}}
        </div> 
        
        <div class="form-group">
            {{Form::label('messege', 'Messege')}}
            {{Form::textarea('messege',  '',['class'=>'form-control','placeholder'=>'Enter Messege...'])}}
         </div>
         <div>
             {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
         </div>

     {!! Form::close() !!}
@endsection
@section('sidebar')
<div class="card">
   <div class="m-2">
   <h3 class="card=title">Thanks..</h3>
    <p class="card-text">We will updates the latest info to your mail..!!</p>
   </div>
</div>
@endsection