@extends('frontend.layouts.app')

@section('title', __('Register'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-frontend.card>
                    <x-slot name="header">
                        @lang('Register')
                    </x-slot>

                    <x-slot name="body">
                        <x-forms.post :action="route('frontend.auth.register')">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">@lang('Name')</label>

                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="{{ __('Name') }}" maxlength="100" required autofocus autocomplete="name" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">@lang('Email')</label>

                                <div class="col-md-6">
                                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="{{ __('Email') }}" maxlength="100" required autofocus autocomplete="email" />
                                </div>
                            </div><!--form-group-->


                            <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">@lang('Date of Birth')</label>

                                <div class="col-md-6">
                                    <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob') }}" placeholder="{{ __('Name') }}" maxlength="100" required autofocus autocomplete="dob" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">@lang('Phone Number')</label>

                                <div class="col-md-6">
                                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" placeholder="{{ __('Name') }}" maxlength="100" required autofocus autocomplete="phone" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">@lang('Address')</label>

                                <div class="col-md-6">
                                    <input type="text" name="address" id="address" class="form-control" placeholder="{{ __('Address') }}" value="{{ old('address') }}" maxlength="255" required autocomplete="address" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="occupation" class="col-md-4 col-form-label text-md-right">@lang('Occupation/Type of Business')</label>

                                <div class="col-md-6">
                                    <input type="text" name="occupation" id="occupation" class="form-control" placeholder="{{ __('Occupation') }}" value="{{ old('occupation') }}" maxlength="255" required autocomplete="occupation" />
                                </div>
                            </div><!--form-group-->


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">@lang('Password')</label>

                                <div class="col-md-6">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="new-password" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">@lang('Password Confirmation')</label>

                                <div class="col-md-6">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Password Confirmation') }}" maxlength="100" required autocomplete="new-password" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="terms" value="1" id="terms" class="form-check-input" required>
                                        <label class="form-check-label" for="terms">
                                            @lang('I agree to the') <a href="{{ route('frontend.pages.terms') }}" target="_blank">@lang('Terms & Conditions')</a>
                                        </label>
                                    </div>
                                </div>
                            </div><!--form-group-->

                            @if(config('boilerplate.access.captcha.registration'))
                                <div class="row">
                                    <div class="col">
                                        @captcha
                                        <input type="hidden" name="captcha_status" value="true" />
                                    </div><!--col-->
                                </div><!--row-->
                            @endif

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary" type="submit">@lang('Register')</button>
                                </div>
                            </div><!--form-group-->
                        </x-forms.post>
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-8-->
        </div><!--row-->
    </div><!--container-->
@endsection
