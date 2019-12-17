@extends('master.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">{{ $prod->name}}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="home">Home</a> / <span>Details</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="public/source/image/product/{{ $prod->image }}" alt="" height="250px">
                        @if ($prod->promotion_price != 0)
                            <div class="ribbon-wrapper">
                                <div class="ribbon sale">
                                    Sale
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-8">
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

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p>{{ $prod->description }}</p>
                        </div>
                        <div class="space20">&nbsp;</div>

                        <p>Số lượng</p>
                        <div class="single-item-options">
                            {{-- <select class="wc-select" name="size">
                                <option>Size</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                            <select class="wc-select" name="color">
                                <option>Color</option>
                                <option value="Red">Red</option>
                                <option value="Green">Green</option>
                                <option value="Yellow">Yellow</option>
                                <option value="Black">Black</option>
                                <option value="White">White</option>
                            </select> --}}
                            <select class="wc-select" name="color">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Description</a></li>
                        {{-- <li><a href="#tab-reviews">Reviews (0)</a></li> --}}
                    </ul>

                    <div class="panel" id="tab-description">
                        <p>{{ $prod->description }}</p>
                    </div>
                    {{-- <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div> --}}
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Related Products</h4>

                    <div class="row">
                        @foreach ($sameProds as $prod)
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
                                    <a href="product-detail/{{ $prod->id }}"><img src="public/source/image/product/{{ $prod->image }}" alt="" height="250px"></a>
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
                                    <a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="product-detail/{{ $prod->id }}">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">{{ $sameProds->links() }}</div>
                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Best Sellers</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="public/source/assets/dest/images/products/sales/1.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="public/source/assets/dest/images/products/sales/2.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="public/source/assets/dest/images/products/sales/3.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="public/source/assets/dest/images/products/sales/4.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
                <div class="widget">
                    <h3 class="widget-title">New Products</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="public/source/assets/dest/images/products/sales/1.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="public/source/assets/dest/images/products/sales/2.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="public/source/assets/dest/images/products/sales/3.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="public/source/assets/dest/images/products/sales/4.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection