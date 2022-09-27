
<div class="form-group label-floating">
    <label class="control-label">Titulo</label>
    <input class="form-control" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="10" name="titulo" id="titulo" value="{{ isset($admin) ? $admin->titulo : old('titulo') }}">
    @error('titulo')
        <p class="alertas">*{{$message}}</p>
    @enderror
</div>
  <div class="form-group label-floating">
    <label class="control-label">Descripcion</label>
    <input class="form-control" type="text" name="descripcion" value="{{ isset($admin) ? $admin->descripcion : old('descripcion') }}">
    @error('descripcion')
    <p class="alertas">*{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <div>
      <input type="text" readonly="" class="form-control" value="{{ isset($admin) ? $admin->imagen : '' }}" placeholder="Imagen...">
      <input type="file" name="imagen" >
      @error('imagen')
        <p class="alertas">*{{$message}}</p>
       @enderror
    </div>
  </div>
  <div class="form-group">
    <div>
      <input type="text" readonly="" class="form-control" value="{{ isset($admin) ? $admin->logo : '' }}" placeholder="Logo...">
      <input type="file" name="logo" >
      @error('logo')
        <p class="alertas">*{{$message}}</p>
       @enderror
    </div>
  </div>
  <div class="form-group label-floating">
      <label class="control-label">Slogan</label>
      <input class="form-control" type="text" name="slogan" value="{{ isset($admin) ? $admin->slogan : old('slogan') }}">
      @error('slogan')
        <p class="alertas">*{{$message}}</p>
    @enderror
 </div>
  <div class="form-group label-floating">
    <label class="control-label">Frase1</label>
    <input class="form-control" type="text" name="frase1" value="{{ isset($admin) ? $admin->frase1 : old('frase1') }}", >
    @error('frase1')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>

  <div class="form-group label-floating">
    <label class="control-label">Frase2</label>
    <input class="form-control" type="text" name="frase2" value="{{ isset($admin) ? $admin->frase2 : old('frase2') }}", >
    @error('frase1')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Frase3</label>
    <input class="form-control" type="text" name="frase3" value="{{ isset($admin) ? $admin->frase3 : old('frase3') }}", >
    @error('frase3')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Razon Social</label>
    <input class="form-control" type="text" name="razonsocial" value="{{ isset($admin) ? $admin->razonsocial : old('razonsocial') }}">
    @error('direccion')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>

  <div class="form-group label-floating">
    <label class="control-label">Celular</label>
    <input class="form-control" type="text" name="celular" maxlength="10" value="{{ isset($admin) ? $admin->celular : old('celular') }}">
    @error('celular')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Telefono</label>
    <input class="form-control" type="text" name="telefono" value="{{ isset($admin) ? $admin->telefono : old('telefono') }}">
    @error('telefono')
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
    <label class="control-label">Email</label>
    <input class="form-control" type="text" name="email" value="{{ isset($admin) ? $admin->email : old('email') }}" >
    @error('contrasena')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <div class="form-group label-floating">
      <label class="control-label">Facebook</label>
      <input class="form-control" type="text" name="facebook" value="{{ isset($admin) ? $admin->facebook : old('facebook') }}">
      @error('facebook')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Youtube</label>
    <input class="form-control" type="text" name="youtube" value="{{ isset($admin) ? $admin->youtube : old('youtube') }}">
    @error('youtube')
      <p class="alertas">*{{$message}}</p>
  @enderror
</div>

  <p class="text-center">
      <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
  </p>
