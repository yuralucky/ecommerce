@extends('layouts')
@section('content')
    <div class="container">
        <div class="row">
            <output class="my-3">
                <div class="row">
                    <aside class="col-lg-9">
                        <div class="card">

                            <div class="table-responsive">

                                <table class="table table-borderless table-shopping-cart">
                                    <thead class="text-muted">
                                    <tr class="small text-uppercase">
                                        <th scope="col">Product</th>
                                        <th scope="col" width="120">Quantity</th>
                                        <th scope="col" width="120">Price</th>
                                        <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <figure class="itemside align-items-center">
                                                <div class="aside"><img src="{{asset('image/1.jpg')}}"
                                                                        class="img-sm item-thumb"></div>
                                                <figcaption class="info">
                                                    <a href="#" class="title text-dark">Camera Canon EOS M50 Kit</a>
                                                    <p class="text-muted small">Matrix: 25 Mpx <br> Brand: Canon</p>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="price-wrap">
                                                <var class="price">$1156.00</var>
                                                <small class="text-muted"> $315.20 each</small>
                                            </div> <!-- price-wrap .// -->
                                        </td>
                                        <td class="text-right d-none d-md-block">
                                            <a data-original-title="Save to Wishlist" title="" href=""
                                               class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                            <a href="" class="btn btn-light"> Remove</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <figure class="itemside align-items-center">
                                                <div class="aside"><img src="{{asset('image/1.jpg')}}"
                                                                        class="img-sm item-thumb"></div>
                                                <figcaption class="info">
                                                    <a href="#" class="title text-dark">ADATA Premier ONE microSDXC</a>
                                                    <p class="text-muted small">Size: 256 GB <br> Brand: ADATA </p>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="price-wrap">
                                                <var class="price">$149.97</var>
                                                <small class="text-muted"> $75.00 each</small>
                                            </div> <!-- price-wrap .// -->
                                        </td>
                                        <td class="text-right d-none d-md-block">
                                            <a data-original-title="Save to Wishlist" title="" href=""
                                               class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                            <a href="" class="btn btn-light btn-round"> Remove</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <figure class="itemside align-items-center">
                                                <div class="aside"><img src="{{asset('image/1.jpg')}}"
                                                                        class="img-sm item-thumb"></div>
                                                <figcaption class="info">
                                                    <a href="#" class="title text-dark">Gamepad Sony DualShock 4</a>
                                                    <p class="small text-muted">Version: CUH-ZCT2E <br> Brand: Sony</p>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="price-wrap">
                                                <var class="price">$98.00</var>
                                                <small class="text-muted"> $578.00 each</small>
                                            </div> <!-- price-wrap .// -->
                                        </td>
                                        <td class="text-right d-none d-md-block">
                                            <a data-original-title="Save to Wishlist" title="" href=""
                                               class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                            <a href="" class="btn btn-light btn-round"> Remove</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div> <!-- table-responsive.// -->

                            <div class="card-body border-top">
                                <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within
                                    1-2 weeks</p>
                            </div> <!-- card-body.// -->

                        </div> <!-- card.// -->

                    </aside> <!-- col.// -->
                    <aside class="col-lg-3">

                        <div class="card mb-3">
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label>Have coupon?</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="" placeholder="Coupon code">
                                            <span class="input-group-append">
				<button class="btn btn-primary">Apply</button>
			</span>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- card-body.// -->
                        </div> <!-- card.// -->

                        <div class="card">
                            <div class="card-body">
                                <dl class="dlist-align">
                                    <dt>Total price:</dt>
                                    <dd class="text-right">$69.97</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Discount:</dt>
                                    <dd class="text-right text-danger">- $10.00</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Total:</dt>
                                    <dd class="text-right text-dark b"><strong>$59.97</strong></dd>
                                </dl>
                                <hr>
                                <p class="text-center mb-3">
                                    <img src="bootstrap-ecommerce-html/images/misc/payments.png" height="26">
                                </p>
                                <a href="#" class="btn btn-primary btn-block"> Make Purchase </a>
                                <a href="#" class="btn btn-light btn-block">Continue Shopping</a>
                            </div> <!-- card-body.// -->
                        </div> <!-- card.// -->

                    </aside> <!-- col.// -->
                </div> <!-- row.// -->
            </output>


        </div>
    </div>
@endsection