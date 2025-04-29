<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        $required = __('ui.Register2');
        $emailValid = __('ui.Register3');
        $emailUnique = __('ui.Register4');
        $passwordMin = __('ui.Register5');
        $passwordConfirmed = __('ui.Register6');

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'required' => "{$required}",
            'email.unique' => "{$emailUnique}",
            'email.email' => "{$emailValid}",
            'password.min' => "{$passwordMin}",
            'password.confirmed' => "{$passwordConfirmed}",
        ], [
            'name' => 'nome utente',
            'email' => 'email',
            'password' => 'password',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
