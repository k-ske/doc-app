<?php

namespace App\Actions\Fortify;

use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewDoctors;
use Laravel\Jetstream\Jetstream;

class CreateNewDoctor implements CreatesNewDoctors
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered doctor.
     *
     * @param  array  $input
     * @return \App\Models\Doctor
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:doctors'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return Doctor::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
