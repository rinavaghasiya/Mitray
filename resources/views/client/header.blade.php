<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css">
<link rel="stylesheet" href="{{URL::asset('assests/css/product.css')}}">
<link rel="stylesheet" href="{{URL::asset('assests/css/style.css')}}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#7796a8">
    <meta name="format-detection" content="telephone=no">
    <link rel="canonical" href="{{url('/')}}">
    <script src="{{URL::asset('assests/js/vendor8a77.js')}}"></script>
    <link rel="shortcut icon" href="{{URL::asset('assests/img/Fevicon_32x32e5de.png')}}" type="image/png">
    <title> Mitray Studio </title>
    <meta property="og:site_name" content="Aveda Sectioned Shopify Theme">
    <meta property="og:url" content="https://avedafashion.myshopify.com/">
    <meta property="og:title" content="Aveda Sectioned Shopify Theme">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Aveda Sectioned Shopify Theme">
    <meta name="twitter:site" content="@/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Aveda Sectioned Shopify Theme">
    <meta name="twitter:description" content="Aveda Sectioned Shopify Theme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Verdana">
    <style data-shopify>
        :root {
            --brand-secondary: #5a0c2c;
            --brand-secondary-modify: rgba(110, 108, 60, 0.3);
            --breadcrumb-color: #000;
            --password-color: #ffffff;
            --mainbgcolor: #f5f5f5;
            --button-bg-color: #5a0c2c;
            --button-text-color: #ffffff;
            --button-bg-hover-color: #232323;
            --button-bg-hover-opacity-color: rgba(35, 35, 35, 0.65);
            --button-text-hover-color: #ffffff;
            --product-btn-bg-color: #ffffff;
            --product-icon-color: #222222;
            --product-btn-bg-hover-color: #222222;
            --product-icon-hover-color: #ffffff;
            --navbar-background-color: #151515;
            --navbar-text-color: #ffffff;
            --navbar-text-opacity-color: rgba(255, 255, 255, 0.2);
            --header-icon-color: #151515;
            --header-icon-hover-color: #5a0c2c;
            --menu-bg-color: #ffffff;
            --menu-bg-opacity-color: rgba(255, 255, 255, 0.9);
            --menu-text-color: #222222;
            --menu-text-hover-color: #5a0c2c;
            --footer-bg-color: #f4f5f6;
            --footer-heading-color: #222222;
            --footer-text-color: #666666;
            --footer-text-opacity-color: rgba(102, 102, 102, 0.15);
            --footer-text-hover-color: #5a0c2c;
            --footer-bottom-bg-color: #5a0c2c;
            --footer-bottom-text-color: #ffffff;
            --primary-font: Poppins;
        }
    </style>

    <link href="{{URL::asset('assests/css/includesebe3.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{URL::asset('assests/css/theme0990.css')}}" rel="stylesheet" type="text/css" media="all" />


    <script>
        window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');
    </script>
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/5405671479/digital_wallets/dialog">
    <link rel="alternate" hreflang="x-default" href="{{url('/')}}">
    <link rel="alternate" hreflang="ar" href="ar.html">
    <link rel="alternate" hreflang="en" href="{{url('/')}}">
    <link rel="alternate" hreflang="es" href="es.html">
    <link href="https://monorail-edge.shopifysvc.com/" rel="dns-prefetch">
    <script id="shopify-features" type="application/json">
        {
            "accessToken": "f38de5e48b1530e48a523b262c91da74",
            "betas": ["rich-media-storefront-analytics"],
            "domain": "avedafashion.myshopify.com",
            "predictiveSearch": true,
            "shopId": 5405671479,
            "smart_payment_buttons_url": "assests/js/spb.en.js",
            "dynamic_checkout_cart_url": "assests/js/dynamic-checkout-cart.en.js",
            "locale": "en"
        }
    </script>
    <script>
        (function() {
            if ("sendBeacon" in navigator && "performance" in window) {
                var session_token = document.cookie.match(/_shopify_s=([^;]*)/);

                function handle_abandonment_event(e) {
                    var entries = performance.getEntries().filter(function(entry) {
                        return /monorail-edge.shopifysvc.com/.test(entry.name);
                    });
                    if (!window.abandonment_tracked && entries.length === 0) {
                        window.abandonment_tracked = true;
                        var currentMs = Date.now();
                        var navigation_start = performance.timing.navigationStart;
                        var payload = {
                            shop_id: 5405671479,
                            url: window.location.href,
                            navigation_start,
                            duration: currentMs - navigation_start,
                            session_token: session_token && session_token.length === 2 ? session_token[1] : "",
                            page_type: "index"
                        };
                        window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({
                            schema_id: "online_store_buyer_site_abandonment/1.1",
                            payload: payload,
                            metadata: {
                                event_created_at_ms: currentMs,
                                event_sent_at_ms: currentMs
                            }
                        }));
                    }
                }
                window.addEventListener('pagehide', handle_abandonment_event);
            }
        }());
    </script>
    <script>
        var Shopify = Shopify || {};
        Shopify.shop = "avedafashion.myshopify.com";
        Shopify.locale = "en";
        Shopify.currency = {
            "active": "USD",
            "rate": "1.0"
        };
        Shopify.country = "US";
        Shopify.theme = {
            "name": "AVEDA1",
            "id": 120353194039,
            "theme_store_id": null,
            "role": "main"
        };
        Shopify.theme.handle = "null";
        Shopify.theme.style = {
            "id": null,
            "handle": null
        };
        Shopify.cdnHost = "cdn.shopify.com";
    </script>
    <script type="module">
        ! function(o) {
            (o.Shopify = o.Shopify || {}).modules = !0
        }(window);
    </script>
    <script>
        ! function(o) {
            function n() {
                var o = [];

                function n() {
                    o.push(Array.prototype.slice.apply(arguments))
                }
                return n.q = o, n
            }
            var t = o.Shopify = o.Shopify || {};
            t.loadFeatures = n(), t.autoloadFeatures = n()
        }(window);
    </script>
    <!-- <script>
        (function() {
            function asyncLoad() {
                var urls = ["{{URL::asset('assests/js/spr.js')}}", "{{URL::asset('assests/js/script.js')}}"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            if (window.attachEvent) {
                window.attachEvent('onload', asyncLoad);
            } else {
                window.addEventListener('load', asyncLoad, false);
            }
        })();
    </script> -->
    <script id="__st">
        var __st = {
            "a": 5405671479,
            "offset": -14400,
            "reqid": "00bd7424-4d23-4782-90b2-d0c3b8c0e666",
            "pageurl": "avedafashion.myshopify.com\/",
            "u": "5be8f46dce3c",
            "p": "home"
        };
    </script>
    <script>
        window.ShopifyPaypalV4VisibilityTracking = true;
    </script>
    <script>
        window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = 'USD';
        var meta = {
            "page": {
                "pageType": "home"
            },
            "evids": {
                "pv": "Page View",
                "vprd": "Viewed Product",
                "ps": "Performed Search"
            }
        };
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }
    </script>
    <script>
        window.ShopifyAnalytics.merchantGoogleAnalytics = function() {

        };
    </script>
    <script class="analytics">
        (function() {
            var customDocumentWrite = function(content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.$) {
                    jquery = window.Checkout.$;
                }

                if (jquery) {
                    jquery('body').append(content);
                }
            };

            var hasLoggedConversion = function(token) {
                if (token) {
                    return document.cookie.indexOf('loggedConversion=' + token) !== -1;
                }
                return false;
            }

            var setCookieIfConversion = function(token) {
                if (token) {
                    var twoMonthsFromNow = new Date(Date.now());
                    twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                    document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
                }
            }

            var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = [
                'identify',
                'page',
                'ready',
                'track',
                'trackForm',
                'trackLink'
            ];
            trekkie.factory = function(method) {
                return function() {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function(config) {
                trekkie.config = config || {};
                trekkie.config.initialDocumentCookie = document.cookie;
                var first = document.getElementsByTagName('script')[0];
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onerror = function(e) {
                    var scriptFallback = document.createElement('script');
                    scriptFallback.type = 'text/javascript';
                    scriptFallback.onerror = function(error) {
                        var Monorail = {
                            produce: function produce(monorailDomain, schemaId, payload) {
                                var currentMs = new Date().getTime();
                                var event = {
                                    schema_id: schemaId,
                                    payload: payload,
                                    metadata: {
                                        event_created_at_ms: currentMs,
                                        event_sent_at_ms: currentMs
                                    }
                                };
                                return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
                            },
                            sendRequest: function sendRequest(endpointUrl, payload) {
                                // Try the sendBeacon API
                                if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
                                    var blobData = new window.Blob([payload], {
                                        type: 'text/plain'
                                    });

                                    if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                                        return true;
                                    } // sendBeacon was not successful

                                } // XHR beacon   

                                var xhr = new XMLHttpRequest();

                                try {
                                    xhr.open('POST.html', endpointUrl);
                                    xhr.setRequestHeader('Content-Type', 'text/plain');
                                    xhr.send(payload);
                                } catch (e) {
                                    console.log(e);
                                }

                                return false;
                            },
                            isIos12: function isIos12() {
                                return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
                            }
                        };
                        Monorail.produce('monorail-edge.shopifysvc.com',
                            'trekkie_storefront_load_errors/1.1', {
                                shop_id: 5405671479,
                                theme_id: 120353194039,
                                app_name: "storefront",
                                context_url: window.location.href,
                                source_url: "https://cdn.shopify.com/s/trekkie.storefront.c2e2826f94d6f9f13752e543e281c3573f532d1c.min.js"
                            });

                    };
                    scriptFallback.async = true;
                    scriptFallback.src = "{{URL::asset('assests/js/trekkie.storefront.c2e2826f94d6f9f13752e543e281c3573f532d1c.min.js')}}";
                    first.parentNode.insertBefore(scriptFallback, first);
                };
                script.async = true;
                script.src = "{{URL::asset('assests/js/trekkie.storefront.c2e2826f94d6f9f13752e543e281c3573f532d1c.min.js')}}";
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load({
                "Trekkie": {
                    "appName": "storefront",
                    "development": false,
                    "defaultAttributes": {
                        "shopId": 5405671479,
                        "isMerchantRequest": null,
                        "themeId": 120353194039,
                        "themeCityHash": "8037220368994197513",
                        "contentLanguage": "en",
                        "currency": "USD"
                    },
                    "isServerSideCookieWritingEnabled": true,
                    "expectS2SEventId": true
                },
                "Session Attribution": {},
                "S2S": {
                    "facebookCapiEnabled": false
                }
            });

            var loaded = false;
            trekkie.ready(function() {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;


                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try {
                    window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
                } catch (error) {};
                document.write = originalDocumentWrite;
                (function() {
                    if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
                        return;
                    }
                    window.BOOMR = window.BOOMR || {};
                    window.BOOMR.snippetStart = new Date().getTime();
                    window.BOOMR.snippetExecuted = true;
                    window.BOOMR.snippetVersion = 12;
                    window.BOOMR.application = "storefront-renderer";
                    window.BOOMR.themeName = "Aveda";
                    window.BOOMR.themeVersion = "1.1.1";
                    window.BOOMR.shopId = 5405671479;
                    window.BOOMR.themeId = 120353194039;
                    window.BOOMR.url =
                        "{{URL::asset('assests/js/shopify-boomerang-1.0.0.min.js')}}";
                    var where = document.currentScript || document.getElementsByTagName("script")[0];
                    var parentNode = where.parentNode;
                    var promoted = false;
                    var LOADER_TIMEOUT = 3000;

                    function promote() {
                        if (promoted) {
                            return;
                        }
                        var script = document.createElement("script");
                        script.id = "boomr-scr-as";
                        script.src = window.BOOMR.url;
                        script.async = true;
                        parentNode.appendChild(script);
                        promoted = true;
                    }

                    function iframeLoader(wasFallback) {
                        promoted = true;
                        var dom, bootstrap, iframe, iframeStyle;
                        var doc = document;
                        var win = window;
                        window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
                        bootstrap = function(parent, scriptId) {
                            var script = doc.createElement("script");
                            script.id = scriptId || "boomr-if-as";
                            script.src = window.BOOMR.url;
                            BOOMR_lstart = new Date().getTime();
                            parent = parent || doc.body;
                            parent.appendChild(script);
                        };
                        if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
                            window.BOOMR.snippetMethod = "s";
                            bootstrap(parentNode, "boomr-async");
                            return;
                        }
                        iframe = document.createElement("IFRAME");
                        iframe.src = "about:blank";
                        iframe.title = "";
                        iframe.role = "presentation";
                        iframe.loading = "eager";
                        iframeStyle = (iframe.frameElement || iframe).style;
                        iframeStyle.width = 0;
                        iframeStyle.height = 0;
                        iframeStyle.border = 0;
                        iframeStyle.display = "none";
                        parentNode.appendChild(iframe);
                        try {
                            win = iframe.contentWindow;
                            doc = win.document.open();
                        } catch (e) {
                            dom = document.domain;
                            iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
                            win = iframe.contentWindow;
                            doc = win.document.open();
                        }
                        if (dom) {
                            doc._boomrl = function() {
                                this.domain = dom;
                                bootstrap();
                            };
                            doc.write("<body onload='document._boomrl();'>");
                        } else {
                            win._boomrl = function() {
                                bootstrap();
                            };
                            if (win.addEventListener) {
                                win.addEventListener("load", win._boomrl, false);
                            } else if (win.attachEvent) {
                                win.attachEvent("onload", win._boomrl);
                            }
                        }
                        doc.close();
                    }
                    var link = document.createElement("link");
                    if (link.relList &&
                        typeof link.relList.supports === "function" &&
                        link.relList.supports("preload") &&
                        ("as" in link)) {
                        window.BOOMR.snippetMethod = "p";
                        link.href = window.BOOMR.url;
                        link.rel = "preload";
                        link.as = "script";
                        link.addEventListener("load", promote);
                        link.addEventListener("error", function() {
                            iframeLoader(true);
                        });
                        setTimeout(function() {
                            if (!promoted) {
                                iframeLoader(true);
                            }
                        }, LOADER_TIMEOUT);
                        BOOMR_lstart = new Date().getTime();
                        parentNode.appendChild(link);
                    } else {
                        iframeLoader(false);
                    }

                    function boomerangSaveLoadTime(e) {
                        window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
                    }
                    if (window.addEventListener) {
                        window.addEventListener("load", boomerangSaveLoadTime, false);
                    } else if (window.attachEvent) {
                        window.attachEvent("onload", boomerangSaveLoadTime);
                    }
                    if (document.addEventListener) {
                        document.addEventListener("onBoomerangLoaded", function(e) {
                            e.detail.BOOMR.init({
                                producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
                                ResourceTiming: {
                                    enabled: true,
                                    trackedResourceTypes: ["script", "img", "css"]
                                },
                            });
                            e.detail.BOOMR.t_end = new Date().getTime();
                        });
                    } else if (document.attachEvent) {
                        document.attachEvent("onpropertychange", function(e) {
                            if (!e) e = event;
                            if (e.propertyName === "onBoomerangLoaded") {
                                e.detail.BOOMR.init({
                                    producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
                                    ResourceTiming: {
                                        enabled: true,
                                        trackedResourceTypes: ["script", "img", "css"]
                                    },
                                });
                                e.detail.BOOMR.t_end = new Date().getTime();
                            }
                        });
                    }
                })();


                window.ShopifyAnalytics.lib.page(null, {
                    "pageType": "home"
                });

                var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
                var token = match ? match[1] : undefined;
                if (!hasLoggedConversion(token)) {
                    setCookieIfConversion(token);

                }
            });


            var eventsListenerScript = document.createElement('script');
            eventsListenerScript.async = true;
            eventsListenerScript.src = "{{URL::asset('assests/js/shop_events_listener-eb19870e6f215e4e4acd8067d24ecfcbfee2d96d96aa8607e8fd45edf40eacc6.js')}}";
            document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

        })();
    </script>
    <script>
        ! function(r) {
            r.addEventListener("DOMContentLoaded", function() {
                window.Shopify = window.Shopify || {}, window.Shopify.recaptchaV3 = window.Shopify.recaptchaV3 || {
                    siteKey: "6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"
                };
                var n = function() {
                    var e = ['form[action^="/contact"] input[name="form_type"][value="contact"]', 'form[action*="/comments"] input[name="form_type"][value="new_comment"]', 'form[action^="/account"] input[name="form_type"][value="customer_login"]', 'form[action^="/account"] input[name="form_type"][value="recover_customer_password"]', 'form[action^="/account"] input[name="form_type"][value="create_customer"]', 'form[action^="/contact"] input[name="form_type"][value="customer"]'].join(","),
                        t = r.querySelectorAll(e);
                    if (null === t) return [];
                    let n = [];
                    for (var o = 0; o < t.length; o++) n = n.concat(Array.prototype.slice.call(t[o].form.elements));
                    return n
                }();

                function o() {
                    var e = r.createElement("script");
                    e.setAttribute("src", "{{URL::asset('assests/js/index.js')}}"), r.body.appendChild(e);
                    for (var t = 0; t < n.length; t++) n[t].removeEventListener("focus", o), n[t].removeEventListener("change", o), n[t].removeEventListener("click", o)
                }
                for (var e = 0; e < n.length; e++) n[e].addEventListener("focus", o, !1), n[e].addEventListener("change", o, !1), n[e].addEventListener("click", o, !1)
            })
        }(document);
    </script>
    <script integrity="sha256-pVJhp6mHZ0dJmJmDtYierarGeV2NSFSPthRwqW7blSQ=" data-source-attribution="shopify.loadfeatures" defer="defer" src="{{URL::asset('assests/js/load_feature-a55261a7a987674749989983b5889eadaac6795d8d48548fb61470a96edb9524.js')}}" crossorigin="anonymous"></script>
    <script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="{{URL::asset('assests/js/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js')}}" crossorigin="anonymous"></script>
    <link rel="stylesheet" media="screen" href="{{URL::asset('assests/css/stylesae4b.css?22997')}}">
    <script id="sections-script" data-sections="Ishi_newsletterblockstyle1" defer="defer" src="{{URL::asset('assests/js/scriptsae4b.js?22997')}}"></script>

    <script>
        window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');
    </script>

    <script>
        window.performance.mark('debut:theme_stylesheet_loaded.start');

        function onLoadStylesheet() {
            performance.mark('debut:theme_stylesheet_loaded.end');
            performance.measure('debut:theme_stylesheet_loaded', 'debut:theme_stylesheet_loaded.start', 'debut:theme_stylesheet_loaded.end');

            var url = "{{URL::asset('assests/css/theme0990.css')}}";
            var link = document.querySelector('link[href="' + url + '"]');
            link.loaded = true;
            link.dispatchEvent(new Event('load'));
        }
    </script>




    <script src="{{URL::asset('assests/js/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js')}}" type="text/javascript"></script>

    <script src="{{URL::asset('assests/js/quickviewce4f.js')}}" defer="defer"></script>

    <script src="{{URL::asset('assests/js/themeb487.js')}}" defer="defer"></script>

    <script src="{{URL::asset('assests/js/shop4065.js')}}" defer="defer"></script>

    <script src="{{URL::asset('assests/js/cookie5cbc.js')}}" defer="defer"></script>


    <link href="{{URL::asset('assests/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

