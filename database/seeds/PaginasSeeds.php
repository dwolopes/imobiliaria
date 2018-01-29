<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existe = Pagina::where('tipo','=','sobre')->count();

        if($existe){
        	$paginaSobre = Pagina::where('tipo','=','sobre')->first();
        }else{
        	$paginaSobre = new Pagina;
        }


        $paginaSobre->titulo = "A empresa by DB - Douglas";
        $paginaSobre->descricao = "Vamos a uma descrição breve";
        $paginaSobre->texto = "Um texto sobre a empresa";
        $paginaSobre->image = "site/img/modelo_img_home.jpg";
        $paginaSobre->tipo = "sobre";
        $paginaSobre->save();
        echo "Página Sobre criada com Sucesso!";

    }
}
