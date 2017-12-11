@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Visi produktai</div>

                <div class="panel-body">
                  <div>
                  <a class="btn btn-default" href="{{ route('products.create')}}">Naujas produktas</a>
                </div>
                  <table class="table">
                    <thead>
                    <tr>
                      <th>id</th>
                      <th>Kategorija</th>
                      <th>Pavadinimas</th>
                      <th>Nuotrauka</th>
                      <th>Kaina</th>
                      <th>Veiksmai</th>

                    </tr>
                    </thead>
                    <tbody>
                      Viso: {{ $products->count() }} <br></br
                      @foreach ($products as $product)
                    <tr>
                      <td>{{ $product['id'] }}</td>
                      <td>
                        {{ empty($product->category) ? '' : $product->category->name }}
                      </td>
                      <td>
                          <a href="{{ route('products.show', $product['id']) }}">{{ $product['name'] }}</a>
                      </td>
                      <td><img style="width: 100px" src="{{ Storage::url($product['photo_url'])}}"></td>
                      <td>{{ $product['price'] }}</td>
                      <td>
                          <a class="btn btn-default" href="{{ route('products.edit', $product['id']) }}">Redaguoti</a>

                          <form method="POST" action="{{ route('products.destroy', $product['id']) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                          <button class="btn btn-danger" href="#">Trinti</button>
                        </form>
                      </td>
                    </tr>
                      @endforeach
                  </tbody>
                  </table>

                  {{ $products->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
