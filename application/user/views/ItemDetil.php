<?php
include "layout/Header.php";
include "layout/Menu.php";
?>

    <section class="hero">
        <div class="container">
            <!-- Hero Content-->
            <div class="hero-content pb-2 pt-2 text-center">
                <h2 class="hero-heading">Detail</h2>
            </div>
        </div>
    </section>

    <!-- ======= Detail Site ======= -->
    <div class="container c-padding-header c-margin-100">
        <div class="row justify-content-center">
            <?php if (isset($item) && $item != NULL): ?>

            <div class="col-lg-5 col-md-5">
                <div class="fotorama"
                     data-fit="cover"
                     data-navposition="bottom"
                     data-transition="dissolve"
                     data-nav="thumbs"
                     data-allowfullscreen="native"
                     data-width="600"
                     data-height="400">
                    <?php if (isset($images)): ?>
                        <?php foreach ($images as $image): ?>
                            <img src="<?= base_url($image->ii_url); ?>" class="card-img-top">
                        <?php endforeach; ?>
                    <?php else: ?>
                        <img src="<?= base_url('assets/img/noimage.jpg'); ?>"
                             class="card-img-top">
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="c-detail-info">
                    <form action="<?= $url = str_replace('/detil', '', current_url()) . '/add_to_bag'; ?>"
                          method="post">
                        <input type="hidden" name="ecommerce_eazy" value="<?= $this->security->get_csrf_hash(); ?>">
                        <input id="item" type="hidden" name="item" value="<?= $item->i_kode; ?>">
                        <input id="detil" type="hidden" name="detil" value="">
                        <h5 class="mb-2"><?= $item->i_nama; ?></h5>
                        <hr class="mb-2">

                        <div class="row">
                            <div class="col">
                                <div class="c-detail-price">
                                    <input type="hidden" name="harga"
                                           value="<?= $item->i_hrg; ?>">
                                    <p id="rupiah"
                                       class=""><?= $item->i_hrg; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col c-detail-des"> <?= $item->i_deskripsi; ?></div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <label for="ukuran" class="c-detil-add">Size</label>
                        <select name="ukuran" id="ukuran" class="custom-select mr-sm-2 form-control" required>
                            <?php foreach ($item_detils as $id): ?>
                                <option data-qty="<?= $id['ukuran_qty']; ?>"
                                        data-detil="<?= $id['item_detil_kode']; ?>"
                                        value="<?= $id['ukuran_kode']; ?>">
                                    <?= $id['ukuran_nama']; ?>
                                </option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <!--                            <div class="col-lg-2 col-md-12">-->
                    <!--                                <label for="stok" class="c-detil-add">Stok</label>-->
                    <!--                                <input class="form-control" type="number" name="stok" id="stok" disabled>-->
                    <!--                            </div>-->
                    <div class="col-lg-2 col-md-12">
                        <div class="form-group">
                            <label for="qty" class="c-detil-add">QTY</label>
                            <input class="form-control" type="number" name="qty" id="qty" min="1" value="1">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p id="msg" class="text-danger"></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <button id="addtobag" type="submit" class="btn btn-block c-cart-detail c-cart-p"
                                disabled="disabled"><i
                                    class="fa fa-shopping-cart mr-2"></i>Buy Product
                        </button>
                    </div>
                </div>
                </form>
                <?php else: ?>
                    <div class="col">
                        <h2 class="text-center text-muted">No Item found</h2>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script>
        $(function () {
            $('#ukuran').change(function () {
                var qty = $(this).find(':selected').data('qty');
                var detil = $(this).find(':selected').data('detil');
                var value = $(this).val();
                $.when(
                    $('#stok').val(qty),
                    $('#qty').attr('max', qty)
                );
                if (qty <= 0 && value !== '') {
                    $('#msg').html('Stock is empty !').removeClass('text-success').addClass('text-danger');
                    $('#addtobag').attr('disabled', 'disabled');
                } else if (qty > 0 && value !== '') {
                    $('#msg').html('Stock is available').removeClass('text-danger').addClass('text-success');
                    $('#addtobag').removeAttr('disabled');
                } else {
                    $('#msg').html('').removeClass('text-success').addClass('text-danger');
                    $('#addtobag').attr('disabled', 'disabled');
                }

                $('#detil').val(detil);
            })
        })
    </script>
    <script>
        $(function () {
            var options = $('#ukuran option');
            var arr = options.map(function (_, o) {
                return {t: $(o).text(), v: o.value, q: $(o).attr('data-qty')};
            }).get();
            arr.sort(function (o1, o2) {
                var t1 = o1.t.toLowerCase(), t2 = o2.t.toLowerCase();

                return t1 > t2 ? 1 : t1 < t2 ? -1 : 0;
            });
            options.each(function (i, o) {
                o.value = arr[i].v;
                $(o).text(arr[i].t);
                $(o).attr('data-qty', arr[i].q);
            });
            $("#ukuran").prepend("<option value='' selected='selected'>Select Size</option>");
        })
    </script>
    <script>
        $(function () {
            $('img').Lazy();
        });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="cart"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>

<?php
include "layout/Footer.php";
?>