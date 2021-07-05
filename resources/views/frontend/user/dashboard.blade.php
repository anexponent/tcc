@extends('frontend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                       @lang('Dashboard')
                    </x-slot>

                    <x-slot name="body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong>{{ $message }}</strong>
                            </div>
                        @endif
                            @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong>{{ $message }}</strong>
                            </div>
                        @endif


                        @if ($message = Session::get('warning'))
                            <div class="alert alert-warning alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif


                        @if ($message = Session::get('info'))
                            <div class="alert alert-info alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        @if(Auth::user()->support->count() > 0)
                            <div>You have already applied</div>
                        @else
                            <div class="text-xl mb-3">@lang('Apply for Support')</div>
                            <div>
                                <form action="{{ Route('frontend.support.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <label for="typ_of_support" class="text-lg">Type of Support</label>
                                        <select name="type_of_support" class="w-full rounded-lg h-10 p-2">
                                            <option value="">Select Support Type</option>
                                            <option value="capacity development">Capacity Development </option>
                                            <option value="training/professional exam">Training/Profesional Exam</option>
                                            <option value="business support">Business Support/Bridge Fund</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="prior knowledge" class="text-lg mt-2">Prior Knowledge in the Area of Business</label>
                                        <input type="text" name="prior_knowledge" class="w-full h-10 border border-black rounded p-2">
                                    </div>

                                    <div>
                                        <label for="lpo" class="text-lg mt-2">Verifiable LPO </label>
                                        <input type="file" name="lpo" class="w-full h-10 border border-black rounded p-2">
                                    </div>

                                    <div>
                                        <button class="bg-green-700 rounded-lg p-2 px-3 text-white mt-3">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
