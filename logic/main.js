function on_page_load()
{
	console.log("on_load");
  	var my_map = new UMap();
  	var dom = new UDom(my_map);
  	var post = new UPost(my_map, dom);
  	var controls = new UControl();
  	console.log("after");
  	controls.start(my_map, dom, post);
  	console.log("end");
}


if (document.readyState === 'complete'){
  on_page_load();
}
else {
  window.addEventListener("load", on_page_load);
}