@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <h1 class="text-center">Aggiungi Progetto</h1>

    <div class="row pt-5">
        <div class="col-10">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach

                </div>
            @endif
            <form action="{{ route('admin.projects.store')}} " method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="title" placeholder="Enter title" value="{{old('title')}}">
                  @error('title')
                  <small class="text-danger ">
                    {{ $message }}
                  </small>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter description">{{old('description')}}</textarea>
                    @error('description')
                  <small class="text-danger ">
                    {{ $message }}
                  </small>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
