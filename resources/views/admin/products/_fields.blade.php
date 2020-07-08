<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="product_name"> Product Name </label>
    <input type="text" name="name" class="form-control border-input" placeholder="Ex: King Size Bed">
    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
    <label for="price"> Price </label>
    <input type="number" name="price" class="form-control border-input" placeholder="Ex: 34000">
    <span class="text-danger">{{ $errors->has('price') ? $errors->first('price') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description"> Description </label>
    <input type="text" name="description" class="form-control border-input" placeholder="Ex: Bed with ">
    <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="picture"> Picture </label>
    <input type="file" name="image" class="form-control border-input">
    <div id="thumb-output"></div>
    <span class="text-danger">{{ $errors->has('image') ? $errors->first('description') : '' }}</span>
</div>
