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
    <label>Stock</label>
    <input type="text" class="form-control" name="stock" id="stock" value="{{ old('stock', $articulo->stock) }}">
</div>

<div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto" id="vencimiento"">
</div>

<input type="submit" name="send" value="{{ $btn }}" class="btn btn-dark btn-block">