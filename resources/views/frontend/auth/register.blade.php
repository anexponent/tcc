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
                                <label for="name" class="col-md-4 col-form-label text-md-right">@lang('Name')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="{{ __('Name') }}" maxlength="100" required autofocus autocomplete="name" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">@lang('Email')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="{{ __('Email') }}" maxlength="100" required autofocus autocomplete="email" />
                                    {{-- <input type="checkbox" name="emal_verified" value="1" id="email_verified" checked readonly class="form-check-input" required> --}}
                                </div>
                            </div><!--form-group-->


                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">@lang('Age')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    <select name="age" class="form-control">
                                        <option value="18-25">@lang("18-25")</option>
                                        <option value="26-32">@lang("26-32")</option>
                                        <option value="33-39">@lang("33-39")</option>
                                        <option value="40-Above">@lang("40-Above")</option>
                                    </select>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">@lang('Gender')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    <select name="gender" class="form-control">
                                        <option value="Male">@lang("Male")</option>
                                        <option value="Female">@lang("Female")</option>
                                    </select>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">@lang('Phone Number')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" placeholder="{{ __('Phone Number') }}" maxlength="100" required autofocus autocomplete="phone" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="marital_status" class="col-md-4 col-form-label text-md-right">@lang('Marital Status')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    <select name="marital_status" class="form-control">
                                        <option value="Married">@lang("Married")</option>
                                        <option value="Single">@lang("Single")</option>
                                    </select>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="state" class="col-md-4 col-form-label text-md-right">@lang('State')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    <input type="text" name="state" id="state" class="form-control" value="{{ old('state') }}" placeholder="{{ __('State') }}" maxlength="100" required autofocus autocomplete="state" />
                                    {{-- <select name="marital_status" class="form-control">
                                        <option value="Married">@lang("Married")</option>
                                        <option value="Single">@lang("Single")</option>
                                    </select> --}}
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="local_government" class="col-md-4 col-form-label text-md-right">@lang('Local Government')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    <input type="text" name="local_government" id="local_government" class="form-control" value="{{ old('local_government') }}" placeholder="{{ __('Local Government') }}" maxlength="100" required autofocus autocomplete="local_goernment" />
                                    {{-- <select name="marital_status" class="form-control">
                                        <option value="Married">@lang("Married")</option>
                                        <option value="Single">@lang("Single")</option>
                                    </select> --}}
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">@lang('Residential Address')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    <input type="text" name="residential_address" id="address" class="form-control" placeholder="{{ __('Residential Address') }}" value="{{ old('residential_address') }}" maxlength="255" required autocomplete="address" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="highest_education" class="col-md-4 col-form-label text-md-right">@lang('Highest Education')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    {{-- <input type="text" name="highest_education" id="highest_education" class="form-control" placeholder="{{ __('Occupation') }}" value="{{ old('highest_education') }}" maxlength="255" required autocomplete="highest_education" /> --}}
                                    <select name="highest_education" class="form-control">
                                        <option value="Postgraduate">@lang('Postgraduate')</option>
                                        <option value="Graduate">@lang('Graduate')</option>
                                        <option value="SSCE">@lang('SSCE')</option>
                                        <option value="First School Leaving">@lang('First School Leaving')</option>
                                        <option value="None">@lang('None')</option>
                                    </select>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="field" class="col-md-4 col-form-label text-md-right">@lang('Field')</label>

                                <div class="col-md-6">
                                    <input type="text" name="field" id="field" class="form-control" placeholder="{{ __('Field') }}" value="{{ old('field') }}" maxlength="255" autocomplete="field" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="employment_status" class="col-md-4 col-form-label text-md-right">@lang('Employement Status')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    <select name="employement_status" class="form-control">
                                        <option value="Self Employed">@lang('Self Employed')</option>
                                        <option value="Employee">@lang('Employee')</option>
                                        <option value="Unemployed">@lang('Unemployed')</option>
                                    </select>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="membership_status" class="col-md-4 col-form-label text-md-right">@lang('Membership Status')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    <select name="membership_status" class="form-control">
                                        <option value="Worker">@lang('Worker')</option>
                                        <option value="Member">@lang('Member')</option>
                                    </select>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="unit" class="col-md-4 col-form-label text-md-right">@lang('Unit')</label>

                                <div class="col-md-6">
                                    <input type="text" name="unit" id="unit" class="form-control" placeholder="{{ __('Unit') }}" value="{{ old('unit') }}" maxlength="255" autocomplete="unit" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">@lang('Password')<span style="color:red; font-size:medium">*</span></label>

                                <div class="col-md-6">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="new-password" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">@lang('Password Confirmation')<span style="color:red; font-size:medium">*</span></label>

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
