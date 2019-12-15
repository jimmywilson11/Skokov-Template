(function () {
            var setting = {"height":647,"width":1920,"zoom":16,"queryString":"вулиця Горького, 60, Cherkasy, Cherkasy Oblast, Ukraine","place_id":"EkXQstGD0LvQuNGG0Y8g0JPQvtGA0YzQutC-0LPQviwgNjAsIENoZXJrYXN5LCBDaGVya2FzeSBPYmxhc3QsIFVrcmFpbmUiMBIuChQKEglV6cvip0vRQBHfmXx98h-DJBA8KhQKEgl9LAfhp0vRQBEjeyKoHuxHJg","satellite":false,"centerCoord":[49.42597066854488,32.09476404999998],"cid":"0xe1612c7328a3d9ab","lang":"en","cityUrl":"/ukraine/cherkasy-35348","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"131152"};
            var d = document;
            var s = d.createElement('script');
            s.src = 'https://1map.com/js/script-for-user.js?embed_id=131152';
            s.async = true;
            s.onload = function (e) {
              window.OneMap.initMap(setting)
            };
            var to = d.getElementsByTagName('script')[0];
            to.parentNode.insertBefore(s, to);
          })();