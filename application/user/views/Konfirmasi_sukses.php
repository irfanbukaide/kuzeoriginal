<?php
include "layout/Header.php";
include "layout/Menu.php";
?>
<?php $nomor_order = $this->uri->segment(2); ?>
    <!-- ======= Banner Checkout ======= -->
    <div class="wrapper-cart container">
        <h5 class="text-center c-title-cart">Result</h5>
        <div class="c-breadcrumb text-center c-bread-padding">
            <nav class="c-nav-breadcrumb c-bread-cart">
                <a class="breadcrumb-item " href="<?= site_url('cart'); ?>">Bag</a>
                <i class="fa fa-arrow-right"></i>
                <a class="breadcrumb-item " href="<?= site_url('Alamat'); ?>">Shipping Address</a>
                <i class="fa fa-arrow-right"></i>
                <a class="breadcrumb-item " href="<?= site_url('Metode_pengiriman'); ?>">Payment Method</a>
                <i class="fa fa-arrow-right"></i>
                <a class="breadcrumb-item" href="">Detail Order</a>
                <i class="fa fa-arrow-right"></i>
                <a class="breadcrumb-item " href="<?= site_url('Konfirmasi'); ?>">Confirmation</a>
                <i class="fa fa-arrow-right"></i>
                <a class="breadcrumb-item active-bread" href="<?= site_url('Konfirmasi_success'); ?>">Result</a>
            </nav>
        </div>
    </div>


    <div class="container">
        <h5 class="text-center mb-3">Detail Order : #<?= $nomor_order; ?></h5>
        <br>
        <div class="row mt-3">
            <div class="col-md-6 col-sm-12">
                <p class="mb-1"><i class="fa fa-credit-card mr-2"></i><b>Recipient</b></p>
                <p> <?= $nama_nomor(); ?></p>
            </div>
            <div class="col-md-6 col-sm-12">
                <p class="mb-2"><i class="fa fa-credit-card mr-2"></i> <b>Bank Account</b></p>
                <p><?= $metode_pembayaran(); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p class="mb-2"><i class="fa fa-address-book mr-2"></i> <b>Shipping Address</b></p>
                <p> <?= $pengiriman(); ?></p>
            </div>
            <div class="col-md-6 col-sm-12">
                <p class="mb-2"><i class="fa fa-car mr-2"></i> <b>Shipping Method</b></p>
                <p> <?= $jasa(); ?></p>
            </div>
        </div>
    </div>

    <hr style="color:black;">

    <h4 class="text-center mt-5">
        <b>Payment Confirmation</b>
    </h4>
    <h2 class="text-center">Success</h2>
    <br>
    <div class="row mb-3">
        <div class="col-3 m-auto">
            <a href="<?= site_url('order_status'); ?>"
               class="btn btn-block c-cart-detail c-cart-p">
                Check Status</a>
        </div>
    </div>

        <!--
    </div>

<?php $biaya_subtotal = $biaya_subtotal();
$biaya_pengiriman = $biaya_pengiriman();
$total = $biaya_subtotal + $biaya_pengiriman;
?>

<?php
include "layout/Footer.php";
?>