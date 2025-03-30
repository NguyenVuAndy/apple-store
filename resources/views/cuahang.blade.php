@extends('layout')

@section('title', 'Cua hang')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Trang chu</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Cua hang</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="products-section container">
        <div class="sidebar">
            <h3>Theo danh muc</h3>
            <ul>
                <li><a href="#">Laptops</a></li>
                <li><a href="#">Desktops</a></li>
                <li><a href="#">Dien thoai</a></li>
                <li><a href="#">May tinh bang</a></li>
            </ul>

            <h3>Theo gia</h3>
            <ul>
                <li><a href="#">10.000.000 - 20.000.000</a></li>
                <li><a href="#">20.000.000 - 40.000.000</a></li>
                <li><a href="#">40.000.000+</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div>
            <h1 class="stylish-heading">Laptops</h1>
            <div class="products text-center">
                @foreach ($sanphams as $sanpham)
                    <div class="product">
                        <a href="{{ route('cuahang.show', $sanpham->slug) }}"><img src="/img/macbook-pro.png" alt="product"></a>
                        <a href="{{ route('cuahang.show', $sanpham->slug) }}"><div class="product-name">{{ $sanpham->tensp }}</div></a>
                        <div class="product-price">{{ $sanpham->hienGiaSP() }}</div>
                    </div>
                @endforeach
            </div> <!-- end products -->
        </div>
    </div>


@endsection
