@include('admin.layouts.header', ['title' => 'Create User - Admin Panel'])
@include('admin.layouts.navbar')

<div id="content" class="page">

    <h1>Create User</h1>

    <div>

        <form role="form" method="POST" action="/{{ env('APP_ADMIN_SECTION') }}/user/create">
            {!! csrf_field() !!}

            @if(count($errors) > 0)
    			<div class="note error">{{ $errors->all()[0] }}</div>
    		@endif

            <div class="form-group">
                <label for="fullname">Fullname</label>
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" value="{{ old('fullname') }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="username">Type</label>
                <select class="form-control" name="type">
                  <option value="normal" selected>Normal</option>
                  <option value="admin">Admin</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>

            <p class="text-center">
                <input type="submit" class="btn btn-green" value="Create" />
                <a href="/{{ env('APP_ADMIN_SECTION') }}/user" class="btn">Back</a>
            </p>

        </form>
    </div>

</div>

@include('admin.layouts.footer');
