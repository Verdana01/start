<!doctype html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/jquery.classycountdown.min.js"></script>
	<script src="js/jquery.knob.js"></script>
	<script src="js/jquery.throttle.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.classycountdown.min.css" />
	<link rel="stylesheet" type="text/css" href="css/Schedule.css">
	<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
	<script>
		function showEvent(str) {

		    if (str == "") {
		        document.getElementById("txtHint").innerHTML = "";
		        return;
		    } else {
		        if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById("txtHint").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","getEvent.php?q="+str,true);
		        xmlhttp.send();
		    }
		    return false;
		}
	</script>
	<script type="text/javascript">
		$('a').on('click', function(event) {
    		event.preventDefault();
    		event.stopPropagation();}
	</script>
</head>
<body class="blue">
	<div class="jumbotron"><h1>days remaining for the next main event</h1></div>
	
	<div id="countdown" class="ClassyCountdownDemo" style="background-color: transparent;"></div>
	<script type="text/javascript">
			$(document).ready(function() {
            $('#countdown').ClassyCountdown({
             end: '1390868325',
                                                now: '1388461323',
                                                labels: true,
                                                labelsOptions: {
                                                    lang: {
                                                        days: 'Days',
                                                        hours: 'Hours',
                                                        minutes: 'Minutes',
                                                        seconds: 'Seconds'
                                                    },
                                                    style: 'font-size:0.5em; text-transform:uppercase;'
                                                },
                                                style: {
                                                    element: "",
                                                    textResponsive: .5,
                                                    days: {
                                                        gauge: {
                                                            thickness: .2,
                                                            bgColor: "rgba(155,155,155,0.8)",
                                                            fgColor: "rgb(0, 0, 0)"
                                                        },
                                                        textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.8);'
                                                    },
                                                    hours: {
                                                        gauge: {
                                                            thickness: .2,
                                                            bgColor: "rgba(155,155,155,0.8)",
                                                            fgColor: "rgb(0, 0, 0)"
                                                        },
                                                        textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.8);'
                                                    },
                                                    minutes: {
                                                        gauge: {
                                                            thickness: .2,
                                                            bgColor: "rgba(155,155,155,0.8)",
                                                            fgColor: "rgb(0, 0, 0)"
                                                        },
                                                        textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.8);'
                                                    },
                                                    seconds: {
                                                        gauge: {
                                                            thickness: .2,
                                                            bgColor: "rgba(155,155,155,0.8)",
                                                            fgColor: "rgb(0, 0, 0)"
                                                        },
                                                        textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.8);'
                                                    }

                                                },
                                                onEndCallback: function() {
                                                    console.log("Time out!");
                                                }
             });    
        })
	</script>
	<section class="container-fluid blue">
	<div class="col-xs-12">
        <ul id="listEvents" class="">
            <li><a href="" onclick="showEvent('14April');return false;">14/Apr</a></li>
            <li><a href="" onclick="showEvent('15April');return false;">15/Apr</a></li>
            <li><a href="" onclick="showEvent('16April');return false;">16/Apr</a></li>
            <li><a href="" onclick="showEvent('17April');return false;">17/Apr</a></li>
            <li><a href="" onclick="showEvent('0');return false;">18/Apr</a></li>
        </ul>
        <hr />
	</div>
	</section>
	<div id="txtHint" >
		
	</div>
</body>
</html>