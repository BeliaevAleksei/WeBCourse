var UMap = UMap || function()
{
	var
	map = L.sm.map('map', {center: configs.center, zoom: 13}),
	stations = [],
	routesList = [],
	geoJsonCssData;

	 map.on('zoomend', function() {
         var currentZoom = map.getZoom();
         if(currentZoom >= 15) {
           $(".leaflet-marker-pane").show();
         }
         else {
           $(".leaflet-marker-pane").hide();
         }
     });

	var get_station_list = function(){
		return stationList;
	}

	this.set_routes= function(routes){
		for(var i in routes){
			routesList.push(routes[i].coordinates);
		}
	}

	this.delete_route = function (item){
		map.removeLayer(item);
	}

	this.add_on_map = function (item){
		return L.sm.geoJson(item).addTo(map);
	}

	function get_location (dom, stations, direction) {
		return function(ev) {
			for (var i in stations){
				if (stations[i].id == ev.relatedTarget.options.contextmenuItems[0].index){
					dom.select_station(stations[i].id, stations, direction);
				}
			}
		}
    }

	this.draw_stations = function(dom, stations){
		for (let i in stations){
			var stationLatitude = stations[i].latitude;
	    	var stationLongitude = stations[i].longitude;
	    	var myMarkerStation = L.sm.marker([stationLatitude, stationLongitude], {
		        iconUrl: 'assets/images/Station.png',
		        iconSize: [15, 15],
		        iconAnchor: [10, 10],
		        title:stations[i].name,
		        contextmenu: true,
		        contextmenuWidth: 140,
		        contextmenuItems: [{
		              text: 'Отсюда',
		              index: stations[i].id,
		              callback: get_location(dom, stations, "from"),
		          }, {

		              text: 'Сюда',
		              index: stations[i].id,
		              callback: get_location(dom, stations, "to")
		          }]
		    });
		    myMarkerStation.addTo(map);
	    }
	    $(".leaflet-marker-pane").hide();
	}

	var colors = ["#DD2222", "#4dea0e", "#0e8cea", "#b301f2", "#01d4f2"];

	function add_in_data(route, indexColor){
		var i = indexColor % 5;
		var item = {
			"type": "Feature",
        	"properties": {
            "title": "<ЛЕХА ВСТАВЬ СЮДА № МАРIУРТА>"
        	},
        "geometry": {
            "type": "MultiLineString",
            "coordinates": route
        },
        "style": {
            "weight": 4,
            "color": colors[i],
            "opacity": 0.5
        },
        "popupTemplate": "<i>{title}</i>"}
		geoJsonCssData.features.push(item);
	}

	function fill_one_route(route, indexColor){
		var route_list =[];
		for(var j in route){
			route_list.push([route[j].longitude,route[j].latitude]);
		}
		add_in_data([route_list], indexColor);
	}

	this.draw_routes = function(id){
		if (geoJsonCssData){
			this.delete_route(geoJsonCssData);
		}
		geoJsonCssData = {"type": "FeatureCollection",
    	"features": []};
		for(var i in routesList[id]){
			fill_one_route(routesList[id][i], i);
		}
		geoJsonCssData = this.add_on_map(geoJsonCssData);
	}
}