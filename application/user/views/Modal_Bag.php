<div class="row">
    <div class="col text-center c-modal-col">
        <p class="text-center r-pink f-size"><i class="fa fa-check-circle fa-5x"></i> <br> <h5>Successfully Add Items to
            Bag</h5>
        </p>
    </div>
</div>
<hr style="padding: 0; margin: 0">
<div ng-app="kuze" ng-controller="bagCtrl">
    <div class="row f-size">
        <div class="col">
            <table class="table table-sm table-borderless">
                <tr>
                    <th></th>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th><i class="fa fa-times"></i></th>
                </tr>
                <tr ng-repeat="bag in bags">
                    <td>
                        <img ng-src="{{ bag.image_url }}" width="50" height="50">
                    </td>
                    <td>
                        {{ bag.nama }}
                    </td>
                    <td>
                        {{ bag.ukuran }}
                    </td>
                    <td>
                        {{ bag.ca_harga | rupiah }}
                    </td>
                    <td>
                        {{ bag.ca_qty }}
                    </td>
                    <td>
                        {{ bag.ca_tharga | rupiah }}
                    </td>
                    <td>
                        <a title="Hapus item" ng-href="{{ bag.bag_delete }}"><i class="fa fa-times c-black"></i></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="row small">
        <div class="col mb-1">
            <a class="btn btn-sm btn-block c-modal-clr" data-dismiss="modal">Countinue Shopping</a>
        </div>
        <div class="col">
            <a ng-href="{{ bags_url }}" class="btn btn-sm  btn-block c-modal-clr">Checkout</a>
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
