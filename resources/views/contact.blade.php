<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    </head>
    <body>
            <p>Prelim Project</p>
        <div>   
            <nav  class="d-flex aligns-items-center justify-content-center" style="height:200px">
                <ul class="d-flex list-unstyled ">
                    <li><a class="nav-link mt-5" href="{{url('/')}}">Home</a></li>
                    <li><a class="nav-link mt-5 h5 success" href="{{url('/contact')}}">contact</a></li>
                    <li><a class="nav-link mt-5" href="{{url('/About')}}">About</a></li>
                </ul>
            </nav>
        </div>
        <div  class="d-flex aligns-items-center justify-content-center">
                <h5>Contact us for more Information</h5>
        </div>
    </body>
</html>