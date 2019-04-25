@extends('admin.master')
@section('title','Kategori Page')
@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main" style="margin-top: 50px;">
        <h3 style="text-decoration: underline;">List Kategori</h3><br>
        <ul class="nav navbar-nav">
            @if(!empty($categories))
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID Kategori</th>
                            <th>Nama Kategori</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                        </tr>
                        @empty
                            <li>Tidak ada Kategori</li>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            @endif
        </ul>
        <br><br>
        <form action="{{route('category.store')}}" method="post" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Nama Kategori:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Kategori">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>


    </main>
@endsection
