<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript">

		var array = [1,-1,3,-4,5,-2,7,4,2];
		var tmp = [];

		for(var i = 0; i <= array.length; i++){
			for (var j = i+1; j <= array.length - 1; j++) {
				if (array[i] == array[j] || array[i] == -1*array[j]) {
					
					tmp[i] = Math.abs(array[i]);
					
				}
			}
		}

		tmp.sort((a, b) => a - b);
		document.write(tmp);
	</script>
</body>
</html>