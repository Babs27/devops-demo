<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un produit</title>
    <style>
        body { font-family: Arial; margin: 40px; background: #f9f9f9; }
        form { background: #fff; padding: 20px; border-radius: 5px; width: 400px; }
        input { width: 100%; padding: 8px; margin-bottom: 10px; }
        button { padding: 8px 12px; background: #2ecc71; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #27ae60; }
        a { text-decoration: none; color: #3498db; }
    </style>
</head>
<body>
    <h1>Modifier le produit</h1>
    <a href="{{ route('products.index') }}">Retour à la liste</a>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nom :</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
        <label>Prix :</label>
        <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
