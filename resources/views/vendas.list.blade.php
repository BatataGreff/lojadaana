<h1>Lista clientes</h1>
<hr>
@foreach ($clientes as $cliente)
 <h3> {{$cliente -> scheduledto}}</h3>
 <h3> {{$cliente -> nome}}</h3>
 <h3> {{$cliente -> telefone}}</h3>
 @endforeach