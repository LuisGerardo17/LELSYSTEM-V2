<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoArchivos;

class ArchivoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $archivos=new TipoArchivos();
        $dato=[
            'tipo'=>'pdf'
        ];
        $archivos->insert($dato);

        $archivos2=new TipoArchivos();
        $dato2=[
            'tipo'=>'excel'
        ];
        $archivos2->insert($dato2);

        $archivos3=new TipoArchivos();
        $dato3=[
            'tipo'=>'word'
        ];
        $archivos3->insert($dato3);
    }
}
