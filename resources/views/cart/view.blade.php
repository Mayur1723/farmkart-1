<!DOCTYPE html>
<html>
<head>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>
<table class="table table-bordered">]
    <center><a class="btn btn-primary center " style="width: 30%; margin-bottom: 5px;" href="/cart/create">Add - new</a></center>

<thead>

<tr>

<th>Id</th>

<th>Name</th>

<th>price</th>

<th>quantity</th>

<th>Action</th>


</tr>

</thead>

<tbody>



@foreach($carts as $cart)

<tr>

<td>{{ $cart->id }}</td>

<td>{{ $cart->name }}</td>

<td>{{ $cart->price }}</td>

<td>{{ $cart->quantity }}</td>

<td>   <a class="btn btn-primary" style="width: 30%; margin-bottom: 5px;" href="/cart/edit/{{ $cart->id }}">EditProduct</a></td>

</tr>

@endforeach

</tbody>

</table>

</div>



</body>
 
</html>