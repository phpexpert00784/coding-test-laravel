<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Other meta tags and CSS links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Database CSS link ( includes Bootstrap 5 )  -->
    <link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>

<body>
    <!-- Your content here -->
    <br>
    <br>
    <div class="container text-center">
        <h1>Task (Sample)</h1>

        <h2>User Listing with order and its items</h2> @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <!-- Rest of your content -->
    </div>

    <div class="container">
        <form method="GET" action="{{ route('listing.index') }}" class="mb-3 mt-3">
            <div class="input-group">
                <input type="text" required name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by user name , email, order no, or item name">
                <button type="submit" class="btn btn-primary">Search</button>
                <button type="button" class="btn btn-primary" onclick="window.location='{{ url("/listing") }}'">Clear</button>
            </div>
        </form>
        <table class="table table-bordered table-striped table-hover" id="table">
            <thead class="thead-dark">
                <tr>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Orders as per user</th>
                </tr>
            </thead>
            <tbody id="tableBodyContents">
                @foreach($users as $user)
                <tr class="tableRow" >
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <ul class="list-unstyled">
                                @foreach($user->orders as $order)
                                    <li>
                                        <strong>Order No:</strong> {{ $order->order_no }}
                                        <ul class="list-unstyled ms-4">
                                            @foreach($order->items as $k => $item)
                                                <li>Item{{$k+1}}: {{ $item->name }}, Price{{$k+1}}: ${{ $item->price }}</li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

     <!-- jQuery CDN Link -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    <!-- Bootstrap 5 Bundle CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery UI CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <!-- DataTables JS CDN Link -->
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

    <!-- DataTables JS ( includes Bootstrap 5 for design [UI] ) CDN Link -->
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>


    <script type="text/javascript">
        $(function () {

            $("#table").DataTable({
                info: false,
                ordering: false,
                searching: false,
            });

            
        });
    </script>
</body>

</html>
