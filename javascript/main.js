let numPage = 1;
let plan = $("#plan").val();
let area = $("#area").val();
let line = $("#line").val();

initialPage();
setInterval(initialPage, 3000);
startCountdown();

// get page
function initialPage() {
	var countdown = $("#countdown").text();
	var time = countdown.replace("0:", "");

	if (time == 0) {
		numPage = numPage + 1;
		resetCountdown();
		startCountdown();

		if (numPage == 6) {
			numPage = 1;
		}
	}
	getPage("dashboard/" + area, numPage);
}

function getPage(url, numPage) {
	$.ajax({
		url: baseUrl + url,
		type: "POST",
		dataType: "json",
		data: { numPage: numPage, plan: plan, area: area, line: line },
		success: function (res) {
			$("#content").html(res["view"]);
		},
		error: function (xhr, status, error) {
			// Handle any errors during the AJAX request
			console.log("An error occurred: " + error);
		},
	});
}

// call trigger
let call_status = 0;
function callPage() {
	if (call_status == 0) {
		pauseCountdown();
		call_status = 1;
		console.log("call start");
	} else {
		startCountdown();
		call_status = 0;
		console.log("call stop");
	}

	if (call_status == 1) {
		getPage("dashboard/assy", 6);
	}
}
