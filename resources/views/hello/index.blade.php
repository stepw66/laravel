{{ trans('hello.hi', ['name' => 'Platoosom']) }}
{{ trans_choice('hello.piece', 10) }}
{{ trans_choice('hello.item', 5) }}

{{ Widget::run('RecentNewsWidget', ['data'=>'xxx']) }}