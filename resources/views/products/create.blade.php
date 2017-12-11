@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Naujas produktas</div>

                <div class="panel-body">

                  @if ($errors->any())
                  <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                    @endforeach
                  </div>
                  @endif

                  <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <input type="text" name="name" placeholder="Pavadinimas" value="{{ old('name') }}"><br>
                    <input type="file" name="photo_url" placeholder="Nuotrauka" value="{{ old('photo_url') }}"><br>
                    <input type="text" name="price" placeholder="Kaina" value="{{ old('price') }}"><br>

                    <select name="category_id">
                      @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    <br><br>
                    <input type="submit" value="Submit">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
