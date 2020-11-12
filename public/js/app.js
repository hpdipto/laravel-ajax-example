var preloaders = document.getElementById("preloaders");
setTimeout(() => {
	preloaders.removeAttribute("class");
}, 3000);

$("#submit").click(function (event) {
	event.preventDefault();

	let title = $("input[name=title]").val();
	let content = $("textarea[name=content]").val();

	$("#opinionWindow").modal("hide");
	$("#opinionForm").trigger("reset");

	$.ajaxSetup({
		headers: {
			"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
		},
	});

	$.ajax({
		url: "/ajax-request",
		type: "POST",
		data: {
			title: title,
			content: content,
		},
		success: function (response) {
			var responseData = response.data;
			var time = Date.parse(responseData.created_at);
			time = new Date(time);
			// source: https://stackoverflow.com/questions/10645994/how-to-format-a-utc-date-as-a-yyyy-mm-dd-hhmmss-string-using-nodejs/10717081
			time = time.toISOString().replace(/T/, " ").replace(/\..+/, "");
			var tableRow = `<tr>
								<td>${responseData.title}</td>
								<td>${responseData.content}</td>
								<td>${time}</td>
							</tr>`;
			$("#table").append(tableRow);
		},
	});
});
