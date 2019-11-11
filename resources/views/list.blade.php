<h1>Lista clientes</h1>
<hr>
@foreach ($Cliente as $cliente)
 <h3><b>DATA: </b> {{$cliente -> scheduledto}}</h3>
 <h3><b>NOME: </b>{{$cliente -> nome}}</h3>
 <h3><b>TELEFONE: </b>{{$cliente -> telefone}}</h3>
 <h3><b>ID: </b>{{$cliente -> id}}</h3>
 
 <br>
 @endforeach