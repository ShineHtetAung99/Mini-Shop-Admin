<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Project</title>       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/shop.css') }}" rel="stylesheet" />

    </head>
    <body>
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">SHA Creation</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a></li>
                        
                        @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login')}}">Login</a></li>
                        @endguest
                        @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('products.index')}}">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('categories.index')}}">Categories</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit()">Logout</a></li>
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                            @csrf
                        </form>
                         @endauth
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" 
                            aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="#!">All Products</a></li>
                                 <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li> 
                                 @foreach ($categories as $category)
                                <li><a class="dropdown-item" href="#!">{{$category}}</a></li>
                                @endforeach                               
                            </ul>
                        </li>  --}}
                    </ul>
                    
                    
                   
                </div>
            </div>
        </nav>

        <div class="container" mt-3 mb-3 >@yield('content')</div>
        
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; SHA Creation 2022</p></div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('public/js/scripts.js') }}"></script>
    </body>
</html>
