// Call the dataTables jQuery plugin
$(document).ready(function () {
	$('#dataTable').DataTable({
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
	});
});
