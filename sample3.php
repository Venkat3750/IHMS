
<html>
	<head>
		<title> Register an account </title>
		<script src="JQuery/jquery-3.0.0.js"></script>
		<script>
		$( document ).ready(function() {
    		$("#btn").click(function(){
    			$.post("getStaffDetails.php", function(data){
        			$("#hdiv").html(data);
        			$("#hdiv").removeAttr("hidden");
    			});
    			$("#btn").attr("hidden",true);

    		})
		});
		
		

		</script>
	</head>
	<body> 
		<div hidden id="hdiv"></div>
		<button id="btn">getStaffDetails</button>
	</body>
</html>