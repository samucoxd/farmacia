@csrf

<div class="form-group">
    <label>Usuario</label>
    <select class="form-control" name="persona_id" id="country_id">
        @foreach ($personas as $persona)
            <option value="{{$persona->id}}">{{$persona->nombre}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <label>Fecha</label>
    <input type="date" class="form-control" name="fecha" id="fecha" value="{{ old('fecha', $salida->fecha) }}">
</div>

<div class="form-group">
    <label>Proveedor</label>
    <input type="text" class="form-control" name="proveedor" id="proveedor" value="{{ old('proveedor', $salida->proveedor) }}">
</div>

<div class="form-group">
    <label>Glosa</label>
    <input type="text" class="form-control" name="glosa" id="glosa" value="{{ old('glosa', $salida->glosa) }}">
</div>

<div class="form-group">
    <label>Producto</label>
    <select class="form-control" name="articulo_id" id="country_id">
        @foreach ($articulos as $articulo)
            <option value="{{$articulo->id}}">{{$articulo->descripcion}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Stock</label>
    <input type="text" class="form-control" name="stock" id="stock" value="{{ old('stock', $articulo->stock) }}">
</div>

<input type="submit" name="send" value="{{ $btn }}" class="btn btn-dark btn-block">