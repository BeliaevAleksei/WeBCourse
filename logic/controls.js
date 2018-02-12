var UControl = UControl || function(map, dom, post){
	console.log("ucontrol");

	var fill_select_and_map = function(map, dom, post, callback) {
		var res = post.get_stations();
		map.draw_stations(dom, res);
		callback(res);
	};

	this.start = function(map, dom, post){
		fill_select_and_map(map, dom, post, function(res){
			dom.add_to_select(res);
		});
	}

	$('form').submit((e) =>
        {
        	e.preventDefault();
        	var ur_routs = post.set_route(dom.get_form());
        	dom.fill_routs(ur_routs);
        	map.set_routes(ur_routs);
        	$(document).foundation();
        	$('.showRoute').bind('click', function(){
				map.draw_routes(this.name);
    		});
        });
}
