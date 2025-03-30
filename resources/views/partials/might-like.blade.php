<div class="might-like-section">
    <div class="container">
        <h2>Co the ban se thich</h2>
        <div class="might-like-grid">
            @foreach ($coTheBanSeThich as $sanpham)
                <a href="{{ route('cuahang.show', $sanpham->slug) }}" class="might-like-product">
                <img src="{{ asset('img/macbook-pro.png') }}" alt="san pham">
                <div class="might-like-product-name">{{ $sanpham->tensp }}</div>
                <div class="might-like-product-price">{{ $sanpham->hienGiaSP() }}</div>
            </a>
            @endforeach
        </div>
    </div>
</div>
