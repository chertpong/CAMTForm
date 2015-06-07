<div class="panel panel-default col-md-offset-1">
    <div class="panel-heading">
        Search options
    </div>
    <div class="panel-body">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (isset($success))
            <div class="alert alert-success">
                <strong> Success!</strong> {{$success}}
            </div>
        @endif

        @include('components.searchId')
    </div>
</div>