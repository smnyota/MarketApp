let dropdownBtn = document.getElementById("drop-text");
let list = document.getElementById("list");
let icon = document.getElementById("icon");
let span = document.getElementById("span");
let input = document.getElementById("search-input");
let listItems = document.querySelectorAll(".dropdown-list-item"); 

//show dropdown list on click on dropdown btn
        //cases when the user ONLY clicks on dropdown btn
dropdownBtn.onclick = function() {
    //rotation arrow icon
    if (list.classList.contains("show")) {
        icon.style.rotate = "0deg";
    } else {
        icon.style.rotate = "-180deg";
    }
    list.classList.toggle("show");
};

//hides the dropdown list when clicked outside dropdown btn
    //deals with the case the user FIRST clicks the dropdown btn and then clicks OUTSIDE of it
window.onclick = function(e) {
    console.log("Here is what e is" + e);
    console.log(e.target.id);
    if( e.target.id !== "drop-text" && e.target.id !== "span" && e.target.id !== "icon") {
        list.classList.remove("show");
        icon.style.rotate = "0deg";
    }
};

for (item of listItems) {
    item.onclick = function(e) {
        //change dropdown btn text on click on selected item
        console.log(e); 
        span.innerText = e.target.innerText;
        //change search input placeholder text based on selected item from dropdown btn
        if (e.target.innerText == "Everything") {
            input.placeholder = "Search Anything..."
        } else {
            input.placeholder = "Search in " + e.target.innerText + "...";
        }
    };
}

//Scroll Button


