<!DOCTYPE html>
<html>
<head><title>New Product</title></head>
<body>
<h1>New Product</h1>
<form action="{{ route('products.store') }}" method="POST">
@csrf
<label>Name: <input name="name" required></label><br>
<label>Description: <textarea name="description"></textarea></label><br>
<label>Price: <input name="price" type="number" step="0.01" required></label><br>
<button type="submit">Create</button>
</form>
<a href="{{ route('products.index') }}">Back</a>
</body>
</html>
