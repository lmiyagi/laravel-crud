<form action="{{ route('tasks.store') }}" method="post">
    {{ csrf_field() }}
    <input required name="name"/>

    <BR>
    <input type="submit"/>
</form>