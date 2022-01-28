@if(session('success') != '')
    <div class="alert alert-success alert-dismissible fade show col-sm-12" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error') != '')
    <div class="alert alert-danger alert-dismissible fade show col-sm-12" role="alert">
        {{ session('error') }}
    </div>
@endif


@if(session('warning') != '')
    <div class="alert alert-warning alert-dismissible fade show col-sm-12" role="alert">
        {{ session('warning') }}
    </div>
@endif


@if(session('info') != '')
    <div class="alert alert-info alert-dismissible fade show col-sm-12" role="alert">
        {{ session('info') }}
    </div>
@endif


@if(session('primary') != '')
    <div class="alert alert-primary alert-dismissible fade show col-sm-12" role="alert">
        {{ session('primary') }}
    </div>
@endif
