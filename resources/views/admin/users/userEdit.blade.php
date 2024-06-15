@include('admin.layouts.header', ['title' => 'Edit User - Admin Panel'])
@include('admin.layouts.navbar')

<div id="content" class="page">

    <h1>Edit User</h1>

    <div>

        <form role="form" method="POST" action="/{{ env('APP_ADMIN_SECTION') }}/user/edit">
            {!! csrf_field() !!}
            <input type="hidden" name="ID" value="{{ $ID }}" />

            @if(count($errors) > 0)
    			<div class="note error">{{ $errors->all()[0] }}</div>
    		@endif

            @if(Session::has('user-updated'))
                <div class="note success">User data has been updated.</div>
            @endif

            <div class="form-group">
                <label for="fullname">Fullname</label>
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" value="{{ $fullname }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{ $email }}">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" name="type">
                    <option value="normal" {{ $statusNormal }}>Normal</option>
                    <option value="admin" {{ $statusAdmin }}>Admin</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password (Reset)</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>

            <p class="text-center">
                <input type="submit" class="btn btn-green" value="Save" />
                <a href="/{{ env('APP_ADMIN_SECTION') }}/user" class="btn">Back</a>
            </p>

        </form>
    </div>

</div>

@include('admin.layouts.footer');
