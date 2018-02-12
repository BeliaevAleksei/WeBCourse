var UDom = UDom || function(){
    var $from, $to;
   this.add_to_select = function(stationList) {
        add_item_select("#select-station-from", stationList);
        add_item_select("#select-station-to", stationList)
        $from = $('#select-station-from').selectize(); 
        $to = $('#select-station-to').selectize();
	}

    var add_item_select = function(name, stationList){
        for(let field in stationList){
            $(name).append($("<option value=" + stationList[field].id +">"+ stationList[field].name +"</option>"));
        }
    }

    this.get_form = function(){
        return {
            from:$( "#select-station-from option:selected" ).val(),
            to:$( "#select-station-to option:selected" ).val(),
            types:{"Ав": $("#bus").prop('checked'), 
            "Тр": $("#trolley").prop('checked'), 
            "Тм":$("#tram").prop('checked'),
            "Мт":$("#taxi").prop('checked')},
            max:$("#numTransfer").val()
        };
    }

    this.select_station = function (id, stations, direction) {
        if (direction == "from"){
            $from[0].selectize.setValue(id);
        }
        else{
            $to[0].selectize.setValue(id) ;
        }
    }

    var icons = {
      "Мт":"class=\"img taxi\"",
      "Ав":"class=\"img bus\"",
      "Тм":"class=\"img tram\"",
      "Тр":"class=\"img trolleybus\""
    }
    this.fill_routs = function (routs) {
        if (routs.length > 5){
          routs.length = 5;
        }
        $("#routes").empty();
        for (var i in routs){
            $("#routes").append($("<div class=\"callout\" id=\"route"+ i +"\"> <p> Количество пересадок: " + (routs[i].transports.length - 1) +"</p> </div>"));
            $("#route"+ i).append($("<ul class=\"menu\"></ul>"));
            for(var j in routs[i].transports)
              {
                $("#route"+ i + " .menu").append($("<li><div " + icons[routs[i].transports[j].mode] +"></div></li>"));
              }
            $("#route"+ i + " .menu").append($("<ul class=\"vertical menu accordion-menu\" data-accordion-menu></ul>"));
            $("#route"+ i + " .vertical.menu.accordion-menu").append("<li><a href=\"#\">Подробнее</a><ul class=\"menu vertical nested\"</ul></li>");
            for(var j in routs[i].transports){
              $("#route"+ i + " .vertical.menu.accordion-menu"+" .menu.vertical.nested").append(routs[i].transports[j].mode + ": " + 
                routs[i].transports[j].name +"\n");
            }
            $("#route"+ i + " .vertical.menu.accordion-menu")
            .append("<input  class=\"button showRoute\" name =\""+ i +"\" value=\"Показать на карте\" type=\"button\" href=\"#\" >");
        }        
    }
}