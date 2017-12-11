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
        </div>
    </div>
</div>
@endsection
