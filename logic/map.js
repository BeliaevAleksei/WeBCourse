var UMap = UMap || function()
{
	console.log("map");
	var 
	map = L.sm.map('map', {center: [57.631754, 39.872353], zoom: 12}),
	stationList,
	routsList = [];

	get_station_list = function(){
		console.log("map get");
		return stationList;
	}

	this.add_on_map = function (geoJsonCssData){
		console.log("map add");
		return L.sm.geoJson(geoJsonCssData).addTo(map);
	}

	this.set_station_list = function(stList){
		console.log("map set");
		stationList = stList;
	}

}