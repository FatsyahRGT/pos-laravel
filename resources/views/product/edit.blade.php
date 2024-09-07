@extends('layouts.app')
@section('title', 'Edit')

@section('content')
    <form action="{{ route('category.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="category_id" class="col-sm-2 col-form-label">Nama Kategori *</label>
            <div class="col-sm-5">
                <select required name="category_id" id="category_id" class="form-control">
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)

                    <option {{$category->id == $edit->category_id ? 'selected':''}} value="{{$category->id}}">{{ $category->category_name }}</option>
                    @endforeach
                    <!-- Populate categories here -->
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="product_name" class="col-sm-2 col-form-label">Nama Produk *</label>
            <div class="col-sm-5">
                <input required type="text" class="form-control" name="product_name" placeholder="Nama Produk" id="product_name">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="product_qty" class="col-sm-2 col-form-label">Qty *</label>
            <div class="col-sm-5">
                <input required type="text" class="form-control" name="product_qty" placeholder="Qty" id="product_qty">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="product_qty" class="col-sm-2 col-form-label">Harga *</label>
            <div class="col-sm-5">
                <input required type="text" class="form-control" name="product_price" placeholder="harga" id="product_price">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>


        </form>

    </form>


@endsection
