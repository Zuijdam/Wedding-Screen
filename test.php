<script>

 src="https://code.jquery.com/jquery-3.5.0.js">

function countDown(i, callback) {
    callback = callback || function(){};
    var int = setInterval(function() {
        document.getElementById("displayDiv").innerHTML = "Number: " + i;
        i-- || (clearInterval(int), callback());
    }, 1000);
}
$("button").click(function(){
    countDown(5, function(){
        alert("Countdown done!")
    });
});


</script>

<span id="displayDiv"></span><button>Go</button>