<div>
    {{-- form product, name, price, category--}}
    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category">
                <option value="0">Category 0</option>
                <option value="1">Category 1</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit">Send</button>
        </div>
    </form>
</div>
