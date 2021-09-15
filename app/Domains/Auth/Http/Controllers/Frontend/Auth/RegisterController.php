<?php

namespace App\Domains\Auth\Http\Controllers\Frontend\Auth;

use App\Domains\Auth\Services\UserService;
use App\Rules\Captcha;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use LangleyFoxall\LaravelNISTPasswordRules\PasswordRules;
use App\Domains\BioData\Models\Biodata;

/**
 * Class RegisterController.
 */
class RegisterController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * @var UserService
     */
    protected $userService;

    /**
     * RegisterController constructor.
     *
     * @param  UserService  $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Where to redirect users after registration.
     *
     * @return string
     */
    public function redirectPath()
    {
        return route(indexRoute());
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        abort_unless(config('boilerplate.access.user.registration'), 404);

        return view('frontend.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'age' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:100'],
            'marital_status' => ['required', 'string', 'max:100'],
            'state' => ['required', 'string', 'max:100'],
            'local_government' => ['required', 'string', 'max:100'],
            'residential_address' => ['required', 'string', 'max:100'],
            'gender' => ['required', 'string', 'max:100'],
            'highest_education' => ['required', 'string', 'max:100'],
            'field' => ['required', 'string', 'max:100'],
            'employement_status' => ['required', 'string', 'max:100'],
            'biz_coy_name' => ['nullable', 'string', 'max:100'],
            'biz_type_job_title' => ['nullable', 'string', 'max:100'],
            'worker_unit' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password' => array_merge(['max:100'], PasswordRules::register($data['email'] ?? null)),
            'terms' => ['required', 'in:1'],
            'g-recaptcha-response' => ['required_if:captcha_status,true', new Captcha],
        ], [
            'terms.required' => __('You must accept the Terms & Conditions.'),
            'g-recaptcha-response.required_if' => __('validation.required', ['attribute' => 'captcha']),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     *
     * @return \App\Domains\Auth\Models\User|mixed
     * @throws \App\Domains\Auth\Exceptions\RegisterException
     */
    protected function create(array $data)
    {
        // dd($data);
        abort_unless(config('boilerplate.access.user.registration'), 404);
        $user = $this->userService->registerUser($data);
        $biodata = Biodata::create([
            'user_id' => $user->id,
            'age' => $data['age'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'marital_status' => $data['marital_status'],
            'state' => $data['state'],
            'local_government' => $data['local_government'],
            'residential_address' => $data['residential_address'],
            'highest_education' => $data['highest_education'],
            'biz_coy_name' => $data['biz_coy_name'] ?? null,
            'biz_type_job_title' => $data['biz_type_job_title'] ?? null,
            'field' => $data['field'] ?? null,
            'employement_status' => $data['employement_status'],
            'membership_status' => $data['membership_status'],
            'worker_unit' => $data['unit'] ?? null
        ]);
        return $user;
    }
}
