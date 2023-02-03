<footer id="footer" class="footer" data-tm-bg-img="{{ asset('assets/images/footer-bg.png') }}">
    <div class="footer-widget-area">
        <div class="container pt-90 pb-40">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="widget tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                        <div class="description" style="font-size:16px; font-weight:bold; font-family:Time News Roman;">
                            @if (session('key') == 'jp')
                                ミャンマーで発行されたリクルートライセンスを保有する当社。
                            @else
                                Our company which holds the recruitment license issued in Myanmar.
                            @endif
                        </div>
                        <ul class="mb-30">
                            <li class="contact-phone">
                                <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
                                <div class="text"><a href="tel:+959 793 222 113">+959 793 222 113</a></div>
                            </li>
                            <li class="contact-email">
                                <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
                                <div class="text"><a href="mailto:info@newgoldenway.com">info@newgoldenway.com</a>
                                </div>
                            </li>
                            <li class="contact-email">
                                <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
                                <div class="text"><a
                                        href="mailto:info-jp@newgoldenway.com">info-jp@newgoldenway.com</a>
                                </div>
                            </li>
                            <li class="contact-website">
                                <div class="icon"><i class="flaticon-contact-035-website"></i></div>
                                <div class="text">
                                    <a target="_blank"
                                        href="https://www.google.com/maps?ll=16.883686,96.176413&z=12&t=m&hl=en&gl=MM&mapclient=embed&cid=511543474735166079">
                                        No.A-4, Room(804), Bo Min Yaung Housing, (42)Quater,North Dagon Tsp, Yangon,
                                        Myanmar.</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title line-bottom">Useful Links</h4>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">
                                    @if (session('key') == 'jp')
                                        ホームページ
                                    @else
                                        Home
                                    @endif
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cv.index') }}">
                                    @if (session('key') == 'jp')
                                        履歴書を送信
                                    @else
                                        Submit CV
                                    @endif
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('employer.index') }}">
                                    @if (session('key') == 'jp')
                                        雇用者フォーム
                                    @else
                                        Employer Form
                                    @endif
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('activities.index') }}">
                                    @if (session('key') == 'jp')
                                        私たちの活動
                                    @else
                                        Activities
                                    @endif
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('contact.index') }}">
                                    @if (session('key') == 'jp')
                                        お問い合わせ
                                    @else
                                        Contact Us
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-xl-3">
                    <h4 class="widget-title line-bottom" style="color: white;">
                        New Golden Way Co.,Ltd
                        <br>
                        Oversea Employment Agency
                    </h4>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                        nonce="PosYNXjc"></script>
                    <br>
                    <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100086475512628"
                        data-tabs="timeline" data-width="250" data-height="200" data-small-header="false"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/profile.php?id=100086475512628"
                            class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/profile.php?id=100086475512628">Facebook</a>
                        </blockquote>
                    </div>
                </div>


                <div class="col-md-3 col-lg-3 col-xl-3">
                    <h4 class="widget-title line-bottom" style="color: white">
                        Oriental Japanese Language Centre
                    </h4>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                        nonce="PosYNXjc"></script>
                    <br>
                    <div class="fb-page" data-href="https://www.facebook.com/oijcom" data-tabs="timeline"
                        data-width="250" data-height="200" data-small-header="false" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/oijcom" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/oijcom">Facebook</a>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="widget">
                        <h5 class="widget-title line-bottom mb-10">Connect With Us</h5>
                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-rounded clearfix">
                            <li>
                                <a class="social-link" href="https://www.facebook.com/profile.php?id=100086475512628">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a class="social-link" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="social-link" href="#">
                                    <i class="fab fa-youtube-square"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" data-tm-bg-color="#2A2A2A">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-sm-12">
                        <div class="footer-paragraph">
                            <center>
                                Copyright {{ now()->year }} New Golden Way Co.,Ltd | All Rights Reserved
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
