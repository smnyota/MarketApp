<?php
 include('include/init.php');

//This File is for debuggging purposes only -->

 debugOutput(getSavedPosts(10));


echo '
<script type="text/javascript">
	
	function savePost(){
		// URL to which the AJAX call will be made
		const url = "/playground2.php";

		// Data object containing the POST parameters
		let data = new URLSearchParams();
		data.append("min", 1);
		data.append("max", 100);
        data.append("userId", 10);
        data.append("productId", 34);

		// Options for the AJAX call
		const options = {
		method: "POST",
		body: data,
		};

		// Making the AJAX call
		fetch(url, options)
		.then(response => {
			return response.text(); // Retrieve the plain text response
		})
		.then(data => {
			// Set the response as the innerHTML of a div(maybe add a star icon on card)
			//document.getElementById("randomNumber").innerHTML = data;
		})
		.catch(error => {
			// Handle any errors that occurred during the AJAX call
			console.error("Error:", error);
		});

		
	}
</script>
<button onclick="savePost()">Save Post</button><br /><br/>
';



?>