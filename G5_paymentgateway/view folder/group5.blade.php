<x-payment-header>

    <button id="open-payment-popup">Choose Payment Method</button>

    <div id="payment-popup" class="hidden">
        <button id="close-popup">&#10006;</button>
        <h1>Billing Information</h1>

        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form action="/action_page.php">

                        <div class="row">
                            <div class="col-50">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <img src="C:\Users\Ryan\Desktop\payment gateway\images\card_img.png" alt="Visa">
                                </div>
                                <label for="cname">Name of Card Holder</label>
                                <input type="text" id="cname" name="cardname" placeholder="John Snow Smith">
                                <label for="ccnum">Credit Card Number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1223-3344-4455-5556">
                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Exp Year</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="2018">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="352">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="Continue to checkout" class="btn">

                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container2">
                    <h4>Shopping Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span>
                    </h4>
                    <p><a href="#">Product 1</a> <span class="price">₱15</span></p>
                    <p><a href="#">Product 2</a> <span class="price">₱5</span></p>
                    <p><a href="#">Product 3</a> <span class="price">₱8</span></p>
                    <p><a href="#">Product 4</a> <span class="price">₱2</span></p>
                    <p><a href="#">Product 5</a> <span class="price">₱2</span></p>
                    <p><a href="#">Product 6</a> <span class="price">₱2</span></p>
                    <p><a href="#">Product 7</a> <span class="price">₱2</span></p>
                    <p><a href="#">Product 8</a> <span class="price">₱2</span></p>
                    <p><a href="#">Product 9</a> <span class="price">₱2</span></p>

                    <hr>
                    <p>Total <span class="price" style="color:black"><b>₱30</b></span></p>
                </div>
            </div>
        </div>
    </div>




</x-payment-header>
