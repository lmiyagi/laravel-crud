<h1>Tasks</h1>
<ul>
    @foreach( $tasks as $task)
        <li>
            {{ $task->name }}
            <button onclick="window.location='{{ route('tasks.edit', $task) }}'" name="edit">Edit</button>
            <form action="{{ route('tasks.delete', $task) }}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input type="submit" value="Delete"/>
            </form>
        </li>
    @endforeach
</ul>
<a href="{{ route('tasks.create') }}">Create</a>