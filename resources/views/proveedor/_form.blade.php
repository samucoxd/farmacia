@csrf

<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $proveedor->nombre) }}">
</div>


<div class="form-group">
    <label >Proveedor</label>
    <select class="form-control" name="country_id" id="country_id">
        @foreach ($paises as $pais)
            <option value="{{$pais->id}}">{{$pais->nombre}}</option>
        @endforeach
    </select>
</div>

<input type="submit" name="send" value="{{ $btn }}" class="btn btn-dark btn-block">