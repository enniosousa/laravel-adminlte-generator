<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th colspan="3">Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{!! $user->name !!}</td>
                <td>{!! $user->email !!}</td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="fas fa-eye"></i></a>
                        <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
