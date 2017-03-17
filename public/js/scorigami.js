document.addEventListener("DOMContentLoaded", function(event) {
	for (var key in scorigami) {
		// look at the combined win+lose
		var scoreId = "#" + scorigami[key]["win_pts"] + scorigami[key]["lose_pts"];

		// select the correct id
		$(scoreId).addClass("scorigami");
		$(scoreId).html(getScorigami(scorigami[key]));
		
		// insert the special div
	}
});

function getScorigami(gridBlock) {
	var divStart = "<div class='tooltip'>";
	var divContent = "";
	var divEnd = "</div>";
	var count = gridBlock["count"];
	count = count - 1;

	divContent = "<span class='tooltiptext'>" + 
					gridBlock["gamescore"] + "<br>" +
					"Last Scorigami: " + gridBlock["last_game_date"] + ", " + gridBlock["last_game_year"] + "<br>" +
					"<a href='" + gridBlock["last_game_link"] + "'>" + gridBlock["last_game_teams"] + "</a><br>" + 
					"<a href='" + gridBlock["list_link"] + "'>" + count + " other games with this score</a><br>" + 
					"</span>";

	return divStart + divContent + divEnd;
}
