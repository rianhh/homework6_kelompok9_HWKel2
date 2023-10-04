@include('layouts.include.head')
@include('layouts.include.footer')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block">
                    <img class="image-fluid col-lg-13" src="{{asset('assets/rakamin.png')}}" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Login</h1>
                        </div>
                        <form method="post" action="{{ route('login.index') }}" enctype="multipart/form-data" class="user">
                            @csrf
                            <div class="form-group">
                                @if (session('message'))
                                <div class="alert alert-danger alert-dimissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert"><span>x</span></button>
                                        {{ session('message') }}
                                    </div>
                                </div>
                                    
                                @endif
                                <label for="email"></label>
                                <input name="email" type="email" class="form-control form-control-user" id="email"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Password">
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
