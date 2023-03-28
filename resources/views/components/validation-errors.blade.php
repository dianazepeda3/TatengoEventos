@if($errors->any())
    <div class="alert alert-secondary" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <div class="iq-alert-text">
                    <li>{{ $error }}</li>                        
                </div>
            @endforeach
        </ul>
    </div>   
@endif   