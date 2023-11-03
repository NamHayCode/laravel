@extends('master')
@section('content')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Search Results</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-1 order-lg-2">
                <h2>Search Results</h2>
                <div class="product-list">
                    <div class="row">
                        @if(count($results) > 0)
                            @foreach($results as $product)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <a href="{{ route('detail', ['id' => $product->id]) }}">
                                                <img src="{{ asset('Template/img/products/' . $product->image) }}" alt="">
                                            </a>
                                            <div class="sale pp-sale">Sale</div>
                                            <div class="icon">
                                                <i class="icon_heart_alt"></i>
                                            </div>
                                            <ul>
                                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                                <li class="quick-view"><a href="#">+ Add Cart</a></li>
                                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">{{$product->type}}</div>
                                            <a href="{{ route('detail', ['id' => $product->id]) }}">
                                                <h5>{{$product->name}}</h5>
                                            </a>
                                            <div class="product-price">
                                                {{$product->price}} $
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-lg-12">
                                <div class="alert alert-info" role="alert">
                                    No products found for your search query.
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->

@endsection
