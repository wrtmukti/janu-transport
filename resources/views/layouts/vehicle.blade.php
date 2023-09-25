<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Janu-Transport</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('vendor/guest/assets/images/favicon.svg') }}" />
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('vendor/guest/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/guest/assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/guest/assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/guest/assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/guest/assets/css/main.css') }}" />
    
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>


</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->
    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Start Topbar -->
        {{-- <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-left">
                            <ul class="menu-top-link">
                                <li>
                                    <div class="select-position">
                                        <select id="select4">
                                            <option value="0" selected>$ USD</option>
                                            <option value="1">€ EURO</option>
                                            <option value="2">$ CAD</option>
                                            <option value="3">₹ INR</option>
                                            <option value="4">¥ CNY</option>
                                            <option value="5">৳ BDT</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="select-position">
                                        <select id="select5">
                                            <option value="0" selected>English</option>
                                            <option value="1">Español</option>
                                            <option value="2">Filipino</option>
                                            <option value="3">Français</option>
                                            <option value="4">العربية</option>
                                            <option value="5">हिन्दी</option>
                                            <option value="6">বাংলা</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-middle">
                            <ul class="useful-links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-end">
                            <div class="user">
                                <i class="lni lni-user"></i>
                                Hello
                            </div>
                            <ul class="user-login">
                                <li>
                                    <a href="login.html">Sign In</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Topbar -->
        <!-- Start Header Middle -->
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-7">
                        <!-- Start Header Logo -->
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('img/icon.png') }}" style="width: 40%" alt="Logo">
                        </a>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-lg-5 col-md-7 d-xs-none">
                        <!-- Start Main Menu Search -->
                        
                        <!-- End Main Menu Search -->
                    </div>
                    <div class="col-lg-4 col-md-2 col-5">
                        <div class="middle-right-area">
                            <div class="nav-hotline">
                                <i class="lni lni-phone"></i>
                                <h3>Whatsapp:
                                    <span>(+62) 813 1641 2439</span>
                                </h3>
                            </div>
                            <div class="navbar-cart">
                                <div class="cart-items">
                                    <div class=" shopping-cart">
                                        <div class="sum-prices">
                                            <button type="button" class="main-btn bg-primary" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                <i class="lni lni-cart shoppingCartButton text-white"></i>
                                            </button>
                                            <span class="text-dark" id="sum-prices"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Header Bottom -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="nav-inner">
                        <!-- Start Mega Category Menu -->
                        {{-- <div class="mega-category-menu">
                            <span class="cat-button"><i class="lni lni-menu"></i></span>
                        </div> --}}
                        <!-- End Mega Category Menu -->
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="/" class="active" aria-label="Toggle navigation">Paket Sewa Kendaraan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="/" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Paket Wisata Jogja</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="/tour/1">Wisata Dan Hotel</a></li>
                                            <li class="nav-item"><a href="/tour/2">Wisata Tanpa Hotel</a></li>
                                            <li class="nav-item"><a href="/tour/3">Wisata Adventure</a></li>
                                            <li class="nav-item"><a href="/tour/4">Honeymoon</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Kontak</a>
                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            <li class="nav-item"><a href="product-grids.html">Facebook</a></li>
                                            <li class="nav-item"><a href="product-list.html">Instagram</a></li>
                                            <li class="nav-item"><a href="product-details.html">Youtube</a></li>
                                            <li class="nav-item"><a href="cart.html">Whatsapp</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a href="contact.html" aria-label="Toggle navigation">Pelanggan Kami</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Nav Social -->
                    <div class="nav-social">
                        <h5 class="title">Follow Us:</h5>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Nav Social -->
                </div>
            </div>
        </div>
        <!-- End Header Bottom -->
    </header>
    <!-- End Header Area -->

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Orderan Saya </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form action="/order/cart" method="POST">
                @csrf
                <input name="price" id="total-prices" class="form-control" type="hidden" value="" readonly="readonly">
    
                <div class="modal-body producstOnCart hide">
                <ul id="buyItems">
                    <h4 class="empty">Order Kosong</h4>
                </ul>
                </div>
                <div class="modal-footer d-none" id="modal-footer">
                <input id="total_price" class="form-control text-center mb-4 fw-bold" type="text" value="" readonly="readonly">
                
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary  checkout">Checkout</button>
                </div>
            </form>
    
            </div>
        </div>
    </div>


    {{-- CONTENT --}}
    @yield('content')

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/white-logo.svg" alt="#">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="footer-newsletter">
                                <h4 class="title">
                                    Subscribe to our Newsletter
                                    <span>Get all the latest information, Sales and Offers.</span>
                                </h4>
                                <div class="newsletter-form-head">
                                    <form action="#" method="get" target="_blank" class="newsletter-form">
                                        <input name="EMAIL" placeholder="Email address here..." type="email">
                                        <div class="button">
                                            <button class="btn">Subscribe<span class="dir-part"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <!-- Start Footer Middle -->
        <div class="footer-middle">
            <div class="container">
                <div class="bottom-inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-contact">
                                <h3>Get In Touch With Us</h3>
                                <p class="phone">Phone: +1 (900) 33 169 7720</p>
                                <ul>
                                    <li><span>Monday-Friday: </span> 9.00 am - 8.00 pm</li>
                                    <li><span>Saturday: </span> 10.00 am - 6.00 pm</li>
                                </ul>
                                <p class="mail">
                                    <a href="mailto:support@shopgrids.com">support@shopgrids.com</a>
                                </p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer our-app">
                                <h3>Our Mobile App</h3>
                                <ul class="app-btn">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-apple"></i>
                                            <span class="small-title">Download on the</span>
                                            <span class="big-title">App Store</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-play-store"></i>
                                            <span class="small-title">Download on the</span>
                                            <span class="big-title">Google Play</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Information</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">About Us</a></li>
                                    <li><a href="javascript:void(0)">Contact Us</a></li>
                                    <li><a href="javascript:void(0)">Downloads</a></li>
                                    <li><a href="javascript:void(0)">Sitemap</a></li>
                                    <li><a href="javascript:void(0)">FAQs Page</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Shop Departments</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">Computers & Accessories</a></li>
                                    <li><a href="javascript:void(0)">Smartphones & Tablets</a></li>
                                    <li><a href="javascript:void(0)">TV, Video & Audio</a></li>
                                    <li><a href="javascript:void(0)">Cameras, Photo & Video</a></li>
                                    <li><a href="javascript:void(0)">Headphones</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-12">
                            <div class="payment-gateway">
                                <span>We Accept:</span>
                                <img src="assets/images/footer/credit-cards-footer.png" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="copyright">
                                <p>Designed and Developed by<a href="https://graygrids.com/" rel="nofollow"
                                        target="_blank">GrayGrids</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <ul class="socila">
                                <li>
                                    <span>Follow Us On:</span>
                                </li>
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!--/ End Footer Area -->
    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('vendor/guest/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/guest/assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/guest/assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/guest/assets/js/main.js') }}"></script>
    


    <script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });
    </script>
    
    <!-- Vanilla Datepicker JS -->
    <script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>

    <script>
        /* Bootstrap 5 JS included */
        /* vanillajs-datepicker 1.1.4 JS included */

        const getDatePickerTitle = elem => {
        // From the label or the aria-label
        const label = elem.nextElementSibling;
        let titleText = '';
        if (label && label.tagName === 'LABEL') {
            titleText = label.textContent;
        } else {
            titleText = elem.getAttribute('aria-label') || '';
        }
        return titleText;
        }

        const elems = document.querySelectorAll('.datepicker_input');
        for (const elem of elems) {
        const datepicker = new Datepicker(elem, {
            'format': 'dd/mm/yyyy', // UK format
            title: getDatePickerTitle(elem)
        });
        }      
    </script>

    {{-- Shopping Cart --}}
    <script>
        let productsInCart = JSON.parse(localStorage.getItem('shoppingCart'));
        if(!productsInCart){
          productsInCart = [];
        }
        const parentElement = document.querySelector('#buyItems');
        const cartSumPrice = document.querySelector('#sum-prices');
        const products = document.querySelectorAll('.product-under');
        const countTheSumPrice = function () { // 4
          let sum = 0;
          productsInCart.forEach(item => {
            sum += item.price;
          });
          return sum;
        }
        const updateShoppingCartHTML = function () {  // 3
          localStorage.setItem('shoppingCart', JSON.stringify(productsInCart));
          if (productsInCart.length > 0) {
            let result = productsInCart.map(product => {
              return `
                <li class="buyItem mb-3">
                  <div class="row ">
                    <div class="col-5">
                      <img src="${product.image}" class="imgProduct">
                    </div>
                    <div class="col-7">
                      <input name="vehicle_id[]" class="form-control" type="hidden" value="${product.id}" readonly="readonly">
                      <input name="" class="form-control" type="text" value="${product.name}" readonly="readonly">
                      <div class="row mt-2 pe-2">
                        <div class="col-3">
                          <button class="button-minus btn btn-primary" style="padding:8px" data-id=${product.id}>-</button>
                        </div>
                        <div class="col-6">
                          <input name="amount[]" class="form-control countOfProduct text-center" type="text" value="${product.count}" readonly="readonly">
                        </div>
                        <div class="col-3">
                          <button class="button-plus btn btn-primary" style="padding:8px" data-id=${product.id}>+</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>`
            });
            parentElement.innerHTML = result.join('');
            document.querySelector('.checkout').classList.remove('hidden');
            cartSumPrice.innerHTML = 'Rp. ' + countTheSumPrice() + ',-';
            document.getElementById("total-prices").value =  countTheSumPrice();
            document.getElementById("total_price").value ='Total : Rp. ' + countTheSumPrice() + ',-';
            document.querySelector('#modal-footer').classList.remove('d-none');
          }
          else {
            document.querySelector('.checkout').classList.add('hidden');
            document.querySelector('#modal-footer').classList.add('d-none');
            parentElement.innerHTML = '<p class="empty text-center">Order Kosong</p>';
            cartSumPrice.innerHTML = '';
          }
        }
        function updateProductsInCart(product) { // 2
          for (let i = 0; i < productsInCart.length; i++) {
            if (productsInCart[i].id == product.id) {
              productsInCart[i].count += 1;
              productsInCart[i].price = productsInCart[i].basePrice * productsInCart[i].count;
              return;
            }
          }
          productsInCart.push(product);
        }
        products.forEach(item => {   // 1
          item.addEventListener('click', (e) => {
            if (e.target.classList.contains('addToCart')) {
              const productID = e.target.dataset.productId;
              const productName = item.querySelector('.productName').innerHTML;
              const productPrice = item.querySelector('.priceValue').innerHTML;
              const productImage = item.querySelector('img').src;
              let product = {
                name: productName,
                image: productImage,
                id: productID,
                count: 1,
                price: +productPrice,
                basePrice: +productPrice,
              }
              updateProductsInCart(product);
              updateShoppingCartHTML();
            }
          });
        });
        parentElement.addEventListener('click', (e) => { // Last
          const isPlusButton = e.target.classList.contains('button-plus');
          const isMinusButton = e.target.classList.contains('button-minus');
          if (isPlusButton || isMinusButton) {
            for (let i = 0; i < productsInCart.length; i++) {
              if (productsInCart[i].id == e.target.dataset.id) {
                if (isPlusButton) {
                  productsInCart[i].count += 1
                }
                else if (isMinusButton) {
                  productsInCart[i].count -= 1
                }
                productsInCart[i].price = productsInCart[i].basePrice * productsInCart[i].count;
              }
              if (productsInCart[i].count <= 0) {
                productsInCart.splice(i, 1);
              }
            }
            updateShoppingCartHTML();
          }
        });
        updateShoppingCartHTML();
    </script>

