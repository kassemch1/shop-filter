<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        .card-img-top {
            width: 100%;  /* Ensure the image takes the full width of the card */
            height: 250px; /* Set a fixed height */
            object-fit: cover; /* Ensures the image covers the space without distorting */
        }
    </style>
</head>
<body>
<div class="container my-5">
    <h1 class="mb-4">Shop</h1>

    <form method="GET" action="{{ route('shop.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-select">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $selectedCategory == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-3">
                <label for="min_price" class="form-label">Min Price</label>
                <input type="number" name="min_price" id="min_price" class="form-control" value="{{ $minPrice }}" placeholder="0">
            </div>

            <div class="col-md-3">
                <label for="max_price" class="form-label">Max Price</label>
                <input type="number" name="max_price" id="max_price" class="form-control" value="{{ $maxPrice }}" placeholder="0">
            </div>

            <div class="col-md-2 align-self-end">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
        </div>
    </form>

    <div class="row">
        @forelse($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">${{ number_format($product->price, 2) }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>No products found matching your criteria.</p>
        @endforelse
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
