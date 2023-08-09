$(document).ready(function(){
    function load_page_details(id){
     $.ajax({
      url:"fetch.php",
      method:"POST",
      data:{id:id},
      success:function(data)
      {
       $('#page_details').html(data);
       removeSavedPost();
      }
     });
    }
    
    //removes post from the "Saved Tab"
    function removeSavedPost() {
        $(".del").click(function(){
            load_page_details(0);
            load_page_details(0);
        });
    }
   
    let params = new URLSearchParams(document.location.search);
    let category = params.get("categoryId"); 

    if(category!= null) {
        load_page_details(category);
    } else {
        load_page_details(99); //defaults to showing tab with id of 99 (which is currently all posts)
    }
    $('.nav li').click(function(){
    console.log("nav button clicked");
        var page_id = $(this).attr("id");
        load_page_details(page_id);
    });
});
   
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myDIV .col").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
       
function savePost(userId, productId, action){
    

    console.log(action);
        // URL to which the AJAX call will be made
        const url = "/savedPost.php";
        // Data object containing the POST parameters
        let data = new URLSearchParams();
        data.append("userId",userId);
        data.append("productId",productId);
        data.append("action", action);
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
            // Adds star icon to card
            let star = document.getElementById(productId);
            star.removeAttribute("hidden");
        })
        .catch(error => {
            // Handle any errors that occurred during the AJAX call
            console.error("Error:", error);
        }); 
    } 


