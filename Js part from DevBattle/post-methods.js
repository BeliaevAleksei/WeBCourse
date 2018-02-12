var UPost = UPost || function(map, dom) {
	this.get_stations = function(){
        var res;
        $.ajax({
            type: 'GET',
            async: false,
            url: '/api/stations/list',
            contentType: 'application/json',
            success(data)
            {
                res = data.stations;
                console.log(res);
            }
        });
        return res
    }
    this.set_route = function(output){
        var res;
        $.ajax({
            type: 'POST',
            async: false,
            url: '/api/routes/find',
            data: output,
            success(data)
            {
                res = data;
                console.log(res);
            }

        })
        .always(function(data){
            console.log(data);
        });
        return res
    }


}
