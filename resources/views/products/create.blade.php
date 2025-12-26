<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <style>
        body { font-family: Arial; margin: 40px; background: #f9f9f9; }
        form { background: #fff; padding: 20px; border-radius: 5px; width: 400px; }
        input { width: 100%; padding: 8px; margin-bottom: 10px; }
        button { padding: 8px 12px; background: #3498db; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #2980b9; }
        a { text-decoration: none; color: #3498db; }
    </style>
</head>
<body>
    <h1>Ajouter un produit</h1>
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

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Nom :</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <label>Prix :</label>
        <input type="number" step="0.01" name="price" value="{{ old('price') }}" required>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
