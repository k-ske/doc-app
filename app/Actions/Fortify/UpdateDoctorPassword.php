<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesDoctorPasswords;

class UpdateDoctorPassword implements UpdatesDoctorPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and update the doctor's password.
     *
     * @param  mixed  $doctor
     * @param  array  $input
     * @return void
     */
    public function update($doctor, array $input)
    {
        Validator::make($input, [
            'current_password' => ['required', 'string'],
            'password' => $this->passwordRules(),
        ])->after(function ($validator) use ($doctor, $input) {
            if (! isset($input['current_password']) || ! Hash::check($input['current_password'], $doctor->password)) {
                $validator->errors()->add('current_password', __('The provided password does not match your current password.'));
            }
        })->validateWithBag('updatePassword');

        $doctor->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}
