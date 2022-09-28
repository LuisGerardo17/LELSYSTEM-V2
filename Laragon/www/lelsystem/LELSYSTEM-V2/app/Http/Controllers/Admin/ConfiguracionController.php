<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuracion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ConfiguracionController extends Controller
{
    public function index(){
           $registros = Configuracion::all();
       return view('admin.configuracion.index',compact('registros'));

    }


    public function store(Request $request){
      $campos=[
            'titulo'=>'required|string|max:150',
            'descripcion'=>'required|string|max:250',
            'imagen'=>'required|mimes:jpeg,png,jpg',
            'logo'=>'required|mimes:jpeg,png,jpg',
            'slogan'=>'required|string|max:150',
            'frase1'=>'required|string|max:100',
            'frase2'=>'required|string|max:100',
            'frase3'=>'required|string|max:100',
            'razonsocial'=>'required|string|max:150',
            'celular'=>'required|string|max:9',
            'telefono'=>'required|max:7',
            'direccion'=>'required|string|max:150',
            'email'=>'required|string|max:50',
            'facebok'=>'required|string|max:100',
            'youtube'=>'required|string|max:100',
         ];

        $request->validate($campos);
        $datos=$request->except(['_token']);


        if($request->hasFile('imagen')){
            $datos['imagen']=$request->file('imagen')->store('uploadsConfiguracion','public');
        }
        if($request->hasFile('logo')){
            $datos['logo']=$request->file('logo')->store('uploadsConfiguracion','public');
        }


        Configuracion::insert($datos);
        notify()->preset('registrado');
        return redirect('/configuracion');
    }
    
    public function update(Request $request,$id){
        $registro =Configuracion::findOrFail($id);
        $registro->fill($request->all());
        $imagen_anterior = $registro->imagen;
        $logo_anterior = $registro->logo;

        if($request->hasFile('logo')){
            $rutaAnterior=public_path('static/img/configuracion/'.$logo_anterior);

           if(file_exists($rutaAnterior)){unlink(realpath($rutaAnterior));}
           $foto =$request->file('logo');
           $nuevonombre = Str::slug($request->razonsocial).'.'.$foto->guessExtension();

          Image::make($foto->getRealpath())
            ->resize(100,null,function($constraint){$constraint->aspectRatio();})
             ->save(public_path('static/img/configuracion/'.$nuevonombre));
            $registro->logo->$nuevonombre;
        }

        if($request->hasFile('imagen')){
            $rutaAnterior=public_path('public/static/img/configuracion/'.$imagen_anterior);

           if(file_exists($rutaAnterior)){unlink(realpath($rutaAnterior));}
           $foto =$request->file('imagen');
           $nuevonombre = Str::slug($request->razonsocial).'.'.$foto->guessExtension();
          Image::make($foto->getRealpath())
             ->resize(100,null,function($constraint){ $constraint->aspectRatio(); })
             ->save(public_path('public/static/img/configuracion/'.$nuevonombre));
            $registro->imagen->$nuevonombre;
        }
        $registro->save();
        return redirect()->route('admin.configuracion.index');
    }
}
