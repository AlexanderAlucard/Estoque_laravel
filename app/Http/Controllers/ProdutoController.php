<?php	namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;
use app\Produtos;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request as IlluminateRequest;
use Symfony\Component\HttpFoundation\Response;

class ProdutoController extends Controller{
    public function lista(){
        $produtos = "Produtos";
        $produtos	=	Produto::all();
		return	view('produto.listagem')->with('produtos',	$produtos);
            

    }

    public function mostrar($id){
        
        $produto = Produto::find($id);
        if(empty($produto)){
            return "Esse produto não existe";
        }
        return	view('produto.detalhes')->with('p',	$produto);

    }

    public function novo(){

        return view('produto.formulario');
    }

    public function listaJson(){
        $produtos = Produto::all();
        return Response()->json($produtos);

    }

    public function	adiciona(){
        //	deve	adicionar	os	produtos	no	banco

        Produto ::create(Request::all());

        return Redirect()
        ->action('ProdutoController@lista')
        ->withInput(Request::only('nome'));
        
    }

    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()
            ->action('ProdutoController@lista');

    }
}

?>