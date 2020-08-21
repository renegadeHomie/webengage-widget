<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDK Production</title>
    <script id='_webengage_script_tag' type='text/javascript'>
        var webengage; !function (w, e, b, n, g) {
            function o(e, t) {
            e[t[t.length - 1]] = function () {
                r.__queue.push([t.join("."),
                    arguments])
            }
            } var i, s, r = w[b], z = " ", l = "init options track screen onReady".split(z), a = "feedback survey notification".split(z), c = "options render clear abort".split(z), p = "Open Close Submit Complete View Click".split(z), u = "identify login logout setAttribute".split(z); if (!r || !r.__v) { for (w[b] = r = { __queue: [], __v: "6.0", user: {} }, i = 0; i < l.length; i++)o(r, [l[i]]); for (i = 0; i < a.length; i++) { for (r[a[i]] = {}, s = 0; s < c.length; s++)o(r[a[i]], [a[i], c[s]]); for (s = 0; s < p.length; s++)o(r[a[i]], [a[i], "on" + p[s]]) } for (i = 0; i < u.length; i++)o(r.user, ["user", u[i]]); setTimeout(function () { var f = e.createElement("script"), d = e.getElementById("_webengage_script_tag"); f.type = "text/javascript", f.async = !0, f.src = ("https:" == e.location.protocol ? "https://ssl.widgets.webengage.com" : "http://49f78ceb7bcd.ngrok.io") + "/js/webengage-min-v-6.0.js", d.parentNode.insertBefore(f, d) }) }
        }(window, document, "webengage"); webengage.init("~1341051ac");
    </script>
    <script>
        !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on","addSourceMiddleware","addIntegrationMiddleware","setAnonymousId","addDestinationMiddleware"];analytics.factory=function(e){return function(){var t=Array.prototype.slice.call(arguments);t.unshift(e);analytics.push(t);return analytics}};for(var e=0;e<analytics.methods.length;e++){var key=analytics.methods[e];analytics[key]=analytics.factory(key)}analytics.load=function(key,e){var t=document.createElement("script");t.type="text/javascript";t.async=!0;t.src="https://cdn.segment.com/analytics.js/v1/" + key + "/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.13.1";
            analytics.load("EMIxOvRurVG01BDrYolCPkgUMFF3by8S");
            analytics.page();
        }}();
    </script>
</head>

<body>
    WebEngage Web Vitals Testing!
    <script>
        webengage.onReady(function () {
            webengage.track('web-vitals-testing');
        })
    </script>
</body>

</html>