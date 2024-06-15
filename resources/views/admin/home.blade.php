@include('admin.layouts.header', ['title' => 'Home - Admin Panel'])
@include('admin.layouts.navbar')

<div id="content" class="page">

    <h1>Log Activity</h1>
    <table id="userTable" class="display initTable">
        <thead>
            <tr>
                <th data-width="1%">ID</th>
                <th data-width="4%">Name User</th>
                <th data-width="20%">Activity</th>
                <th data-width="10%">Date</th>
            </tr>
        </thead>
        <tbody>
        	@foreach ($logs as $key => $log)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $user[$log->user_ID] }}</td>
                    <td>{{ $log->action }}</td> 
                    <td>{{ date('j F Y H:i:s', $log->created) }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('admin.layouts.footer')
