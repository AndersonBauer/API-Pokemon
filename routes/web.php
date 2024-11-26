<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Nas ronas logo apos Route::get('pokemon/create', [PokemonController::class, 'create']) temos ->middleware(['auth', 'verified'])->name('create-pokemon');
// essa parte do middleware ela nao eixa quem nao esta logado acessar as rotas que vc deseja, nesse caso apenas a index esta sem esse midleware
// o que permite acessa-las sem estar logado, porem os botoes de editar e deletar estarao escondidos como ja foi definido no arquivo
// index.blade.php com o @can que segue a mesma logica no base.blade.php que esconde os botoes de criar pokemon e coaches

Route::get('pokemon', [PokemonController::class, 'index']);
Route::get('pokemon/create', [PokemonController::class, 'create'])->middleware(['auth', 'verified'])->name('create-pokemon');
Route::post('pokemon', [PokemonController::class, 'store'])->middleware(['auth', 'verified'])->name('store-pokemon');
Route::get('pokemon/{id}/edit', [PokemonController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-pokemon');
Route::put('pokemon/{id}', [PokemonController::class, 'update'])->middleware(['auth', 'verified'])->name('update-pokemon');
Route::delete('pokemon/{id}', [PokemonController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-pokemon');

//rotas dos coach

Route::get('coaches', [CoachController::class, 'index']);
Route::get('coaches/create', [CoachController::class, 'create'])->middleware(['auth', 'verified'])->name('create-coach');
Route::post('coaches', [CoachController::class, 'store'])->middleware(['auth', 'verified'])->name('store-coach');
Route::get('coaches/{id}/edit', [CoachController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-coach');
Route::put('coaches/{id}', [CoachController::class, 'update'])->middleware(['auth', 'verified'])->name('update-coach');
Route::delete('coaches/{id}', [CoachController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-coach');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
