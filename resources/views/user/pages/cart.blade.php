@extends('user.layouts.user_layout')
@section('content')
    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="cart--generate">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th>Product</th>
                                    <th>Unit Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="select--all">
                                <input type="checkbox">
                                <span>Select all</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="cart--total">
                                Total : <span>$300.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"> Check out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection

@section('js')
    <script>
        let cartContent = document.querySelector('.shopping__cart__table table tbody');
        let cartGenerate = document.querySelector('#cart--generate');
        let cartTotal = document.querySelector('.cart--total span');
        let basket = JSON.parse(localStorage.getItem("data")) || [];

        let generateCart = (bsk) => {
            if (bsk.length > 0) {
                return cartContent.innerHTML = bsk.map((x, index) => {
                    let {
                        uid,
                        id,
                        image,
                        name,
                        color,
                        size,
                        quantity,
                        price
                    } = x;
                    let total = price*quantity;
                    return `
                    <tr>
                        <td><input type="checkbox"></td>
                        <td class="product__cart__item">
                            <div class="product__cart__item__pic">
                                <img src="${image}"
                                    alt="">
                            </div>
                            <div class="product__cart__item__text">
                                <h6>${name}</h6>
                            </div>
                            ${color} - ${size}
                        </td>
                        <td class="product__price">$${price.toFixed(2)}</td>
                        <td class="quantity__item">
                            <div class="cart--quantity">
                                <button class="quantity--minus" onclick="decrementValue('${uid}',${index})">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <div class="quantity__input">
                                    <input type="text" value=${quantity} id="quantity-${index}">
                                </div>
                                <button class="quantity--plus" onclick="incrementValue('${uid}',${index})">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </td>
                        <td class="product__total" id="total-${index}">$${total.toFixed(2)}</td>
                        <td class="cart__close"><i class="fa fa-close" onclick="remove('${uid}')"></i></td>
                    </tr>
                    `;
                });
            } else {
                return cartGenerate.innerHTML = `
                    <div class="cart--empty">
                        <span>Cart empty <i class="fa-regular fa-hand-point-right"></i> <a href="#">Continue to shopping</a></span> 
                        <img src="{{ asset('resources/images/shopping-cart/empty-cart.png') }}" alt="">    
                    </div>
                `;
            }
        };

        generateCart(basket);
        
        function loadCart() {
            document.getElementById("cart-number").innerHTML = localStorage.getItem("data") != null ? parseInt(JSON.parse(
                    localStorage.getItem("data"))
                .length, 10) : 0;
            console.log('load cart');
        }

        // Function to increment value
        function incrementValue(uid, index) {
            let search = basket.find((x) => x.uid === uid);
            update(index, search.quantity += 1, search.price);
        }

        // Function to decrement value
        function decrementValue(uid, index) {
            let search = basket.find((x) => x.uid === uid);
            update(index, search.quantity < 2 ? 1 : search.quantity -= 1, search.price);
        }

        // Function to update value
        function update(index, quantity, price) {
            document.querySelector('#quantity-' + index).value = quantity;
            document.querySelector('#total-' + index).innerHTML = '$'+(quantity*price).toFixed(2);
            localStorage.setItem("data", JSON.stringify(basket));
            amount();
        }

        let remove = (uid) => {
            basket = basket.filter((x) => x.uid !== uid)
            localStorage.setItem("data", JSON.stringify(basket));
            generateCart(basket);
            loadCart();
            amount();
        }

        let amount = () => {
            if(basket.length !== 0){
                let amount = basket.map((x) => {
                    let {
                        uid,
                        id,
                        image,
                        name,
                        color,
                        size,
                        quantity,
                        price
                    } = x;
                    return quantity * price ;
                }).reduce((x,y) => x + y,0);
                cartTotal.innerHTML = '$'+amount.toFixed(2);
            }else return
        }
        amount();
        // $(document).ready(function() {
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     /* When click show user */
        //     $('.shopping-cart').ready(function() {
        //         $.get('test', function(data) {
        //             console.log(data);
        //         })
        //     });
        // });
    </script>
@endsection
