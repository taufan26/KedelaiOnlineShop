@extends('front.master')
@section('title', 'Toko')
@section('content')

	<main role="main">

		<div class="jumbotron jumbotron-fluid">
  			<div class="container">
   				 <h1 class="display-4">Kedelai Online Shop</h1>
    			<p class="lead">Menjual Kedelai dengan berbagai merk dan menjual Ragi</p>
  				</div>
			</div>



      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
              @forelse($products as $product)
                <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" alt="Card image cap" src={{url('images', $product->image)}} width="200" height="300">
                <div class="card-body">
                	<p class="card-text">{{$product->pro_name}}</p>
                 <span>RP {{$product->pro_price}} /kg</span>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Lihat Produk</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Tambah ke Cart</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              @empty
                <h3>Tidak ada Produk</h3>
              @endforelse

          </div>
        </div>
      </div>

    </main>
@endsection