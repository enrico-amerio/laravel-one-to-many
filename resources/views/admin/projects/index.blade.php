@extends('layouts.admin')
@section('content')
@if (session('deleted'))
    <div class="alert alert-success" role="alert">{{ session('deleted')}} </div>
@endif
<h1 class="text-center">Progetti</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Type</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>@foreach ($projects as $project )
            <tr>
                <td>{{$project->type?->name}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-primary me-1" href="{{route('admin.projects.edit', $project->id)}}">modifica</a>
                        <form action="{{route('admin.projects.destroy', $project)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"class="btn btn-danger" >cancella</button>
                          </form>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>

@endsection
