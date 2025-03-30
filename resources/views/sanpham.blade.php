@extends('layout')

@section('title', $sanpham->tensp)

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Trang chu</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <a href="{{ route('cuahang.index') }}"> Cua hang </a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>{{$sanpham->tensp}}</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="product-section container">
        <div class="product-section-image">
            <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
        </div>
        <div class="product-section-information">
            <h1 class="product-section-title">{{ $sanpham->tensp }}</h1>
            <div class="product-section-subtitle">{{ $sanpham->chitietsp }}</div>
            <div class="product-section-price">{{ $sanpham->hienGiaSP() }}</div>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat?
            </p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas magni accusantium, sapiente dicta iusto ut dignissimos atque placeat tempora iste.</p>

            <p>&nbsp;</p>

            {{-- <a href="#" class="button">Them vao gio hang</a> --}}
            <form action="{{ route('giohang.store') }}" method="POST">
                @csrf
                <input type="hidden" name="masp" value="{{ $sanpham->masp }}">
                <input type="hidden" name="tensp" value="{{ $sanpham->tensp }}">
                <input type="hidden" name="giasp" value="{{ $sanpham->giasp }}">
                <button type="submit" class="button button-plain">Them vao gio hang</button>
            </form>
        </div>
    </div> <!-- end product-section -->

    @include('partials.might-like')


@endsection
