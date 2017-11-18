var UDom = UDom || function(map){
	console.log("dom");
   this.add_to_select = function() {
   		console.log("UDom");
        for(let field in map.get_station_list){
            let element = document.getElementById("select-station-from");
            let option = document.createElement("option");     
            option.text = map.get_station_list[field].name;
            option.value = map.get_station_list[field].id;
            element.add(option);
        }
	}
}