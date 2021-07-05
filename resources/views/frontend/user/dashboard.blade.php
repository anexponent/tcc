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
                        @if(Auth::user()->support)
                            {{-- @if(Auth::user()->support->count() > 0) --}}
                            <div class="text-info">
                                <div class="h3">You have already applied</div>
                                <div class="h4">You can login here to confirm the status of your empowerment</div>
                                <div>Status: <span class="{{ (Auth::user()->support->status=='Pending') ? 'text-danger':'text-success' }}">{{ Auth::user()->support->status }}</span></div>
                            </div>
                        @else
                            <div class="text-2xl mb-3 bg-yellow-800 text-white rounded-lg py-1 px-2">@lang('Apply for Support')</div>
                            <div>
                                <form action="{{ Route('frontend.support.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="border-2 border-gray-700 mt-2 rounded-lg px-2">
                                        <label for="typ_of_support" class="text-lg">Type of Support</label>
                                        <select name="type_of_support" class=" mb-2 w-full rounded-lg h-10 p-2">
                                            <option value="">Select Support Type</option>
                                            <option value="capacity development">Capacity Development </option>
                                            <option value="training/professional exam">Training/Profesional Exam</option>
                                            <option value="business support">Business Support/Bridge Fund</option>
                                        </select>
                                    </div>

                                    <div class="border-2 border-gray-700 mt-2 rounded-lg px-2">
                                        <label for="prior knowledge" class="text-lg mt-4">Prior Knowledge in the Area of Business</label>
                                        <input type="text" name="prior_knowledge" class="mb-2 w-full h-10 border border-black rounded p-2">
                                    </div>

                                    <div class="border-2 border-gray-700 mt-2 rounded-lg px-2">
                                        <label for="lpo" class="text-lg mt-4">Verifiable LPO </label>
                                        <input type="file" name="lpo" class="w-full h-10 border border-black rounded p-2">
                                        <span class="text-danger"><small>Only upload LPO if four Support type is Business Support/Bridge Fund</small></span>
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
