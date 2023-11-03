@extends('master')
@section('content')

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-pic">
                    <img src="Template/img/products/{{$detailInf->image}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-details-inner">
                    <div class="product-content">
                        <h2>{{$detailInf->name}}</h2>
                        <div class="product-price">
                            {{$detailInf->price}} $
                        </div>
                        <p>{{$detailInf->description}}</p>
                        <a href="#" class="site-btn">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->

@endsection
