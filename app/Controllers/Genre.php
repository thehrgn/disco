<?php namespace App\Controllers;

use App\Models\GenresModel;


class Genre extends BaseController
{
	public function index()
	{
		$gm = new GenresModel();
		$result = $gm->find();
		$data['genres'] = $result;
		return view("inicio",$data);
	}

	public function new(){
		/*$data['tipo']='nuevo';
		$data['opcion']=109;
		return view("nuevo",$data );
*/
$parser = \Config\Services::parser();

echo $parser->setData(['titulo'=>'Titulo Nuevo'])
             ->render('nuevo');
	}


	//--------------------------------------------------------------------

}
