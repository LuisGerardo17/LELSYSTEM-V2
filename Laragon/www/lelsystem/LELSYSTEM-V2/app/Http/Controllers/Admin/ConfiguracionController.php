<?php
use Image;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuracion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
class ConfiguracionController extends Controller
{
    public function index(){
           $registro =Configuracion::find(1);
       return view('admin.configuracion.index',compact('registro'));

    }

    public function update(Request $request,$id){
        $registro =Configuracion::findOrFail($id);
        $registro->fill($request->all());
        $imagen_anterior = $registro->imagen;
        $logo_anterior = $registro->logo;
        if($request->hasFile('logo')){
            $rutaAnterior=public_path('public/static/img/configuracion/'.$logo_anterior);

           if(file_exists($rutaAnterior)){unlink(realpath($rutaAnterior));}
           $foto =$request->file('logo');
           $nuevonombre = Str::slug($request->razonsocial).'.'.$foto->guessExtension();
           Image::make($foto->getRealpath())
            ->resize(100,null,function($constraint){$constraint->aspectRatio();})
            ->save(public_path('public/static/img/configuracion/'.$nuevonombre));
            $registro->logo->$nuevonombre;
        }

    }
}
