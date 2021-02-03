<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesDoctorProfileInformation;

class UpdateDoctorProfileInformation implements UpdatesDoctorProfileInformation
{
    /**
     * Validate and update the given doctor's profile information.
     *
     * @param  mixed  $doctor
     * @param  array  $input
     * @return void
     */
    public function update($doctor, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('doctors')->ignore($doctor->id)],
            'photo' => ['nullable', 'image', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $doctor->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $doctor->email &&
            $doctor instanceof MustVerifyEmail) {
            $this->updateVerifiedDoctor($doctor, $input);
        } else {
            $doctor->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the given verified doctor's profile information.
     *
     * @param  mixed  $doctor
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedDoctor($doctor, array $input)
    {
        $doctor->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $doctor->sendEmailVerificationNotification();
    }
}
