@if(session('success') != '')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{__('Success')}}</strong>
        <hr />
        {{ session('success') }}
    </div>
@endif

@if(session('error') != '')
    <div class="alert alert-error alert-dismissible fade show" role="alert">
        <strong>{{__('Error')}}</strong>
        <hr />
        {{ session('error') }}
    </div>
@endif


@if(session('warning') != '')
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{__('Warning')}}</strong>
        <hr />
        {{ session('warning') }}
    </div>
@endif


@if(session('info') != '')
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>{{__('Info')}}</strong>
        <hr />
        {{ session('info') }}
    </div>
@endif


@if(session('primary') != '')
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>{{__('')}}</strong>
        <hr />
        {{ session('primary') }}
    </div>
@endif
