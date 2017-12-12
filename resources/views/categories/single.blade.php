@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Kategorija</div>

                <div class="panel-body">

                  <table class="table">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Pavadinimas</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>{{ $category['id'] }}</td>
                      <td>{{ $category['name'] }}</td>
                      <td></td>
                    </tr>
                  </tbody>
                  </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Produktai</div>

                <div class="panel-body">

                  @if($products->count() == 0)
                    Produktų nėra

                  @else
                  <table class="table">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Pavadinimas</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $product)
                    <tr>
                      <td>{{ $product['id'] }}</td>
                      <td>{{ $product['name'] }}</td>
                      <td></td>
                    </tr>
                    @endforeach
                  </tbody>
                  </table>
                  @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
