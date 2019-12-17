@extends('master.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản phẩm</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach ($prodTypes as $type)
                            @if ($type->id == $selectedType->id)
                                <li class="is-active"><a href="product-type/{{ $type->id }}">{{$type->name}}</a></li>
                            @else
                                <li><a href="product-type/{{ $type->id }}">{{$type->name}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>{{ $selectedType->name }}</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{ $prods->total() }} products</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($prods as $prod)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    @if ($prod->promotion_price != 0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">
                                            Sale
                                        </div>
                                    </div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="product.html">
                                            <img src="public/source/image/product/{{ $prod->image }}" alt="" height="250px">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $prod->name }}</p>
                                        <p class="single-item-price">
                                            @if ($prod->promotion_price == 0)
                                                <span class="flash-sale">{{ $prod->unit_price }}</span>
                                            @else
                                                <span class="flash-del">{{ $prod->unit_price }}</span>
                                                <span class="flash-sale">{{ $prod->promotion_price }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{ $prods->links() }}</div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Other Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{ $otherProds->total() }} products</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($otherProds as $prod)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    @if ($prod->promotion_price != 0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">
                                            Sale
                                        </div>
                                    </div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="product.html">
                                            <img src="public/source/image/product/{{ $prod->image }}" alt="" height="250px">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $prod->name }}</p>
                                        <p class="single-item-price">
                                            @if ($prod->promotion_price == 0)
                                                <span class="flash-sale">{{ $prod->unit_price }}</span>
                                            @else
                                                <span class="flash-del">{{ $prod->unit_price }}</span>
                                                <span class="flash-sale">{{ $prod->promotion_price }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{ $otherProds->links() }}</div>
                        <div class="space40">&nbsp;</div>
                        
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection