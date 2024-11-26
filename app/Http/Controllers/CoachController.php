<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        // aqui definimos para aparecer todos os chaches
        $coaches = Coach::all();
        return view('coaches.index', compact('coaches'));
    }
    
    public function create()
    {
        // aqui temos o metodo create que manda para a rota de criar um coach no arquivo create na view
        return view('coaches.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required', // aqui eu to passando um required na variavel nome
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', //aqui eu to passando o required na image e setando as extencoes que esse arquivo pode ser
        ]);
        $imageName = time().'.'.$request->image->extension(); // aqui ele define o nome da imagem como tempo . e a extencao do arquivo
        $request->image->move(public_path('images'), $imageName); // aqui eu acho que ele move o arquivo da imagem para a parta images com o nome certinho

        $coach = new Coach(); // aqui ele cria o novo coach
        $coach->nome = $request->nome; // aqui ele seta o nome do request pra varivel nome
        $coach->image = 'images/'.$imageName; // aqui ele seta a imagem do requent pra variavel image
        $coach->save(); // aqui ele salva isso tudo

        return redirect('coaches')->with('success', 'coach created successfully.');
    }
    
    public function edit($id)
    {
        // aqui é um funcao para achar o id e mandar a gente pra tela de edicao do id certo
        $coach = Coach::findOrFail($id);
        return view('coaches.edit', compact('coach'));
    }
    
    public function update(Request $request, $id)
    {
        // primeiro ele acha a entidade a ser atualizada
        $coach = Coach::findOrFail($id);

        $coach->nome = $request->nome; // aqui ele salva o nome atualizado
        // n if ele faz uma verificacao pra ver se a imagem é ou nao a mesma
        if(!is_null($request->image)) {
            $imageName = time().'.'.$request->image->extension(); // aqui ele muda o nome da imagem
            $request->image->move(public_path('images'), $imageName); // move pra pasta certa

            $coach->image = 'images/'.$imageName; // integra ela na variavel do coach correto 
        }
        $coach->save(); // salva as alteracoes na pagina de edicao

        return redirect('coaches')->with('success', 'coach updated successfully.'); // redireciona para a  url coaches
    }
    
    public function destroy($id)
    {
        // aqui ele procura o id de coach
        $coach = Coach::findOrFail($id);
        $coach->delete(); // aqui ele pega a variavel que é definida na hora em que é achado id de coach
        return redirect('coaches')->with('success', 'coach deleted successfully.'); // apos deletar ele redireciona para a parte de coaches
    }
}
