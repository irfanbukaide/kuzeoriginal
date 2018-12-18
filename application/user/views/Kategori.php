<?php
include "layout/Header.php";
include "layout/Menu.php";
?>
    <section class="hero">
        <div class="container">
            <!-- Hero Content-->
            <div class="hero-content pb-5 text-center">
                <h2 class="hero-heading">Category</h2>
            </div>
        </div>
    </section>
    <div class="container" ng-app="kuze" ng-controller="kategoriController">
        <div class="row">
            <!-- Grid -->
            <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
                <header class="product-grid-header">
                    <div class="mr-3 mb-3">

                        Showing <strong>1-12 </strong>of <strong>158 </strong>products
                    </div>
                    <div class="mr-3 mb-3"><span class="mr-2">Show</span><a href="#"
                                                                            class="product-grid-header-show active">12 </a><a
                                href="#" class="product-grid-header-show ">24 </a><a href="#"
                                                                                     class="product-grid-header-show ">All </a>
                    </div>
                    <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-1">Sort by</span>
                        <select class="custom-select w-auto border-0">
                            <option value="orderby_0">Default</option>
                            <option value="orderby_1">Popularity</option>
                            <option value="orderby_2">Rating</option>
                            <option value="orderby_3">Newest first</option>
                        </select>
                    </div>
                </header>
                <div class="row">
                    <!-- product-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="product">
                            <div class="product-image">
                                <div class="ribbon ribbon-info">Fresh</div>
                                <img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/product/serrah-galos-494312-unsplash.jpg"
                                     alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html"
                                                                      class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#"
                                                                                  class="btn btn-outline-dark btn-product-left"><i
                                                    class="fa fa-shopping-cart"></i></a><a href="detail.html"
                                                                                           class="btn btn-dark btn-buy"><i
                                                    class="fa-search fa"></i><span
                                                    class="btn-buy-label ml-2">View</span></a><a href="#"
                                                                                                 data-toggle="modal"
                                                                                                 data-target="#exampleModal"
                                                                                                 class="btn btn-outline-dark btn-product-right"><i
                                                    class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Jackets</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">White Tee</a>
                                </h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img
                                        src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/product/kyle-loftus-590881-unsplash.jpg"
                                        alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html"
                                                                      class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#"
                                                                                  class="btn btn-outline-dark btn-product-left"><i
                                                    class="fa fa-shopping-cart"></i></a><a href="detail.html"
                                                                                           class="btn btn-dark btn-buy"><i
                                                    class="fa-search fa"></i><span
                                                    class="btn-buy-label ml-2">View</span></a><a href="#"
                                                                                                 data-toggle="modal"
                                                                                                 data-target="#exampleModal"
                                                                                                 class="btn btn-outline-dark btn-product-right"><i
                                                    class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Black
                                        blouse</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="product">
                            <div class="product-image">
                                <div class="ribbon ribbon-primary">Sale</div>
                                <img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/product/kyle-loftus-596319-unsplash.jpg"
                                     alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html"
                                                                      class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#"
                                                                                  class="btn btn-outline-dark btn-product-left"><i
                                                    class="fa fa-shopping-cart"></i></a><a href="detail.html"
                                                                                           class="btn btn-dark btn-buy"><i
                                                    class="fa-search fa"></i><span
                                                    class="btn-buy-label ml-2">View</span></a><a href="#"
                                                                                                 data-toggle="modal"
                                                                                                 data-target="#exampleModal"
                                                                                                 class="btn btn-outline-dark btn-product-right"><i
                                                    class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Accessories</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">College
                                        jacket</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img
                                        src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/product/ethan-haddox-484912-unsplash.jpg"
                                        alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html"
                                                                      class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#"
                                                                                  class="btn btn-outline-dark btn-product-left"><i
                                                    class="fa fa-shopping-cart"></i></a><a href="detail.html"
                                                                                           class="btn btn-dark btn-buy"><i
                                                    class="fa-search fa"></i><span
                                                    class="btn-buy-label ml-2">View</span></a><a href="#"
                                                                                                 data-toggle="modal"
                                                                                                 data-target="#exampleModal"
                                                                                                 class="btn btn-outline-dark btn-product-right"><i
                                                    class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Carrot-fit
                                        jeans</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img
                                        src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/product/serrah-galos-494231-unsplash.jpg"
                                        alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html"
                                                                      class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#"
                                                                                  class="btn btn-outline-dark btn-product-left"><i
                                                    class="fa fa-shopping-cart"></i></a><a href="detail.html"
                                                                                           class="btn btn-dark btn-buy"><i
                                                    class="fa-search fa"></i><span
                                                    class="btn-buy-label ml-2">View</span></a><a href="#"
                                                                                                 data-toggle="modal"
                                                                                                 data-target="#exampleModal"
                                                                                                 class="btn btn-outline-dark btn-product-right"><i
                                                    class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Jackets</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Striped
                                        T-Shirt</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img
                                        src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/product/averie-woodard-319832-unsplash.jpg"
                                        alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html"
                                                                      class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#"
                                                                                  class="btn btn-outline-dark btn-product-left"><i
                                                    class="fa fa-shopping-cart"></i></a><a href="detail.html"
                                                                                           class="btn btn-dark btn-buy"><i
                                                    class="fa-search fa"></i><span
                                                    class="btn-buy-label ml-2">View</span></a><a href="#"
                                                                                                 data-toggle="modal"
                                                                                                 data-target="#exampleModal"
                                                                                                 class="btn btn-outline-dark btn-product-right"><i
                                                    class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Shirts</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Short top</a>
                                </h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="product">
                            <div class="product-image">
                                <div class="ribbon ribbon-danger">Sold out</div>
                                <img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/product/serrah-galos-494279-unsplash.jpg"
                                     alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html"
                                                                      class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#"
                                                                                  class="btn btn-outline-dark btn-product-left"><i
                                                    class="fa fa-shopping-cart"></i></a><a href="detail.html"
                                                                                           class="btn btn-dark btn-buy"><i
                                                    class="fa-search fa"></i><span
                                                    class="btn-buy-label ml-2">View</span></a><a href="#"
                                                                                                 data-toggle="modal"
                                                                                                 data-target="#exampleModal"
                                                                                                 class="btn btn-outline-dark btn-product-right"><i
                                                    class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Sweaters</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Ethnic
                                        Sweater</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img
                                        src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/product/dmitriy-ilkevich-437760-unsplash.jpg"
                                        alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html"
                                                                      class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#"
                                                                                  class="btn btn-outline-dark btn-product-left"><i
                                                    class="fa fa-shopping-cart"></i></a><a href="detail.html"
                                                                                           class="btn btn-dark btn-buy"><i
                                                    class="fa-search fa"></i><span
                                                    class="btn-buy-label ml-2">View</span></a><a href="#"
                                                                                                 data-toggle="modal"
                                                                                                 data-target="#exampleModal"
                                                                                                 class="btn btn-outline-dark btn-product-right"><i
                                                    class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Coats</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Beige</a>
                                </h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img
                                        src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/product/ian-dooley-347968-unsplash.jpg"
                                        alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html"
                                                                      class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#"
                                                                                  class="btn btn-outline-dark btn-product-left"><i
                                                    class="fa fa-shopping-cart"></i></a><a href="detail.html"
                                                                                           class="btn btn-dark btn-buy"><i
                                                    class="fa-search fa"></i><span
                                                    class="btn-buy-label ml-2">View</span></a><a href="#"
                                                                                                 data-toggle="modal"
                                                                                                 data-target="#exampleModal"
                                                                                                 class="btn btn-outline-dark btn-product-right"><i
                                                    class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">T-Shirts</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Skull Tee</a>
                                </h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img
                                        src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/product/alex-holyoake-571682-unsplash.jpg"
                                        alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html"
                                                                      class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#"
                                                                                  class="btn btn-outline-dark btn-product-left"><i
                                                    class="fa fa-shopping-cart"></i></a><a href="detail.html"
                                                                                           class="btn btn-dark btn-buy"><i
                                                    class="fa-search fa"></i><span
                                                    class="btn-buy-label ml-2">View</span></a><a href="#"
                                                                                                 data-toggle="modal"
                                                                                                 data-target="#exampleModal"
                                                                                                 class="btn btn-outline-dark btn-product-right"><i
                                                    class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Trucker
                                        jacket</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img
                                        src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/product/ao-456813-unsplash.jpg"
                                        alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html"
                                                                      class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#"
                                                                                  class="btn btn-outline-dark btn-product-left"><i
                                                    class="fa fa-shopping-cart"></i></a><a href="detail.html"
                                                                                           class="btn btn-dark btn-buy"><i
                                                    class="fa-search fa"></i><span
                                                    class="btn-buy-label ml-2">View</span></a><a href="#"
                                                                                                 data-toggle="modal"
                                                                                                 data-target="#exampleModal"
                                                                                                 class="btn btn-outline-dark btn-product-right"><i
                                                    class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Blouse</a>
                                </h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img
                                        src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/product/kyle-loftus-592041-unsplash.jpg"
                                        alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html"
                                                                      class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#"
                                                                                  class="btn btn-outline-dark btn-product-left"><i
                                                    class="fa fa-shopping-cart"></i></a><a href="detail.html"
                                                                                           class="btn btn-dark btn-buy"><i
                                                    class="fa-search fa"></i><span
                                                    class="btn-buy-label ml-2">View</span></a><a href="#"
                                                                                                 data-toggle="modal"
                                                                                                 data-target="#exampleModal"
                                                                                                 class="btn btn-outline-dark btn-product-right"><i
                                                    class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Shirt</a>
                                </h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                </div>
                <nav aria-label="page navigation" class="d-flex justify-content-center mb-5 mt-3">
                    <ul class="pagination">
                        <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span
                                        aria-hidden="true">Prev</span><span class="sr-only">Previous</span></a></li>
                        <li class="page-item active"><a href="#" class="page-link">1 </a></li>
                        <li class="page-item"><a href="#" class="page-link">2 </a></li>
                        <li class="page-item"><a href="#" class="page-link">3 </a></li>
                        <li class="page-item"><a href="#" class="page-link">4 </a></li>
                        <li class="page-item"><a href="#" class="page-link">5 </a></li>
                        <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">Next</span><span
                                        class="sr-only">Next     </span></a></li>
                    </ul>
                </nav>
            </div>
            <!-- / Grid End-->
            <!-- Sidebar-->
            <div class="sidebar col-xl-3 col-lg-4 order-lg-1">
                <div class="sidebar-block px-3 px-lg-0 mr-lg-4"><a data-toggle="collapse" href="#categoriesMenu"
                                                                   aria-expanded="false" aria-controls="categoriesMenu"
                                                                   class="d-lg-none block-toggler">Product
                        Categories</a>
                    <div id="categoriesMenu" class="expand-lg collapse">
                        <div class="nav nav-pills flex-column mt-4 mt-lg-0"><a href="#"
                                                                               class="nav-link d-flex justify-content-between mb-2 "><span>Jackets</span><span
                                        class="sidebar-badge"> 120</span></a>
                            <div class="nav nav-pills flex-column ml-3"><a href="#" class="nav-link mb-2">Lorem
                                    ipsum</a><a href="#" class="nav-link mb-2">Dolor</a><a href="#"
                                                                                           class="nav-link mb-2">Sit
                                    amet</a><a href="#" class="nav-link mb-2">Donec vitae</a>
                            </div>
                            <a href="#" class="nav-link d-flex justify-content-between mb-2 active"><span>Jeans &amp; chinos</span><span
                                        class="sidebar-badge"> 55</span></a>
                            <div class="nav nav-pills flex-column ml-3"><a href="#" class="nav-link mb-2">Lorem
                                    ipsum</a><a href="#" class="nav-link mb-2">Dolor</a><a href="#"
                                                                                           class="nav-link mb-2">Sit
                                    amet</a><a href="#" class="nav-link mb-2">Donec vitae</a>
                            </div>
                            <a href="#"
                               class="nav-link d-flex justify-content-between mb-2 "><span>Accessories</span><span
                                        class="sidebar-badge"> 80</span></a>
                            <div class="nav nav-pills flex-column ml-3"><a href="#" class="nav-link mb-2">Sit amet</a><a
                                        href="#" class="nav-link mb-2">Donec vitae</a><a href="#" class="nav-link mb-2">Lorem
                                    ipsum</a><a href="#" class="nav-link mb-2">Dolor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Sidebar end-->
        </div>
    </div>
    <script>
        $('[id="title"]').ellipsis();
    </script>
    <script>
        $(function () {
            $('img').Lazy();
        });
    </script>


<?php
include "layout/Footer.php";
?>