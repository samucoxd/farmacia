@csrf

<div class="form-group">
    <label>Codigo</label>
    <input type="text" class="form-control" name="codigo" id="codigo" value="{{ old('codigo', $almacen->codigo) }}">
</div>

<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $almacen->nombre) }}">
</div>

<div class="form-group">
    <label>Ubicacion</label>
    <input type="text" class="form-control" name="ubicacion" id="ubicacion" value="{{ old('ubicacion', $almacen->ubicacion) }}">
</div>

<input type="submit" name="send" value="{{ $btn }}" class="btn btn-dark btn-block">