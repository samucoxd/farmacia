@csrf

<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $persona->nombre) }}">
</div>

<div class="form-group">
    <label>Apellido</label>
    <input type="text" class="form-control" name="apellido" id="apellido" value="{{ old('apellido', $persona->apellido) }}">
</div>

<div class="form-group">
    <label>Fecha Nacimiento</label>
    <input type="date" class="form-control" name="fnacimiento" id="fnacimiento" value="{{ old('fnacimiento', $persona->fnacimiento) }}">
</div>

<div class="form-group">
    <label>Carnet Identidad</label>
    <input type="text" class="form-control" name="carnet" id="carnet" value="{{ old('carnet', $persona->carnet) }}">
</div>

<input type="submit" name="send" value="{{ $btn }}" class="btn btn-dark btn-block">