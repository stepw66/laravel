@foreach($todos as $todo)

    {{ $todo->modified_at->format('Y, m d') }}

@endforeach