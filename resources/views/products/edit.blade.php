<div>
    {{-- form product, name, price, category--}}
    <form action="{{route('products.update', $product->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$product->name}}">
            @error('name')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" value="{{$product->price}}">
            @error('price')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category">
                <option value="0" {{$product->category == 0 ? 'selected' : ''}}>Category 1</option>
                <option value="0" {{$product->category == 1 ? 'selected' : ''}}>Category 2</option>
            </select>
            @error('category')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit">Send</button>
        </div>
    </form>
</div>
