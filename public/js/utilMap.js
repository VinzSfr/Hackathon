function loadMap() {
    // Initialize Google Maps
    const mapOptions = {
        center:new google.maps.LatLng(50.5929, 4.3227),
        zoom: 12
    }
    const map = new google.maps.Map(document.getElementById("map"), mapOptions);

    // Load JSON Data
    var pointMarkers = getJSONMarkers();

    var latPositions = getLatPositions(pointMarkers);

    var lngPositions = getLngPositions(pointMarkers);
    var names = getStrings(pointMarkers, "name");
    var descriptions = getStrings(pointMarkers, "description");

    var imageUrls = getStrings(pointMarkers, "imageUrl");
    var imageDescriptions = getStrings(pointMarkers, "imageDescription");
    var companyNames = getStrings(pointMarkers, "companyName");
    var addresses = getStrings(pointMarkers, "address");
    var countries = getStrings(pointMarkers, "country");
    var phoneNumbers = getStrings(pointMarkers, "phoneNumber");
    var emails = getStrings(pointMarkers, "email");
    var websites = getStrings(pointMarkers, "website");

    // Initialize Google Markers
    for(let i = 0 ; i< pointMarkers.length; i++) {
        let marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(latPositions[i], lngPositions[i]),
            title: names[i]
        })
        marker.addListener('click', function() {
            map.setZoom(16);
            map.setCenter(marker.getPosition());

            var infowindow = new google.maps.InfoWindow({
                content: '<div id="iw-container">' +
                    '<div class="iw-title">'+names[i]+'</div>' +
                    '<div class="iw-subTitle">addresse</div>' +
                    '<p>'+companyNames[i]+'<br>'+addresses[i]+'<br>'+
                    '<div class="iw-bottom-gradient"></div>' +
                    '</div>',
                position: new google.maps.LatLng(latPositions[i], lngPositions[i])
            });
            infowindow.open(map);

        });
    }
}

function getJSONMarkers() {

    const markers = document.getElementById("json").textContent;
    console.log(markers);
    var matches = markers.match(/{\n*\s*name:\s*".*",\n*\s*location:\s* .*\n*\s*description:\s*".*"\n*\s*,\n*\s*imageUrl:\s*".*",\n*\s*imageDescription:\s*".*"\n*\s*,\n*\s*companyName:\s*".*",\n*\s*address:\s*".*"\n*\s*,\n*\s*country:\s*".*"\n*\s*,\n*\s*phoneNumber:\s*".*"\n*\s*,\n*\s*email:\s*".*"\n*\s*,\n*\s*website:\s*".*"\n*\s*}/gm);

    var result = "";
    $.each(matches, function (aa, bb) {
        result += bb;
    });

    return result;
}

function getLatPositions(pointMarkers){
    var positions = pointMarkers.match(/location:\s*\[\d*.\d*,/gm);

    for (var i = 0 ; i < positions.length; i++){
        var begin = positions[i].indexOf("[");
        var end = positions[i].indexOf(",");

        positions[i] = (positions[i].substring(begin+1,end));

    }
    return positions;
}


function getLngPositions(pointMarkers){

    var positions = pointMarkers.match(/location:\s*\[.*,.*]/gm);
    for (var i = 0 ; i < positions.length; i++){
        var begin = positions[i].indexOf(",");
        var end = positions[i].indexOf("]");
        positions[i] = Number(positions[i].substring(begin+1,end));
    }


    return positions;
}


function getStrings(pointMarkers, describer) {
    var regexExpression =".*" + describer + ":.*\".*\"";
    var regex = new RegExp(regexExpression, "gm");
    var strings = pointMarkers.match(regex);

    for (var i = 0 ; i < strings.length; i++) {

        var begin = strings[i].indexOf("\"");
        var end = strings[i].lastIndexOf("\"");
        strings[i] = strings[i].substring(begin + 1, end);

    }
    return strings;
}