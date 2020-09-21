<div class="cart-area section-padding-0-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tbody id="fruitplant_table">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <textarea class="form-control notes" placeholder="Any Request..."></textarea>


            <div class="row">

                <!-- Coupon Discount -->
                <div class="col-12 col-lg-6">
                    <div class="coupon-discount mt-70">
                        <h5>COUPON DISCOUNT</h5>
                        <p>Coupons can be applied in the cart prior to checkout. Add an eligible item from the booth of the seller that created the coupon code to your cart. Click the green "Apply code" button to add the coupon to your order. Cupon will enter your cart.</p>
                        <form action="#" method="post">
                            <input type="text" name="coupon-code" placeholder="Enter your coupon code">
                             @role('Customer')
                            <button type="submit">APPLY COUPON</button>
                               @endrole
                        </form>
                    </div>
                </div>

                <!-- Cart Totals -->
                <div class="col-12 col-lg-6">
                    <div class="cart-totals-area mt-70">
                        {{-- <h5 class="title">Cart Total</h5> --}}
                        {{-- <div class="subtotal d-flex justify-content-between">
                            <h5>Total</h5>
                            <h5>$9.99</h5>
                        </div> --}}
                        <div class="shipping d-flex justify-content-between">
                            <h5>Shipping</h5>
                            <div class="shipping-address">
                                
                                    <select class="custom-select country">
                                      <option selected>Country</option>
                                      <option value="1">Myanmar</option>
                                      {{-- <option value="2">Latvia</option>
                                      <option value="3">Japan</option>
                                      <option value="4">Bangladesh</option> --}}
                                    </select>
                                    <input type="text" name="shipping-text" id="shipping-text" placeholder="Region" class="region">
                                    <input type="text" name="shipping-zip" id="shipping-zip" placeholder="Address" class="address">
                                    <input type="text" name="shipping-zip" id="shipping-zip" placeholder="Phone Number" class="phone">
                                    <div class="checkout-btn">

                                   
                            {{-- <a href="{{route('register')}}" class="btn alazea-btn w-100">PROCEED TO CHECKOUT</a> --}}
                          


                                    
                                       @role('Customer')
                                       <button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn"> 
                                          Check Out 
                                      </button>
                                      @else
                                      <a href="{{route('register')}}" class="btn btn-secondary btn-block mainfullbtncolor"> 
                                          Login To Check Out 
                                      </a>
                                      @endrole


                            {{-- <input type="submit" value="PROCEED TO CHECKOUT" class="btn alazea-btn w-100 checkout"> --}}

                        </div>
                               
                            </div>
                        </div>
                        <div class="total d-flex justify-content-between">
                            {{-- <h5>Total</h5>
                            <h5 id="fruitplant"></h5> --}}
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>