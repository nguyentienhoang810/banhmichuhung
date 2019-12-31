@extends('master.master')
@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>Search results</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{  $prods->total()  }} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($prods as $prod)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @include('prod')
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{ $prods->links() }}</div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection