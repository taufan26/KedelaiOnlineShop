@extends('admin.master')
@section('title','Tambah Produk')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="text-decoration: underline; margin-top: 50px;">
        <h3>Tambah Produk Baru</h3>
        <div class="col-md-6">
            <div class="panel-body">
                <form action="{{route('product.store')}}" method="post" role="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('pro_name')?' has-error':''}}">
                        <label for="pro_name">Nama Produk</label>
                        <input type="text" class="form-control" name="pro_name" id="pro_name" placeholder="Product Name">
                        <span class="text-danger">{{$errors->first('pro_name')}}</span>
                    </div>


                    <div class="form-group{{$errors->has('pro_code')?' has-error':''}}">
                        <label for="pro_code">Kode Produk</label>
                        <input type="text" class="form-control" name="pro_code" id="pro_code" placeholder="Code">
                        <span class="text-danger">{{$errors->first('pro_code')}}</span>
                    </div>

                    <div class="form-group{{$errors->has('pro_price')?' has-error':''}}">
                        <label for="pro_price">Harga/kg</label>
                        <input type="text" class="form-control" name="pro_price" id="pro_price" placeholder="Price">
                        <span class="text-danger">{{$errors->first('pro_price')}}</span>
                    </div>

                    <div class="form-group{{$errors->has('stock')?' has-error':''}}">
                        <label for="stock">Stok</label>
                        <input type="text" class="form-control" name="stock" id="stock" placeholder="Stock">
                        <span class="text-danger">{{$errors->first('stock')}}</span>
                    </div>

                    <div class="form-group{{$errors->has('pro_info')?' has-error':''}}">
                        <label for="pro_info">Deskripsi</label>
                        <textarea name="pro_info" id="pro_info" rows="5" class="form-control"></textarea>
                        <span class="text-danger">{{$errors->first('pro_info')}}</span>
                    </div>

                    <div class="form-group{{$errors->has('category_id')?' has-error':''}}">
                        <label for="category_id">Kategori</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value=""> -- Pilih Kategori -- </option>
                            @foreach($categories as $id=>$category)
                                <option value="{{$id}}">{{$category}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{$errors->first('category_id')}}</span>
                    </div>


                    <div class="form-group{{$errors->has('image')?' has-error':''}}">
                        <label for="image">Gambar</label>
                        <input type="file" name="image" class="form-control">
                        <span class="text-danger">{{$errors->first('image')}}</span>
                    </div>

                <!--     <div class="form-group{{$errors->has('spl_price')?' has-error':''}}">
                        <label for="spl_price">Harga Jual</label>
                        <input type="text" class="form-control" name="spl_price" id="spl_price" placeholder="Sale Price">
                        <span class="text-danger">{{$errors->first('spl_price')}}</span>
                    </div>
 -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </main>
        </div>
    </div>
@endsection
