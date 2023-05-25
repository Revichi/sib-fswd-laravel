<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('produk.index')}}">All Products</a></li>
                    </ul>
                    <form class="d-flex">
                        <a class="btn btn-outline-light" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-light text-white ms-1 rounded-pill">0</span>
                        </a>
                        <a class="btn btn-outline-light ms-1" type="submit">
                            <i class="bi-person-fill me-1"></i>
                            login
                            <span class="badge bg-light text-white ms-1 rounded-pill">0</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>