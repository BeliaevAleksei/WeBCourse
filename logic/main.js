function on_page_load()
{
  	var my_map = new UMap();
  	var dom = new UDom(my_map);
  	var post = new UPost(my_map, dom);
  	var controls = new UControl(my_map, dom, post);
  	controls.start(my_map, dom, post);
}


if (document.readyState === 'complete'){
  on_page_load();
}
else {
  window.addEventListener("load", on_page_load);
}