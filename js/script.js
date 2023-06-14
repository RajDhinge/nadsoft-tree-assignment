$(document).ready(
	function () {
		$('#butsave').on(
			'click', function () {
				var selname = $('#selname').val();
				var name = $('#text1').val();

				if (name != "") {
					$.ajax(
						{
							url: "/Controller/save.php",
							type: "POST",
							data: {
								selname: selname,
								name: name
							},
							cache: false,
							success: function (dataResult) {
								var dataResult = JSON.parse(dataResult);
								if (dataResult.statusCode == 200) {
									location.reload(); // Reload the page
								} else if (dataResult.statusCode == 201) {
									alert("Error occurred. Please try again.");
								}
							}
						}
					);
				} else {
					alert("Please enter a name.");
				}
			}
		);
	}
);
