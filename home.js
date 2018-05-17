//$("#content").append($("<h1>").text("Bienvenu sur RestauRaieO"));
var bootstrap = $("#content").append(
           $("<div>").addClass("container-fluid").append(
                $("<div>").addClass("container").attr("id", "contain")));
                
$(bootstrap).append($("<h1>").addClass("col-sm-12").text("Bienvenu sur RestauRaieO"));

$(bootstrap).append($("<div>").addClass("col-sm-5")
            .append($("<h3>").text("Event"))
            .append($("<p>").text("01/07 soirée tapas et concert"))
            .append($("<p>").text("06/07 spécial Asie"))
            .append($("<p>").text("11/07 orgie")));
            
$(bootstrap).append($("<div>").addClass("col-sm-2"));
           
$(bootstrap).append($("<div>").addClass("col-sm-5")
            .append($("<h3>").text("News"))
            .append($("<div>").addClass("news")
            .append($("<p>").text("une news inutile"))
            .append($("<p>").text("une news qui peut servir"))
            .append($("<p>").text("juste histoire de ..."))));

