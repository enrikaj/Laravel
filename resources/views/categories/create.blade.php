@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nauja kategorija</div>

                <div class="panel-body">

                  @if ($errors->any())
                  <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                    @endforeach
                  </div>
                  @endif

                  <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <input type="text" name="name" placeholder="Pavadinimas" value="{{ old('name') }}"><br>
                    <br><br>
                    <input type="submit" value="Submit">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
