
<div class="form-group label-floating">
    <label class="control-label">Cédula</label>
    <input class="form-control" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="10" name="cedula" id="cedula" value="{{ isset($admin) ? $admin->cedula : old('cedula') }}">
    @error('cedula')
        <p class="alertas">*{{$message}}</p>
    @enderror
</div>
  <div class="form-group label-floating">
    <label class="control-label">Nombres</label>
    <input class="form-control" type="text" name="nombres" value="{{ isset($admin) ? $admin->nombres : old('nombres') }}">
    @error('nombres')
    <p class="alertas">*{{$message}}</p>
    @enderror
</div>

  <div class="form-group label-floating">
      <label class="control-label">Apellidos</label>
      <input class="form-control" type="text" name="apellidos" value="{{ isset($admin) ? $admin->apellidos : old('apellidos') }}">
      @error('apellidos')
        <p class="alertas">*{{$message}}</p>
    @enderror
    </div>
  <div class="form-group label-floating">
    <label class="control-label">Correo</label>
    <input class="form-control" type="text" name="correo" value="{{ isset($admin) ? $admin->correo : old('correo') }}", >
    @error('correo')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Dirección</label>
    <input class="form-control" type="text" name="direccion" value="{{ isset($admin) ? $admin->direccion : old('direccion') }}">
    @error('direccion')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Telefono</label>
    <input class="form-control" type="text" name="telefono" maxlength="10" value="{{ isset($admin) ? $admin->telefono : old('telefono') }}">
    @error('telefono')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Contraseña</label>
    <input class="form-control" type="password" name="contrasena" value="{{ isset($admin) ? $admin->contrasena : old('contrasena') }}" {{ isset($admin) ? 'disabled' : '' }}>
    @error('contrasena')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <div class="form-group label-floating">
      <label class="control-label">Confirmar Contraseña</label>
      <input class="form-control" type="password" name="contrasena_confirmation" value="{{ isset($admin) ? $admin->contrasena : old('contrasena_confirmation') }}" {{ isset($admin) ? 'disabled' : '' }}>
      @error('contrasena_confirmation')
        <p class="alertas">*{{$message}}</p>
    @enderror
    </div>
  <div class="form-group">
    <div>
      <input type="text" readonly="" class="form-control" value="{{ isset($admin) ? $admin->imagen : '' }}" placeholder="Foto...">
      <input type="file" name="imagen" >
      @error('imagen')
        <p class="alertas">*{{$message}}</p>
       @enderror
    </div>
  </div>
  <p class="text-center">
      <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
  </p>
