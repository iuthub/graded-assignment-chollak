@extends('layouts.main')
@section('content')
@include('components.error-block')
    @include('components.info-block')
<form action="{{ route('taskEdit',['id'=>$task->id]) }}" method="get">
    @csrf
    <div id="myDIV" class="header" style="background: green">
        <h2>Edit {{$task->title}}</h2>
        <input type="text" name="title" placeholder="Title..." value="{{$task->title}}">
        <button type="submit" class="addBtn">Submit</button>
    </div>
</form>
@endsection