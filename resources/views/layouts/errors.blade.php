@if (isset($errors)&&count($errors) > 0&&is_array($errors))
    <div class="alert alert-danger">
        @foreach ($errors as $error)
            <li>{{ $error }}</strong></li>
        @endforeach
    </div>
@elseif ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif