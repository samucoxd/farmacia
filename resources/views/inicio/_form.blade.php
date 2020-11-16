@csrf

<div class="form-group">
    <label>Codigo</label>
    <input type="text" class="form-control" name="codigo" id="codigo" value="{{ old('codigo', $articulo->codigo) }}">
</div>

<div class="form-group">
    <label>Descripcion</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ old('descripcion', $articulo->descripcion) }}">
</div>

<div class="form-group">
    <label>Lote</label>
    <input type="text" class="form-control" name="lote" id="lote" value="{{ old('lote', $articulo->lote) }}">
</div>

<div class="form-group">
    <label>Vencimiento</label>
    <input type="date" class="form-control" name="vencimiento" id="vencimiento" value="{{ old('vencimiento', $articulo->vencimiento) }}">
</div>

<div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto" id="vencimiento">
</div>

<div class="form-group">
    <label >Categoria</label>
    <select class="form-control" name="categoria_id" id="categoria_id">
        @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label >Almacen</label>
    <select class="form-control" name="almacen_id" id="almacen_id">
        @foreach ($almacenes as $almacen)
            <option value="{{$almacen->id}}">{{$almacen->nombre}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label >Proveedor</label>
    <select class="form-control" name="proveedor_id" id="proveedor_id">
        @foreach ($proveedores as $proveedor)
            <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
        @endforeach
    </select>
</div>

<input type="submit" name="send" value="{{ $btn }}" class="btn btn-dark btn-block">