@extends('front.master')

@section('title', 'Home Page')

@section('content')
<main role="main">

    <div id="#mycarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1" ></li>
            <li data-target="#mycarousel" data-slide-to="2" ></li>

        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{URL::asset('dist/img/ked1.png')}}"  height="300px"  alt="First slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="{{URL::asset('dist/img/ragi.jpg')}}"  height="300px" alt="Second slide">
           </div>
            <div class="carousel-item">
             <img class="d-block w-100" src="{{URL::asset('dist/img/ked2.jpg')}}"  height="300" alt="Third slide">
            </div>
       </div>
        <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
              @forelse($products as $product)
                <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" alt="Card image cap" src={{url('images', $product->image)}} width="200" height="300">
                <div class="card-body">
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
