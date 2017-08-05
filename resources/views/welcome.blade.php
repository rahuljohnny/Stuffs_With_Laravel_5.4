<!DOCTYPE html>
<html>
<body>
	<head>
		  <h4>
			  <ul>
				    @foreach ($tasks as $task)
				    <li>
				    	{{$task }}			    	
				    </li>
				    @endforeach 
			   </ul>
		  </h4>
	</head>
</body>
</html>