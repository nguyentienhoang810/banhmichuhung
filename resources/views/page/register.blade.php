@extends('master.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Đăng kí</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="index.html">Home</a> / <span>Đăng kí</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        
        <form action="register" method="post" class="beta-form-checkout">
            @csrf
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h4>Đăng kí</h4>
                    
                    @if (Session::has('register_success'))
                    <div class="row">
                        <div class="alert alert-success">REGISTER SUCCESSFUL</div>
                    </div>
                    @endif

                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
					@endforeach
                    
                    <div class="space20">&nbsp;</div>                    
                    <div class="form-block">
                        <label for="email">Email address*</label>
                        <input type="email" id="email" name="email" value="{{old('email')}}" required>
                    </div>

                    <div class="form-block">
                        <label for="your_last_name">Fullname*</label>
                        <input type="text" id="your_last_name" name="fullname" value="{{old('fullname')}}" required>
                    </div>

                    <div class="form-block">
                        <label for="adress">Address*</label>
                        <input type="text" id="adress" name="address" value="{{old('address')}}" required>
                    </div>

                    <div class="form-block">
                        <label for="phone">Phone*</label>
                        <input type="text" id="phone" name="phone" value="{{old('phone')}}" required>
                    </div>
                    <div class="form-block">
                        <label for="phone">Password*</label>
                        <input type="password" id="phone" name="password" value="{{old('password')}}" required>
                    </div>
                    <div class="form-block">
                        <label for="phone">Re password*</label>
                        <input type="password" id="phone" name="confirm_password" value="{{old('confirm_password')}}" required>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection