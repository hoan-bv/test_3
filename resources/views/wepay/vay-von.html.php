


<div class="header-home header-vayngay">
    <div class="container">
        <div class="row">
            <div class="col-12 header-wemoney">
                <div class="logo">
                    <a href="https://wemoney.vn/" title="Wemoney">
                        <img id="logo-vayngay" src="https://wemoney.vn/upload/settings/zlq1559270721.png"
                             alt="Logo WeMoney">
                    </a>
                </div>
                <div class="header-right">
                    <div class="login-button">
                        <div class="btn btn-default login">
                            <a href="https://wemoney.vn/login">Đăng nhập</a>
                            <a href="https://wemoney.vn/login">
                                <img src="img/core-img/fb.svg" alt="">
                            </a>
                            <a href="https://wemoney.vn/login">
                                <img src="img/core-img/google.svg" alt="">
                            </a>
                        </div>
                        <div class="notification-alarm help-phone help-faq">
                            <a href="">
                                <img src="img/core-img/phone-top.svg" alt="">
                            </a>
                        </div>
                        <div class="help-faq">
                            <a href="">
                                <img src="img/core-img/faq.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <ul class="menu menu-vayngay">
                        <li class="active"><a href="" title="">Về Wemoney</a></li>
                        <li class=""><a href="" title="Vay ngay">Vay ngay</a></li>
                        <li class=""><a href="" title="Sàn giao dịch">Sàn giao dịch</a></li>
                        <li class=""><a href="" title="Sàn giao dịch">Vay tín chấp</a>
                            <ul class="submenu">
                                <li class="list-submenu">
                                    <a href="">
                                        <i class="fas fa-caret-right" aria-hidden="true"></i>
                                        Kiến thức vay tín chấp
                                    </a>
                                </li>
                                <li class="list-submenu">
                                    <a href="">
                                        <i class="fas fa-caret-right" aria-hidden="true"></i>
                                        Kiến thức vay thế chấp
                                    </a>
                                </li>
                                <li class="list-submenu">
                                    <a href="">
                                        <i class="fas fa-caret-right" aria-hidden="true"></i>
                                        Kiến thức vay vốn
                                    </a>
                                </li>
                                <li class="list-submenu">
                                    <a href="">
                                        <i class="fas fa-caret-right" aria-hidden="true"></i>
                                        Kiến thức vay trả góp
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-megamenu"><a href="" title="Sàn giao dịch">Vay vốn</a>
                            <ul class="submenu">
                                <li class="list-submenu">
                                    <a href="">
                                        <i class="fas fa-caret-right" aria-hidden="true"></i>
                                        Kiến thức vay tín chấp
                                    </a>
                                </li>
                                <li class="list-submenu">
                                    <a href="">
                                        <i class="fas fa-caret-right" aria-hidden="true"></i>
                                        Kiến thức vay thế chấp
                                    </a>
                                </li>
                                <li class="list-submenu">
                                    <a href="">
                                        <i class="fas fa-caret-right" aria-hidden="true"></i>
                                        Kiến thức vay vốn
                                    </a>
                                </li>
                                <li class="list-submenu">
                                    <a href="">
                                        <i class="fas fa-caret-right" aria-hidden="true"></i>
                                        Kiến thức vay trả góp
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=""><a href="" title="Sàn giao dịch">Tin tức</a>
                            <ul class="submenu">
                                <li class="list-submenu">
                                    <a href="">
                                        <i class="fas fa-caret-right" aria-hidden="true"></i>
                                        Kiến thức vay tín chấp
                                    </a>
                                </li>
                                <li class="list-submenu">
                                    <a href="">
                                        <i class="fas fa-caret-right" aria-hidden="true"></i>
                                        Kiến thức vay thế chấp
                                    </a>
                                </li>
                                <li class="list-submenu">
                                    <a href="">
                                        <i class="fas fa-caret-right" aria-hidden="true"></i>
                                        Kiến thức vay vốn
                                    </a>
                                </li>
                                <li class="list-submenu">
                                    <a href="">
                                        <i class="fas fa-caret-right" aria-hidden="true"></i>
                                        Kiến thức vay trả góp
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<section id="content">
    <div class="container">
        <div class="pg-news">
            <div class="row">
                <div class="posts_main col-lg-9 rightpadding-20 mb-3">
                    <div class="bg-white">
                        <div class="pg-news__head">
                            <div class="row">
                                <div class="col-md-8 pg-news__head__top rightpadding-md-10">
                                    <div class="news news__main">
                                        <div class="news__thumbnail">
                                            <a href="">
                                                <img class="img-fit lazy " src="<?= $news->img; ?>" alt="">
                                            </a>
                                        </div>
                                        <h3 class="news__title">
                                            <a href=""><?= $news->title ?>.</a>
                                        </h3>
                                        <p class="news__lead nomargin">
                                            <?= $news->teaser ?>
                                            .</p>

                                    </div>
                                </div>
                                <div class="col-md-4 pg-news__head__bot leftpadding-md-10">
                                    <?
                                    foreach ($new_hot1 as $item) { ?>
                                        <div class="news">
                                            <div class="news__thumbnail">
                                                <a href="">
                                                    <img class="img-fit lazy " src="<?= $item->img ?>" alt="">
                                                </a>

                                            </div>
                                            <h3 class="news__title">
                                                <a href=""><?= $item->title ?>.</a>
                                            </h3>
                                        </div>

                                    <? } ?>

                                </div>
                            </div>
                        </div>
                        <div class="pg-news__list">
                            <div class="news_pag"></div>
