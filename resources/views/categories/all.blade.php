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
                @if($products->count() == 0)

                @else
                  <table class="table">
                    <thead>
                    <tr>
                      <th>id</th>
                      <th>Pavadinimas</th>
                    </tr>
                    </thead>
                    <tbody>
                      Viso: {{ $categories->count() }} <br></br
                      @foreach ($categories as $category)
                    <tr>
                      <td>{{ $category['id'] }}</td>
                      <td>
                          <a href="{{ route('categories.show', $category['id']) }}">{{ $category['name'] }}</a>
                      </td>
                      <td>{{ $category['name'] }}</td>
                      <td>
                          <a class="btn btn-default" href="{{ route('categories.edit', $category['id']) }}">Redaguoti</a>

                          <form method="POST" action="{{ route('categories.destroy', $category['id']) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                          <button class="btn btn-danger" href="#">Trinti</button>
                        </form>
                      </td>
                    </tr>
                      @endforeach
                  </tbody>
                  </table>

                  {{ $categories->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
