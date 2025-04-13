@extends('layout')

@section('title', 'Gio hang')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="#">Trang chu</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Gio hang</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="cart-section container">
        <div>
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Cart::count() > 0)
            <h2>{{ Cart::count() }} mon do trong gio hang</h2>

            <div class="cart-table">
                @foreach (Cart::content() as $item)


                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="{{ route('cuahang.show', $item->model->slug) }}"><img src="/img/macbook-pro.png" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="{{ route('cuahang.show', $item->model->slug) }}">{{ $item->model->tensp }}</a></div>
                            <div class="cart-table-description">{{ $item->model->chitietsp }}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            {{-- <a href="#">Xoa</a> <br> --}}
                            <form action="{{ route('giohang.destroy', $item->rowId) }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="cart-options">Xoa</button>
                            </form>
                        </div>
                        <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div>{{ $item->model->hienGiaSP() }}</div>
                    </div>
                </div> <!-- end cart-table-row -->
                @endforeach
            </div> <!-- end cart-table -->

            <a href="#" class="have-code">Ma giam gia</a>

            <div class="have-code-container">
                <form action="#">
                    <input type="text">
                    <button type="submit" class="button button-plain">Apply</button>
                </form>
            </div> <!-- end have-code-container -->

            <div class="cart-totals">
                <div class="cart-totals-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam diam libero, posuere nec sem quis, mattis mattis quam. Donec in mauris ut ex egestas scelerisque sit amet sed ex..
                </div>

                <div class="cart-totals-right">
                    <div>
                        Tong don hang <br>
                        Ma giam gia <br>
                        <span class="cart-totals-total">So tien phai tra</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        {{ Cart::subtotal() }} <br>
                        Khong <br>
                        <span class="cart-totals-total">{{ Cart::total() }}</span>
                    </div>
                </div>
            </div> <!-- end cart-totals -->

            <div class="cart-buttons">
                <a href="{{ route('cuahang.index') }}" class="button">Tiep tuc mua sam</a>
                <a href="{{ route('checkout.index') }}" class="button-primary">Tien hanh thanh toan</a>
            </div>

            @else
                <h3>Khong co mon do nao trong gio hang</h3>
            @endif


        </div>

    </div> <!-- end cart-section -->

    @include('partials.might-like')


@endsection
