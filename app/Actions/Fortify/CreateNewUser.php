<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        // dd($input);
        Validator::make($input, [
            'company' => ['required','string','max:255'],
            'name' => ['required', 'string', 'max:255'],
            'job' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'role_id' => 2,
            'company_name' => $input['company'],
            'name' => $input['name'],
            'job_title' => $input['job'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
