@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Redaguojamas produktas - {{ $product->name }}</div>

                <div class="panel-body">

                  @if ($errors->any())
                  <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                    @endforeach
                  </div>
                  @endif

                  <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    {{ method_field('PUT') }}

                    <input type="text" name="name" placeholder="Pavadinimas" value="{{ old('name', $product->name) }}"><br>
                    <input type="file" name="photo_url" placeholder="Nuotrauka" value="{{ old('photo_url') }}"><br>
                    <input type="checkbox" name="delete_photo">Ištrinti nuotrauką<br>
                    <input type="text" name="price" placeholder="Kaina" value="{{ old('price', $product->price) }}"><br>
                    <br><br>
                    <input type="submit" value="Redaguoti">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
