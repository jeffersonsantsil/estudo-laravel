<h1>Listagem do Usuário {{$user->name}}</h1>

<ul>
    <li>       
            {{$user->name}} - 
            {{$user->email}}            
    </li>
    <a href="{{route('users.index')}}">Voltar</a>
</ul>