<form action="{{ route('tasks.update', $task) }}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input required name="name" value="{{$task->name}}"/>
    <br/>
    <input type="submit">
</form>