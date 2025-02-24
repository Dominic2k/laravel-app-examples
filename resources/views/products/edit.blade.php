@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h2>Chỉnh sửa sản phẩm</h2>
        <form action="{{ route('products.update', $product['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $product['name'] }}" required class="form-control mb-3">
            <textarea name="description" class="form-control mb-3">{{ $product['avatar'] }}</textarea>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
@endsection
