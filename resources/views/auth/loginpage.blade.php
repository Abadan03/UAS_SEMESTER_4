@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center justify-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('BisBus || Login') }}</div>

                    <div class="card-body">
                        <form action="postlogin" method="post" class="">
                            @csrf
				        	<div class="" data-validate = "Enter Email" >
				        		<input class="" type="text" name="email" style="width: 100%" placeholder="Email" autocomplete="off">
				        		<span class="" data-placeholder="&#xe82a;"></span>
				        	</div>

				        	<div class="" data-validate="Enter password">
				        		<input class="" type="password" name="password" style="width: 100%" placeholder="Password" autocomplete="off">
				        		<span class="" data-placeholder="&#xe80f;"></span>
				        	</div>

				        	<div class="container-login100-form-btn m-t-32">
				        		<button class="login100-form-btn">
				        			Login
				        		</button>
				        	</div>
				        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
