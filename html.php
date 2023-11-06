

<!DOCTYPE html>
<html dir="rtl" lang="ar" prefix="og: https://ogp.me/ns#">
    <head>
        <meta charset="UTF-8">
        <title>الرئيسية - منصة لحجز حافلات </title>
        <meta property="og:locale" content="ar_AR"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="الرئيسية - منصة لحجز الحافلات "/>
        <meta property="og:url" content="https://ksavipbus.com/"/>
            
		
        <link rel="alternate" href="https://ksavipbus.com/en/home/" hreflang="en"/>
        <link rel="alternate" href="https://ksavipbus.com/" hreflang="ar"/>
        <link rel="alternate" type="application/rss+xml" title="Ksa Vip Bus &laquo; الخلاصة" href="https://ksavipbus.com/feed/"/>
        <link rel="alternate" type="application/rss+xml" title="Ksa Vip Bus &laquo; خلاصة التعليقات" href="https://ksavipbus.com/comments/feed/"/>
        <!-- This site uses the Google Analytics by MonsterInsights plugin v8.20.1 - Using Analytics tracking - https://www.monsterinsights.com/ -->
        <script src="//www.googletagmanager.com/gtag/js?id=G-4MRNEGNEB0" data-cfasync="false" data-wpfc-render="false" async></script>
        <script data-cfasync="false" data-wpfc-render="false">
            var mi_version = '8.20.1';
            var mi_track_user = true;
            var mi_no_track_reason = '';

            var disableStrs = ['ga-disable-G-4MRNEGNEB0', ];

            /* Function to detect opted out users */
            function __gtagTrackerIsOptedOut() {
                for (var index = 0; index < disableStrs.length; index++) {
                    if (document.cookie.indexOf(disableStrs[index] + '=true') > -1) {
                        return true;
                    }
                }

                return false;
            }

            /* Disable tracking if the opt-out cookie exists. */
            if (__gtagTrackerIsOptedOut()) {
                for (var index = 0; index < disableStrs.length; index++) {
                    window[disableStrs[index]] = true;
                }
            }

            /* Opt-out function */
            function __gtagTrackerOptout() {
                for (var index = 0; index < disableStrs.length; index++) {
                    document.cookie = disableStrs[index] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                    window[disableStrs[index]] = true;
                }
            }

            if ('undefined' === typeof gaOptout) {
                function gaOptout() {
                    __gtagTrackerOptout();
                }
            }
            window.dataLayer = window.dataLayer || [];

            window.MonsterInsightsDualTracker = {
                helpers: {},
                trackers: {},
            };
            if (mi_track_user) {
                function __gtagDataLayer() {
                    dataLayer.push(arguments);
                }

                function __gtagTracker(type, name, parameters) {
                    if (!parameters) {
                        parameters = {};
                    }

                    if (parameters.send_to) {
                        __gtagDataLayer.apply(null, arguments);
                        return;
                    }

                    if (type === 'event') {
                        parameters.send_to = monsterinsights_frontend.v4_id;
                        var hookName = name;
                        if (typeof parameters['event_category'] !== 'undefined') {
                            hookName = parameters['event_category'] + ':' + name;
                        }

                        if (typeof MonsterInsightsDualTracker.trackers[hookName] !== 'undefined') {
                            MonsterInsightsDualTracker.trackers[hookName](parameters);
                        } else {
                            __gtagDataLayer('event', name, parameters);
                        }

                    } else {
                        __gtagDataLayer.apply(null, arguments);
                    }
                }

                __gtagTracker('js', new Date());
                __gtagTracker('set', {
                    'developer_id.dZGIzZG': true,
                });
                __gtagTracker('config', 'G-4MRNEGNEB0', {
                    "forceSSL": "true",
                    "link_attribution": "true"
                });
                window.gtag = __gtagTracker;
                (function() {
                    /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                    /* ga and __gaTracker compatibility shim. */
                    var noopfn = function() {
                        return null;
                    };
                    var newtracker = function() {
                        return new Tracker();
                    };
                    var Tracker = function() {
                        return null;
                    };
                    var p = Tracker.prototype;
                    p.get = noopfn;
                    p.set = noopfn;
                    p.send = function() {
                        var args = Array.prototype.slice.call(arguments);
                        args.unshift('send');
                        __gaTracker.apply(null, args);
                    }
                    ;
                    var __gaTracker = function() {
                        var len = arguments.length;
                        if (len === 0) {
                            return;
                        }
                        var f = arguments[len - 1];
                        if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
                            if ('send' === arguments[0]) {
                                var hitConverted, hitObject = false, action;
                                if ('event' === arguments[1]) {
                                    if ('undefined' !== typeof arguments[3]) {
                                        hitObject = {
                                            'eventAction': arguments[3],
                                            'eventCategory': arguments[2],
                                            'eventLabel': arguments[4],
                                            'value': arguments[5] ? arguments[5] : 1,
                                        }
                                    }
                                }
                                if ('pageview' === arguments[1]) {
                                    if ('undefined' !== typeof arguments[2]) {
                                        hitObject = {
                                            'eventAction': 'page_view',
                                            'page_path': arguments[2],
                                        }
                                    }
                                }
                                if (typeof arguments[2] === 'object') {
                                    hitObject = arguments[2];
                                }
                                if (typeof arguments[5] === 'object') {
                                    Object.assign(hitObject, arguments[5]);
                                }
                                if ('undefined' !== typeof arguments[1].hitType) {
                                    hitObject = arguments[1];
                                    if ('pageview' === hitObject.hitType) {
                                        hitObject.eventAction = 'page_view';
                                    }
                                }
                                if (hitObject) {
                                    action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
                                    hitConverted = mapArgs(hitObject);
                                    __gtagTracker('event', action, hitConverted);
                                }
                            }
                            return;
                        }

                        function mapArgs(args) {
                            var arg, hit = {};
                            var gaMap = {
                                'eventCategory': 'event_category',
                                'eventAction': 'event_action',
                                'eventLabel': 'event_label',
                                'eventValue': 'event_value',
                                'nonInteraction': 'non_interaction',
                                'timingCategory': 'event_category',
                                'timingVar': 'name',
                                'timingValue': 'value',
                                'timingLabel': 'event_label',
                                'page': 'page_path',
                                'location': 'page_location',
                                'title': 'page_title',
                            };
                            for (arg in args) {
                                if (!(!args.hasOwnProperty(arg) || !gaMap.hasOwnProperty(arg))) {
                                    hit[gaMap[arg]] = args[arg];
                                } else {
                                    hit[arg] = args[arg];
                                }
                            }
                            return hit;
                        }

                        try {
                            f.hitCallback();
                        } catch (ex) {}
                    };
                    __gaTracker.create = newtracker;
                    __gaTracker.getByName = newtracker;
                    __gaTracker.getAll = function() {
                        return [];
                    }
                    ;
                    __gaTracker.remove = noopfn;
                    __gaTracker.loaded = true;
                    window['__gaTracker'] = __gaTracker;
                }
                )();
            } else {
                console.log("");
                (function() {
                    function __gtagTracker() {
                        return null;
                    }

                    window['__gtagTracker'] = __gtagTracker;
                    window['gtag'] = __gtagTracker;
                }
                )();
            }
        </script>
        <!-- / Google Analytics by MonsterInsights -->
        <script>
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
                "svgExt": ".svg",
                "source": {
                    "concatemoji": "https:\/\/ksavipbus.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.2"
                }
            };
            /*! This file is auto-generated */
            !function(i, n) {
                var o, s, e;
                function c(e) {
                    try {
                        var t = {
                            supportTests: e,
                            timestamp: (new Date).valueOf()
                        };
                        sessionStorage.setItem(o, JSON.stringify(t))
                    } catch (e) {}
                }
                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)
                      , r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(n, 0, 0),
                    new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function(e, t) {
                        return e === r[t]
                    })
                }
                function u(e, t, n) {
                    switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                    }
                    return !1
                }
                function f(e, t, n) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300,150) : i.createElement("canvas")
                      , a = r.getContext("2d", {
                        willReadFrequently: !0
                    })
                      , o = (a.textBaseline = "top",
                    a.font = "600 32px Arial",
                    {});
                    return e.forEach(function(e) {
                        o[e] = t(a, e, n)
                    }),
                    o
                }
                function t(e) {
                    var t = i.createElement("script");
                    t.src = e,
                    t.defer = !0,
                    i.head.appendChild(t)
                }
                "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports",
                s = ["flag", "emoji"],
                n.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                },
                e = new Promise(function(e) {
                    i.addEventListener("DOMContentLoaded", e, {
                        once: !0
                    })
                }
                ),
                new Promise(function(t) {
                    var n = function() {
                        try {
                            var e = JSON.parse(sessionStorage.getItem(o));
                            if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests)
                                return e.supportTests
                        } catch (e) {}
                        return null
                    }();
                    if (!n) {
                        if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)
                            try {
                                var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));"
                                  , r = new Blob([e],{
                                    type: "text/javascript"
                                })
                                  , a = new Worker(URL.createObjectURL(r),{
                                    name: "wpTestEmojiSupports"
                                });
                                return void (a.onmessage = function(e) {
                                    c(n = e.data),
                                    a.terminate(),
                                    t(n)
                                }
                                )
                            } catch (e) {}
                        c(n = f(s, u, p))
                    }
                    t(n)
                }
                ).then(function(e) {
                    for (var t in e)
                        n.supports[t] = e[t],
                        n.supports.everything = n.supports.everything && n.supports[t],
                        "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                    n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag,
                    n.DOMReady = !1,
                    n.readyCallback = function() {
                        n.DOMReady = !0
                    }
                }).then(function() {
                    return e
                }).then(function() {
                    var e;
                    n.supports.everything || (n.readyCallback(),
                    (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji),
                    t(e.wpemoji)))
                }))
            }((window,
            document), window._wpemojiSettings);
        </script>
        <style>
            img.wp-smiley, img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='jkit-elements-main-css' href='https://ksavipbus.com/wp-content/plugins/jeg-elementor-kit/assets/css/elements/main.css?ver=2.6.2' media='all'/>
        <link rel='stylesheet' id='wp-block-library-rtl-css' href='https://ksavipbus.com/wp-includes/css/dist/block-library/style-rtl.min.css?ver=6.3.2' media='all'/>
        <style id='joinchat-button-style-inline-css'>
            .wp-block-joinchat-button {
                border: none!important;
                text-align: center
            }

            .wp-block-joinchat-button figure {
                display: table;
                margin: 0 auto;
                padding: 0
            }

            .wp-block-joinchat-button figcaption {
                font: normal normal 400 .6em/2em var(--wp--preset--font-family--system-font,sans-serif);
                margin: 0;
                padding: 0
            }

            .wp-block-joinchat-button .joinchat-button__qr {
                background-color: #fff;
                border: 6px solid #25d366;
                border-radius: 30px;
                box-sizing: content-box;
                display: block;
                height: 200px;
                margin: auto;
                overflow: hidden;
                padding: 10px;
                width: 200px
            }

            .wp-block-joinchat-button .joinchat-button__qr canvas,.wp-block-joinchat-button .joinchat-button__qr img {
                display: block;
                margin: auto
            }

            .wp-block-joinchat-button .joinchat-button__link {
                align-items: center;
                background-color: #25d366;
                border: 6px solid #25d366;
                border-radius: 30px;
                display: inline-flex;
                flex-flow: row nowrap;
                justify-content: center;
                line-height: 1.25em;
                margin: 0 auto;
                text-decoration: none
            }

            .wp-block-joinchat-button .joinchat-button__link:before {
                background: transparent var(--joinchat-ico) no-repeat center;
                background-size: 100%;
                content: "";
                display: block;
                height: 1.5em;
                margin: -.75em .75em -.75em 0;
                width: 1.5em
            }

            .wp-block-joinchat-button figure+.joinchat-button__link {
                margin-top: 10px
            }

            @media (orientation: landscape)and (min-height:481px),(orientation:portrait)and (min-width:481px) {
                .wp-block-joinchat-button.joinchat-button--qr-only figure+.joinchat-button__link {
                    display:none
                }
            }

            @media (max-width: 480px),(orientation:landscape)and (max-height:480px) {
                .wp-block-joinchat-button figure {
                    display:none
                }
            }
        </style>
        <style id='classic-theme-styles-inline-css'>
            /*! This file is auto-generated */
            .wp-block-button__link {
                color: #fff;
                background-color: #00ab6b;
                border-radius: 9999px;
                box-shadow: none;
                text-decoration: none;
                padding: calc(.667em + 2px) calc(1.333em + 2px);
                font-size: 1.125em
            }

            .wp-block-file__button {
                background: #00ab6b;
                color: #fff;
                text-decoration: none
            }
        </style>
        <style id='global-styles-inline-css'>
            body {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            }

            :where(.is-layout-flex) {
                gap: 0.5em;
            }

            :where(.is-layout-grid) {
                gap: 0.5em;
            }

            body .is-layout-flow > .alignleft {
                float: left;
                margin-inline-start: 0;margin-inline-end: 2em;}

            body .is-layout-flow > .alignright {
                float: right;
                margin-inline-start: 2em;margin-inline-end: 0;}

            body .is-layout-flow > .aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .is-layout-constrained > .alignleft {
                float: left;
                margin-inline-start: 0;margin-inline-end: 2em;}

            body .is-layout-constrained > .alignright {
                float: right;
                margin-inline-start: 2em;margin-inline-end: 0;}

            body .is-layout-constrained > .aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                max-width: var(--wp--style--global--content-size);
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .is-layout-constrained > .alignwide {
                max-width: var(--wp--style--global--wide-size);
            }

            body .is-layout-flex {
                display: flex;
            }

            body .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }

            body .is-layout-flex > * {
                margin: 0;
            }

            body .is-layout-grid {
                display: grid;
            }

            body .is-layout-grid > * {
                margin: 0;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }

            .wp-block-navigation a:where(:not(.wp-element-button)) {
                color: inherit;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            .wp-block-pullquote {
                font-size: 1.5em;
                line-height: 1.6;
            }
            .hover-from-buttom:hover {background-color: #006400 !important;}
        </style>
        <link rel='stylesheet' id='elementor-frontend-css' href='https://ksavipbus.com/wp-content/plugins/elementor/assets/css/frontend-lite-rtl.min.css?ver=3.16.5' media='all'/>
        <link rel='stylesheet' id='swiper-css' href='https://ksavipbus.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' media='all'/>
        <link rel='stylesheet' id='elementor-post-20-css' href='post-20.css' />
        <link rel='stylesheet' id='elementor-post-1074-css' href='post-1074.css'/>
        <link rel='stylesheet' id='font-awesome-5-all-css' href='https://ksavipbus.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.16.5' media='all'/>
        <link rel='stylesheet' id='font-awesome-4-shim-css' href='https://ksavipbus.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.16.5' media='all'/>
        <link rel='stylesheet' id='text-editor-style-css' href='https://ksavipbus.com/wp-content/plugins/metform/public/assets/css/text-editor.css?ver=3.6.0' media='all'/>
        <link rel='stylesheet' id='hello-elementor-css' href='https://ksavipbus.com/wp-content/themes/hello-elementor/style.min.css?ver=2.8.1' media='all'/>
        <link rel='stylesheet' id='hello-elementor-theme-style-css' href='https://ksavipbus.com/wp-content/themes/hello-elementor/theme.min.css?ver=2.8.1' media='all'/>
        <link rel='stylesheet' id='elementor-lazyload-css' href='https://ksavipbus.com/wp-content/plugins/elementor/assets/css/modules/lazyload/frontend.min.css?ver=3.16.5' media='all'/>
        <link rel='stylesheet' id='joinchat-css' href='https://ksavipbus.com/wp-content/plugins/creame-whatsapp-me/public/css/joinchat.min.css?ver=5.0.12' media='all'/>
        <link rel='stylesheet' id='call-now-button-modern-style-css' href='https://ksavipbus.com/wp-content/plugins/call-now-button/src/renderers/modern/../../../resources/style/modern.css?ver=1.4.1' media='all'/>
        <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Barlow%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CAlmarai%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.3.2' media='all'/>
        <link rel='stylesheet' id='elementor-icons-jkiticon-css' href='https://ksavipbus.com/wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticon.css?ver=2.6.2' media='all'/>
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <script src='https://ksavipbus.com/wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend-gtag.min.js?ver=8.20.1' id='monsterinsights-frontend-script-js'></script>
        <script data-cfasync="false" data-wpfc-render="false" id='monsterinsights-frontend-script-js-extra'>
            var monsterinsights_frontend = {
                "js_events_tracking": "true",
                "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx",
                "inbound_paths": "[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]",
                "home_url": "https:\/\/ksavipbus.com",
                "hash_tracking": "false",
                "v4_id": "G-4MRNEGNEB0"
            };
        </script>
        <script src='https://ksavipbus.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.16.5' id='font-awesome-4-shim-js'></script>
        <script src='https://ksavipbus.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.0' id='jquery-core-js'></script>
        <script src='https://ksavipbus.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1' id='jquery-migrate-js'></script>
        <link rel="https://api.w.org/" href="https://ksavipbus.com/wp-json/"/>
        <link rel="alternate" type="application/json" href="https://ksavipbus.com/wp-json/wp/v2/pages/1074"/>
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ksavipbus.com/xmlrpc.php?rsd"/>
        <meta name="generator" content="WordPress 6.3.2"/>
        <link rel='shortlink' href='https://ksavipbus.com/'/>
        <link rel="alternate" type="application/json+oembed" href="https://ksavipbus.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fksavipbus.com%2F"/>
        <link rel="alternate" type="text/xml+oembed" href="https://ksavipbus.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fksavipbus.com%2F&#038;format=xml"/>
        <meta name="generator" content="Elementor 3.16.5; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
        <link rel="icon" href="https://ksavipbus.com/wp-content/uploads/2023/10/cropped-sitIcon-32x32.png" sizes="32x32"/>
        <link rel="icon" href="https://ksavipbus.com/wp-content/uploads/2023/10/cropped-sitIcon-192x192.png" sizes="192x192"/>
        <link rel="apple-touch-icon" href="https://ksavipbus.com/wp-content/uploads/2023/10/cropped-sitIcon-180x180.png"/>
        <meta name="msapplication-TileImage" content="https://ksavipbus.com/wp-content/uploads/2023/10/cropped-sitIcon-270x270.png"/>
        <style id="wpforms-css-vars-root">
            :root {
                --wpforms-field-border-radius: 3px;
                --wpforms-field-background-color: #ffffff;
                --wpforms-field-border-color: rgba( 0, 0, 0, 0.25 );
                --wpforms-field-text-color: rgba( 0, 0, 0, 0.7 );
                --wpforms-label-color: rgba( 0, 0, 0, 0.85 );
                --wpforms-label-sublabel-color: rgba( 0, 0, 0, 0.55 );
                --wpforms-label-error-color: #d63637;
                --wpforms-button-border-radius: 3px;
                --wpforms-button-background-color: #00ab6b;
                --wpforms-button-text-color: #ffffff;
                --wpforms-field-size-input-height: 43px;
                --wpforms-field-size-input-spacing: 15px;
                --wpforms-field-size-font-size: 16px;
                --wpforms-field-size-line-height: 19px;
                --wpforms-field-size-padding-h: 14px;
                --wpforms-field-size-checkbox-size: 16px;
                --wpforms-field-size-sublabel-spacing: 5px;
                --wpforms-field-size-icon-size: 1;
                --wpforms-label-size-font-size: 16px;
                --wpforms-label-size-line-height: 19px;
                --wpforms-label-size-sublabel-font-size: 14px;
                --wpforms-label-size-sublabel-line-height: 17px;
                --wpforms-button-size-font-size: 17px;
                --wpforms-button-size-height: 41px;
                --wpforms-button-size-padding-h: 15px;
                --wpforms-button-size-margin-top: 10px;
            }
        </style>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>
    </head>
    <body class="rtl home page-template page-template-elementor_canvas page page-id-1074 jkit-color-scheme e-lazyload elementor-default elementor-template-canvas elementor-kit-20 elementor-page elementor-page-1074">
        <div data-elementor-type="wp-page" data-elementor-id="1074" class="elementor elementor-1074">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-8ca11fe elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8ca11fe" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d0166f9" data-id="d0166f9" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-d0dd031 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d0dd031" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                <div class="elementor-background-overlay">
                                
                                </div>
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-527ffea" data-id="527ffea" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a479324 elementor-widget elementor-widget-image" data-id="a479324" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                <a href="">
                                <img  src="IMG-20231020-WA0001.jpg" style="width: 70px;" />
                                     </a>
                                                    <style>
                                                        /*! elementor - v3.16.0 - 09-10-2023 */
                                                        .elementor-widget-image {
                                                            text-align: center
                                                        }

                                                        .elementor-widget-image a {
                                                            display: inline-block
                                                        }

                                                        .elementor-widget-image a img[src$=".svg"] {
                                                            width: 48px
                                                        }

                                                        .elementor-widget-image img {
                                                            vertical-align: middle;
                                                            display: inline-block
                                                        }
                                                    </style>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0273bde" data-id="0273bde" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-72f807a elementor-widget-mobile__width-initial elementor-widget elementor-widget-jkit_nav_menu" data-id="72f807a" data-element_type="widget" data-widget_type="jkit_nav_menu.default">
                                                <div class="elementor-widget-container">
                                                    <div class="jeg-elementor-kit jkit-nav-menu break-point-tablet submenu-click-title jeg_module_1074__6528f2a8290bc" data-item-indicator="&lt;svg aria-hidden=&quot;true&quot; class=&quot;e-font-icon-svg e-fas-chevron-down&quot; viewBox=&quot;0 0 448 512&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;&lt;path d=&quot;M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;">
                                        
                                                    <button class="jkit-hamburger-menu">
                                                            <i aria-hidden="true" class="jki jki-bars-solid"></i>
                                                        </button>
                                                        <div class="jkit-menu-wrapper">
                                                            <div class="jkit-menu-container">
                                                                
                                                                <ul id="menu-header-list-ar" class="jkit-menu jkit-menu-direction-flex jkit-submenu-position-top">
                                                                    <li id="menu-item-1149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1074 current_page_item menu-item-1149">
                                                                        <a href="https://ksavipbus.com/" aria-current="page">الرئيسية</a>
                                                                    </li>
                                                                    <li id="menu-item-784" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-784">
                                                                        <a href="">الشركات</a>
                                                                        <ul class="sub-menu">
                                                                            <li id="menu-item-785" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-785">
                                                                                <a href="">كل الشركات</a>
                                                                            </li>
                                                                            <li id="menu-item-786" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-786">
                                                                                <a href="detail.php?button=1">الجويسم</a>
                                                                            </li>
                                                                            <li id="menu-item-787" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-787">
                                                                                <a href="detail.php?button=2">السالم</a>
                                                                            </li>
                                                                            <li id="menu-item-788" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-788">
                                                                                <a href="detail.php?button=3">سابتكو</a>
                                                                            </li>
                                                                            <li id="menu-item-789" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-789">
                                                                                <a href="detail.php?button=4">الجواد </a>
                                                                            </li>
                                                                            <li id="menu-item-790" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-790">
                                                                                <a href="detail.php?button=5">سعد الحويجي </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li id="menu-item-836" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-836">
                                                                        <a href="support.php">الدعم الفني</a>
                                                                    </li>
                                                                    <li id="menu-item-752" class="pll-parent-menu-item menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-has-children menu-item-752">
                                                                        <a href="#pll_switcher">
                                                                            <img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAANlBMVEUAYjMTYDs3R0AvV0NObzE3dSoTWzhAZjgyfEY0gl1EcDFqpIhKj28TVzaLs41ol1JSaF1JW1NzUHm9AAAAPUlEQVR4AY2MtQEAMAgE447tv2xKvuQqeEtRcikZ/9p6b9X/Mdfeaw4PnPvehQhNvpcnJYiInIqraqYpyAd1AAFxIEreLQAAAABJRU5ErkJggg==" alt="العربية" width="16" height="11" style="width: 16px; height: 11px;"/>
                                                                            <span style="margin-right:0.3em;">العربية</span>
                                                                        </a>
                                                                        <ul class="sub-menu">
                                                                            <li id="menu-item-752-en" class="lang-item lang-item-6 lang-item-en lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-752-en">
                                                                                <a href="https://ksavipbus.com/en/home/" hreflang="en-US" lang="en-US">
                                                                                    <img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAmVBMVEViZsViZMJiYrf9gnL8eWrlYkjgYkjZYkj8/PujwPybvPz4+PetraBEgfo+fvo3efkydfkqcvj8Y2T8UlL8Q0P8MzP9k4Hz8/Lu7u4DdPj9/VrKysI9fPoDc/EAZ7z7IiLHYkjp6ekCcOTk5OIASbfY/v21takAJrT5Dg6sYkjc3Nn94t2RkYD+y8KeYkjs/v7l5fz0dF22YkjWvcOLAAAAgElEQVR4AR2KNULFQBgGZ5J13KGGKvc/Cw1uPe62eb9+Jr1EUBFHSgxxjP2Eca6AfUSfVlUfBvm1Ui1bqafctqMndNkXpb01h5TLx4b6TIXgwOCHfjv+/Pz+5vPRw7txGWT2h6yO0/GaYltIp5PT1dEpLNPL/SdWjYjAAZtvRPgHJX4Xio+DSrkAAAAASUVORK5CYII=" alt="English" width="16" height="11" style="width: 16px; height: 11px;"/>
                                                                                    <span style="margin-right:0.3em;">English</span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="menu-item-752-ar" class="lang-item lang-item-9 lang-item-ar current-lang menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-752-ar">
                                                                                <a href="https://ksavipbus.com/" hreflang="ar" lang="ar">
                                                                                    <img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAANlBMVEUAYjMTYDs3R0AvV0NObzE3dSoTWzhAZjgyfEY0gl1EcDFqpIhKj28TVzaLs41ol1JSaF1JW1NzUHm9AAAAPUlEQVR4AY2MtQEAMAgE447tv2xKvuQqeEtRcikZ/9p6b9X/Mdfeaw4PnPvehQhNvpcnJYiInIqraqYpyAd1AAFxIEreLQAAAABJRU5ErkJggg==" alt="العربية" width="16" height="11" style="width: 16px; height: 11px;"/>
                                                                                    <span style="margin-right:0.3em;">العربية</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li id="menu-item-1149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1074 current_page_item menu-item-1149">
                                                                        <button style="background-color: #006400;" onclick="window.location.href='dataCompanies.php'">اضافة حافلة</button> 
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            
                                                            <div style="background-color: #000 !important;" class="jkit-nav-identity-panel">
                                                                <div  class="jkit-nav-site-title">
                                                                    <a style="background-color:#006400 !important;" href="https://ksavipbus.com" class="jkit-nav-logo">
                                                                        <img decoding="async" style="width: 100px ;" src="IMG-20231020-WA0002.jpg">
                                                                    </a>
                                                                </div>
                                                                <button class="jkit-close-menu">
                                                                    <i aria-hidden="true" class="jki jki-times-solid"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="jkit-overlay">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   <a style="color: #006400 !important;" href="p1.php">
                                <img  src="IMG-20231020-WA0002.jpg" width="80px" style="margin: 25px; border-radius:  7px;"  />
                                     </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-feae2b4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="feae2b4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-e-bg-lazyload="">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4bcfebc" data-id="4bcfebc" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d42d4ea animated-slow elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-invisible elementor-widget elementor-widget-jkit_heading" data-id="d42d4ea" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div class="jeg-elementor-kit jkit-heading  align-right align-tablet- align-mobile-right jeg_module_1074_2_6528f2a83c73c">
                                        <div class="heading-section-title  display-inline-block">
                                            <h1 class="heading-title">
                                                منصة
                                                <span class="style-color" style="color: #00ab6b;">
                                                    <span>وسطاء الراحة و السعادة </span>
                                                </span>
                                                لتأجير حافلات للسياحة و الترفية
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-e00470d animated-slow elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-invisible elementor-widget elementor-widget-text-editor" data-id="e00470d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <style>
                                        /*! elementor - v3.16.0 - 09-10-2023 */
                                        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                            background-color: #00ab6b;
                                            color: #fff
                                        }

                                        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                            color: #69727d;
                                            border: 3px solid;
                                            background-color: transparent
                                        }

                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                            margin-top: 8px
                                        }

                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                            width: 1em;
                                            height: 1em
                                        }

                                        .elementor-widget-text-editor .elementor-drop-cap {
                                            float: right;
                                            text-align: center;
                                            line-height: 1;
                                            font-size: 50px
                                        }

                                        .elementor-widget-text-editor .elementor-drop-cap-letter {
                                            display: inline-block
                                        }
                                    </style>
                                    <p>يقدم موقعنا خدمة تأجير الحافلات  كما تعد من أفضل مواقع لتأجير الحافلات (الباصات) قي السعودية</p>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-ef34f21 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ef34f21" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-cd88222" data-id="cd88222" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dfe1e9f elementor-align-left animated-slow elementor-mobile-align-left elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-button" data-id="dfe1e9f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_mobile&quot;:&quot;fadeInRight&quot;}" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div  class="elementor-button-wrapper">
                                                        <a style="background-color: #006400;" class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="booking.php" target="_blank">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">احجز حافلة</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-13c3ae0 elementor-align-left animated-slow elementor-mobile-align-left elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-button" data-id="13c3ae0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_mobile&quot;:&quot;fadeInRight&quot;}" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-74a93ae elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="74a93ae" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eabdaaf" data-id="eabdaaf" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-9be9da0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9be9da0" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7823921 elementor-invisible" data-id="7823921" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-d3a6ac6 elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="d3a6ac6" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" src="https://ksavipbus.com/wp-content/uploads/elementor/thumbs/rent-car_227380-qden6hos2iyknet8emfsl2j2yygzl2kf9zcmm7tog0.png" title="rent-car_227380" alt="rent-car_227380" loading="lazy"/>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d640d0f elementor-widget elementor-widget-heading" data-id="d640d0f" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.16.0 - 09-10-2023 */
                                                        .elementor-heading-title {
                                                            padding: 0;
                                                            margin: 0;
                                                            line-height: 1
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                            color: inherit;
                                                            font-size: inherit;
                                                            line-height: inherit
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                            font-size: 15px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                            font-size: 19px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                            font-size: 29px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                            font-size: 39px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                            font-size: 59px
                                                        }
                                                    </style>
                                                    <h5 class="elementor-heading-title elementor-size-default">مجموعة متنوعة من الحافلات</h5>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e5941dc elementor-widget elementor-widget-text-editor" data-id="e5941dc" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>نحن نقدم مجموعة متنوعة من الحافلات بأحجام وسعات مختلفة لتلبية احتياجاتك. سواء كنت تخطط لرحلة صغيرة أو حدث كبير، لدينا الحافلة المثالية لك.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e68eb5a elementor-invisible" data-id="e68eb5a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;100&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-0dec4a1 elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="0dec4a1" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" src="https://ksavipbus.com/wp-content/uploads/elementor/thumbs/digitalization_7302039-qden6syucje0iqcukrbbezom3kxe5ft7bj6gdjcydc.png" title="digitalization_7302039" alt="digitalization_7302039" loading="lazy"/>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a422009 elementor-widget elementor-widget-heading" data-id="a422009" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h5 class="elementor-heading-title elementor-size-default">حافلات مجهزة بأحدث التقنيات</h5>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-87ab645 elementor-widget elementor-widget-text-editor" data-id="87ab645" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>تتميز حافلاتنا بأنها مجهزة بأحدث التقنيات والمرافق لضمان رحلة مريحة وممتعة. من تكييف الهواء الفعال إلى نظام الصوت عالي الجودة وتجهيزات الراحة الأخرى، نحن هنا لنلبي احتياجاتك بشكل كامل.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-539ea0e elementor-invisible" data-id="539ea0e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;200&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-32a2b9c elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="32a2b9c" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" src="https://ksavipbus.com/wp-content/uploads/elementor/thumbs/award_7287245-qden73b2fps62fxtwds7of2omtifi3y90ycsnkxmgw.png" title="award_7287245" alt="award_7287245" loading="lazy"/>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-89e953d elementor-widget elementor-widget-heading" data-id="89e953d" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h5 class="elementor-heading-title elementor-size-default">فريق محترف ومخلص</h5>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a79d963 elementor-widget elementor-widget-text-editor" data-id="a79d963" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>لدينا فريق يتمتع بخبرة ومهارات عالية في مجال إيجار الحافلات. سيقدم فريقنا المساعدة في تخطيط وتنظيم رحلتك بكل احترافية ودقة.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-57bee0c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="57bee0c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                   
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a145358 animated-slow elementor-invisible" data-id="a145358" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           
                           
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-d74b3bd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d74b3bd" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-64adf26" data-id="64adf26" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-1d516f5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1d516f5" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ec4d972 elementor-invisible" data-id="ec4d972" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7ce20b1 elementor-widget elementor-widget-jkit_heading" data-id="7ce20b1" data-element_type="widget" data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div class="jeg-elementor-kit jkit-heading  align-right align-tablet- align-mobile- jeg_module_1074_5_6528f2a86267c">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title">
                                                                اختر الحافلة 
                                                                <span >
                                                                    <span>وابدأ</span>
                                                                </span>
                                                                رحلتك مع شركات تأجير الحافلات لدينا
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-894e363" data-id="894e363" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-38f7df9 elementor-widget elementor-widget-text-editor" data-id="38f7df9" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>اختر الحافلة المناسبة لك، وانطلق في رحلتك بثقة، بفضل خدمات تأجير الحافلات الممتازة لدينا. مغامرتك تبدأ الآن!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-81562e6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="81562e6" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-09726d6 elementor-invisible" data-id="09726d6" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-6ad911c elementor-widget elementor-widget-image" data-id="6ad911c" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" width="901" height="674" src="IMG-20231021-WA0012.jpg" class="attachment-full size-full wp-image-377" alt="" decoding="async" srcset="IMG-20231021-WA0012.jpg 901" sizes="(max-width: 901px) 100vw, 901px"/>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-fc31633 elementor-widget elementor-widget-heading" data-id="fc31633" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default"> شركة الجويسم</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-06f8412 elementor-widget elementor-widget-text-editor" data-id="06f8412" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-77aa5f1 elementor-align-justify elementor-widget elementor-widget-button" data-id="77aa5f1" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a  style="background-color: #006400;" class="elementor-button elementor-button-link elementor-size-sm" href="detail.php?button=1">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">عرض التفاصيل</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7c8b761 elementor-invisible" data-id="7c8b761" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:240}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-8f4a310 elementor-widget elementor-widget-image" data-id="8f4a310" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" width="901" height="736" src="IMG-20231021-WA0021.jpg" class="attachment-full size-full wp-image-385" alt="" decoding="async"  sizes="(max-width: 901px) 100vw, 901px"/>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-07aac1e elementor-widget elementor-widget-heading" data-id="07aac1e" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">  شركةالسالم</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b7e6aa7 elementor-widget elementor-widget-text-editor" data-id="b7e6aa7" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-95e4204 elementor-align-justify elementor-widget elementor-widget-button" data-id="95e4204" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a style="background-color: #006400;" class="elementor-button elementor-button-link elementor-size-sm" href="detail.php?button=2">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">عرض التفاصيل</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1ffbd67 elementor-invisible" data-id="1ffbd67" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:480}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3f20196 elementor-widget elementor-widget-image" data-id="3f20196" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" width="1600" height="1200" src="IMG-20231021-WA0020.jpg" class="attachment-full size-full wp-image-404" alt="" decoding="async"  sizes="(max-width: 1600px) 100vw, 1600px"/>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e6d7678 elementor-widget elementor-widget-heading" data-id="e6d7678" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">شركة سابتكو</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6ee2e56 elementor-widget elementor-widget-text-editor" data-id="6ee2e56" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-18a82d2 elementor-align-justify elementor-widget elementor-widget-button" data-id="18a82d2" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a style="background-color: #006400;" class="elementor-button elementor-button-link elementor-size-sm" href="detail.php?button=3">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">عرض التفاصيل</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-de19f15 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="de19f15" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7b066f7 elementor-invisible" data-id="7b066f7" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:240}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7eb57db elementor-widget elementor-widget-image" data-id="7eb57db" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" width="901" height="634" src="IMG-20231021-WA0022.jpg" class="attachment-full size-full wp-image-424" alt="" decoding="async"  sizes="(max-width: 901px) 100vw, 901px"/>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2c32dc5 elementor-widget elementor-widget-heading" data-id="2c32dc5" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">شركة الجواد</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f868455 elementor-widget elementor-widget-text-editor" data-id="f868455" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6c053f7 elementor-align-justify elementor-widget elementor-widget-button" data-id="6c053f7" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a style="background-color: #006400;" class="elementor-button elementor-button-link elementor-size-sm" href="detail.php?button=4">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">عرض التفاصيل</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b613944 elementor-invisible" data-id="b613944" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-d72e181 elementor-widget elementor-widget-image" data-id="d72e181" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" width="1290" height="859" src="IMG-20231021-WA0023.jpg" class="attachment-full size-full wp-image-425" alt="" decoding="async"  sizes="(max-width: 1290px) 100vw, 1290px"/>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0b1f78d elementor-widget elementor-widget-heading" data-id="0b1f78d" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">شركة سعد الحويجي</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a15b0ef elementor-widget elementor-widget-text-editor" data-id="a15b0ef" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4ae70fc elementor-align-justify elementor-widget elementor-widget-button" data-id="4ae70fc" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a style="background-color: #006400;" class="elementor-button elementor-button-link elementor-size-sm" href="detail.php?button=5">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">عرض التفاصيل</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-eb84c40 elementor-invisible" data-id="eb84c40" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:240}">
                                        <div class="elementor-widget-wrap"></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-67f16f2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="67f16f2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-87e8d38" data-id="87e8d38" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1bd541f animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="1bd541f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h5 class="elementor-heading-title elementor-size-default">خدماتنا</h5>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9682241 elementor-widget elementor-widget-jkit_heading" data-id="9682241" data-element_type="widget" data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div class="jeg-elementor-kit jkit-heading  align-center align-tablet-center align-mobile-center jeg_module_1074_6_6528f2a870222">
                                        <div class="heading-section-title  display-inline-block">
                                            <h2 class="heading-title">
                                                نحن نقدم 
                                                <span class="style-color">
                                                    <span>أفضل الخدمات </span>
                                                </span>
                                                لك
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-64e0c9d elementor-widget elementor-widget-text-editor" data-id="64e0c9d" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="group w-full text-token-text-primary border-b border-black/10 gizmo:border-0 dark:border-gray-900/50 gizmo:dark:border-0 bg-gray-50 gizmo:bg-transparent dark:bg-[#444654] gizmo:dark:bg-transparent" data-testid="conversation-turn-229">
                                        <div class="p-4 justify-center text-base md:gap-6 md:py-6 m-auto">
                                            <div class="flex flex-1 gap-4 text-base mx-auto md:gap-6 gizmo:gap-3 gizmo:md:px-5 gizmo:lg:px-1 gizmo:xl:px-5 md:max-w-2xl lg:max-w-[38rem] gizmo:md:max-w-3xl gizmo:lg:max-w-[40rem] gizmo:xl:max-w-[48rem] xl:max-w-3xl }">
                                                <div class="relative flex w-[calc(100%-50px)] flex-col gap-1 gizmo:w-full md:gap-3 lg:w-[calc(100%-115px)] agent-turn">
                                                    <div class="flex flex-grow flex-col gap-3 max-w-full">
                                                        <div class="min-h-[20px] flex flex-col items-start gap-3 whitespace-pre-wrap break-words overflow-x-auto">
                                                            <div class="markdown prose w-full break-words dark:prose-invert light">
                                                                <p>التفاني في تقديم الخدمات الممتازة يضمن لكم أن نقدم مستوى لا مثيل له من الخدمة، مصممًا خصيصًا لتلبية وتجاوز توقعاتكم، مما يجعلنا الخيار الأمثل لجميع احتياجاتكم.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-bd1b1a7 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="bd1b1a7" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:40}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-30 elementor-inner-column elementor-element elementor-element-93c74cd" data-id="93c74cd" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-1251c00 elementor-widget__width-initial jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" data-id="1251c00" data-element_type="widget" data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1074_8_6528f2a8720f8">
                                                        <div class="jkit-icon-box-wrapper hover-from-buttom">
                                                            <div class="icon-box icon-box-header elementor-animation-">
                                                                <div class="icon style-color">
                                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-hands-wash" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M496,224a48,48,0,1,0-48-48A48,48,0,0,0,496,224ZM311.47,178.45A56.77,56.77,0,0,1,328,176a56,56,0,0,1,19,3.49l15.35-48.61A24,24,0,0,0,342,99.74c-11.53-1.35-22.21,6.44-25.71,17.51l-20.9,66.17ZM93.65,386.33c.8-.19,1.54-.54,2.35-.71V359.93a156,156,0,0,1,107.06-148l73.7-22.76L310.92,81.05a24,24,0,0,0-20.33-31.11c-11.53-1.34-22.22,6.45-25.72,17.52L231.42,173.88a8,8,0,0,1-15.26-4.83L259.53,31.26A24,24,0,0,0,239.2.15C227.67-1.19,217,6.6,213.49,17.66L165.56,169.37a8,8,0,1,1-15.26-4.82l38.56-122a24,24,0,0,0-20.33-31.11C157,10,146.32,17.83,142.82,28.9l-60,189.85L80.76,168.7A24,24,0,0,0,56.9,144.55c-13.23-.05-24.72,10.54-24.9,23.86V281.14A123.69,123.69,0,0,0,93.65,386.33ZM519.1,336H360a8,8,0,0,1,0-16H488a24,24,0,0,0,23.54-28.76C509.35,279.84,498.71,272,487.1,272H288l47.09-17.06a24,24,0,0,0-14.18-45.88L213.19,242.31A123.88,123.88,0,0,0,128,360v25.65a79.78,79.78,0,0,1,58,108.63A118.9,118.9,0,0,0,248,512H456a24,24,0,0,0,23.54-28.76C477.35,471.84,466.71,464,455.1,464H360a8,8,0,0,1,0-16H488a24,24,0,0,0,23.54-28.76C509.35,407.84,498.71,400,487.1,400H360a8,8,0,0,1,0-16H520a24,24,0,0,0,23.54-28.76C541.35,343.84,530.71,336,519.1,336ZM416,64a32,32,0,1,0-32-32A32,32,0,0,0,416,64ZM112,416a48,48,0,1,0,48,48A48,48,0,0,0,112,416Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">دورات مياه</h3>
                                                                <p class="icon-box-description">الحافلات مجهزة بدورات مياه نظيفة ومعقمة جيداً</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    



                                    <div class="elementor-column elementor-col-30 elementor-inner-column elementor-element elementor-element-058fb55" data-id="058fb55" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5e22816 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" data-id="5e22816" data-element_type="widget" data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1074_9_6528f2a8732ef">
                                                        <div class="jkit-icon-box-wrapper hover-from-buttom">
                                                            <div class="icon-box icon-box-header elementor-animation-">
                                                                <div class="icon style-color">
                                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-couch" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M160 224v64h320v-64c0-35.3 28.7-64 64-64h32c0-53-43-96-96-96H160c-53 0-96 43-96 96h32c35.3 0 64 28.7 64 64zm416-32h-32c-17.7 0-32 14.3-32 32v96H128v-96c0-17.7-14.3-32-32-32H64c-35.3 0-64 28.7-64 64 0 23.6 13 44 32 55.1V432c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-16h384v16c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16V311.1c19-11.1 32-31.5 32-55.1 0-35.3-28.7-64-64-64z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">مقاعد VIP</h3>
                                                                <p class="icon-box-description">مقاعد VIP فاخرة ومريحة وطاولات وكراسي متقابلة وجلسات كنب</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c5d1361" data-id="c5d1361" data-element_type="column">
                                        <div class="elementor-widget-wrap  elementor-element-populated">
                                            <div class="elementor-element elementor-element-5e22816 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" data-id="5e22816" data-element_type="widget" data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1074_10_6528f2a874127">
                                                        <div class="jkit-icon-box-wrapper hover-from-buttom">
                                                            <div class="icon-box icon-box-header elementor-animation-">
                                                                <div class="icon style-color">
                                                                    <i aria-hidden="true" class="jki jki-monitor-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">واي فاي وشاشات</h3>
                                                                <p class="icon-box-description">شاشات سماعات مايك بلوتوث AUX وواي فاي مجاني وأفياش لشحن الأجهزة</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-c26b57e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c26b57e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a0781b0" data-id="a0781b0" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-7dca7e3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7dca7e3" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c8c6ac2" data-id="c8c6ac2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-12fc914 elementor-widget elementor-widget-image" data-id="12fc914" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                <span style="color: #006400;font-family:'Times New Roman', Times, serif; font-size:55px;">وسطاء</span><br>
                                                    <h3 style="color: #006400; font-family:Arial, Helvetica, sans-serif"> الراحة والسعادة </h3>
                                                </div > 
                                            </div>
                                           
                                            <div class="elementor-element elementor-element-5f6b486 elementor-shape-square e-grid-align-right e-grid-align-tablet-right e-grid-align-mobile-right elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="5f6b486" data-element_type="widget" data-widget_type="social-icons.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.16.0 - 09-10-2023 */
                                                        .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                                            line-height: 1;
                                                            font-size: 0
                                                        }

                                                        .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                                            display: inline-grid
                                                        }

                                                        .elementor-widget-social-icons .elementor-grid {
                                                            grid-column-gap: var(--grid-column-gap,5px);
                                                            grid-row-gap: var(--grid-row-gap,5px);
                                                            grid-template-columns: var(--grid-template-columns);
                                                            justify-content: var(--justify-content,center);
                                                            justify-items: var(--justify-content,center)
                                                        }

                                                        .elementor-icon.elementor-social-icon {
                                                            font-size: var(--icon-size,25px);
                                                            line-height: var(--icon-size,25px);
                                                            width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                            height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
                                                        }

                                                        .elementor-social-icon {
                                                            --e-social-icon-icon-color: #fff;
                                                            display: inline-flex;
                                                            background-color:#006400;
                                                            align-items: center;
                                                            justify-content: center;
                                                            text-align: center;
                                                            cursor: pointer
                                                        }

                                                        .elementor-social-icon i {
                                                            color: var(--e-social-icon-icon-color)
                                                        }

                                                        .elementor-social-icon svg {
                                                            fill: var(--e-social-icon-icon-color)
                                                        }

                                                        .elementor-social-icon:last-child {
                                                            margin: 0
                                                        }

                                                        .elementor-social-icon:hover {
                                                            opacity: .9;
                                                            color: #fff
                                                        }

                                                        .elementor-social-icon-android {
                                                            background-color:#006400
                                                        }

                                                        .elementor-social-icon-apple {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-behance {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-bitbucket {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-codepen {
                                                            background-color: #000
                                                        }

                                                        .elementor-social-icon-delicious {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-deviantart {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-digg {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-dribbble {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-elementor {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-envelope {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-facebook,.elementor-social-icon-facebook-f {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-flickr {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-foursquare {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-free-code-camp,.elementor-social-icon-freecodecamp {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-github {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-gitlab {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-globe {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-google-plus,.elementor-social-icon-google-plus-g {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-houzz {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-instagram {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-jsfiddle {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-link {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-linkedin,.elementor-social-icon-linkedin-in {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-medium {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-meetup {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-mixcloud {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-odnoklassniki {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-pinterest {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-product-hunt {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-reddit {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-rss {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-shopping-cart {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-skype {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-slideshare {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-snapchat {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-soundcloud {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-spotify {
                                                            background-color: #2ebd59
                                                        }

                                                        .elementor-social-icon-stack-overflow {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-steam {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-stumbleupon {
                                                            background-color: #eb4924
                                                        }

                                                        .elementor-social-icon-telegram {
                                                            background-color: #2ca5e0
                                                        }

                                                        .elementor-social-icon-thumb-tack {
                                                            background-color: #1aa1d8
                                                        }

                                                        .elementor-social-icon-tripadvisor {
                                                            background-color: #589442
                                                        }

                                                        .elementor-social-icon-tumblr {
                                                            background-color: #35465c
                                                        }

                                                        .elementor-social-icon-twitch {
                                                            background-color: #6441a5
                                                        }

                                                        .elementor-social-icon-twitter {
                                                            background-color: #1da1f2
                                                        }

                                                        .elementor-social-icon-viber {
                                                            background-color: #665cac
                                                        }

                                                        .elementor-social-icon-vimeo {
                                                            background-color: #1ab7ea
                                                        }

                                                        .elementor-social-icon-vk {
                                                            background-color: #45668e
                                                        }

                                                        .elementor-social-icon-weibo {
                                                            background-color: #dd2430
                                                        }

                                                        .elementor-social-icon-weixin {
                                                            background-color: #31a918
                                                        }

                                                        .elementor-social-icon-whatsapp {
                                                            background-color: #25d366
                                                        }

                                                        .elementor-social-icon-wordpress {
                                                            background-color: #21759b
                                                        }

                                                        .elementor-social-icon-xing {
                                                            background-color: #026466
                                                        }

                                                        .elementor-social-icon-yelp {
                                                            background-color: #af0606
                                                        }

                                                        .elementor-social-icon-youtube {
                                                            background-color: #cd201f
                                                        }

                                                        .elementor-social-icon-500px {
                                                            background-color: #006400
                                                        }

                                                        .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                                            border-radius: 10%
                                                        }

                                                        .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                                            border-radius: 50%
                                                        }
                                                    </style>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor  elementor-inner-column elementor-element elementor-element-f0fb2da" data-id="f0fb2da" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-780281a elementor-widget elementor-widget-heading" data-id="780281a" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">الدعم الفني</h4>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a3d0c65 elementor-widget-tablet__width-initial elementor-align-right elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="a3d0c65" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <link rel="stylesheet" href="https://ksavipbus.com/wp-content/plugins/elementor/assets/css/widget-icon-list-rtl.min.css">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                              
                                                            </span>
                                                            <span class="elementor-icon-list-text"> وسطاء الراحة والسعادة</span>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-64f3617" data-id="64f3617" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2149a5c elementor-widget elementor-widget-heading" data-id="2149a5c" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">روابط سريعة</h4>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c92ae11 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="c92ae11" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <a href="https://ksavipbus.com/">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-home" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
                                                                    </svg>
                                                                </span>
                                                                <span class="elementor-icon-list-text">الرئيسية</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="https://ksavipbus.com/%d8%ad%d8%a7%d9%81%d9%84%d8%a7%d8%aa%d9%86%d8%a7/">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-right" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                                                    </svg>
                                                                </span>
                                                                <span class="elementor-icon-list-text">حافلاتنا</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="https://ksavipbus.com/%d9%85%d9%86-%d9%86%d8%ad%d9%86/">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-right" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                                                    </svg>
                                                                </span>
                                                                <span class="elementor-icon-list-text">من نحن</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="support.php">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-right" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                                                    </svg>
                                                                </span>
                                                                <span class="elementor-icon-list-text">الدعم الفني</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-5f673f6 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5f673f6" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6783abe" data-id="6783abe" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-bd1ef50 elementor-widget elementor-widget-text-editor" data-id="bd1ef50" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>تم التطوير بواسطة شركة :وسطاء الراحة والسعادة</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-dc174c0" data-id="dc174c0" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ebdacf1 elementor-widget elementor-widget-text-editor" data-id="ebdacf1" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>حقوق النشر © 2023. جميع الحقوق محفوظة</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script type='text/javascript'>
            const lazyloadRunObserver = ()=>{
                const dataAttribute = 'data-e-bg-lazyload';
                const lazyloadBackgrounds = document.querySelectorAll(`[${dataAttribute}]:not(.lazyloaded)`);
                const lazyloadBackgroundObserver = new IntersectionObserver((entries)=>{
                    entries.forEach((entry)=>{
                        if (entry.isIntersecting) {
                            let lazyloadBackground = entry.target;
                            const lazyloadSelector = lazyloadBackground.getAttribute(dataAttribute);
                            if (lazyloadSelector) {
                                lazyloadBackground = entry.target.querySelector(lazyloadSelector);
                            }
                            if (lazyloadBackground) {
                                lazyloadBackground.classList.add('lazyloaded');
                            }
                            lazyloadBackgroundObserver.unobserve(entry.target);
                        }
                    }
                    );
                }
                ,{
                    rootMargin: '100px 0px 100px 0px'
                });
                lazyloadBackgrounds.forEach((lazyloadBackground)=>{
                    lazyloadBackgroundObserver.observe(lazyloadBackground);
                }
                );
            }
            ;
            const events = ['DOMContentLoaded', 'elementor/lazyload/observe', ];
            events.forEach((event)=>{
                document.addEventListener(event, lazyloadRunObserver);
            }
            );
        </script>
            
        <!-- Call Now Button 1.4.1 (https://callnowbutton.com) [renderer:modern]-->
        
        <link rel='stylesheet' id='jeg-dynamic-style-css' href='https://ksavipbus.com/wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles.css?ver=1.3.0' media='all'/>
        <link rel='stylesheet' id='e-animations-css' href='https://ksavipbus.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.16.5' media='all'/>
        <script src='https://ksavipbus.com/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=1.0.0' id='hello-theme-frontend-js'></script>
        <script src='https://ksavipbus.com/wp-content/plugins/creame-whatsapp-me/public/js/joinchat.min.js?ver=5.0.12' id='joinchat-js'></script>
        <script src='https://ksavipbus.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.16.5' id='elementor-webpack-runtime-js'></script>
        <script src='https://ksavipbus.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.16.5' id='elementor-frontend-modules-js'></script>
        <script src='https://ksavipbus.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
        <script src='https://ksavipbus.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2' id='jquery-ui-core-js'></script>
        <script id="elementor-frontend-js-before">
            var elementorFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": false,
                    "isScriptDebug": false
                },
                "i18n": {
                    "shareOnFacebook": "\u0634\u0627\u0631\u0643 \u0639\u0644\u0649 \u0641\u064a\u0633\u0628\u0648\u0643",
                    "shareOnTwitter": "\u0634\u0627\u0631\u0643 \u0639\u0644\u0649 \u062a\u0648\u064a\u062a\u0631",
                    "pinIt": "\u062b\u0628\u062a\u0647\u0627 ",
                    "download": "\u062a\u062d\u0645\u064a\u0644",
                    "downloadImage": "\u062a\u0646\u0632\u064a\u0644 \u0627\u0644\u0635\u0648\u0631\u0629",
                    "fullscreen": "\u0639\u0631\u0636 \u0634\u0627\u0634\u0629 \u0643\u0627\u0645\u0644\u0629",
                    "zoom": "\u062a\u0643\u0628\u064a\u0631",
                    "share": "\u0645\u0634\u0627\u0631\u0643\u0629",
                    "playVideo": "\u062a\u0634\u063a\u064a\u0644 \u0627\u0644\u0641\u064a\u062f\u064a\u0648",
                    "previous": "\u0627\u0644\u0633\u0627\u0628\u0642",
                    "next": "\u0627\u0644\u062a\u0627\u0644\u064a",
                    "close": "\u0625\u063a\u0644\u0627\u0642",
                    "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                    "a11yCarouselPrevSlideMessage": "Previous slide",
                    "a11yCarouselNextSlideMessage": "Next slide",
                    "a11yCarouselFirstSlideMessage": "This is the first slide",
                    "a11yCarouselLastSlideMessage": "This is the last slide",
                    "a11yCarouselPaginationBulletMessage": "Go to slide"
                },
                "is_rtl": true,
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1025,
                    "xl": 1440,
                    "xxl": 1600
                },
                "responsive": {
                    "breakpoints": {
                        "mobile": {
                            "label": "Mobile Portrait",
                            "value": 767,
                            "default_value": 767,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "mobile_extra": {
                            "label": "Mobile Landscape",
                            "value": 880,
                            "default_value": 880,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "tablet": {
                            "label": "Tablet Portrait",
                            "value": 1024,
                            "default_value": 1024,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "tablet_extra": {
                            "label": "Tablet Landscape",
                            "value": 1200,
                            "default_value": 1200,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "laptop": {
                            "label": "\u062d\u0627\u0633\u0648\u0628 \u0645\u062d\u0645\u0648\u0644",
                            "value": 1366,
                            "default_value": 1366,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "widescreen": {
                            "label": "\u0627\u0644\u0634\u0627\u0634\u0629 \u0627\u0644\u0639\u0631\u064a\u0636\u0629",
                            "value": 2400,
                            "default_value": 2400,
                            "direction": "min",
                            "is_enabled": false
                        }
                    }
                },
                "version": "3.16.5",
                "is_static": false,
                "experimentalFeatures": {
                    "e_dom_optimization": true,
                    "e_optimized_assets_loading": true,
                    "e_optimized_css_loading": true,
                    "e_font_icon_svg": true,
                    "additional_custom_breakpoints": true,
                    "container": true,
                    "e_swiper_latest": true,
                    "container_grid": true,
                    "hello-theme-header-footer": true,
                    "editor_v2": true,
                    "landing-pages": true,
                    "nested-elements": true,
                    "e_lazyload": true,
                    "e_global_styleguide": true
                },
                "urls": {
                    "assets": "https:\/\/ksavipbus.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "swiperClass": "swiper",
                "settings": {
                    "page": [],
                    "editorPreferences": []
                },
                "kit": {
                    "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                    "global_image_lightbox": "yes",
                    "lightbox_enable_counter": "yes",
                    "lightbox_enable_fullscreen": "yes",
                    "lightbox_enable_zoom": "yes",
                    "lightbox_enable_share": "yes",
                    "lightbox_title_src": "title",
                    "lightbox_description_src": "description",
                    "hello_header_logo_type": "title",
                    "hello_header_menu_layout": "horizontal",
                    "hello_footer_logo_type": "logo"
                },
                "post": {
                    "id": 1074,
                    "title": "%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9%20-%20Ksa%20Vip%20Bus",
                    "excerpt": "",
                    "featuredImage": false
                }
            };
        </script>
        <script src='https://ksavipbus.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.16.5' id='elementor-frontend-js'></script>
        <script id="elementor-frontend-js-after">
            var jkit_ajax_url = "https://ksavipbus.com/?jkit-ajax-request=jkit_elements"
              , jkit_nonce = "27d44ed95b";
        </script>
        <script src='https://ksavipbus.com/wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-element.js?ver=2.6.2' id='jkit-sticky-element-js'></script>
        <script src='https://ksavipbus.com/wp-content/plugins/jeg-elementor-kit/assets/js/elements/nav-menu.js?ver=2.6.2' id='jkit-element-navmenu-js'></script>
        <script src='https://ksavipbus.com/wp-content/plugins/jeg-elementor-kit/assets/js/elements/fun-fact.js?ver=2.6.2' id='jkit-element-funfact-js'></script>
        <script src='https://ksavipbus.com/wp-includes/js/underscore.min.js?ver=1.13.4' id='underscore-js'></script>
        <script id='wp-util-js-extra'>
            var _wpUtilSettings = {
                "ajax": {
                    "url": "\/wp-admin\/admin-ajax.php"
                }
            };
        </script>
        <script src='https://ksavipbus.com/wp-includes/js/wp-util.min.js?ver=6.3.2' id='wp-util-js'></script>
        <script id='wpforms-elementor-js-extra'>
            var wpformsElementorVars = {
                "captcha_provider": "recaptcha",
                "recaptcha_type": "v2"
            };
        </script>
        <script src='https://ksavipbus.com/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.8.4' id='wpforms-elementor-js'></script>
        <script>
            (function() {
                var expirationDate = new Date();
                expirationDate.setTime(expirationDate.getTime() + 31536000 * 1000);
                document.cookie = "pll_language=ar; expires=" + expirationDate.toUTCString() + "; path=/; secure; SameSite=Lax";
            }());
        </script>
    </body>
</html>
<!-- Page cached by LiteSpeed Cache 5.5 on 2023-10-13 07:32:56 -->
