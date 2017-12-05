@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Produktas</div>

                <div class="panel-body">
                  <table class="table">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Pavadinimas</th>
                      <th>Nuotrauka</th>
                      <th>Kaina</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>{{ $product['id'] }}</td>
                      <td>{{ $product['name'] }}</td>
                      <td></td>
                      <td>{{ $product['price'] }}</td>
                    </tr>
                  </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
