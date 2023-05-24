<!DOCTYPE html>
<html>
<head>
	<title>AJAX Example</title>
	<script>
		function fetchData() {
			// Create XMLHttpRequest object
			var xhr = new XMLHttpRequest();

			// Set up request
			xhr.open('GET', 'fetch_data.php', true);

			// Set up callback function
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status == 200) {
					// Parse JSON response
					var data = JSON.parse(xhr.responseText);

					// Update UI with data
					var result = document.getElementById('result');
					result.innerHTML = '';

					for (var i = 0; i < data.length; i++) {
						var row = data[i];
						var item = document.createElement('li');
						item.textContent = row.trx_name + ' - ' + row.email;
						result.appendChild(item);
					}
				}
			};

			// Send request
			xhr.send();
		}
	</script>
</head>
<body>
	<button onclick="fetchData()">Fetch Data</button>
	<ul id="result"></ul>
</body>
</html>
