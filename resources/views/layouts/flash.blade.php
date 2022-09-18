@if (session('status'))
    <div class="alert alert-success" role="alert">
        <strong class="text-capitalize">Success!</strong> {{session('status')}}
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if (isset($verified))
    <div class="alert alert-success" style="width: 100%" role="alert">
        {{ __('Email Successfully Verified!') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger" role="alert">
        <strong class="text-capitalize">Error!</strong> {{session('error')}}
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if (count($errors) > 0)
    <div class="row">
        <div class="alert alert-danger" style="width: 100%">
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif