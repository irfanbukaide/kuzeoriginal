<?php
include "layout/Header.php";
include "layout/Menu.php";
?>


<div ng-app="kuze" ng-controller="homeController">
    <!--        <div class="spinner">-->
    <!--            <div class="rect1"></div>-->
    <!--            <div class="rect2"></div>-->
    <!--            <div class="rect3"></div>-->
    <!--            <div class="rect4"></div>-->
    <!--            <div class="rect5"></div>-->
    <!--        </div>-->
    <!--        <div ng-if="fotorama_items" fotorama item="fotorama_items" class="fotorama"-->
    <!--             data-autoplay="true"-->
    <!--             data-fit="none"-->
    <!--             data-loop="true"-->
    <!--             data-ratio="1400/400"-->
    <!--             data-width="100%"-->
    <!--             data-minwidth="0"-->
    <!--             data-maxwidth="100%"-->
    <!--             data-minheight="0"-->
    <!--             data-maxheight="100%">-->
    <!--        </div>-->

    <div class="fotorama" data-autoplay="true">
        <img src="upload/FINAL.jpg" alt="Final">
        <img src="upload/Belt.jpg" alt="Belt">
        <img src="upload/Bracelet.jpg" alt="Bracelet">
        <img src="upload/Clutch.jpg" alt="Clutch">
        <img src="upload/Eyewear.jpg" alt="Eyewear">
    </div>
    <br>
    <div ng-if="img1 && img2 && img3 && img4 && img5" class="container-fluid px-0 mb-3">
        <div class="row c-padding-header">
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="content-wrapper">
                            <img id="{{ img1['id'] }}"
                                 ng-src="{{ img1['src'] }}"
                                 alt="{{ img1['alt'] }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="content-wrapper">
                            <img id="{{ img2['id'] }}"
                                 ng-src="{{ img2['src'] }}"
                                 alt="{{ img2['alt'] }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="content-wrapper">
                            <img id="{{ img3['id'] }}"
                                 ng-src="{{ img3['src'] }}"
                                 alt="{{ img3['alt'] }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="content-wrapper">
                            <img id="{{ img4['id'] }}"
                                 ng-src="{{ img4['src'] }}"
                                 alt="{{ img4['alt'] }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="content-wrapper">
                            <img id="{{ img5['id'] }}"
                                 ng-src="{{ img5['src'] }}"
                                 alt="{{ img5['alt'] }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Slide Show -->

    <!-- ======= Content New Arrival ======= -->


    <div class="container-fluid c-padding-header text-center c-text-cons">
        <h3 class=""># FOLLOW US ON INSTAGRAM</h3>
        <a href="https://www.instagram.com/<?= $instagram; ?>" target="_blank"><i
                    class="fab fa-instagram fa-2x c-ig-color"></i></a>
        <span class="text-muted c-sub-cons">@kuze.co</span>
    </div>


    <!-- ======= Instagram ======= -->


    <!-- ======= Store Info ======= -->
    <div class="container-fluid c-padding-media ">
        <div class="row ">
            <div class="col-lg-3 col-md-12">
                <!--                <div class="media">-->
                <!--                    <div class="fa fa-plane c-icon-bot"></div>-->
                <!--                    <div class="media-body c-padding-media-body">-->
                <!--                        <h5 class="mt-0">FREE SHIPING</h5>-->
                <!--                        <p>Free shipping on all Local Area order above $100</p>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
            <div class="col-lg-3 col-md-12">
                <!--                <div class="media">-->
                <!--                    <div class="fa fa-car c-icon-bot"></div>-->
                <!--                    <div class="media-body c-padding-media-body">-->
                <!--                        <h5 class="mt-0">24/7 SUPPORT</h5>-->
                <!--                        <p>Our Support Team Ready to 7 days a week</p>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
            <div class="col-lg-3 col-md-12">
                <!--                <div class="media">-->
                <!--                    <div class="fa fa-refresh c-icon-bot"></div>-->
                <!--                    <div class="media-body c-padding-media-body">-->
                <!--                        <h5 class="mt-0">7 DAYS RETURN</h5>-->
                <!--                        <p>Product any fault within 7 days for an exchange</p>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
            <div class="col-lg-3 col-md-12">
                <!--                <div class="media">-->
                <!--                    <div class="fa fa-money c-icon-bot"></div>-->
                <!--                    <div class="media-body c-padding-media-body">-->
                <!--                        <h5 class="mt-0">PAYMENT SECURE</h5>-->
                <!--                        <p>We ensure 100% secure payment with SecurionPay</p>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('img').Lazy();
        });
    </script>
    <script src="<?= base_url('node_modules/angular/angular.min.js'); ?>"></script>
    <script src="<?= base_url('node_modules/angular-fotorama/angular-fotorama.js'); ?>"></script>
    <script>
        var app = angular.module("kuze", ['angular-fotorama']);
        app.controller("homeController", function ($http, $scope) {


            $http.get("/item/new_arrival").then(function (response) {
                $scope.new_arrivals = response.data;
            });


            $http.get("/item/best_seller").then(function (response) {
                $scope.best_sellers = response.data;
            });

            $http.get("/item/sale_item").then(function (response) {
                $scope.sale_items = response.data;
            });

            $http.get("/image/slide").then(function (response) {
                $scope.fotorama_items = response.data;
            });

            $http.get("/image/billboard").then(
                function (response) {
                    $scope.img1 = response.data[1];
                    $scope.img2 = response.data[2];
                    $scope.img3 = response.data[3];
                    $scope.img4 = response.data[4];
                    $scope.img5 = response.data[5];
                },
                function (error) {
                    $scope.img1check = false;
                    $scope.img2check = false;
                    $scope.img3check = false;
                    $scope.img4check = false;
                    $scope.img5check = false;
                },

                function () {
                    $scope.img1check = true;
                    $scope.img2check = true;
                    $scope.img3check = true;
                    $scope.img4check = true;
                    $scope.img5check = true;
                }
            );
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
