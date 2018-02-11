
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113806697-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-113806697-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="NANJ,NANJCOIN,なんJ,なんJコイン,仮想通貨">
    <meta name="description" content="NANJは5ch上の「なんでも実況J板」、通称「なんJ」発祥のEthereumトークンです。なんJの有志により開発、運営されています。">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:title" content="NANJ COIN">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://nanjcoin.com">
    <meta property="og:image" content="http://nanjcoin.com/og_img.jpg">
    <meta property="og:site_name" content="NANJ COIN">
    <meta property="og:description" content="仮想通貨NANJCOINのオフィシャルサイトです">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@nanjcoin">
    <meta name="twitter:title" content="仮想通貨NANJCOIN">
    <meta name="twitter:url" content="https://twitter.com/nanjcoin?lang=ja">
    <meta name="twitter:description" content="仮想通貨NANJCOINに関するニュースを配信しています。">
    <meta name="twitter:image" content="https://pbs.twimg.com/profile_images/953930012725362688/e_1u74_u_400x400.jpg">
    <meta name="google-site-verification" content="HBXkITJ9F1LFI1Ki6nfhnZ8FjpyNLqhg-WoquAj_kIs" />
    <title>{{__('message.coinName')}}</title>
    <link rel="canonical" href="http://nanjcoin.com/">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Sarpanch">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
    <div id="header">
        <div id="headerVideo">
            <div class="video">
                <video loop muted playsinline autoplay></video>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-7 col-9">
                    <h1><img src="img/header_img_01.png" alt="NANJ"><span>{{__('message.coinName')}}</span></h1>
                    <ul class="nav d-none d-md-block">
                        <li class="btn_top">{{__('message.top')}}</li>
                        <li class="btn_nav">{{__('message.about')}}</li>
                        <li class="btn_nav">{{__('message.roadMap')}}</li>
                        <li class="btn_nav">{{__('message.whitePaper')}}</li>
                        <li class="btn_nav">{{__('message.wallet')}}</li>
                        <li class="btn_nav">{{__('message.exchanges')}}</li>
                        <li class="btn_nav">{{__('message.community')}}</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-5 col-3 language">
                    <p>
                        <a href="/ja/">
                            <span class="text">日本語</span><span class="image">
                                <img src="img/language_img_01.png" alt="日本語">
                            </span>
                        </a>
                    </p>
                    <ul>
                        {{--<li><a href="/ja/"><span class="text">日本語</span><span class="image"><img src="img/language_img_01.png" alt="日本語"></span></a></li>--}}
                        {{--<li><a href="/ja/"><span class="text">日本語</span><span class="image"><img src="img/language_img_01.png" alt="日本語"></span></a></li>--}}
                        {{--<li><a href="/ja/"><span class="text">日本語</span><span class="image"><img src="img/language_img_01.png" alt="日本語"></span></a></li>--}}
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 fv">
                    <div class="text">
                        <h2>{{__('message.coinName')}}</h2>
                        <p class="p01">{!!__('message.nanjMean') !!}</p>
                        <p class="p02">{!!__('message.nanjMean2') !!}</p>
                    </div>
                    <div class="image"><img src="img/header_img_02.png" alt="NANJ COIN"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="fadeInContents" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-4">
                    <h2>{{__('message.about')}}</h2>
                    <p class="p01">{{__('message.whatIsNanJDescription')}}</p>
                    <div class="row row01">
                        <div class="col-md-6 detail">
                            <h3>{{__('message.tokenDetail')}}</h3>
                            <div class="clearfix">
                                <p class="image"><img src="img/about_img_01.png" alt="NANJ"></p>
                                <ul>
                                    <li>{{__('message.tokenName')}}</li>
                                    <li>{{__('message.tokenSymbol')}}</li>
                                    <li>{{__('message.issueNumber')}}</li>
                                </ul>
                            </div>
                            <p>{{__('message.whatIsNanJDescription2')}}</p>
                        </div>
                        <div class="col-md-6 allocation">
                            <h3>{{__('message.tokenAssign')}}</h3>
                            <div class="glaph">
                                <div class="row">
                                    <div class="col-xl-5 offset-xl-0 col-lg-6 offset-lg-3 col-sm-4 offset-sm-1 col-6 offset-3" id="aboutGlaphWrapper">
                                        <canvas id="aboutGlaph"></canvas>
                                    </div>
                                    <div class="col-xl-7 offset-xl-0 col-lg-10 offset-lg-1 col-sm-7 offset-sm-0">
                                        <ul>
                                            <li class="li01">{{__('message.preSeason')}}...50％</li>
                                            <li class="li02">{{__('message.operation')}}...<strong>25％</strong></li>
                                            <li class="li03">{{__('message.lockUp')}}...10％</li>
                                            <li class="li04">{{__('message.advertisementFee')}}...15％</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>{!! __('message.assignDescription') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fadeInContents" id="roadmap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{__('message.roadMap')}}</h2>
                    <p class="p01">{{__('message.roadMapDescription')}}</p>
                    <p><img class="mw-100 d-none d-lg-block" src="img/roadmap_img_01.png" alt="ROADMAP"><img class="mw-100 d-md-block d-lg-none" src="img/roadmap_img_01_sp.png" alt="ROADMAP"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="fadeInContents" id="group01">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" id="whitepaper">
                    <h2>{{__('message.whitePaper')}}</h2>
                    <p>
                        <!--: a(href='' target='_blank')--><img src="img/whitepaper_btn_01_da.png" alt="DOWNLOAD">
                    </p>
                </div>
                <div class="col-lg-4" id="wallet">
                    <h2>{{__('message.wallet')}}</h2>
                    <p><a href="https://www.myetherwallet.com" target="_blank"><img src="img/wallet_btn_01.png" alt="MyEtherWallet"></a></p>
                    <p>{!! __('message.contractAddress') !!}<br>{{__('message.tokenSymbol')}}　{{__('message.numberOfDigits')}}</p>
                </div>
                <div class="col-lg-4" id="exchanges">
                    <h2>{{__('message.exchanges')}}</h2>
                    <p>Coming<br>Soon!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="fadeInContents" id="community">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{__('message.community')}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="row">
                        <div class="col-sm-4 twitter"><a href="https://twitter.com/nanjcoin" target="_blank">
                                <p><img src="img/comunity_btn_01.png" alt="twitter"></p>
                                <p>twitter</p></a></div>
                        <div class="col-sm-4 discord"><a href="https://discord.gg/xa94m8F" target="_blank">
                                <p><img src="img/comunity_btn_02.png" alt="discord"></p>
                                <p>discord</p></a></div>
                        <div class="col-sm-4 github"><a href="https://github.com/NANJ-COIN" target="_blank">
                                <p><img src="img/comunity_btn_03.png" alt="GitHub"></p>
                                <p>GitHub</p></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="fadeInContents" id="airdrop">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12">--}}
                    {{--<div class="bg">--}}
                        {{--<h2>AIR DROP</h2>--}}
                        {{--<p class="p01">下記フォームにETHウォレットアドレスを入力してください。今なら30,000NANJプレゼント！</p>--}}
                        {{--<form action="/airdrop/" method="POST">--}}
                            {{--<div>--}}
                                {{--<input class="field" type="text" name="address" placeholder="Enter your ETH wallet address">--}}
                                {{--<input class="button" type="submit" value="SUBMIT">--}}
                            {{--</div>--}}
                        {{--</form>--}}
                        {{--<div class="status">--}}
                            {{--<p class="thanks">送信しました。</p>--}}
                            {{--<p class="error">正しいアドレスを入力してください。<br>0xから始まる42桁です。</p>--}}
                            {{--<p class="error02">送信に失敗しました。</p>--}}
                        {{--</div>--}}
                        {{--<p class="p02">※MyEtherWalletなどERC20/ERC223トークンに対応したウォレットのアドレスを記入してください<br>取引所のウォレットアドレスを記入しても受け取ることができませんのでご注意ください</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</main>
<footer>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>© ALL RIGHTS RESERVED. NANJ COIN 2018</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>