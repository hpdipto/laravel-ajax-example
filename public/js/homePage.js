jQuery(document).ready(function ($) {
	$("#submit").click(function (e) {
		var title = jQuery("#title").val();
		var content = jQuery("#content").val();
		var time = new Date();

		alert(title);
		alert(content);
		alert(time);

		// $ajax({
		// 		method: "POST",
		// 		url: "/",
		// 		data: {
		// 			title: title,
		// 			content: content,
		// 		},
		// 		dataType: 'json',
		// 		success: funtion(data) {
		// 			var tableRow = `<tr>
		// 								<td>${data.title}</td>
		// 								<td>${data.content}</td>
		// 								<td>${time}</td>
		// 							</tr>`;
		// 			jQuery('#opinionForm').trigger("reset");
		// 		},
		// 	});
	});
});
