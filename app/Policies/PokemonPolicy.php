<?php

namespace App\Policies;

use App\Models\Pokemon;
use App\Models\Post;
use App\Models\User;

class PokemonPolicy
{
    public function create(?User $user): bool
    {
        // aqui é onde fazemos as funcoes que vao server para limitar o acesso as funcoes no create ( linha 22 do PokemonController ) 
        return !is_null($user);
    }

    public function delete(?User $user): bool
    {
        // aqui é onde fazemos as funcoes que vao server para limitar o acesso as funcoes no delete ( linha 22 do PokemonController ) 
        return !is_null($user);
    }

    public function update(?User $user): bool
    {
        // aqui é onde fazemos as funcoes que vao server para limitar o acesso as funcoes no update ( linha 87 do PokemonController ) 
        return !is_null($user);
    }
}