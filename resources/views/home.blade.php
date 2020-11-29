<!DOCTYPE html>
<html lang="en" class="no-js">
@include('layouts/head')

<body>
    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- /Loading animation -->

    <div id="main-container">

        <!-- Header -->
        <header id="header" class="header">
            <div class="container clearfix">
                <div class="logo-container">
                    <div class="header-logo">Huy <span class="main-color">&amp;</span> Linh</div>
                </div>
                @if($data['id'] == 1)
                <div class="header-date mobile-hidden">
                    <p>Thứ bảy, 12 <span class="main-color">Tháng 12</span>, 2020</p>
                </div>
                @else
                <div class="header-date mobile-hidden">
                    <p>Thứ bảy, 19 <span class="main-color">Tháng 12</span>, 2020</p>
                </div>
                @endif
                <a class="menu-toggle mobile-visible">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </header>
        <!-- /Header -->

        <!-- Site Navigation -->
        <nav class="main-nav mobile-menu-hide">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#home">XIN CHÀO</a>
                    </li>
                    <li>
                        <a href="#wedding-day">THỜI GIAN</a>
                    </li>
                    <li>
                        <a href="#events">ĐỊA CHỈ</a>
                    </li>
                    <li>
                        <a href="#gallery">ẢNH</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /Site Navigation -->

        <div class="sections">
            <!-- Home Section -->
            <section id="home" class="home-section clearfix">
                <div id="hs-image-block" class="hs-image-block"
                    style="background-image: url({{ asset('images/main_photo_1.jpg') }}); background-attachment: fixed; background-position: 50% 0;"
                    data-stellar-background-ratio="0.3">
                    <div class="hs-mask"></div>
                </div>

                <div class="hs-main-content container">
                    <div class="hs-section-title">
                        <h2 style="color:white">Trân trọng kính mời </h2>
                        <h1>{!!$data['name']!!}</h1>
                        <h2 style="color:white">Đến dự buổi tiệc chung vui cùng chúng tôi
                    </div>

                    <div class="about-us clearfix">
                        <div class="about-us-block first-block">
                            <div class="top-block">
                                <div class="name">
                                    <h2>Lê Huy</h2>
                                    <p>Trưởng nam</p>
                                </div>

                                <div class="photo">
                                    <img src="{{ asset('images/photo_1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="heart">
                            <img src="{{ asset('images/heart_img.png') }}" alt="">
                        </div>

                        <div class="about-us-block second-block">
                            <div class="top-block">
                                <div class="name">
                                    <h2>Mỹ Linh</h2>
                                    <p>Trưởng nữ</p>
                                </div>

                                <div class="photo">
                                    <img src="{{ asset('images/photo_2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Home Section -->

            <!-- Our Day Section -->
            <section id="wedding-day" class="wedding-day section-boxed">
                <div class="container">
                    @if($data['id'] == 1)
                    <div class="section-title">
                        <h2>Hôn lễ được cử hành vào lúc <BR> <span class="main-color">Thứ bảy, 12 Tháng 12, 2020</span>
                        </h2>
                        <h2>Tại <span class="main-color">Thôn Khe Ngái, xã Đoàn Kết, huyện Vân Đồn, tỉnh Quảng
                                Ninh</span></h2>
                    </div>
                    <!-- Counter -->
                    <div id="count1" class="count">
                        <!-- You can edit HTML code of this block in the js/main.js -->
                    </div>
                    <!-- Counter -->
                    @else
                    <div class="section-title">
                        <h2>Hôn lễ được cử hành vào lúc <BR> <span class="main-color">Thứ bảy, 19 Tháng 12, 2020</span>
                        </h2>
                        <h2>Tại <span class="main-color">Diamond Place Sảnh 1, Số 5
                                Tôn Đức Thắng , Tp Quảng Ngãi</span></h2>
                    </div>
                    <!-- Counter -->
                    <div id="count2" class="count">
                        <!-- You can edit HTML code of this block in the js/main.js -->
                    </div>
                    <!-- Counter -->
                    @endif

                </div>
            </section>
            <!-- /Our Day Section -->


            <!-- Wedding Events Section -->
            <section id="events" class="our-story section-boxed">
                <div class="container">
                    <div class="section-title">
                        <h2>Sự hiện diện của bạn là niềm vinh dự cho gia đình chúng tôi</h2>
                    </div>

                    <div class="row">
                        <!-- Ceremony Block -->
                        <div class="col-md-6 event-block">
                            <div class="event-photo scale-image-effect">
                                <img src="{{ asset('images/photo_the_ceremony.jpg') }}" alt="">
                            </div>

                            <div class="event-title">
                                <h3>Tiệc nhà gái</h3>
                            </div>

                            <div class="event-info">
                                <div class="event-date"><i class="fa fa-calendar"></i> Thứ bảy, 12 Tháng 12, 2020</div>
                                <div class="event-time"><i class="fa fa-clock-o"></i> 11:00 - 13:00</div>
                                <div class="event-address"><i class="fa fa-map-marker"></i> Thôn Khe Ngái, xã Đoàn Kết,
                                    huyện Vân Đồn, tỉnh Quảng Ninh</div>
                                <a class="button small-button lightbox mfp-iframe"
                                    href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465.3636884169099!2d107.43112850000001!3d21.076276200000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314b056ba35310eb%3A0x215162504f008f30!2sPomPomBBQ!5e0!3m2!1svi!2shk!4v1606651459026!5m2!1svi!2shk"
                                    title="Tiệc nhà gái">Địa chỉ</a>
                                <!-- Do not change 'https://maps.google.com/maps?q=' in the href, simply change the address. Remake "221B Baker Street, London, United Kingdom +", as example, in this form: "221B+Baker+Street,+London,+United+Kingdom". -->
                            </div>
                        </div>
                        <!-- /Ceremony Block -->

                        <!-- Party Block -->
                        <div class="col-md-6 event-block">
                            <div class="event-photo scale-image-effect">
                                <img src="{{ asset('images/photo_the_party.jpg') }}" alt="">
                            </div>

                            <div class="event-title">
                                <h3>Tiệc nhà trai</h3>
                            </div>

                            <div class="event-info">
                                <div class="event-date"><i class="fa fa-calendar"></i> Thứ bảy, 19 Tháng 12, 2020</div>
                                <div class="event-time"><i class="fa fa-clock-o"></i> 11:00 - 13:00</div>
                                <div class="event-address"><i class="fa fa-map-marker"></i> Diamond Place Sảnh 1, Số 5
                                    Tôn Đức Thắng , Tp Quảng Ngãi</div>
                                <a class="button small-button lightbox mfp-iframe"
                                    href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15405.969384876433!2d108.7875935!3d15.1312822!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa68b1fa1fea5a1d4!2sDiamond%20Palace!5e0!3m2!1svi!2shk!4v1606651839176!5m2!1svi!2shk"
                                    title="Tiệc nhà trai">Địa chỉ</a>
                                <!-- Do not change 'https://maps.google.com/maps?q=' in the href, simply change the address. Remake "2 Baker Street, London, United Kingdom +", as example, in this form: "2+Baker+Street,+London,+United+Kingdom". -->
                            </div>
                        </div>
                        <!-- /Party Block -->
                    </div>
                </div>
            </section>
            <!-- /Wedding Events Section -->

            <!-- Gallery Section -->
            <section id="gallery" class="gallery section-boxed section-bg-color">
                <div class="container">
                    <div class="section-title">
                        <h2>Chùm ảnh đẹp</h2>
                    </div>

                    <!-- Gallery Items -->
                    <div class="row gallery-grid">
                        <div class="col-sm-6 col-md-4 gallery-item">
                            <a href="{{ asset('images/gallery_photo_1.jpg') }}">
                                <img src="{{ asset('images/gallery_photo_1.jpg') }}" alt="">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 gallery-item">
                            <a href="{{ asset('images/gallery_photo_2.jpg') }}">
                                <img src="{{ asset('images/gallery_photo_2.jpg') }}" alt="">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 gallery-item">
                            <a href="{{ asset('images/gallery_photo_3.jpg') }}">
                                <img src="{{ asset('images/gallery_photo_3.jpg') }}" alt="">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 gallery-item">
                            <a href="{{ asset('images/gallery_photo_4.jpg') }}">
                                <img src="{{ asset('images/gallery_photo_4.jpg') }}" alt="">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 gallery-item">
                            <a href="{{ asset('images/gallery_photo_5.jpg') }}">
                                <img src="{{ asset('images/gallery_photo_5.jpg') }}" alt="">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 gallery-item">
                            <a href="{{ asset('images/gallery_photo_6.jpg') }}">
                                <img src="{{ asset('images/gallery_photo_6.jpg') }}" alt="">
                                <div class="mask"></div>
                            </a>
                        </div>
                    </div>
                    <!-- /Gallery Items -->
                </div>
            </section>
            <!-- /Gallery Section -->

            <!-- Footer (Thank You block) -->
            <footer id="thanks" class="footer">
                <div id="footer-image-block" class="footer-image-block"
                    style="background-image: url({{ asset('images/footer_photo.jpg') }}); background-attachment: fixed; background-position: 50% 410.975px;"
                    data-stellar-background-ratio="0.3">
                    <div class="footer-mask"></div>
                </div>

                <div class="footer-title">
                    <h2>Trân trọng cảm ơn!</h2>
                </div>
            </footer>
            <!-- /Footer (Thank You block) -->

        </div>

    </div>
    <!-- /Main Container -->

    @include('layouts/script')
</body>

</html>
