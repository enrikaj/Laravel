@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Redaguojama kategorija - {{ $category->name }}</div>

                <div class="panel-body">

                  @if ($errors->any())
                  <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                    @endforeach
                  </div>
                  @endif

                  <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    {{ method_field('PUT') }}

                    <input type="text" name="name" placeholder="Pavadinimas" value="{{ old('name', $category->name) }}"><br>
                    <br><br>
                    <input type="submit" value="Redaguoti">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
