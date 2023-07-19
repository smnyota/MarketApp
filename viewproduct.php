<?php
  include('include/init.php');
  echoHeader();
  echoMainHeader();
  echoDynamicBlackHeader();
?>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <!-- <div class='album py-5 bg-body-tertiary'>
        <div class='container'>
        <div class='row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3' id='myDIV'> -->
  <span id="page_details"></span>
  </div>
</html>

<script>
$(document).ready(function(){
 function load_page_details(id){
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{id:id},
   success:function(data)
   {
    $('#page_details').html(data);
   }
  });
 }

let params = new URLSearchParams(document.location.search);
let category = params.get("categoryId"); 

if(category!= null) {
  load_page_details(category);
 } else {
  load_page_details(1);
 }

 $('.nav li').click(function(){
  var page_id = $(this).attr("id");
  load_page_details(page_id);
 });
 
});
</script> 

<!--Jquery case insensitive search-->
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myDIV .col").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

<!--When user presses saved posts button, ajax call is made to savedPost.php to add the specific post to the savedPost database table-->
<script type="text/javascript">
	function savePost(userId, productId){
		// URL to which the AJAX call will be made
		const url = "/savedPost.php";

		// Data object containing the POST parameters
		let data = new URLSearchParams();
        data.append("userId",userId);
        data.append("productId",productId);

		// Options for the AJAX call
		const options = {
		method: "POST",
		body: data,
		};
    
		// Making the AJAX call
		fetch(url, options)
		.then(response => {
			return response.text(); 
		})
		.then(data => {
			// Might add a star icon next to the save item button on the card in this case
			
		})
		.catch(error => {
			// Handle any errors that occurred during the AJAX call
			console.error("Error:", error);
		}); 
  } 
</script>

