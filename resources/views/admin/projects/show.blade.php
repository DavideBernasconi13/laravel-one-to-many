@extends('layouts.admin')

@section('title', 'Edit Project: ' . $project->title)

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-5">
        <h2>{{$project->title}}</h2>
        <div>
            <a href="{{route('admin.projects.edit', $project->slug)}}" class="btn btn-secondary">Edit</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="{{asset('storage/' . $project->image)}}" alt="{{$project->title}}" class="show-image">
        </div>
        <div class="col-md-8">
            <p class="alert alert-dark">{{$project->description}}</p>
        </div>
    </div>


</div>





@endsection