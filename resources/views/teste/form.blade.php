<form method="PUT" action="{{ route('teste.update', ['teste' => $teste->id]) }}">
	@csrf

	<label>nome</label>
	<input type="text" name="nome" value=" {{ $teste->nome ?? old('nome') ?? '' }} ">

<br>
<br>
	<label>Nasc</label>
	<input type="date" name="nasc" value=" {{ $teste->nasc ?? old('nasc') ?? '' }} ">
<br>
<br>
	<input type="submit" name='teste' title='submit'>

</form>