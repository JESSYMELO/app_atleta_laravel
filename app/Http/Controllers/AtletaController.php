<?php

namespace App\Http\Controllers;

use App\Atleta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AtletaController extends Controller
{
    public function pesquisar(){
        //busca todos os produtos do banco de dados
        $atletas = Atleta::all();

        //recebe o conteudo elemento 'nome' do formulario
        $nome = Input::get('nome');

        //busca atletas com o conteudo da $nome
        $atletas = Atleta::where('nome','like','%'.$nome.'%')->get();

        return view('cadastro.pesquisar')->with('atletas',$atletas);
    }

    public function mostrar_inserir(){

        return view('cadastro.inserir');
    }

    public function inserir(){

        $atleta = new Atleta();

        // Colocando os valores recebidos do formulário nos atributos do objeto $produto
        $atleta->nome = Input::get('nome');
        $atleta->idade = Input::get('idade');
        $atleta->data_nascimento = Input::get('data_nascimento');
        $atleta->posicao = Input::get('posicao');

        // Salvando no banco de dados
        $atleta->save();

        // Criado uma mensagem para o usuário
        $mensagem = "Atleta inserido com sucesso";

        // Chamando a view produto.inserir e enviando a mensagem criada
        return view('cadastro.inserir')->with('mensagem', $mensagem);
    }
    public function mostrar_alterar($id){

        //busca no banco o registro com o id recebido
        $atletas = Atleta::find($id);

        //envia os dados deste registro a view produto.alterar
        return view('cadastro.alterar')->with('atletas',$atletas);
    }

    public function alterar(){

        $id = Input::get('id');
        $a = Atleta::find($id);

        $a->nome = Input::get('nome');
        $a->idade = Input::get('idade');
        $a->data_nascimento = Input::get('data_nascimento');
        $a->posicao = Input::get('posicao');

        $a->save();

        $mensagem = "Atleta alterado com sucesso!";
        $atletas = Atleta::all();
        return view('cadastro.pesquisar')->with('mensagem',$mensagem)->with('atletas',$atletas);
    }

    public function excluir($id){
        //criando um objeto com o id recebido pela rota
        $atleta = Atleta::find($id);

        //Excluindo este objeto
        $atleta->delete();

        //criando uma mensagem para ser enviada a view produto.pesquisar
        $mensagem = "Atleta excluído com sucesso!";

        //capturando objetos para enviar a view produto.pesquisar
        $atletas = Atleta::all();

        //retornando a view produto.pesquisar
        return view('cadastro.pesquisar')->with('mensagem',$mensagem)->with('atletas',$atletas);
    }
}


