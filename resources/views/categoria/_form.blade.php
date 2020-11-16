@csrf

<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $categoria->nombre) }}">
</div>

<input type="submit" name="send" value="{{ $btn }}" class="btn btn-dark btn-block">