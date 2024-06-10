@extends('layouts.admin')

@section('title', 'Show Category: ' . $category->name)

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-5">
        <h2>{{$category->name}}</h2>
        <div>
            <a href="{{route('admin.categories.edit', $category->slug)}}" class="btn btn-secondary">Edit</a>
        </div>
    </div>
    <div class="row">

        <p class="alert alert-dark">{{$category->name}}</p>
        <a href="{{route('admin.categories.index')}}" class="btn btn-secondary">Torna alle category</a>
    </div>


</div>





@endsection