{{-- count total price --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

 {{-- DIRECT FORM --}}
 <script>
    var selectTime = document.getElementById('select-time');
    var customTime = document.getElementById('custom-time');
    var numberTime = document.getElementById('number-time');

    selectTime.addEventListener('change', (e) => {
      if (e.target.value !== 'custom') {
        customTime.classList.remove('d-block');
        customTime.classList.add('d-none');
        numberTime.value = null;
        
      } else {
        customTime.classList.remove('d-none');
        customTime.classList.add('d-block');

      }
    });

</script>
<script>
    $(function () {
    $(".directForm").change(function () {
      $("#total-price").val(function () {
        var vehicle = parseInt(jQuery.parseJSON("<?php echo json_encode($vehicle->price); ?>"));
        var paket = parseInt($("#select-package option:selected").attr("price"));
        var time = parseInt($("#select-time").val());
        var customTime = parseInt($("#number-time").val());
        
        if (isNaN(time)) {
            if (isNaN(customTime)) {
                time = 0;
            } else {
                time = customTime *24;
                $("#time").val(time);
            }
        } else {
            time = time;
            $("#time").val(time);
        }
        if (vehicle > 0) {
            if (paket > 0) {
                if (time > 0) {
                    return paket + (vehicle * (time/6));
                } else {
                    return "Waktu Belum Diisi";
                }
            } else {
                return "Paket Belum Diisi";
            }
        } else {
            return "Harga Kendaraan tidak berhasil didapatkan";
        }
      });

    $("#real-time").val(function () {
        var time = parseInt($("#select-time").val());
        var customTime = parseInt($("#number-time").val());
        if (isNaN(time)) {
            if (isNaN(customTime)) {
                time = 0;
                return time;
            } else {
                time = customTime *24;
                return time;
            }
        } else {
            time = time;
            return time;
        }
        });
    });
  });
</script>

{{-- CART FORM --}}
<script>
    var selectTime = document.getElementById('cart-select-time');
    var customTime = document.getElementById('cart-custom-time');
    var numberTime = document.getElementById('cart-number-time');

    selectTime.addEventListener('change', (e) => {
      if (e.target.value !== 'custom') {
        customTime.classList.remove('d-block');
        customTime.classList.add('d-none');
        numberTime.value = null;
        
      } else {
        customTime.classList.remove('d-none');
        customTime.classList.add('d-block');

      }
    });

</script>
<script>
    $(document).ready(function () {
        $(".cartForm").change(function () { 
            var paket_price = [];
            var vehicle_price = [];
            var total_pervehicle = [];
            var total_semuanya = 0;
            var time = parseInt($("#cart-select-time").val());
            var customTime = parseInt($("#cart-number-time").val());
            var total_vehicle = $(".count_vehicle").length;
            

            $("#cart-real-time").val(function () {
                var time = parseInt($("#cart-select-time").val());
                var customTime = parseInt($("#cart-number-time").val());
                if (isNaN(time)) {
                    if (isNaN(customTime)) {
                        time = 0;
                        return time;
                    } else {
                        time = customTime *24;
                        return time;
                    }
                } else {
                    time = time;
                    return time;
                }
            });
            $("#cart-total-price").val(function () { 
                if (isNaN(time)) {
                        if (isNaN(customTime)) {
                            time = 0;
                        } else {
                            time = customTime *24;
                            $("#time").val(time);
                        }
                    } else {
                        time = time;
                        $("#time").val(time);
                }
                for ( var i=0 ; i < total_vehicle; i++){
                    paket_price[i] = parseInt($(".paketke-" + i + " option:selected").attr("price"));
                    vehicle_price[i] = parseInt($("#cart-vehicle-price"+ i).val());
                    
                    if (isNaN(total_pervehicle[i])) {
                        if (vehicle_price[i] > 0) {
                            if (paket_price[i] > 0) {
                                if (time > 0) {
                                    total_pervehicle[i] = paket_price[i] + (vehicle_price[i] * (time/6));
                                } else {
                                    return "Waktu Belum Diisi";
                                }
                            } else {
                                return "Paket kendaraan "+ i +" Belum Diisi";
                            }
                        } else {
                            return "Harga Kendaraan tidak berhasil didapatkan";
                        }
                    } 

                     total_semuanya += total_pervehicle[i];
                    
                }

                return total_semuanya;

            });
        });
    });

</script>
</body>

</html>