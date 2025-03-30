@extends('layout')

@section('title', 'Checkout')

@section('extra-css')

@endsection

@section('content')

    <div class="container">

        <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="checkout-section">
            <div>
                <form action="{{ url('/momo_payment') }}" method="POST">
                    @csrf
                    <h2>Thong tin don hang</h2>

                    <div class="form-group">
                        <label for="email">Dia chi email</label>
                        <input type="email" class="form-control" id="email" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label for="name">Ho va ten</label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="address">Dia chi</label>
                        <input type="text" class="form-control" id="address" name="address" value="">
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">Thanh pho</label>
                            <input type="text" class="form-control" id="city" name="city" value="">
                        </div>
                        <div class="form-group">
                            <label for="province">Quan/huyen</label>
                            <input type="text" class="form-control" id="province" name="province" value="">
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="phone">So dien thoai</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="">
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>

                    <h2>Thong tin thanh toan</h2>

                    <div class="form-group">
                        <label for="name_on_card">Ten tren the</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                    </div>
                    <div class="form-group">
                        <label for="address">Dia chi</label>
                        <input type="text" class="form-control" id="address" name="address" value="">
                    </div>

                    <div class="form-group">
                        <label for="cc-number">So the</label>
                        <input type="text" class="form-control" id="cc-number" name="cc-number" value="">
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="expiry">Ngay het han</label>
                            <input type="text" class="form-control" id="expiry" name="expiry" placeholder="MM/DD">
                        </div>
                        <div class="form-group">
                            <label for="cvc">CVC</label>
                            <input type="text" class="form-control" id="cvc" name="cvc" value="">
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>

                    <button type="submit" class="button-primary full-width">Thanh toan bang momo</button>


                </form>
            </div>



            <div class="checkout-table-container">
                <h2>Don hang cua ban</h2>

                <div class="checkout-table">
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="/img/macbook-pro.png" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">MacBook Pro 2020</div>
                                <div class="checkout-table-description">13 inch, 256GBB SSD, 8GB RAM</div>
                                <div class="checkout-table-price">17.300.000 VND</div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">1</div>
                        </div>
                    </div> <!-- end checkout-table-row -->

                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="/img/macbook-pro.png" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">MacBook Pro 2020</div>
                                <div class="checkout-table-description">13 inch, 512GB SSD, 8GB RAM</div>
                                <div class="checkout-table-price">19.200.000 VND</div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">1</div>
                        </div>
                    </div> <!-- end checkout-table-row -->

                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="/img/macbook-pro.png" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">MacBook Pro 2020</div>
                                <div class="checkout-table-description">13 inch, 256GB SSD, 16GB RAM</div>
                                <div class="checkout-table-price">21.300.000VND</div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">1</div>
                        </div>
                    </div> <!-- end checkout-table-row -->

                </div> <!-- end checkout-table -->

                <div class="checkout-totals">
                    <div class="checkout-totals-left">
                        Tong tien <br>
                        Ma giam gia (10OFF - 10%) <br>
                        <span class="checkout-totals-total">So tien can thanh toan</span>

                    </div>

                    <div class="checkout-totals-right">
                        57.800.000 VND <br>
                        -5.780.000 VND <br>
                        <span class="checkout-totals-total">52.020.000 VND</span>
                    </div>
                </div> <!-- end checkout-totals -->

            </div>

        </div> <!-- end checkout-section -->
    </div>

@endsection
