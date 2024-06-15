@include('admin.layouts.header', ['title' => 'Login - Admin Panel'])

<div id="login" class="page">

    <div id="content" class="small">

        <h1>Login</h1>

		@if(Session::has('login-error'))
			<div class="note error">Email and password didn't match. Please try again.</div>
		@endif

        @if(Session::has('reset-password-success'))
            <div class="note success">Your password has been updated. Please login again</div>
        @endif

        <form role="form" method="POST" action="{{ env('APP_HOME_URL')}}{{env('APP_ADMIN_SECTION')}}/login">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <p class="text-center">
                <input type="submit" class="btn btn-green" value="Login" />
            </p>
        </form>
        <!-- <a href="{{ env('APP_HOME_URL')}}{{env('APP_ADMIN_SECTION')}}/password/forgot">Forgot Password</a> -->
    </div>

</div>

@include('admin.layouts.footer')
