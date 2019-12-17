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
    <a class="add-to-cart pull-left" href="shopping_cart.html">
        <i class="fa fa-shopping-cart"></i>
    </a>
    <a class="beta-btn primary" href="product-detail/{{ $prod->id }}">
        Details<i class="fa fa-chevron-right"></i>
    </a>
    <div class="clearfix"></div>
</div>