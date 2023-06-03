@extends('layouts.app')

@section('content')
<?php 
    //$profile = App\Profile::find(Auth::user()->id);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('dangerstatus'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('dangerstatus') }}
                        </div>
                    @endif

                    @if(Auth::user()->has_applied == NULL)
                        <h2>Welcome, {{ Auth::user()->name }}!</h2> <hr>
                        Congratulations on taking this first step in the scholarship application process! <br>
                        Here are some tips to get you started: <br>
                        <ul>
                            <li>This tab is your Dashboard. After you apply for a scholarship, you will see your application progress here.</li>
                            <li>You can view and edit your information under My Info tab.</li>
                        </ul>
                    @else
                        <h2>Your scholarship application status: <button class="btm btn-warning" disabled>Pending</button></h2>
                        <p>Your personal information is under review by the administrator. You will be notified AFTER the final deadline of scholarship application submission. Stay tuned!</p><br>
                        <p><button class="btn btn-warning">You can still change your personal information until the last date of application submission.</button></p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
