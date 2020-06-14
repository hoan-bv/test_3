

<div class="banner-home">
    <div class="overlay"></div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box-introduce text-center">
                    <h1 class="title">Sàn giao dịch WEMONEY</h1>
                    <p class="tester">
                        Wemoney là một trong những dự án thành công nhất của công ty cổ phần thương mại điện tử Bảo Kim
                        được ra mắt vào tháng 03/2019. Dự án Wemoney là nơi kết nốicác nhà đầu tư, những người cho vay
                        và người đang có nhu cầu vay vốn. Địa chỉ: Tầng 3 tòa nhà Hà Thành Plaza, số 102 Thái Thịnh,
                        quận Đống Đa, Hà Nội.
                    </p>
                </div>
                <div class="box-register-loan text-center">
                    <a href="https://wemoney.vn/goi-vay" title="" class="btn btn-default loan">Đăng ký vay ngay</a>
                    <a href="https://wemoney.vn/login" title="" class="btn btn-default invest">Đầu tư cho vay</a>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="content">
    <div class="sliders">
        <div class="container">
            <div class="row">
                <div class="box-sliders text-center">
                    <h3 class="title-gen">Các sản phẩm vay</h3>
                    <div class="swiper-container">
                        <ul class="swiper-wrapper">


                            <?
                            foreach ($data['borrows'] as $row) { ?>
                                <li class="swiper-slide">
                                    <a href="goi-vay" class="icon">
                                        <i class="<?= $row->img ?>"></i>
                                    </a>
                                    <a href="goi-vay"><?= $row->option ?></a>
                                </li>

                            <? } ?>

                        </ul>

                    </div>
                    <div class="swiper-arrows">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-orders">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="title-gen text-center">Danh sách các đơn vay mới nhất</h3>
                        <form action="" class="filter-orders-exchanges">
                            <div class="form-group">
                                <select name="" id="borrows" class="select" data-placeholder="Hình thức vay">
                                    <option></option>
                                    <?
                                    foreach ($data['borrows'] as $row) { ?>
                                        <option value="<?= $row->id ?>"><?= $row->option ?></option>
                                    <? } ?>


                                </select>
                            </div>
                            <div class="form-group">
                                <select id="cities" class="select" data-placeholder="Tỉnh Thành">
                                    <option></option>
                                    <?
                                    foreach ($data['cities'] as $city) { ?>
                                        <option value="<?= $city->id; ?>"><?= $city->name ?></option>
                                    <? } ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <select name="" id="districts" class="select" disabled data-placeholder="Quận Huyện">

                                    <option ></option>



                                </select>
                            </div>
                        </form>
                        <div class="orders"></div>
                        <div class="table-order">
                            <table class="table swiper-container">
                                <thead>
                                <th class="text-center"><span>Khách hàng</span></th>
                                <th class="text-center"><span>Hình thức vay</span></th>
                                <th class="text-center td-150"><span>Số tiền vay</span></th>
                                <th class="text-center td-117"><span>Thời gian vay</span></th>
                                <th class="text-center"><span>Số điện thoại</span></th>
                                <th class="td-132 text-center"><span>Vị trí</span></th>
                                <th class="text-center td-120"><span>Giá bán</span></th>
                                </thead>
                                <tbody class="table-orders">
                                <?php


                                foreach ($data['orders'] as $row) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="name">
                                                <span class="avatar-order">
                                                    <i class="fas fa-user-circle"></i>
                                                </span>

                                                <span><?= $row->user->name; ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="loan-cat"><?php echo $row->borrow->option; ?></div>
                                        </td>
                                        <td class="td-150">
                                            <div class="amount-money"><?php echo number_format($row->packet, 0, ',', '.'); ?></div>
                                        </td>
                                        <td class="td-117">
                                            <div class="date-term"><span><?php echo $row->user_time; ?></span><br>Ngày
                                            </div>
                                        </td>
                                        <td>
                                            <div class="phone">
                                                0<?= substr($row->user->phone, 0, 1) . '*****' . substr($row->user->phone, 6, 9); ?></div>
                                        </td>

                                        <td class="td-132">
                                            <div class="local">
                                                <span class="address"><?php echo $row->city->name; ?></span>
                                                <span><?php echo date('H:i d/m/Y', strtotime($row->start)); ?></span>
                                            </div>
                                        </td>
                                        <td class="text-center td-120">
                                            <div class="sale-price">
                                                <span class="price_discount"><?php echo number_format($row->borrow->price * (100 - $row->borrow->discount) / 100, 0, ',', '.'); ?>₫</span>
                                                <hr>
                                                <div class="price_percent_discount">
                                                    <span class="price_current"><?php echo number_format($row->borrow->price, 0, ',', '.'); ?></span>
                                                    <span class="percent_discount"> -<?php echo $row->borrow->discount ?>%</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="statistic">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <p class="title-statistic">Thống kê</p>
                        <div class="item-statistic">
                            <span class="mhv_img">
                                <i class="fas fa-file-invoice"></i>
                            </span>
                            <div class="info-r">
                                <p class="title-r">Đơn vay mới trong ngày</p>
                                <p class="number-sta">1.321</p>
                            </div>
                        </div>
                        <div class="item-statistic">
                            <span class="mhv_img">
                                <i class="fas fa-desktop"></i>
                            </span>
                            <div class="info-r">
                                <p class="title-r">Tổng đơn vay trên hệ thống</p>
                                <p class="number-sta"><?php echo count($data['orders']) ?></p>
                            </div>
                        </div>
                        <div class="item-statistic">
                            <span class="mhv_img">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="info-r">
                                <p class="title-r">Tổng đơn đã được tư vấn</p>
                                <p class="number-sta">3.367</p>
                            </div>
                        </div>

                        <div class="item-statistic">
                            <span class="mhv_img">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="info-r">
                                <p class="title-r"> Số người đăng ký vay</p>
                                <p class="number-sta"><?php echo $data['users']->count() ?></p>
                            </div>
                        </div>
                        <div class="item-statistic">
                            <span class="mhv_img">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="info-r">
                                <p class="title-r">Số người tham gia cho vay</p>
                                <p class="number-sta"><?php echo 453; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-9">
                        <div class="statistic-rerative">
                            <div class="box-statistic-r">
                                <div class="box-re">
                                    <h3 class="title-ask">Yêu cầu tư vấn miễn phí</h3>
                                    <p class="title-need-loan">Bạn đang cần vay vốn ngay?</p>
                                    <p class="teaser-btt">Hãy đăng ký để được các Chuyên Gia
                                        <br>gọi điện tư vấn miến phí trongvòng 2 giờ
                                    </p>
                                    <p class="expert">
                                        <span class="number">1.321</span>
                                        <span>Chuyên gia sẵn sàng</span>
                                    </p>
                                    <div class="box-register-loan">
                                        <div class="item-box-register">
                                            <p class="text-center">Bạn đang cần tư vấn?</p>
                                            <a href="" title="Đăng ký ngay" class="btn btn-default loan">Đăng ký
                                                ngay</a>
                                        </div>
                                        <div class="class="item-box-register"">
                                            <p class="text-center">Bạn là chuyên viên tư vấn?</p>
                                            <a href="" title="Đăng ký ngay" class="btn btn-default invest">Đăng ký ngay</a>
                                        </div>
                                    </div>
                                    <div class="img-call-now">
                                        <img src="img/bg-img/call.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-steps">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title-gen tm-steps__heading text-center">Mô hình hoạt động của sàn</h2>
                    </div>
                    <div class="tm-steps__item col-md-3">
                        <div class="tm-steps__thumb mb-4 hidden-sm-down">
                            <img class="tm-steps__img img-responsive mx-auto" src="img/bg-img/tem1.webp" alt="">
                        </div>
                        <div class="tm-steps__body text-center">
                            <h3 class="tm-steps__heading text-primary mb-1">1.Đăng ký vay</h3>
                            <div class="tm-steps__lead">Điền thông tin<br>trong 1 phút</div>
                        </div>
                    </div>
                    <div class="tm-steps__item col-md-3">
                        <div class="tm-steps__thumb mb-4 hidden-sm-down">
                            <img class="tm-steps__img img-responsive mx-auto" src="img/bg-img/item2.webp" alt="">
                        </div>
                        <div class="tm-steps__body text-center">
                            <h3 class="tm-steps__heading text-primary mb-1">1.Đăng ký vay</h3>
                            <div class="tm-steps__lead">Điền thông tin<br>trong 1 phút</div>
                        </div>
                    </div>
                    <div class="tm-steps__item col-md-3">
                        <div class="tm-steps__thumb mb-4 hidden-sm-down">
                            <img class="tm-steps__img img-responsive mx-auto" src="img/bg-img/item3.webp" alt="">
                        </div>
                        <div class="tm-steps__body text-center">
                            <h3 class="tm-steps__heading text-primary mb-1">1.Đăng ký vay</h3>
                            <div class="tm-steps__lead">Điền thông tin<br>trong 1 phút</div>
                        </div>
                    </div>
                    <div class="tm-steps__item col-md-3">
                        <div class="tm-steps__thumb mb-4 hidden-sm-down">
                            <img class="tm-steps__img img-responsive mx-auto" src="img/bg-img/item4.webp" alt="">
                        </div>
                        <div class="tm-steps__body text-center">
                            <h3 class="tm-steps__heading text-primary mb-1">1.Đăng ký vay</h3>
                            <div class="tm-steps__lead">Điền thông tin<br>trong 1 phút</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-support py-4 py-md-0 d-none d-sm-none d-md-block">
            <div class="container">
                <div class="tm-support__body tm-support d-flex justify-content-between align-items-center">
                    <div class="tm-support__heading d-flex align-items-center mb-0 hidden-sm-down">
                        <img class="align-self-end" src="img/bg-img/support.webp" alt="">
                        <span class="hidden-sm-down">Tổng đài tư vấn:</span>
                        <a class="tm-support__number t600" href="tel:1900 2055">1900 2055</a>
                    </div>
                    <a class="d-flex align-items-center" href="https://wemoney.vn/ho-tro/cau-hoi-thuong-gap">
                        <i class="far fa-question-circle"></i>
                        <span class="hidden-md-down">Câu hỏi thường gặp</span>
                    </a>
                    <a href="" class="d-flex align-items-center btn btn-danger">
                        <i class="far fa-user-circle"></i>
                        <span class="hidden-md-down">Đăng ký</span>
                    </a>
                   </div>
            </div>
        </div>
        <div class="tm-cat">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-sm-4 mb-4">
                        <div class="tm-cat__item">
                            <h3 class="tm-cat__title"><a href="" title="Thẻ ngân hàng">Thẻ ngân hàng</a></h3>
                            <div class="tm-cat__thumb">
                                <img class="tm-cat__img img-fluid mx-auto img-fit" src="img/bg-img/thumb1.jpg" alt="">
                            </div>
                            <div class="tm-cat__body px-3">
                                <ul class="list-group">
                                    <li class="tm-cat__post-item">
                                        <a class="tm-cat__post-title d-flex justify-content-between align-items-center" href="">
                                            <p class=""> Phí thường niên là gì? Có gì khác so với phí duy trì?</p>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </li>
                                    <li class="tm-cat__post-item">
                                        <a class="tm-cat__post-title d-flex justify-content-between align-items-center" href="">
                                            <p class=""> Nắm chắc 6 bước cho vay tín dụng cơ bản.</p>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </li>
                                    <li class="tm-cat__post-item">
                                        <a class="tm-cat__post-title d-flex justify-content-between align-items-center" href="">
                                            <p class=""> Nên hay không nên rút tiền từ thẻ tín dụng thông qua máy POS.</p>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-sm-4 mb-4">
                    <div class="tm-cat__item">
                        <h3 class="tm-cat__title"><a href="" title="Thẻ ngân hàng">Thẻ ngân hàng</a></h3>
                        <div class="tm-cat__thumb">
                            <img class="tm-cat__img img-fluid mx-auto img-fit" src="img/bg-img/thumb2.jpg" alt="">
                        </div>
                        <div class="tm-cat__body px-3">
                            <ul class="list-group">
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Phí thường niên là gì? Có gì khác so với phí duy trì?</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Nắm chắc 6 bước cho vay tín dụng cơ bản.</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Nên hay không nên rút tiền từ thẻ tín dụng thông qua máy POS.</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-sm-4 mb-4">
                    <div class="tm-cat__item">
                        <h3 class="tm-cat__title"><a href="" title="Thẻ ngân hàng">Thẻ ngân hàng</a></h3>
                        <div class="tm-cat__thumb">
                            <img class="tm-cat__img img-fluid mx-auto img-fit" src="img/bg-img/thumb3.jpg" alt="">
                        </div>
                        <div class="tm-cat__body px-3">
                            <ul class="list-group">
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Phí thường niên là gì? Có gì khác so với phí duy trì?</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Nắm chắc 6 bước cho vay tín dụng cơ bản.</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Nên hay không nên rút tiền từ thẻ tín dụng thông qua máy POS.</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-sm-4 mb-4">
                    <div class="tm-cat__item">
                        <h3 class="tm-cat__title"><a href="" title="Thẻ ngân hàng">Thẻ ngân hàng</a></h3>
                        <div class="tm-cat__thumb">
                            <img class="tm-cat__img img-fluid mx-auto img-fit" src="img/bg-img/thumb4.webp" alt="">
                        </div>
                        <div class="tm-cat__body px-3">
                            <ul class="list-group">
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Phí thường niên là gì? Có gì khác so với phí duy trì?</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Nắm chắc 6 bước cho vay tín dụng cơ bản.</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Nên hay không nên rút tiền từ thẻ tín dụng thông qua máy POS.</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-sm-4 mb-4">
                    <div class="tm-cat__item">
                        <h3 class="tm-cat__title"><a href="" title="Thẻ ngân hàng">Thẻ ngân hàng</a></h3>
                        <div class="tm-cat__thumb">
                            <img class="tm-cat__img img-fluid mx-auto img-fit" src="img/bg-img/thumb5.jpg" alt="">
                        </div>
                        <div class="tm-cat__body px-3">
                            <ul class="list-group">
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Phí thường niên là gì? Có gì khác so với phí duy trì?</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Nắm chắc 6 bước cho vay tín dụng cơ bản.</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Nên hay không nên rút tiền từ thẻ tín dụng thông qua máy POS.</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-sm-4 mb-4">
                    <div class="tm-cat__item">
                        <h3 class="tm-cat__title"><a href="" title="Thẻ ngân hàng">Thẻ ngân hàng</a></h3>
                        <div class="tm-cat__thumb">
                            <img class="tm-cat__img img-fluid mx-auto img-fit" src="img/bg-img/thumb7.webp" alt="">
                        </div>
                        <div class="tm-cat__body px-3">
                            <ul class="list-group">
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Phí thường niên là gì? Có gì khác so với phí duy trì?</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Nắm chắc 6 bước cho vay tín dụng cơ bản.</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                                <li class="tm-cat__post-item">
                                    <a class="tm-cat__post-title d-flex justify-content-between align-items-center"
                                       href="">
                                        <p class=""> Nên hay không nên rút tiền từ thẻ tín dụng thông qua máy POS.</p>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script>

    // select2

    $(document).ready(function () {
        $(".select").select2();
    });


    //slider
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 9,
        spaceBetween: 20,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    // fillter order
    $('#cities').change(function () {
        $('#districts').prop('disabled', false)
        let city_id = $('#cities').val();
        let html = ' <option class="option-first" value="0">Tất cả</option>';
        $.ajax({
            url: '<?= url('ajax.get_district')?>',
            method: 'GET',
            data: {
                city_id: city_id
            },
            success: function (data) {

                let districts = JSON.parse(data).data;
                // console.log(districts)
                $.each(districts, function (index, value) {
                    html +='<option value=' + value.id + '>' + value.name + '</option>';
                })
                $('#districts').html(html)
            }

        })
    })
    $('#borrows,#cities, #districts').change(function () {


        // console.log($('#districts').val())
        let borrow = $('#borrows').val();
        let city = $('#cities').val();
        let district = $('#districts').val();
        //let html = '';

        console.log('borrow' + borrow)
        console.log('city' + city)
        console.log('distric' + district + '  ///////////////')

        $.ajax({
            url: '<?= url('ajax.get_orders')?>',
            method: 'GET',
            data: {
                borrow: borrow,
                city: city,
                district: district
            },
            success: function (data) {
                 //console.log(data);
                // let orders = JSON.parse(data);
                //console.log('///////////////////////////');
                // console.log(orders);

                $('.table-orders').html(data);
            }

        });
    })


</script>


