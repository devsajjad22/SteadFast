
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SteadFast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .bgdark{
            background-color: gray;
        }
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
        
    </style>

</head>
<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-2">
                <div class="row bg-dark">
                    <div class="col">
                        <h2 style="font-size: 24px; width:100%; padding:5px" class="bg-dark text-light">SteadFast Courier</h2>
                    </div>
                </div>
                <div class="row bg-secondary p-3">
                    <div class="col">
                    <a href="{{route('tax')}}" class="nav-link text-light">Tax Calculator</a> <br>
                    <a href="{{url('/')}}" class="nav-link text-light">Dashboard</a> <br>
                    <a href="{{url('order')}}" class="nav-link text-light">Orders</a> <br>
                    <a href="{{url('product')}}" class="nav-link text-light">Products</a> <br>
                    <a href="" class="nav-link text-light">Customer</a> <br>
                    <a href="" class="nav-link text-light">Report</a> <br>
                    <a href="" class="nav-link text-light">Integretions</a> <br>
                   <h5>Saved Reports</h5>
                   <a href="" class="nav-link text-light">Current Month</a> <br>
                   <a href="" class="nav-link text-light">Last Quarter</a> <br>
                   <a href="" class="nav-link text-light">Social Engagement</a> <br>
                   <a href="" class="nav-link text-light">Year-End Sale</a> <br>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="row bgdark">
                    <div class="col-10">
                        <form action="" method="post">
                            @csrf 
                            <input type="text" name="search" style="padding: 10px;" class="form-control bgdark  text-white" placeholder="Search Here" >
                        </form>
                    </div>
                    <div class="col-2">
                        @auth 
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <span class="btn btn-danger">Log Out</span>
                            </x-dropdown-link>
                        </form>
                </a>
                        @else 
                        <a href="{{route('login')}}" class="btn btn-success">Log In</a>
                        <a href="{{route('register')}}" class="btn btn-info">Register</a>
                        @endif
                    </div>
                </div>
                @hasSection('maincontent')
                @yield('maincontent')
                @else
                <p>Hello WOrld</p>
                <h2>This is Dashboard</h2>
                @auth 
                <a href="{{route('dashboard')}}" class="btn btn-warning">Go Profile</a>
                @endif
                @endif
            </div>
        </div>
    </div>
</body>
</html>