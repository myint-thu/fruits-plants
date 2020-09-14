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
                                {{-- <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="img/bg-img/34.jpg" alt="Product"></a>
                                        <h5>Recuerdos Plant</h5>
                                    </td>
                                    <td class="qty">
                                        <div class="quantity">
                                            <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="99" name="quantity" value="1">
                                            <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                    </td>
                                    <td class="price"><span>$9.99</span></td>
                                    <td class="total_price"><span>$9.99</span></td>
                                    <td class="action"><a href="#"><i class="icon_close"></i></a></td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Coupon Discount -->
                <div class="col-12 col-lg-6">
                    <div class="coupon-discount mt-70">
                        <h5>COUPON DISCOUNT</h5>
                        <p>Coupons can be applied in the cart prior to checkout. Add an eligible item from the booth of the seller that created the coupon code to your cart. Click the green "Apply code" button to add the coupon to your order. The order total will update to indicate the savings specific to the coupon code entered.</p>
                        <form action="#" method="post">
                            <input type="text" name="coupon-code" placeholder="Enter your coupon code">
                            <button type="submit">APPLY COUPON</button>
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
                                <form action="#" method="post">
                                    <select class="custom-select">
                                      <option selected>Country</option>
                                      <option value="1">Myanmar</option>
                                      {{-- <option value="2">Latvia</option>
                                      <option value="3">Japan</option>
                                      <option value="4">Bangladesh</option> --}}
                                    </select>
                                    <input type="text" name="shipping-text" id="shipping-text" placeholder="Region">
                                    <input type="text" name="shipping-zip" id="shipping-zip" placeholder="Address">
                                    <input type="text" name="shipping-zip" id="shipping-zip" placeholder="Phone Number">
                                    <div class="checkout-btn">
                            <a href="{{route('loginpage')}}" class="btn alazea-btn w-100">PROCEED TO CHECKOUT</a>
                        </div>
                                </form>
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