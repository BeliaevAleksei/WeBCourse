var UPost = UPost || function(map, dom) {
	this.stations = function(){
        $(document).ready((e) =>
        {
            $.ajax({
                type: 'GET',
                url: 'http://localhost:8080/api/stations/list',
                contentType: 'application/json',
                success(data)
                {
                    console.log("post stations");
                    map.set_station_list(data.stations);
                    console.log("post stations after");
                    dom.add_to_select();
                }
            });   
        });
    }
}