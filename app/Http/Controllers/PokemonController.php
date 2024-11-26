<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PokemonController extends Controller
{
        public function index()
    {
        // seleciona todas as entidades pokemon para aparecerem na listagem
        $pokemon = Pokemon::all();
        return view('pokemon.index', compact('pokemon'));
    }

    public function create()
    {
        // o Gate deixa apenas para quem está logado poder acessar
        Gate::authorize('create', Pokemon::class);
        // aqui ele adiciona o coache criado na lista de coaches
        $coaches = Coach::all();
        return view('pokemon.create', compact('coaches')); // retorna o arquivo do create de pokemon
    }

    public function store(Request $request)
    {
        // aqui ele vai validar as informacoes, aqui tbm deve ser adicionado o maximo de caracteres 
        $request->validate([
            'name' => 'required',
            'coach_id' => 'required',
            'type' => 'required',
            'power_of_points' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension(); // aqui ele define qual sera o nome da imagem a ser adicionada e como é o padrao
        $request->image->move(public_path('images'), $imageName); // aqui ele adiciona a imagem na pasta images

        $pokemon = new Pokemon(); // aqui ele cria o novo pokemon
        $pokemon->name = $request->name; // aqui ele seta o name que passou pelo request na variavel name do pokemon criado 
        $pokemon->type = $request->type; // aqui ele seta o type que passou pelo request na variavel type do pokemon criado
        $pokemon->coach_id = $request->coach_id; // aqui ele seta o coach_id que passou pelo request pra dentro da variavel coach_id do pokemon criado
        $pokemon->power_of_points = $request->power_of_points; // aqui ele seta o power que passou pelo request pra dentro da variavel power do pokemon criado
        $pokemon->image = 'images/'.$imageName; // aqui ele seta a imageName que passou pelo request pra dentro da variavel image do pokemon criado
        $pokemon->save(); // aqui ele salva as informacoes do pokemon
        
        return redirect('pokemon')->with('success', 'pokemon created successfully.'); // aqui ele retorna pra pokemon que no caso é a index
    }

    public function edit($id)
    {
        // aqui ele verifica a acessibilidade, tem que estar logado para poder acessar
        Gate::authorize('update', Pokemon::class);

        $coaches = Coach::all(); // pega todos os coaches e adiciona uma variavel pra eles/ pra poder fazer um foreaches da coaches na tabela pokemon
        $pokemon = Pokemon::findOrFail($id); // acha ou falha o id do pokemon
        return view('pokemon.edit', compact('pokemon', 'coaches')); // redireciona para o arquivo pokemon.edit na view
    }

    public function update(Request $request, $id)
    {
        // aqui ele vai achar o pokemon pelo id
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update($request->all()); // e chamar a funcao update pra todos os atributos daquele pokemon

        $pokemon->name = $request->name; // passando o request e salvando essa alteracao na variavel
        $pokemon->type = $request->type; // passando o request e salvando essa alteracao na variavel
        $pokemon->power_of_points = $request->power_of_points;// passando o request e salvando essa alteracao na variavel
        // verifica se é nao nulo ( o ! inverte a resposta ) pra saber se foi ou nao alterada a foto do pokemon
        // caso tenha sido alterada entra no if
        if(!is_null($request->image)) { 
            $imageName = time().'.'.$request->image->extension(); // aqui salva o nome da nova imagem do pokemon
            $request->image->move(public_path('images'), $imageName); // aqui move pra pasta das imagem

            $pokemon->image = 'images/'.$imageName; // aqui ele armazena a nova imagem pra variavel image do pokemon
        }
        $pokemon->save(); // aqui ele salva todas essas alteracoes

        return redirect('pokemon')->with('success', 'pokemon updated successfully.'); // aqui ele redireciona para a pokemon
    }

    public function destroy($id)
    {
        // aqui ele verifica o acesso a essa funcao ( tem que estar logado pra dar certo )
        Gate::authorize('delete', Pokemon::class);

        $pokemon = Pokemon::findOrFail($id); // aqui ele procura o pokemon com o id parametro
        $pokemon->delete(); // aqui ele deleta o pokemon com o id encontrado
        return redirect('pokemon')->with('success', 'pokemon deleted successfully.'); // redireciona para a pokemon
    }
}