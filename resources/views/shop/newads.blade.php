@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>New Ads</h1>
            <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}">
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('newads') }}" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Image</label>
                            <input type="text" id="image" class="form-control" required name="image">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                              <div class="form-group">
                                  <label for="address">Product Name</label>
                                  <input type="text" id="proName" class="form-control" required name="proName">
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div class="form-group">
                                  <label for="card-number">Price</label>
                                  <input type="text" id="price" class="form-control" required name="price">
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-name">Product Descripton</label>
                            <input type="text" id="product-description" class="form-control" required name="product-description">
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success" align="center">Add New Ads</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('src/js/checkout.js') }}"></script>
@endsection
