<nav class="nav">
	<ul>
	    @foreach ($tasks as $task)
	    <li>
	    	<p>
		    	<strong>
				    <a href="/tasks/{{ $task->id }}">
				    {{$task->body}}
				    </a>
				</strong>
		    </p>
	    </li>
		@endforeach 
	</ul>
</nav>