</head>

<body class="template-index  button-rounded full-layout " data-bg="url(//cdn.shopify.com/shopifycloud/shopify/assests/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c.gif)">
    <main class="maincontent">
        <div class="whole-content">
            <a class="in-page-link visually-hidden skip-link" href="#MainContent">Skip To Content</a>
            <div id="SearchDrawer" class="search-bar drawer drawer--top">
                <div class="search-bar__table">
                    <div class="search-bar__table-cell search-bar__form-wrapper">
                        <form class="search search-bar__form" action="#" method="get" role="search">
                            <button class="search-bar__submit search__submit btn--link" type="submit">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search" viewBox="0 0 37 40">
                                    <path d="M35.6 36l-9.8-9.8c4.1-5.4 3.6-13.2-1.3-18.1-5.4-5.4-14.2-5.4-19.7 0-5.4 5.4-5.4 14.2 0 19.7 2.6 2.6 6.1 4.1 9.8 4.1 3 0 5.9-1 8.3-2.8l9.8 9.8c.4.4.9.6 1.4.6s1-.2 1.4-.6c.9-.9.9-2.1.1-2.9zm-20.9-8.2c-2.6 0-5.1-1-7-2.9-3.9-3.9-3.9-10.1 0-14C9.6 9 12.2 8 14.7 8s5.1 1 7 2.9c3.9 3.9 3.9 10.1 0 14-1.9 1.9-4.4 2.9-7 2.9z" />
                                </svg>
                                <span class="icon__fallback-text">SUBMIT</span>
                            </button>
                            <input class="search__input search-bar__input" type="search" name="q" value="" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    <div class="search-bar__table-cell text-right">
                        <button type="button" class="btn--link search-bar__close js-drawer-close">
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 37 40">
                                <path d="M21.3 23l11-11c.8-.8.8-2 0-2.8-.8-.8-2-.8-2.8 0l-11 11-11-11c-.8-.8-2-.8-2.8 0-.8.8-.8 2 0 2.8l11 11-11 11c-.8.8-.8 2 0 2.8.4.4.9.6 1.4.6s1-.2 1.4-.6l11-11 11 11c.4.4.9.6 1.4.6s1-.2 1.4-.6c.8-.8.8-2 0-2.8l-11-11z" />
                            </svg>
                            <span class="icon__fallback-text">Close Search</span>
                        </button>
                    </div>
                </div>
            </div>
            <div id="header-layout1" class="wrapper-nav ">
                <div id="shopify-section-header_layout1" class="shopify-section header-layout1">


                    <div id="header" data-section-id="header_layout1" data-section-type="header-section">
                        <header class="site-header">

                            <div class="nav-header">
                                <div class="desktop-user-info">
                                    <div class="checkout" style="padding: 4px 6px;">
                                        <a class="nav-icon" href="#">Welcome To Our Mitray Studio Store</a>
                                    </div>

                                </div>
                            </div>
                            <div class="leyaut-1">
                                <div class="header-top header-transparent hidden-lg-down ">
                                    <div class="site-header-inner">
                                        <div id="_desktop_logo" class="header-logo-section col-md-3 col-sm-12">


                                            <h1 class="h2 header__logo" itemscope itemtype="http://schema.org/Organization">


                                                <a href="index.html" itemprop="url" class="header__logo-image">

                                                    <img src="{{URL::asset('assests/img/b&w.png')}}" alt="Mitray Studio Sectioned Shopify Theme" itemprop="logo" style="max-width: 100%;width: 220px;max-height: 100%;height:100px;">
                                                </a>
                                            </h1>

                                        </div>
                                        <div class="megamenu-header col-sm-12 hidden-lg-down">
                                            <div id="_desktop_top_menu" class="menu js-top-menu hidden-sm-down" role="navigation">

                                                <ul class="top-menu" id="top-menu">


                                                    <li class="category">

                                                        <span class="float-xs-right hidden-lg-up">

                                                            <span data-target="#_n_child-one1" data-toggle="collapse" class="navbar-toggler collapse-icons clearfix collapsed">
                                                                <i class="material-icons add">&#xE313;</i>
                                                                <i class="material-icons remove">&#xE316;</i>
                                                            </span>

                                                        </span>
                                                        <a href="{{url('/')}}" class="dropdown-item">
                                                            <h3 class="title">HOME</h3>
                                                        </a>
                                                    </li>

                                                    <li class="category">
                                                        <span class="float-xs-right hidden-lg-up">

                                                            <span data-target="#_n_child-one1" data-toggle="collapse" class="navbar-toggler collapse-icons clearfix collapsed">
                                                                <i class="material-icons add">&#xE313;</i>
                                                                <i class="material-icons remove">&#xE316;</i>
                                                            </span>

                                                        </span>
                                                        <a href="{{url('allproduct')}}" class="dropdown-item">
                                                            <h3 class="title">PRODUCT</h3>
                                                        </a>
                                                    </li>

                                                   


                                                    <li class="category">

                                                        <span class="float-xs-right hidden-lg-up">

                                                            <span data-target="#_n_child-one5" data-toggle="collapse" class="navbar-toggler collapse-icons clearfix collapsed">
                                                                <i class="material-icons add">&#xE313;</i>
                                                                <i class="material-icons remove">&#xE316;</i>
                                                            </span>

                                                        </span>
                                                        <a href="#" class="dropdown-item">
                                                            <h3 class="title"> CATEGORY</h3>
                                                        </a>


                                                        <div class="popover sub-menu js-sub-menu collapse" id="_n_child-one5">
                                                            <ul class="top-menu mainmenu-dropdown">
                                                                <li class="sub-category product_container hidden-lg-down">
                                                                    <a href="#" class="dropdown-item dropdown-submenu">
                                                                        <h3 class="inner-title">Special Product</h3>
                                                                    </a>
                                                                    <div class="grid__item grid__item--header_layout1">

                                                                        <div class="grid-view-item__link grid-view-item__image-container">
                                                                            <div class="grid-view-item__image-wrapper js">
                                                                                <a href="">
                                                                                    <div class="image-inner">
                                                                                        <div class="reveal">
                                                                                            <img class="grid-view-item__image lazy  main-img " src="{{URL::asset('assests/img/saree/sari.jpg')}}" alt="short sleeve shirt">
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-description">
                                                                                <a href="">
                                                                                    <div class="product-detail">
                                                                                        <div class="h4 grid-view-item__title">
                                                                                            Royal Vichitra silk</div>
                                                                                    </div>
                                                                                </a>
                                                                                <div class="grid-view-item__meta">
                                                                                    <div class="qv-discountprice regular">
                                                                                        2000.00</div>
                                                                                    <span class="visually-hidden">Regular
                                                                                        price</span>
                                                                                    <div class="product-price__price product-price__sale">
                                                                                        <span class="qv-regularprice is-bold">
                                                                                            1800.00 </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="sub-category">
                                                                    <span class="float-xs-right hidden-lg-up">
                                                                        <span data-target="#_n_grand-child-11" data-toggle="collapse" class="navbar-toggler collapse-icons clearfix collapsed">
                                                                            <i class="material-icons add">&#xE313;</i>
                                                                            <i class="material-icons remove">&#xE316;</i>
                                                                        </span>
                                                                    </span>
                                                                    <a href="#" class="dropdown-item dropdown-submenu">
                                                                        <h3 class="inner-title">
                                                                            PRODUCS
                                                                        </h3>
                                                                    </a>
                                                                    <?php

                                                                    use App\Category;

                                                                    $cat = Category::get(); ?>
                                                                    <div class="top-menu collapse" id="_n_grand-child-11">
                                                                        <ul class="top-menu">
                                                                            <?php $cat = App\Category::get(); ?>
                                                                            @foreach ($cat as $category)
                                                                            <li><a href="{{ url('product') }}/{{ $category->cname }}" class="dropdown-item">{{ $category->cname }}</a></li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="sub-category product_container hidden-lg-down">
                                                                    <a href="{{url('Sarees')}}" class="dropdown-item dropdown-submenu">
                                                                        <h3 class="inner-title">Special Product</h3>
                                                                    </a>
                                                                    <div class="grid__item grid__item--header_layout1">
                                                                        <div class="grid-view-item__link grid-view-item__image-container">
                                                                            <div class="grid-view-item__image-wrapper js">
                                                                                <a href="{{url('Sarees')}}">
                                                                                    <div class="image-inner">
                                                                                        <div class="reveal">
                                                                                            <img class="grid-view-item__image lazy  main-img " src="{{URL::asset('assests/img/product/section1/s5.jpg')}}" alt="short sleeve shirt">
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-description">
                                                                                <a href="{{url('Sarees')}}">
                                                                                    <div class="product-detail">
                                                                                        <div class="h4 grid-view-item__title">
                                                                                            Vaishali silk Lehenga</div>
                                                                                    </div>
                                                                                </a>
                                                                                <div class="grid-view-item__meta">

                                                                                    <div class="qv-discountprice regular">
                                                                                        1800.00</div>
                                                                                    <span class="visually-hidden">Regular
                                                                                        price</span>
                                                                                    <div class="product-price__price product-price__sale">
                                                                                        <span class="qv-regularprice is-bold">
                                                                                            1600.00 </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>


                                                    <li class="category">
                                                        <span class="float-xs-right hidden-lg-up">

                                                            <span data-target="#_n_child-one5" data-toggle="collapse" class="navbar-toggler collapse-icons clearfix collapsed">
                                                                <i class="material-icons add">&#xE313;</i>
                                                                <i class="material-icons remove">&#xE316;</i>
                                                            </span>

                                                        </span>
                                                        <a href="#" class="dropdown-item">
                                                            <h3 class="title"> ACCOUNT</h3>
                                                        </a>
                                                        <div class="popover sub-menu js-sub-menu collapse" id="_n_child-one5">
                                                            <ul class="top-menu mainmenu-dropdown">

                                                                <li class="sub-category">
                                                                    <span class="float-xs-right hidden-lg-up">

                                                                        <span data-target="#_n_grand-child-10" data-toggle="collapse" class="navbar-toggler collapse-icons clearfix collapsed">
                                                                            <i class="material-icons add">&#xE313;</i>
                                                                            <i class="material-icons remove">&#xE316;</i>
                                                                        </span>

                                                                    </span>

                                                                   
                                                                    {{ Session::get("clientfname") }}  {{ Session::get("clientlname") }}
                                                                    {{ Session::get("adminfname") }}    {{ Session::get("adminlname") }}

                                                                    <br>
                                                                    <a href="#" class="dropdown-item dropdown-submenu">
                                                                        <h3 class="inner-title">
                                                                            Pages
                                                                        </h3>
                                                                    </a>
                                                                   
                                                                    <div class="top-menu collapse" id="_n_grand-child-10">
                                                                        <ul class="top-menu">
                                                                            @if(Session::has('clientid'))
                                                                            
                                                                            @if(Session::has('clientid'))
                                                                            <!-- <li class="category">
                                                                                <a href="{{url('about-us')}}" class="dropdown-item">
                                                                                    Dashbord
                                                                                </a>
                                                                            </li> -->
                                                                            <li class="category">
                                                                                <a href="{{url('clientlogout')}}" class="dropdown-item">
                                                                                    Logout
                                                                                </a>
                                                                            </li>

                                                                            @else
                                                                            <li class="category">
                                                                                <a href="{{url('login')}}" class="dropdown-item">
                                                                                    Login
                                                                                </a>
                                                                            </li>

                                                                            @endif

                                                                            @else

                                                                            @if(Session::has('adminid'))
                                                                            <li class="category">
                                                                                <a href="{{url('dashbord')}}" class="dropdown-item">
                                                                                    Dashbord
                                                                                </a>
                                                                            </li>
                                                                            <li class="category">
                                                                                <a href="{{url('adminlogout')}}" class="dropdown-item">
                                                                                    Logout
                                                                                </a>
                                                                            </li>

                                                                            @else
                                                                            <li class="category">
                                                                                <a href="{{url('register')}}" class="dropdown-item">
                                                                                    Register
                                                                                </a>
                                                                            </li>
                                                                            <li class="category">
                                                                                <a href="{{url('login')}}" class="dropdown-item">
                                                                                    Login
                                                                                </a>
                                                                            </li>
                                                                            @endif
                                                                            @endif
                                                                        </ul>
                                                                    </div>

                                                                </li>

                                                                
                                                            </ul>
                                                        </div>
                                                    </li>


                                                    <li class="category">
                                                        <span class="float-xs-right hidden-lg-up">

                                                            <span data-target="#_n_child-one5" data-toggle="collapse" class="navbar-toggler collapse-icons clearfix collapsed">
                                                                <i class="material-icons add">&#xE313;</i>
                                                                <i class="material-icons remove">&#xE316;</i>
                                                            </span>

                                                        </span>
                                                        <a href="{{url('about-us')}}" class="dropdown-item">
                                                            <h3 class="title"> ABOUT US</h3>
                                                        </a>
                                                    </li>

                                                    <li class="category">
                                                        <span class="float-xs-right hidden-lg-up">

                                                            <span data-target="#_n_child-one1" data-toggle="collapse" class="navbar-toggler collapse-icons clearfix collapsed">
                                                                <i class="material-icons add">&#xE313;</i>
                                                                <i class="material-icons remove">&#xE316;</i>
                                                            </span>

                                                        </span>
                                                        <a href="{{url('contact')}}" class="dropdown-item">
                                                            <h3 class="title">CONTACTS </h3>
                                                        </a>
                                                    </li>




                                                </ul>
                                            </div>
                                        </div>
                                        <div class="header-right col-md-3 col-sm-6">
                                            <div id="_desktop_search" class="site-header__search hidden-lg-down">
                                                <div class="search-title clearfix " data-target="#search-container-full" data-toggle="collapse" aria-expanded="false" role="search">
                                                    <span class="search-toggle hidden-lg-down">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="magnifying-desktop" viewBox="0 0 1200 1200">
                                                                <title>magnifying-desktop</title>
                                                                <path d="M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0
               C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586
               l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8
               c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407
               S377.82,467.8,257.493,467.8z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 40 40">
                                                            <use xlink:href="#magnifying-desktop" x="20%" y="22%"></use>
                                                        </svg>



                                                    </span>
                                                    <span class="search-toggle hidden-lg-up">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="magnifying-mobile" viewBox="0 0 1200 1200">
                                                                <title>magnifying-mobile</title>
                                                                <path d="M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0
               C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586
               l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8
               c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407
               S377.82,467.8,257.493,467.8z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 40 40">
                                                            <use xlink:href="#magnifying-mobile" x="24%" y="24%"></use>
                                                        </svg>



                                                    </span>
                                                </div>
                                                <div id="search-container-full" class="search-info collapse">
                                                    <form action="#" method="get" class="search-header search search--focus" role="search">
                                                        <input type="hidden" name="type" value="product">
                                                        <span class="search-tag"> 1000+ PRODUCTS ! </span>
                                                        <input class="search-header__input search__input" type="search" name="q" placeholder="Search" aria-label="Search">
                                                        <button class="search-header__submit search__submit btn--link" type="submit">
                                                            <span class="search-logo"> <i class="material-icons"></i>
                                                            </span>
                                                            <span class="icon__fallback-text">Search</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div id="_desktop_cart" class="hidden-lg-down ">
                                                <div class="cart-display">
                                                    <div class="cart-title clearfix collapsed" data-target="#cart-container" data-toggle="collapse">
                                                        <div class="site-header__cart expand-more">
                                                            <span class="header-cart-logo">
                                                                <span class="hidden-lg-down">

                                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                                        <symbol id="shopping-cart" viewBox="0 0 700 700">
                                                                            <title>shopping-cart</title>
                                                                            <path d="m150.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0">
                                                                            </path>
                                                                            <path d="m446.855469 94.035156h-353.101563l-7.199218-40.300781c-4.4375-24.808594-23.882813-44.214844-48.699219-48.601563l-26.101563-4.597656c-5.441406-.96875-10.632812 2.660156-11.601562 8.097656-.964844 5.441407 2.660156 10.632813 8.101562 11.601563l26.199219 4.597656c16.53125 2.929688 29.472656 15.871094 32.402344 32.402344l35.398437 199.699219c4.179688 23.894531 24.941406 41.324218 49.199219 41.300781h210c22.0625.066406 41.546875-14.375 47.902344-35.5l47-155.800781c.871093-3.039063.320312-6.3125-1.5-8.898438-1.902344-2.503906-4.859375-3.980468-8-4zm-56.601563 162.796875c-3.773437 12.6875-15.464844 21.367188-28.699218 21.300781h-210c-14.566407.039063-27.035157-10.441406-29.5-24.800781l-24.699219-139.398437h336.097656zm0 0">
                                                                            </path>
                                                                            <path d="m360.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0">
                                                                            </path>
                                                                        </symbol>
                                                                    </svg>
                                                                    <svg class="icon" viewBox="0 0 40 40">
                                                                        <use xlink:href="#shopping-cart" x="15%" y="17%">
                                                                        </use>
                                                                    </svg>




                                                                </span>
                                                                <span class="hidden-lg-up">

                                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                                        <symbol id="cart" viewBox="0 0 550 550">
                                                                            <title>cart</title>
                                                                            <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6
				v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4
				C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4
				C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z
				 M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4
				L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2
				V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2
				H270l22.4,209.2H30z"></path>

                                                                        </symbol>
                                                                    </svg>
                                                                    <svg class="icon" viewBox="0 0 40 40">
                                                                        <use xlink:href="#cart" x="20%" y="20%"></use>
                                                                    </svg>




                                                                </span>
                                                            </span>
                                                            <span class="cart-qty"></span>
                                                            <span class="cart-price text-content">
                                                                <span class="main-title">SHOPPING CART</span>
                                                                <span class="cart-count sub-title">
                                                                    <span class="cart-qty"></span>
                                                                    <span class="cart-items hidden-lg-down">Items</span> -&nbsp; <span class="cart__subtotal"></span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div id="cart-container" class="cart-dropdown-inner cart-dropdown collapse">

                                                        <div class="cart-container-inner" data-section-id="header_layout1" data-section-type="cart-template">
                                                            <div class="product-list"></div>
                                                            <div class="cart__footer">
                                                                <div class="grid">

                                                                    <div class="grid__item ">
                                                                        <div>
                                                                            <span class="cart__subtotal-title">Subtotal</span>
                                                                            <span class="cart__subtotal"></span>
                                                                        </div>
                                                                        <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                                                                        <div class="cart-links">
                                                                            <a class="btn checkout-btn" href="{{url('checkouts')}}">CHECKOUT</a>
                                                                            <a class="view-cart btn" href="{{url('/')}}">YOUR
                                                                                CART</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cart__empty hide">
                                                                <span class="cart--empty-message">Your Cart Is Currently
                                                                    Empty.</span>
                                                                <div class="cookie-message">
                                                                    <p>Enable cookies to use the shopping cart</p>
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div id="mobile_top_menu_wrapper" class="hidden-lg-up" style="display:none;">
                                <div id="top_menu_closer" class="hidden-lg-up">
                                    <i class="material-icons"></i>
                                </div>
                                <div id="_mobile_top_menu" class="js-top-menu mobile"></div>
                            </div>

                            <div class="mobile-navmenu hidden-lg-up">
                                <div class="mobile-width">
                                    <div class="page-widthpage-width">
                                        <div class="" style="    display: flex;
                                        align-items: center;">
                                            <div class="mobile-width-left">
                                                <div id="menu-icon" class="menu-icon hidden-lg-up">

                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="setup" viewBox="0 0 750 750">
                                                            <title>setup</title>
                                                            <g>
                                                                <rect y="46.06" width="344.339" height="29.52" />
                                                            </g>
                                                            <g>
                                                                <rect y="156.506" width="344.339" height="29.52" />
                                                            </g>
                                                            <g>
                                                                <rect y="268.748" width="344.339" height="29.531" />
                                                            </g>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 40 40">
                                                        <use xlink:href="#setup" x="25%" y="27%"></use>
                                                    </svg>




                                                </div>
                                                <div id="_mobile_search"></div>
                                            </div>
                                            <div id="_mobile_logo"></div>
                                            <div class="mobile-width-right">
                                                <div id="_mobile_cart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @yield('main')


    <!-- footer section -->
    <div id="shopify-section-16044908558a0e3bd0" class="shopify-section ishi-newsletter-block">

        <div class="footer_below">
            <div class="container-footer">
                <div id="newslet ter-container" class="block_newsletter newsletter-inner">
                    <div id="ishinewsletter-container container-1">
                        <div class="row_one">
                            <div class="row_one_col">
                                <img src="{{URL::asset('assests/img/b&w.png')}}" alt="" width="150px" height="100px">
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="row_two">
                            <div class="row_two_col">
                                <h2 class="footer-heading">Your Account</h2>
                                <ul class="site-footer__linklist row padding-footer">

                                    <li class="site-footer__linklist-item shop-contact col-md-12 col-sm-4 col-xs-4">
                                        <a href="tel:+91 88665 36050">Mobile no: +91 88665 36050</a>
                                    </li>


                                    <li class="site-footer__linklist-item shop-email col-md-12 col-sm-4 col-xs-4">
                                        <a href="mailto:suniljakabari@gmail.com">Email: suniljakabari@gmail.com</a>
                                    </li>


                                    <li class="site-footer__linklist-item shop-address col-md-12 col-sm-4 col-xs-4">
                                       <a href=""> Address: Surat , Gujarat.</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="row_two_col">
                                <h2 class="footer-heading">Our Company</h2>
                                <ul class="site-footer__linklist">

                                    <li class="site-footer__linklist-item">
                                        <a href="{{url('about-us')}}">About Us</a>
                                    </li>
                                    <li class="site-footer__linklist-item">
                                        <a href="{{url('contact')}}">Contact</a>
                                    </li>

                                    <li class="site-footer__linklist-item">
                                        <a href="{{url('register')}}">Register</a>
                                    </li>

                                    <li class="site-footer__linklist-item">
                                        <a href="{{url('login')}}">Login</a>
                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="page-width">
                    <div class="row">

                        <div class="footer-left col-md-6 col-sm-12 col-xs-12">
                            <div class="site-footer__copyright--bottom">
                                <p>©copyright 2020, Mitray Studio </p>
                            </div>
                        </div>
                        <div class="footer-right col-md-6 col-sm-12 col-xs-12">
                            <img src="{{URL::asset('assests/img/footer/visa.png')}}" alt="" width="48px" height="33px">
                            <img src="{{URL::asset('assests/img/footer/paypal.jpg')}}" alt="" width="48px" height="33px">
                            <img src="{{URL::asset('assests/img/footer/mastercord.png')}}" alt="" width="48px" height="33px">
                            <img src="{{URL::asset('assests/img/footer/discover.jpg')}}" alt="" width="48px" height="33px">
                            <img src="{{URL::asset('assests/img/footer/American_Express.jpg')}}" alt="" width="48px" height="33px">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            .ishi-newsletter-block {
                margin-bottom: 0px;
            }

            .ishi-newsletter-block .newsletter-color {
                background-color: #545454;
            }

            .ishi-newsletter-block .newsletter {
                padding: 10px 0;
            }

            .ishi-newsletter-block .newsletter .block_newsletter .newsletter_text h2 {
                color: #cfaf61;
            }

            .ishi-newsletter-block .newsletter .block_newsletter .newsletter_text .sub-heading,
            .ishi-newsletter-block .newsletter .block_newsletter .newsletter_text .title-desc p {
                color: #ffffff;
            }

            @media (max-width: 767px) {
                .ishi-newsletter-block {
                    margin-bottom: 0px;
                }
            }
        </style>






    </div>



    <style type="text/css">
        .ishi-product-block-style1 {
            margin-bottom: 70px;
        }

        @media (max-width: 767px) {
            .ishi-product-block-style1 {
                margin-bottom: 30px;
            }
        }
    </style>

    <style type="text/css">
        .ishi-newsletter-block {
            margin-bottom: 0px;
        }

        .ishi-newsletter-block .newsletter-color {
            background-color: #545454;
        }

        .ishi-newsletter-block .newsletter {
            padding: 10px 0;
        }

        .ishi-newsletter-block .newsletter .block_newsletter .newsletter_text h2 {
            color: #cfaf61;
        }

        .ishi-newsletter-block .newsletter .block_newsletter .newsletter_text .sub-heading,
        .ishi-newsletter-block .newsletter .block_newsletter .newsletter_text .title-desc p {
            color: #ffffff;
        }

        @media (max-width: 767px) {
            .ishi-newsletter-block {
                margin-bottom: 0px;
            }
        }
    </style>






    </div>
</body>

</html>