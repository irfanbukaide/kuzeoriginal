<!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="cart"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>


<footer class="main-footer">
    <!-- Services block-->
    <!--    <div class="bg-gray-100 text-dark-700 py-6">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-4 service-column">-->
    <!--                    <svg class="svg-icon service-icon">-->
    <!--                        <use xlink:href="#delivery-time-1"> </use>-->
    <!--                    </svg>-->
    <!--                    <div class="service-text">-->
    <!--                        <h6 class="text-uppercase">Free shipping &amp; return</h6>-->
    <!--                        <p class="text-muted font-weight-light text-sm mb-0">Free Shipping over $300</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-4 service-column">-->
    <!--                    <svg class="svg-icon service-icon">-->
    <!--                        <use xlink:href="#money-1"> </use>-->
    <!--                    </svg>-->
    <!--                    <div class="service-text">-->
    <!--                        <h6 class="text-uppercase">Money back guarantee</h6>-->
    <!--                        <p class="text-muted font-weight-light text-sm mb-0">30 Days Money Back Guarantee</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-4 service-column">-->
    <!--                    <svg class="svg-icon service-icon">-->
    <!--                        <use xlink:href="#customer-support-1"> </use>-->
    <!--                    </svg>-->
    <!--                    <div class="service-text">-->
    <!--                        <h6 class="text-uppercase">020-800-456-747</h6>-->
    <!--                        <p class="text-muted font-weight-light text-sm mb-0">24/7 Available Support</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!-- Main block - menus, subscribe form-->
    <div class="py-6 bg-gray-300 text-muted">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="font-weight-bold text-uppercase text-lg text-dark mb-3">Kuze Original<span
                                class="text-primary">.</span></div>
                    <p>TRUSTED AND SECURE PAYMENT</p>
                    <ul class="list-inline">
                        <!--                        <li class="list-inline-item"><a href="#" target="_blank" title="twitter" class="text-muted text-hover-primary"><i class="fab fa-twitter"></i></a></li>-->
                        <!--                        <li class="list-inline-item"><a href="#" target="_blank" title="facebook" class="text-muted text-hover-primary"><i class="fab fa-facebook"></i></a></li>-->
                        <li class="list-inline-item"><a href="https://www.instagram.com/<?= $instagram; ?>"
                                                        target="_blank" title="instagram"
                                                        class="text-muted text-hover-primary"><i
                                        class="fab fa-instagram"></i></a></li>
                        <!--                        <li class="list-inline-item"><a href="#" target="_blank" title="pinterest" class="text-muted text-hover-primary"><i class="fab fa-pinterest"></i></a></li>-->
                        <!--                        <li class="list-inline-item"><a href="#" target="_blank" title="vimeo" class="text-muted text-hover-primary"><i class="fab fa-vimeo"></i></a></li>-->
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                    <h6 class="text-uppercase text-dark mb-3">Information</h6>
                    <ul class="list-unstyled">
                        <li><a href="<?= site_url('resi'); ?>" class="text-muted">Airway Bill Report</a></li>
                        <li><a href="<?= site_url('Order_status'); ?>" class="text-muted">Order Status</a></li>
                        <li><a href="<?= site_url('Order_history'); ?>" class="text-muted">Order History</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                    <h6 class="text-uppercase text-dark mb-3">Help</h6>
                    <ul class="list-unstyled">
                        <li><a href="<?= site_url('Howtoorder'); ?>" class="text-muted">How to Order</a></li>
                        <li><a href="<?= site_url('Faq'); ?>" class="text-muted">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6 class="text-uppercase text-dark mb-3">We are support payment</h6>
                    <img style="width:120px;" src="<?= base_url('assets/img/BCA-Kuze.png'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright section of the footer-->
    <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left">
                    <p class="mb-md-0">© 2018 Kuze Original. All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
                        <!--                        <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/visa.svg" alt="..." class="w-2rem"></li>-->
                        <!--                        <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/mastercard.svg" alt="..." class="w-2rem"></li>-->
                        <!--                        <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/paypal.svg" alt="..." class="w-2rem"></li>-->
                        <!--                        <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/western-union.svg" alt="..." class="w-2rem"></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>

    $(function () {
        $('#myDropdown').on('show.bs.dropdown', function () {
            $('.dropdown-toggle').dropdown()
        })
    });

    $(function () {
        // ------------------------------------------------------ //
        // Format Rupiah
        // ------------------------------------------------------ //


        var moneyFormat = wNumb({
            mark: ',',
            decimals: 0,
            thousand: '.',
            prefix: 'IDR ',
            suffix: ''
        });
        $('[id="rupiah"]').each(function (index) {
            var value = parseInt($(this).html()),
                hasil = moneyFormat.to(value);

            if ($(this).html() === '-') {
            } else {
                $(this).html(hasil);
            }
        });
    });

    $(function () {
        $('[id="title"]').ellipsis();
    });

    $(function () {
        // ------------------------------------------------------ //
        // Data table users
        // ------------------------------------------------------ //
        $('#table').DataTable({
            "fnDrawCallback": function (oSettings) {
                $(oSettings.nTHead).hide();
            }
        });
    });

    $(function () {
        $('div.image.mx-auto.d-block').click(function () {
            var url = $(this).attr('data-url');
            window.location.href = url;
        })
    });


</script>
<?php if (isset($_SESSION['modal'])): ?>
    <script>
        $('#cart').modal({
            backdrop: 'static',
            keyboard: false,
            show: true
        });
        $('#cart > div > div > div.modal-body').load('<?= site_url('bag/modal_bag'); ?>');
    </script>
<?php endif; ?>
</body>
</html>