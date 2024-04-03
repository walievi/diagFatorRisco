<h1>TESTE NA VIEW</h1>



<h1>Esta vindo da view {{ $minhaVar }}</h1>


@foreach($users as $user)
	<h3>O reg {{ $user->name }}</h3>
@endforeach