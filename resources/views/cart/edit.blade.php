<!DOCTYPE html>
<html>
<head>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>
<div class="container mt-3 mb-3">
 
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
 
    <h3> Form</h3>
    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
 
        @csrf
       
 
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label>price</label>
            <input type="text" class="form-control" name="price" id="price">
        </div>
 
        
 
        <div class="form-group">
            <label>quntity</label>
            <input type="number" class="form-control" name="quantity" id="quantity">
        </div>
 
        <div class="form-group">
         
 
        <input type="submit" name="submit" value="Submit" class="btn btn-dark">
 
    </form>
</div>
</body>
 
</html>