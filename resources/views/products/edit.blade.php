<!DOCTYPE html>
<html>
<head><title>Edit Product</title></head>
<body>
<h1>Edit Product</h1>
<form action="{{ route('products.update', $product) }}" method="POST">
@csrf @method('PUT')
<label>Name: <input name="name" value="{{ $product->name }}" required></label><br>
<label>Description: <textarea name="description">{{ $product->description }}</textarea></label><br>
<label>Price: <input name="price" type="number" step="0.01" value="{{ $product->price }}" required></label><br>
<button type="submit">Update</button>
</form>
<a href="{{ route('products.index') }}">Back</a>
</body>
</html>
