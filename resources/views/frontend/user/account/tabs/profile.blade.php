<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered mb-0">
        <tr>
            <th>@lang('Type')</th>
            <td>@include('backend.auth.user.includes.type', ['user' => $logged_in_user])</td>
        </tr>

        <tr>
            <th>@lang('Avatar')</th>
            <td><img src="{{ $logged_in_user->avatar }}" class="user-profile-image" /></td>
        </tr>

        <tr>
            <th>@lang('Name')</th>
            <td>{{ $logged_in_user->name }}</td>
        </tr>

        <tr>
            <th>@lang('E-mail Address')</th>
            <td>{{ $logged_in_user->email }}</td>
        </tr>

        <tr>
            <th>@lang('Phone Number')</th>
            <td>{{ $logged_in_user->biodata->phone ?? null}}</td>
        </tr>

        <tr>
            <th>@lang('Age')</th>
            <td>{{ $logged_in_user->biodata->age . ' years' ?? null}}</td>
        </tr>

        <tr>
            <th>@lang('Marital Status')</th>
            <td>{{ $logged_in_user->biodata->marital_status }}</td>
        </tr>

        <tr>
            <th>@lang('State')</th>
            <td>{{ $logged_in_user->biodata->state }}</td>
        </tr>

        <tr>
            <th>@lang('Local Government')</th>
            <td>{{ $logged_in_user->biodata->state }}</td>
        </tr>

        <tr>
            <th>@lang('Residential Address')</th>
            <td>{{ $logged_in_user->biodata->residential_address ?? null}}</td>
        </tr>

        <tr>
            <th>@lang('Gender')</th>
            <td>{{ $logged_in_user->biodata->gender ?? null}}</td>
        </tr>

        <tr>
            <th>@lang('Highest Education')</th>
            <td>{{ $logged_in_user->biodata->highest_education ?? null}}</td>
        </tr>

        <tr>
            <th>@lang('Field')</th>
            <td>{{ $logged_in_user->biodata->field ?? null}}</td>
        </tr>

        <tr>
            <th>@lang('Employement Status')</th>
            <td>{{ $logged_in_user->biodata->employement_status ?? null}}</td>
        </tr>

        <tr>
            <th>@lang('Bisness/Company name')</th>
            <td>{{ $logged_in_user->biodata->biz_coy_name ?? null}}</td>
        </tr>

        <tr>
            <th>@lang('Business Type/Job Title')</th>
            <td>{{ $logged_in_user->biodata->biz_type_job_title ?? null}}</td>
        </tr>

        <tr>
            <th>@lang('Membership Status')</th>
            <td>{{ $logged_in_user->biodata->membership_status ?? null}}</td>
        </tr>

        <tr>
            <th>@lang('Unit')</th>
            <td>{{ $logged_in_user->biodata->worker_unit ?? null}}</td>
        </tr>

        @if ($logged_in_user->isSocial())
            <tr>
                <th>@lang('Social Provider')</th>
                <td>{{ ucfirst($logged_in_user->provider) }}</td>
            </tr>
        @endif

        <tr>
            <th>@lang('Timezone')</th>
            <td>{{ $logged_in_user->timezone ? str_replace('_', ' ', $logged_in_user->timezone) : __('N/A') }}</td>
        </tr>

        <tr>
            <th>@lang('Account Created')</th>
            <td>@displayDate($logged_in_user->created_at) ({{ $logged_in_user->created_at->diffForHumans() }})</td>
        </tr>

        <tr>
            <th>@lang('Last Updated')</th>
            <td>@displayDate($logged_in_user->updated_at) ({{ $logged_in_user->updated_at->diffForHumans() }})</td>
        </tr>
    </table>
</div><!--table-responsive-->
