@extends('user.layouts.user_layout')

@section('content')
<section class="product-detail">
  <div class="container">
      <div class="product__breadcrumb">
          <a href="./index.html">Home </a>
          <a href="./shop.html">Product </a>
          <span>AeroFit Women's Fitness Performance Jacket</span>
      </div>
      <div class="product__detail__main">
          <div class="product__detail__pic">

              <div class="product__pic">
                  <div class="tab__pic__detail">
                      <div class="tab__pic__item">
                          <img src="img/product/product-1.jpg" alt="">
                      </div>
                      <div class="tab__pic__item">
                          <img src="img/product/product-2.jpg" alt="">
                      </div>
                      <div class="tab__pic__item">
                          <img src="img/product/product-5.jpg" alt="">
                      </div>
                      <div class="tab__pic__item">
                          <img src="img/product/product-4.jpg" alt="">
                      </div>
                      <div class="tab__pic__item">
                          <img src="img/product/product-6.jpg" alt="">
                      </div>
                  </div>

                  <div class="main__pic__detail">
                      <img src="img/product/product-1.jpg" alt="">
                  </div>
              </div>

              <div class="shop__detail">
                  <div class="shop__detail__header"></div>
                  <div class="shop__detail__desc"></div>
              </div>
          </div>
          <div class="product__detail__content">
              <div class="detail__content--title">
                  AeroFit Women's Fitness Performance Jacket
              </div>
              <div class="detail__content--info">
                  <span class="product__sold">10K Sold</span>
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
              <div class="detail__content--price">
                  ₫59.000 - ₫65.000
              </div>
              <!-- <div class="hr"></div> -->
              <div class="detail__content--color">
                  <div class="product__details__option__color">
                      <span>Select Color</span>
                      <label class="c-1" for="sp-1">
                          <input type="radio" id="sp-1" name="color">
                      </label>
                      <label class="c-2" for="sp-2">
                          <input type="radio" id="sp-2" name="color">
                      </label>
                      <label class="c-3" for="sp-3">
                          <input type="radio" id="sp-3" name="color">
                      </label>
                      <label class="c-4" for="sp-4">
                          <input type="radio" id="sp-4" name="color">
                      </label>
                      <label class="c-9" for="sp-9">
                          <input type="radio" id="sp-9" name="color">
                      </label>
                  </div>
              </div>
              <div class="detail__content--size">
                  <div class="product__details__option__size">
                      <span>Select Size</span>
                      <label for="S">S
                          <input type="radio" id="S" name="size">
                      </label>
                      <label class="active" for="M">M
                          <input type="radio" id="M" name="size">
                      </label>
                      <label for="L">L
                          <input type="radio" id="L" name="size">
                      </label>
                      <label for="XL">XL
                          <input type="radio" id="XL" name="size">
                      </label>
                      <label for="XXL">XXL
                          <input type="radio" id="XXL" name="size">
                      </label>
                  </div>
              </div>
              <div class="detail__content--quantity">
                  <button>
                      <i class="fa-solid fa-minus"></i>
                  </button>
                  <div class="quantity__input">
                      <input type="text" value="1">
                  </div>
                  <button>
                      <i class="fa-solid fa-plus"></i>
                  </button>
              </div>
              <div class="detail__content--btn">
                  <button>Add to cart</button>
                  <button>Buy now</button>
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
                                  pharetras loremos.</p>
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
                                  </div>
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
                                          make the suit look cheap. The texture of velvet is luxurious and
                                          breathable. Velvet is a great choice for dinner party jacket and can be
                                      worn all year round.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane" id="tabs-7" role="tabpanel">
                              <div class="product__details__tab__content">
                                  <p class="note">Các bạn muốn đặt 2 cái mà không cùng màu cùng size .. thì các bạn Lần lượt thêm vào giỏ và phân loại hàng (Màu, Size) những áo muốn đặt, sau khi thêm xong vào giỏ hàng sẽ xuất hiện 2 mã hàng được phận loại màu sắc và size ạ . nhấn vào giỏ hàng và bấm MUA NGAY và điền thông tin thanh toán SHOP cam kết ảnh trên là 100% hình chụp thật của sản phẩm, vậy nên phiền các bạn không hỏi xin ảnh thật ạ! SHOP SẼ CHỊU HOÀN TOÀN PHÍ SHIP ĐỔI TRẢ NẾU CÓ LỖI CỦA NHÀ SẢN XUẤT</p>
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