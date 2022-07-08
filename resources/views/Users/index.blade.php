<h1>Listagem de Usuários</h1>

<ul>
    <li>
        @foreach ($users as $user)
            {{$user->name}} - 
            {{$user->email}}
            | <a href="{{route('user.show', $user->id)}}">Detalhes</a>
        @endforeach
    </li>
</ul>