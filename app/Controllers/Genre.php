<?php namespace App\Controllers;

use App\Models\GenresModel;


class Genre extends BaseController
{
	public function index()
	{
		$gm = new GenresModel();
		$result = $gm->find();
		//$data['genres'] = $result;
		//return view("inicio",$data);
		$parser = \Config\Services::parser();
		echo $parser->setData(['genres'=>$result])->render('inicio');
	}

	public function new(){
		/*$data['tipo']='nuevo';
		$data['opcion']=109;
		return view("nuevo",$data );
*/
$parser = \Config\Services::parser();
$data['titulo']='New Genre';
echo $parser->setData($data)
             ->render('new');
	}

	public function save(){
		if ($this->request->getMethod() === 'post' &&
			$this->validate(['name' => 'required|min_length[3]|max_length[255]',])
		)
	 {
		 $name = $this->request->getPost('name');
		 $gm = new GenresModel();
		 $gm->save(['name'=>$name]);
		 $this->response->redirect('index');
	 }else{
		 echo 'Verifique datos';
	 }
}

	public function edit($id){

		$gm = new GenresModel();
		$gr = $gm->find($id);
		$name = $gr->name;

		$parser = \Config\Services::parser();
		echo $parser->setData(['titulo'=>'Edit Genre','id'=>$id,'name'=>$name,'base_url'=>base_url()])
		             ->render('edit');
			}

			public function update(){
				if ($this->request->getMethod() === 'post' &&
					$this->validate(['name' => 'required|min_length[3]|max_length[255]','id'=>'required|integer'])
				)
			 {//Obtenemos valores de los inputs
				 $id = $this->request->getPost('id');
				 $name = $this->request->getPost('name');
				 //Instancia del modelo
				 $gm = new GenresModel();

				 $gm->update($id,['name'=>$name,]);
				 $this->response->redirect('index');

			 }else{
				 echo 'Verifique datos';
			 }
		}

		public function delete($id){
				$gm = new GenresModel();
				$gm->delete($id);
				//$gm->where(['name'=>'Blues'])->delete();
				$this->response->redirect('index');

		}//CLOSE FUNCTION


}
