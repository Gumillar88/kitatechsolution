@include('admin.layouts.header', ['title' => 'Create User - Admin Panel'])
@include('admin.layouts.navbar')

<div id="content" class="page">

    <h1>Remove User</h1>

    <div>

        <form role="form" method="POST" action="/admin/user/remove">
            {!! csrf_field() !!}
            <input type="hidden" name="ID" value="{{ $ID }}" />

            <p>
                Warning: This action cannot be undone. <br />
                Are you sure want to remove the user?
            </p>

            <p>
                <input type="submit" class="btn btn-red" value="Remove" />
                <a href="/{{ env('APP_ADMIN_SECTION') }}/user" class="btn">Cancel</a>
            </p>

        </form>
    </div>

</div>

@include('admin.layouts.footer');
