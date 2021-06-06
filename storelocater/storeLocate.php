<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <title>Using MySQL and PHP with Google Maps</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

<html>
  <body>
    <div id="map"></div>
    <script>
      var customLabel = {
          mall : {
            label: 'M'
          },
          store : {
            label: 'S'
          },
          retail : {
              label: 'R'
          }

        };

        function initMap() {
        
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(21.7624915,72.1521118),
          zoom: 15
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('http://localhost/ESST/xmlDb.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {

              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));

              var link = document.createElement('a');
              link.href = 'https://www.google.com/maps?saddr=My%20Location&daddr='+address;
              link.target = '_blank';
              link.innerText = 'Get directions';
              infowincontent.appendChild(link);
              infowincontent.appendChild(document.createElement('br'));

              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: {
                  color: 'red',
                  fontWeight: 'bold',
                  text: name,
                },  
                icon: {
                  labelOrigin: new google.maps.Point(11, 50),
                  url: 'https://raw.githubusercontent.com/Concept211/Google-Maps-Markers/master/images/marker_red.png',
                  size: new google.maps.Size(22, 40),
                  origin: new google.maps.Point(0, 0),
                  anchor: new google.maps.Point(11, 40),
                }, 
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAU30c58IiAUz7iJ-M0t1ixGr1eMHAAKCI&callback=initMap">
    </script>
  </body>
</html>