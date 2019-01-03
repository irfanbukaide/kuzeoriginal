<?php
include "layout/Header.php";
include "layout/Menu.php";
?>
    <div ng-app="kuze" ng-controller="bagCtrl">
        <!-- ======= Banner Bag ======= -->
        <div class="wrapper-cart">
            <h5 class="text-center c-title-cart">Bag</h5>

            <div class="c-breadcrumb text-center c-bread-padding">
                <nav class="c-nav-breadcrumb c-bread-cart">
                    <a class="breadcrumb-item" href="">Home</a>
                    <i class="fa fa-arrow-right"></i>
                    <a class="breadcrumb-item active-bread" href="">Bag</a>
                </nav>
            </div>
        </div>

        <!-- ======= Detail Bag ======= -->
        <div class="container c-padding-header">
            <?php if (isset($_SESSION['gagal']) && $_SESSION['gagal'] != ""): ?>
                <div class="row">
                    <div class="alert alert-danger alert-dismissible fade show"
                         role="alert">
                        <?php echo $_SESSION['gagal']; ?>
                        <button type="button" class="close" data-dismiss="alert"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>

            <?php endif; ?>
            <?php if (isset($_SESSION['berhasil']) && $_SESSION['berhasil'] != ""): ?>
                <div class="row">
                    <div class="alert alert-success alert-dismissible fade show"
                         role="alert">
                        <?php echo $_SESSION['berhasil']; ?>
                        <button type="button" class="close" data-dismiss="alert"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row">
                <table class="table table-responsive-md table-bordered c-table-vertical">
                    <tr>
                        <th></th>
                        <th class="c-table-name">Product Name</th>
                        <th class="c-table-price text-center">Size</th>
                        <th class="c-table-price text-center">Price</th>
                        <th class="c-table-quantity text-center">Quantity</th>
                        <th class="c-table-total text-center">Total</th>
                        <td class="c-table-del text-center"><i class="fa fa-times"></i></td>
                    </tr>
                    <tr ng-repeat="bag in bags">
                        <td class="text-center">
                            <img ng-src="{{ bag.image_url }}" width="50" height="50">
                        </td>
                        <td>
                            <p class="c-cart-productname" ng-bind="bag.nama"></p>
                        </td>
                        <td class="text-center">
                            <p class="c-cart-productname" ng-bind="bag.ukuran"></p>
                        </td>
                        <td class="text-center">
                            <span class="c-price-cart c-price-cart" ng-bind="bag.ca_harga | rupiah"></span>
                        </td>
                        <td class="text-center">
                            <p class="c-cart-productname" ng-bind="bag.ca_qty"></p>
                        </td>
                        <td class="text-center">
                            <span class="c-price-cart-2" ng-bind="bag.ca_tharga | rupiah"></span>
                        </td>
                        <td class="text-center">
                            <a title="Hapus item"
                               ng-href="{{ bag.bag_delete }}"><i
                                        class="fa fa-times c-black"></i></a>
                        </td>
                    </tr>

                </table>

            </div>

            <!--            total bag-->
            <div class="row">
                <div class="c-cart-total col-lg-5 col-md-7 col-sm-10 px-0 px-sm-3 float-right">
                    <!-- ======= Promo Code ======= -->
                    <h5 class="c-title-cart-total">Remark</h5>
                    <div class="input-group mb-3">
                    <textarea name="remark" id="remark" type="text" class="form-control"
                              placeholder="Remark"></textarea>
                    </div>
                    <!-- ======= Promo Code ======= -->
                    <h5 class="c-title-cart-total">Promo Code</h5>
                    <div class="input-group mb-3">
                        <input name="kode_promo" id="kode_promo" ng-model="kode_promo" type="text" class="form-control"
                               placeholder="Enter Promo Code"
                               aria-label="Masukan Kode Voucher">
                        <div class="input-group-append">
                            <button id="btn_kode" class="btn btn-kupon btn-csr" ng-click="promo()">Use Code</button>
                        </div>
                    </div>
                    <!-- ======= Promo ======= -->
                    <h5 class="c-title-cart-total">Promo</h5>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td class="pl-3">Coupon</td>
                            <td class="text-right">
                                <span class="c-price-cart-3 pl-3" ng-bind="bags_promo_kode"></span>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td class="pl-3">Note</td>
                            <td class="text-right">
                                <span class="c-price-cart-2 pl-3" ng-bind="bags_promo_ket"></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <!-- ======= Summary ======= -->
                    <h5 class="c-title-cart-total">Shopping Summary</h5>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td class="c-table-cart-total pl-3">Total Price</td>
                            <td class="text-right"><span class="c-price-cart-3 pl-3"
                                                         ng-bind="bags_total | rupiah"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-3">Disc. Total Price (-)</td>
                            <td class="text-right"><span class="c-price-cart-3 pl-3 text-center"
                                                         ng-bind="bags_promo_harga | rupiah"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-3">Shipping Charges</td>
                            <td class="text-right"><span class="c-price-cart-3 pl-3">-</span></td>
                        </tr>
                        <tr>
                            <td nowrap class="pl-3 pr-4">Disc. Shipping Charges</td>
                            <td class="text-right"><span class="c-price-cart-3 pl-3">-</span></td>
                        </tr>

                        <tr>
                            <td class="pl-3">Grand Total</td>
                            <td class="text-right">
                                <span class="c-price-cart-2 pl-3" ng-bind="bags_grand_total | rupiah"></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <a ng-href="{{ bags_url }}" class="btn btn-csr c-btn-cart mt-3 float-right">Address
                        Shipping</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('node_modules/angular/angular.min.js'); ?>"></script>
    <script>

        var app = angular.module("kuze", []);
        app.controller('bagCtrl', function ($http, $scope) {
            var url = "/api/bag";
            $http.get(url).then(function (response) {
                $scope.bags = response.data.bags;
                $scope.bags_promo_kode = response.data.bags_promo_kode;
                $scope.bags_promo_ket = response.data.bags_promo_ket;
                $scope.bags_promo_harga = response.data.bags_promo_harga;
                $scope.bags_total = response.data.bags_total;
                $scope.bags_grand_total = response.data.bags_grand_total;
                $scope.bags_url = response.data.bags_url;
            });

            $scope.promo = function () {
                var url = "/api/bag/promo/" + $scope.kode_promo;
                $http.get(url).then(function (response) {
                    console.log(response.data);
                    $scope.bags = response.data.bags;
                    $scope.bags_promo_kode = response.data.bags_promo_kode;
                    $scope.bags_promo_ket = response.data.bags_promo_ket;
                    $scope.bags_promo_harga = response.data.bags_promo_harga;
                    $scope.bags_total = response.data.bags_total;
                    $scope.bags_grand_total = response.data.bags_grand_total;
                    $scope.bags_url = response.data.bags_url;
                });
            }
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
            return function (nilai) {
                while (/(\d+)(\d{3})/.test(nilai)) {
                    nilai = nilai.toString().replace(/(\d+)(\d{3})/, '$1' + '.' + '$2');
                }
                var nilai = 'IDR ' + nilai;
                return nilai;
            };
        });
    </script>
<?php
include "layout/Footer.php";
?>