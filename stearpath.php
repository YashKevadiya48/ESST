<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>
        Steerpath Maps
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://s3-eu-west-1.amazonaws.com/steerpath-web-sdk/releases/core/3.8.6/steerpath-core.min.js"></script>
<link href="https://s3-eu-west-1.amazonaws.com/steerpath-web-sdk/releases/core/3.8.6/steerpath-core.css" rel="stylesheet">

    <style>
        body { margin:0; padding:0; }
        #mapboxMap { position:absolute; width:100%; height: 100%}
    </style>

</head>

<body>

    <div id="mapboxMap"></div>

    <script>
        let apiKey = "eyJhbGciOiJSUzI1NiJ9.eyJpYXQ6IjoxNTY4MDI5MTc0LCJqdGkiOiJiYTlhYjA1NC1hODNjLTQwNWYtYmI0Mi0wZDE4MmMwYzAwYWEiLCJzY29wZXMiOiJ2Mi0zYWU0MTdiYS0wMzg3LTRlNzktYTUxOS03ZWU5MjE3NmRjNjgtcHVibGlzaGVkOnIiLCJzdWIiOiJ2Mi0zYWU0MTdiYS0wMzg3LTRlNzktYTUxOS03ZWU5MjE3NmRjNjgifQ.PpVIhgyZvSU00uz0IG42ii59_FNIZkkPDfCdHNbPUDFcSEvU9wRh0UPIax-fzMuoG7rYmJ4rMBn7v2TN3-dvb25lmfaUkQ53cWU_Fir8w1ljEL_1PnmtgtqDOO9KTWKXB4dwZjdUtMG8sJBD3WLanJJ94cS2Uk2J3_7fSgSr2gZU3JRBvrZVtWnriOItgM0sX08wJEN92iWNvpEQLDDTC32SEIt2GHQvBEuPex6QmUux3FALdN_NL73XTDsBqE11ZGFc2Cj6MVI70BX8peHeeT-0hPHg_02JrHOW4y7SXvX6buqzmyT8Kk1ikol7bWgewKIc5ZlOD1CNOqb77Da5qQ";
        
        let styleFile = "default.json"

        let styleUrl = "https://mapdata.eu.steerpath.com/style/"+styleFile+"?access_token="+apiKey

        let mapboxMap = new mapboxgl.Map({
            container: 'mapboxMap',
            style: styleUrl,
            center: [24.81249496, 60.22095443],
            zoom: 8,
            customAttribution: '© <a target="_blank" href="https://www.steerpath.com/">Esst</a>',
        });
        let options = {
		    "showFloorsWithSameIndex": false,
    		"inspectionZoomLevel": 14,
	    }


        //create instance of SteerpathMap
        let steerpathMap = new steerpath.SteerpathMap(mapboxMap, apiKey, options);
        //create floor switcher control and add it to the map
        let floorSwitcher = new steerpath.FloorSwitcherControl(steerpathMap);
        mapboxMap.addControl(floorSwitcher, 'bottom-right');

    </script>
    

</body>

</html>