<!DOCTYPE html>
<html>
<body>
	<ul>
	    @foreach ($tasks as $task)

	    <li>{{ $task->body }}</li>
	    <li>{{ $task->id }}</li>
		@endforeach 
	</ul>

</body>
</html>