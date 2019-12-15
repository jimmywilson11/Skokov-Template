(function () {
            var setting = {"height":647,"width":1920,"zoom":15,"queryString":"ул. Горького, 60, Черкассы, Черкасская область, Украина","place_id":"EmHRg9C7LiDQk9C-0YDRjNC60L7Qs9C-LCA2MCwg0KfQtdGA0LrQsNGB0YHRiywg0KfQtdGA0LrQsNGB0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsINCj0LrRgNCw0LjQvdCwIjASLgoUChIJVenL4qdL0UAR35l8ffIfgyQQPCoUChIJfSwH4adL0UARI3siqB7sRyY","satellite":false,"centerCoord":[49.42597066854488,32.09476404999998],"cid":"0xe1612c7328a3d9ab","lang":"ru","cityUrl":"/ukraine/cherkasy-35348","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"131150"};
            var d = document;
            var s = d.createElement('script');
            s.src = 'https://1map.com/js/script-for-user.js?embed_id=131150';
            s.async = true;
            s.onload = function (e) {
              window.OneMap.initMap(setting)
            };
            var to = d.getElementsByTagName('script')[0];
            to.parentNode.insertBefore(s, to);
          })();