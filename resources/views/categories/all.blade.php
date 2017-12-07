@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Kategorijos</div>

                <div class="panel-body">
                  <div>
                  <a class="btn btn-default" href="{{ route('categories.create')}}">Nauja kategorija</a>
                </div>
                  <table class="table">
                    <thead>
                    <tr>
                      <th>id</th>
                      <th>Pavadinimas</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $category)
                    <tr>
                      <td>{{ $category['id'] }}</td>
                      <td>{{ $category['name'] }}</td>
                    </tr>
                      @endforeach
                  </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
