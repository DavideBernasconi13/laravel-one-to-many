@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Projects
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Update At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{$project->id}}</td>
                            <td>{{$project->title}}</td>
                            <td>{{$project->slug}}</td>
                            <td>{{$project->created_at}}</td>
                            <td>{{$project->updated_at}}</td>
                            <td>
                                <a href="#" title="Show" class="text-black px-2"><i class="fa-solid fa-eye"></i></a>
                                <a href="#" title="Edit" class="text-black px-2"><i class="fa-solid fa-pen"></i></a>
                                <!-- aggiungere delete -->
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection