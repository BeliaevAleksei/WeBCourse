var UControl = UControl || function(){
	console.log("ucontrol");
	this.start = function(map, dom, post){
		console.log("ucontrol start post");
		post.stations();
		console.log("ucontrol dom");
		// dom.add_to_select();

	}
}