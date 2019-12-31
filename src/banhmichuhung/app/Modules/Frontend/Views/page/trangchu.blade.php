@extends('master.master')
@section('content')
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <div class="bannercontainer" >
        <div class="banner" >
                <ul>
                @foreach ($slides as $slide)
                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                            <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="public/source/image/slide/{{ $slide->image }}" data-src="public/source/image/slide/{{ $slide->image }}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('public/source/image/slide/{{ $slide->image }}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                            </div>
                        </div>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>

        <div class="tp-bannertimer"></div>
    </div>
    <!--slider-->
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>New Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{  $newProducts->total()  }} sản phẩm mới</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($newProducts as $prod)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @include('prod')
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{ $newProducts->links() }}</div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Promotion Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{ $promotionProducts->total() }} Sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($promotionProducts as $prod)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @include('prod')
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{  $promotionProducts->links()  }}</div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection