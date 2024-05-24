@extends('user.layouts.user_layout')

@section('content')
    <section class="product-detail">
        <div class="container">
            <div class="product__breadcrumb">
                <a href="./index.html">Home </a>
                <a href="./shop.html">Product </a>
                <span>{{ $product->name }}</span>
            </div>
            <div class="product__detail__main">
                <div class="product__detail__pic">

                    <div class="product__pic">
                        <div class="tab__pic__detail">
                            @foreach ($images as $img)
                                <div class="tab__pic__item">
                                    <img class="pic-{{ $loop->index }}" src='{{ asset("$img->src") }}' alt="">
                                </div>
                            @endforeach

                        </div>

                        <div class="main__pic__detail">
                            <img class="main-pic" src="" alt="">
                        </div>
                    </div>

                    <div class="shop__detail">
                        <div class="shop__detail__header"></div>
                        <div class="shop__detail__desc"></div>
                    </div>
                </div>
                <div class="product__detail__content">
                    <div class="detail__content--title">{{ $product->name }}</div>
                    <div class="detail__content--info">
                        <span class="product__sold">{{ $product->sold }} Sold</span>
                        <div class="circle__space"></div>
                        <span class="product__rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span>4.5</span>
                        </span>
                        <div class="circle__space"></div>
                        <span class="product__rated">122 Reviews</span>
                    </div>
                    <div class="detail__content--price">${{ $product->price }}</div>
                    <!-- <div class="hr"></div> -->
                    <div class="detail__content--color">
                        <div class="product__details__option__color">
                            <span>Select Color</span>
                            <label class="c-1" for="sp-1">
                                <input type="radio" id="sp-1" name="Black">
                            </label>
                            <label class="c-2" for="sp-2">
                                <input type="radio" id="sp-2" name="Blue">
                            </label>
                            <label class="c-3" for="sp-3">
                                <input type="radio" id="sp-3" name="Yellow">
                            </label>
                            <label class="c-4" for="sp-4">
                                <input type="radio" id="sp-4" name="Red">
                            </label>
                            <label class="c-9" for="sp-9">
                                <input type="radio" id="sp-9" name="Grey">
                            </label>
                        </div>
                    </div>
                    <div class="detail__content--size">
                        <div class="product__details__option__size">
                            <span>Select Size</span>
                            <label for="S">S
                                <input type="radio" id="S" name="S">
                            </label>
                            <label for="M">M
                                <input type="radio" id="M" name="M">
                            </label>
                            <label for="L">L
                                <input type="radio" id="L" name="L">
                            </label>
                            <label for="XL">XL
                                <input type="radio" id="XL" name="XL">
                            </label>
                            <label for="XXL">XXL
                                <input type="radio" id="XXL" name="XXL">
                            </label>
                        </div>
                    </div>
                    <div class="detail__content--quantity">
                        <button class="quantity--minus">
                            <i class="fa-solid fa-minus"></i>
                        </button>
                        <div class="quantity__input">
                            <input type="text" value="1" id="quantity">
                        </div>
                        <button class="quantity--plus">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                    <div class="detail__content--btn">
                        <button class="add-to-cart" onclick="addToCart({{ $product->id }})">Add to cart</button>
                        <button class="buy-now">Buy now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="product__detail__info">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                        role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Customer
                                        Previews(5)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Additional
                                        information</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Nam tempus turpis at metus scelerisque placerat nulla deumantos
                                            solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis
                                            ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo
                                            }{ [jp jJ[]} pharetras loremos.</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p>A Pocket PC is a handheld computer, which features many of the same
                                                capabilities as a modern PC. These handy little devices allow
                                                individuals to retrieve and store e-mail messages, create a contact
                                                file, coordinate appointments, surf the internet, exchange text messages
                                                and more. Every product that is labeled as a Pocket PC must be
                                                accompanied with specific software to operate the unit and must feature
                                                a touchscreen and touchpad.</p>
                                            <p>As is the case with any new technology product, the cost of a Pocket PC
                                                was substantial during it’s early release. For approximately $700.00,
                                                consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                                These days, customers are finding that prices have become much more
                                                reasonable now that the newness is wearing off. For approximately
                                                $350.00, a new Pocket PC can now be purchased.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                                from synthetic materials, not natural like wool. Polyester suits become
                                                creased easily and are known for not being breathable. Polyester suits
                                                tend to have a shine to them compared to wool and cotton suits, this can
                                                make the suit look cheap. The texture of velvet is luxurious and
                                                breathable. Velvet is a great choice for dinner party jacket and can be
                                                worn all year round.</p>
                                        </div j[]>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p>A Pocket PC is a handheld computer, which features many of the same
                                                capabilities as a modern PC. These handy little devices allow
                                                individuals to retrieve and store e-mail messages, create a contact
                                                file, coordinate appointments, surf the internet, exchange text messages
                                                and more. Every product that is labeled as a Pocket PC must be
                                                accompanied with specific software to operate the unit and must feature
                                                a touchscreen and touchpad.</p>
                                            <p>As is the case with any new technology product, the cost of a Pocket PC
                                                was substantial during it’s early release. For approximately $700.00,
                                                consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                                These days, customers are finding that prices have become much more
                                                reasonable now that the newness is wearing off. For approximately
                                                $350.00, a new Pocket PC can now be purchased.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                                from synthetic materials, not natural like wool. Polyester suits become
                                                creased easily and are known for not being breathable. Polyester suits
                                                tend to have a shine to them compared to wool and cotton suits, this can
                                                ] make the suit look cheap. The texture of velvet is luxurious and
                                                breathable. Velvet is a great choice for dinner party jacket and can be
                                                worn all year round.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-7" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Các bạn muốn đặt 2 cái mà không cùng màu cùng size .. thì các bạn
                                            Lần lượt thêm vào giỏ và phân loại hàng (Màu, Size) những áo muốn đặt, sau khi
                                            thêm xong vào giỏ hàng sẽ xuất hiện 2 mã hàng được phận loại màu sắc và size ạ .
                                            nhấn vào giỏ hàng và bấm MUA NGAY và điền thông tin thanh toán SHOP cam kết ảnh
                                            trên là 100% hình chụp thật của sản phẩm, vậy nên phiền các bạn không hỏi xin
                                            ảnh thật ạ! SHOP SẼ CHỊU HOÀN TOÀN PHÍ SHIP ĐỔI TRẢ NẾU CÓ LỖI CỦA NHÀ SẢN XUẤT
                                        </p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p>Bottoms Fit Type
                                                Wide Leg
                                                Season
                                                Summer
                                                Country of Origin
                                                Vietnam
                                                Material
                                                Cotton
                                                Style
                                                Basic, Thermal, Athletic
                                                Apparel Type
                                                Innerwear & Underwear, Pants, Shorts, Sleepwear, Tops
                                                Pattern
                                                Plain
                                                Top Length
                                                Long
                                                Sleeve Length
                                                Sleeveless</p>
                                            <p>As is the case with any new technology product, the cost of a Pocket PC
                                                was substantial during it’s early release. For approximately $700.00,
                                                consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                                These days, customers are finding that prices have become much more
                                                reasonable now that the newness is wearing off. For approximately
                                                $350.00, a new Pocket PC can now be purchased.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                                from synthetic materials, not natural like wool. Polyester suits become
                                                creased easily and are known for not being breathable. Polyester suits
                                                tend to have a shine to them compared to wool and cotton suits, this can
                                                make the suit look cheap. The texture of velvet is luxurious and
                                                breathable. Velvet is a great choice for dinner party jacket and can be
                                                worn all year round.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        


        var mainImage = document.querySelector('.main__pic__detail .main-pic');
        var itemImageClick = document.querySelectorAll('.tab__pic__item');
        var itemImage = document.querySelectorAll('.tab__pic__item img');

        var currentIndex = 0

        mainImage.src = itemImage[currentIndex].src

        // loop through all image
        itemImageClick.forEach((item, index) => {
            item.addEventListener('click', () => {
                itemImage[currentIndex].style.border = '2px solid transparent';
                itemImage[index].style.border = '2px solid var(--red-dark)';
                currentIndex = index;
                mainImage.src = itemImage[index].src
            })
        });

        var minusButton = document.querySelector('.quantity--minus');
        var plusButton = document.querySelector('.quantity--plus');
        var quantityInput = document.querySelector('.quantity__input #quantity');

        function incrementValue() {
            var value = parseInt(quantityInput.value, 10);
            quantityInput.value = isNaN(value) ? 1 : value + 1;
        }

        // Function to decrement value
        function decrementValue() {
            var value = parseInt(quantityInput.value, 10);
            quantityInput.value = isNaN(value) || value < 2 ? 1 : value - 1;
        }

        // Event listener for plus button
        plusButton.addEventListener('click', function() {
            incrementValue();
        });

        // Event listener for minus button
        minusButton.addEventListener('click', function() {
            decrementValue();
        });

        function loadCart(){
                document.getElementById("cart-number").innerHTML = parseInt(JSON.parse(localStorage.getItem("data")).length, 10) || 0;
            }

            
        let addToCart = (id) => {
            let basket = JSON.parse(localStorage.getItem("data")) || [];
            let name = document.querySelector('.detail__content--title');
            let color = document.querySelector('.product__details__option__color label.active input');
            let size = document.querySelector('.product__details__option__size label.active input');
            let quantity = document.querySelector('.quantity__input #quantity');
            let price = document.querySelector('.detail__content--price');
            if (color == null) {
                alert('Color unselected !!!');
                return;
            }
            if (size == null) {
                alert('Size unselected !!!');
                return;
            }

            search = basket.find((x) => x.id == id);
            if(search != null && search.color == color.name && search.size == size.name) {
                search.quantity += parseInt(quantity.value, 10);
            }else{
                basket.push({
                uid: "id" + Math.random().toString(16).slice(2),
                id: id,
                image: `${itemImage[0].src}`,
                name: name.innerHTML,
                color: color.name,
                size: size.name,
                quantity: parseInt(quantity.value, 10),
                price: <?php echo $product->price;?>,
            });
            }
            console.log(basket);
            localStorage.setItem("data", JSON.stringify(basket));
            loadCart();
        };
    </script>
@endsection
