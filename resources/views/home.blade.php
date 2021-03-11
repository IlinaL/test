@include('layouts.header')
@include('layouts.user-headers')

@if(Session::get('error_msg'))
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Error!</h4>
    {{Session::get('error_msg')}}
</div>
@elseif(Session::get('success_msg'))
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Success !</h4>
    {{Session::get('success_msg')}}
</div>
@endif
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @if (isset($users))
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->user_type}}</td>
                <td>
                    <a href="{{'edit'}}/{{$user->id}}"> <button class="btn btn-outline-success">Edit</button></a>
                    <a href="{{'delete'}}/{{$user->id}}"> <button class="btn btn-outline-danger delete">Delete</button></a>
                </td>
            </tr>
            @endforeach
            @elseif($message !== null)

            <div class="col-12">
                <div class="block block-transparent"><br><br><br>
                    <div class="block-header">
                        <h1 class="block-title">{{$message}}</h1>
                    </div>
                    @endif
                </div>
        </tbody>
    </table>
    </body>
    <!-- Delete -->
    <script>
    $(document).on('click', '.delete', function(e) {
        var confirmed = confirm("Are you sure you want to delete this record ?");
        if (!confirmed) {
            return false;
        }

    });
    </script>

    </html>