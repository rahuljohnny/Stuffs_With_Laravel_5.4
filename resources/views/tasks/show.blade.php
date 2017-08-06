
<!--
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>{{ $task->body }}</h1> 

</body>
</html>

-->
<!DOCTYPE html>
<html>
	<body>
	@include('layout.header') <!--Including footer+nav-->

	@include('layout.navigator')

	<article class="article">
	  <h1>{{ $task->id }}</h1>
	  <h2>{{ $task->body }}</h2>
	  <p>Standing on the River Thames, London has been a major settlement for two millennia,
	  its history going back to its founding by the Romans, who named it Londinium.</p>
	  <p><strong>Resize this page to see that what happens!</strong></p>
	</article>

	@include('layout.footer')
	</div>

	</body>
</html>