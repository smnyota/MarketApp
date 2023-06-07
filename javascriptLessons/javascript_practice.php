
<link rel="stylesheet" href="jspractice.css">

<h1>JavaScript Practice Page</h1>

<!-- <script type = 'text/javascript'>
const fruits = ['apple', 'pear', 'orange'];

for (let i = 0; i < fruits.length; i++) {
    console.log('Yummy ' + fruits[i]);
}
</script> -->

<h2>EventListeners Practice</h2>

<h3>Onlick Event</h3>

<p>Click the button below to Produce Hidden Text!</p>

<button onclick = 'revealText()'>Click Me!!!</button>
<p id = 'displayWhenClicked'></p>

<script>
    function revealText() {
        document.getElementById('displayWhenClicked').innerHTML = 'New Text';
    }
</script>

<h3>onblur Event</h3>

Enter Your Name:
<input type="text" id = 'fname' onblur = 'blurInput()'>
<p>Once you enter your name we will automatically convert it to uppercase!</p>
<p>Btw the value eleemntn tag changes the value attribute of a text field in js</p>

<script>
    function blurInput() {
        let x = document.getElementById('fname');
        x.value = x.value.toUpperCase();
    }
</script>


<script>
    let foods = {'breakfast': 1, 'lunch': 2, 'dinner': 3};
    for (x in foods) {
        console.log(x + ' ' + foods[x]);
    }
</script>
