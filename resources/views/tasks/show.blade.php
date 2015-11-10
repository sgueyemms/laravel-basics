@extends('app')
 
@section('content')
    <h2>{{ $task->project->name }} - {{ $task->name }}</h2>
 
    Creation: {{ $task->created_at }}
@endsection