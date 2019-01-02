<?php
include "layout/Header.php";
include "layout/Menu.php";
?>

    <section class="hero">
        <div class="container">
            <!-- Hero Content-->
            <div class="hero-content pb-2 pt-2 text-center">
                <h2 class="hero-heading">Sale Item</h2>
            </div>
        </div>
    </section>

    <div class="container" ng-app="kuze" ng-controller="SaleItemController">
        <!-- Grid -->
        <div class="products-grid col-xl-12 col-lg-12 order-lg-12">
            <header class="product-grid-header">
                <div class="mr-3 mb-3">
                    Total <strong ng-bind="totalItems"></strong> products
                </div>
                <!--                <div class="mr-3 mb-3">-->
                <!--                    <span class="mr-2">Show</span>-->
                <!--                    <a href="#" class="product-grid-header-show active">12</a>-->
                <!--                    <a href="#" class="product-grid-header-show ">24</a>-->
                <!--                    <a href="#" class="product-grid-header-show ">All</a>-->
                <!--                </div>-->
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
                <div ng-repeat="item in items" class="col-xl-3 col-sm-3">
                    <div class="product">
                        <div class="product-image">
                            <div class="ribbon ribbon-info" ng-if="item.i_new == 1">New Arrival</div>
                            <div class="ribbon ribbon-primary" ng-if="item.i_best == 1">Best Seller</div>
                            <div class="ribbon ribbon-danger" ng-if="item.i_sale == 1">Sale Item</div>
                            <img ng-src="{{item.i_img}}" alt="product" class="img-fluid">
                            <div class="product-hover-overlay">
                                <a ng-href="{{item.i_url}}" class="product-hover-overlay-link"></a>
                                <div class="product-hover-overlay-buttons">
                                    <a ng-href="{{item.i_url}}" class="btn btn-dark btn-buy">
                                        <i class="fa-search fa"></i>
                                        <span class="btn-buy-label ml-2">View</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <p class="text-muted text-sm mb-1" ng-bind="item.i_category"></p>
                            <h3 class="h6 text-uppercase mb-1"><a ng-bind="item.i_nama" ng-href="{{item.i_url}}"
                                                                  class="text-dark"></a>
                            </h3><span class="text-muted" ng-bind="item.i_hrg | rupiah"></span>
                        </div>
                    </div>
                </div>
                <!-- /product-->
            </div>
            <nav aria-label="page navigation" class="d-flex justify-content-center mb-5 mt-3">
                <ul uib-pagination total-items="totalItems" ng-model="currentPage" max-size="maxSize"
                    boundary-link-numbers="true"></ul>

            </nav>
        </div>
        <!-- / Grid End-->
    </div>
    <script>
        $('[id="title"]').ellipsis();
    </script>
    <script>
        $(function () {
            $('img').Lazy();
        });
    </script>
    <script src="<?= base_url('node_modules/angular/angular.min.js'); ?>"></script>
    <script src="<?= base_url('node_modules/ui-bootstrap4/dist/ui-bootstrap-tpls-3.0.5.min.js'); ?>"></script>
    <script>
        var app = angular.module("kuze", ['ui.bootstrap']);
        app.controller("SaleItemController", function ($http, $scope) {

            $scope.currentPage = 1;
            $scope.maxSize = 10;
            $scope.itemsPerPage = 9;

            $http.get("/api/item/ksale_item").then(function (response) {
                var items = response.data;
                $scope.totalItems = items.length;

                $scope.$watch('currentPage + numPerPage', function () {
                    var begin = (($scope.currentPage - 1) * $scope.itemsPerPage),
                        end = begin + $scope.itemsPerPage;

                    $scope.items = items.slice(begin, end);
                });
            });

        });

        app.config(function ($httpProvider) {
            $httpProvider.interceptors.push(function ($q) {
                return {
                    'request': function (config) {
                        $('.spinner').show();
                        return config;
                    },

                    'response': function (response) {
                        $('.spinner').hide();
                        return response;
                    }
                };
            });
        });

        app.run(function ($rootScope) {
            if ($rootScope.$last) {
                $('.spinner').hide();
            } else {
                $('.spinner').show();
            }

        });

        app.filter('rupiah', function () {
            return function (val) {
                while (/(\d+)(\d{3})/.test(val.toString())) {
                    val = val.toString().replace(/(\d+)(\d{3})/, '$1' + '.' + '$2');
                }
                var val = 'IDR ' + val;
                return val;
            };
        });
    </script>


<?php
include "layout/Footer.php";
?>