<!--                            <div id="listitemnews">-->
<!--                                <div class="container">-->
<!--                                    <div class="row">-->
<!---->
<!--                                        <div class="line">-->
<!---->
<!--                                        </div>-->
<!---->
<!--                                        <div class="news media">-->
<!--                                            <div class="media-left news__thumbnail nomargin">-->
<!--                                                <a href="">-->
<!--                                                    <img class="img-fit lazy "-->
<!--                                                         src="https://wemoney.vn/upload/posts/uzq1564023357.jpg" alt="">-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                            <div class="media-body">-->
<!--                                                <h3 class="news__title fw-4 fs-16">-->
<!--                                                    <a href="">-->
<!--                                                        Lưu ý quan trọng gì người mua không thể bỏ qua khi vay mua ô tô-->
<!--                                                        trả góp.-->
<!--                                                    </a>-->
<!--                                                </h3>-->
<!--                                                <p class="news__time text-gray-lighter fw-3 mb-2">02/02/2020 04:16</p>-->
<!--                                                <p class="news__lead text-gray-light mb-0">-->
<!--                                                    Đểsở hữu một chiếc xe ô tô trongthời gian ngắn là một điều không dễ-->
<!--                                                    dàng.-->
<!--                                                    Tuy nhiên, nếu người mua cân nhắc kỹ các lưu ý,-->
<!--                                                    thủ tục khi vay mua ô tô trả góp thì giao dịch này hoàn toàn không-->
<!--                                                    khó để thực hiện thành công.-->
<!--                                                </p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                            <nav class="d-flex justify-content-between pagination_box">
                                <ul class="pagination pagination-sm mb-0 mr-3">
                                    <li class="page-item page-item--prev d-flex">

                                    </li>
                                    <li class="page-item d-flex align-items-center">
                                        <div class="px-3 text-nowrap">
                                            <span> 1</span>
                                            of 5
                                        </div>
                                    </li>
                                    <li class="page-item page-item--next d-flex">
                                        <a id="prev" class="page-link">
                                            >>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="posts_aside col-md-3 noleftpadding">
                    <div class="bg-white faq_aside menu_aside">
                        <h3 class="text-uppercase text-center t300">Chủ đề được quan tâm</h3>
                        <hr class="nobottommargin">
                        <ul class="list-v nomargin">
                            <li class="list-v__item">
                                <a href="">
                                    <i class="fas fa-caret-right" aria-hidden="true"></i>
                                    Kiến thức vay tín chấp
                                </a>
                            </li>
                            <li class="list-v__item">
                                <a href="">
                                    <i class="fas fa-caret-right" aria-hidden="true"></i>
                                    Kiến thức vay thế chấp
                                </a>
                            </li>
                            <li class="list-v__item">
                                <a href="">
                                    <i class="fas fa-caret-right" aria-hidden="true"></i>
                                    Kiến thức vay vốn
                                </a>
                            </li>
                            <li class="list-v__item">
                                <a href="">
                                    <i class="fas fa-caret-right" aria-hidden="true"></i>
                                    Kiến thức vay trả góp
                                </a>
                            </li>
                            <li class="list-v__item">
                                <a href="">
                                    <i class="fas fa-caret-right" aria-hidden="true"></i>
                                    Kiến thức vay tiêu dùng
                                </a>
                            </li>
                            <li class="list-v__item">
                                <a href="">
                                    <i class="fas fa-caret-right" aria-hidden="true"></i>
                                    Kiến thức vay mua nhà
                                </a>
                            </li>
                            <li class="list-v__item">
                                <a href="">
                                    <i class="fas fa-caret-right" aria-hidden="true"></i>
                                    Kiến thức vay mua xe
                                </a>
                            </li>
                            <li class="list-v__item">
                                <a href="">
                                    <i class="fas fa-caret-right" aria-hidden="true"></i>
                                    Kiến thức vay vốn
                                </a>
                            </li>
                            <li class="list-v__item">
                                <a href="">
                                    <i class="fas fa-caret-right" aria-hidden="true"></i>
                                    Bản tin lãi suất
                                </a>
                            </li>
                            <?
                            foreach ($key_words as $item) {
                                echo $item->name . '<br>';
                            }
                            ?>


                        </ul>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <div class="sliders">
        <div class="container">
            <div class="row">
                <div class="box-sliders text-center">
                    <h3 class="title-gen">Các sản phẩm vay</h3>
                    <div id="sliders-home" class="swiper-container swiper-container-horizontal">
                        <ul class="swiper-wrapper service-loan">
                            <li class="swiper-slide swiper-slide-duplicate">
                                <a href="" class="icon">
                                    <i class="fas fa-file-invoice" aria-hidden="true"></i>
                                </a>
                                <a href="">Vay theo hóa đơn điện nước</a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate">
                                <a href="" class="icon">
                                    <i class="fas fa-car" aria-hidden="true"></i>
                                </a>
                                <a href="">Vay theo đăng kí ô tô</a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate">
                                <a href="" class="icon">
                                    <i class="fas fa-home" aria-hidden="true"></i>
                                </a>
                                <a href="">Vay theo sổ hộ khẩu</a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate">
                                <a href="" class="icon">
                                    <i class="fas fa-motorcycle" aria-hidden="true"></i>
                                </a>
                                <a href="">Vay theo đăng ký xe máy</a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate">
                                <a href="" class="icon">
                                    <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                                </a>
                                <a href="">Vay theo Icloud iphone</a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate">
                                <a href="" class="icon">
                                    <i class="fas fa-hand-holding-usd" aria-hidden="true"></i>
                                </a>
                                <a href="">Vay trả góp theo ngày</a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate">
                                <a href="" class="icon">
                                    <i class="fas fa-user-graduate" aria-hidden="true"></i>
                                </a>
                                <a href="">Vay sinh viên</a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate">
                                <a href="" class="icon">
                                    <i class="fas fa-laptop" aria-hidden="true"></i>
                                </a>
                                <a href="/vay-theo-may-tinh" title="Vay theo máy tính">Vay theo<br>máy tính</a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate">
                                <a href="" class="icon">
                                    <i class="fas fa-gem" aria-hidden="true"></i>
                                </a>
                                <a href="/vay-theo-trang-suc" title="Vay theo trang sức">Vay theo<br>trang sức</a></li>


                        </ul>
                    </div>
                    <div class="swiper-arrows">
                        <div id="wm-slider-home__next"></div>
                        <div id="wm-slider-home__prev"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<script>

    var page = 0;
    $('#prev').click(function () {
        page += 1;
        console.log(page);

        $.ajax({
            url: "<?= url("ajax.get_news")?>",
            method: "GET",
            data: {
                page: page
            },
            success: function (data) {
                 let news= JSON.parse(data)
                news = news.data
                console.log(news)
                let html = '';
                 $.each(news, function (index, value) {
                     // console.log(value.content )
                     html = '<div id="listitemnews">\n' +
                         '                                <div class="container">\n' +
                         '                                    <div class="row">\n' +
                         '\n' +
                         '                                        <div class="line">\n' +
                         '\n' +
                         '                                        </div>\n' +
                         '\n' +
                         '                                        <div class="news media">\n' +
                         '                                            <div class="media-left news__thumbnail nomargin">\n' +
                         '                                                <a href="">\n' +
                         '                                                    <img class="img-fit lazy "\n' +
                         '                                                         src="'+value.img+'" alt="">\n' +
                         '                                                </a>\n' +
                         '                                            </div>\n' +
                         '                                            <div class="media-body">\n' +
                         '                                                <h3 class="news__title fw-4 fs-16">\n' +
                         '                                                    <a href="">\n' +
                         '                                                        '+value.title+'\n' +
                         '                                                    </a>\n' +
                         '                                                </h3>\n' +
                         '                                                <p class="news__time text-gray-lighter fw-3 mb-2">'+value.time+'</p>\n' +
                         '                                                <p class="news__lead text-gray-light mb-0">\n' +
                         '                                                   '+value.teaser+'\n' +
                         '                                                </p>\n' +
                         '                                            </div>\n' +
                         '                                        </div>\n' +
                         '                                    </div>\n' +
                         '                                </div>\n' +
                         '                            </div>';

                     $('.news_pag').append(html);
                 })

            }
        });
    })


</script>

