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


        $paginaSobre->titulo = "Vem nos conhecer melhor";
        $paginaSobre->descricao = "Vamos a uma descrição breve";
        $paginaSobre->texto = "Um texto sobre a empresa";
        $paginaSobre->image = "img/modelo_img_home.jpg";
        $paginaSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15009.018973410317!2d-43.99522036314007!3d-19.871462356238514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe82bb9638435de0f!2sBar+%26+Boi!5e0!3m2!1spt-BR!2sbr!4v1517192841698" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $paginaSobre->tipo = "sobre";
        $paginaSobre->save();
        echo "Página Sobre criada com Sucesso!";

    }
}
