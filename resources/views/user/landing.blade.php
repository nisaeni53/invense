
@extends('user.layout.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            {{--  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>  --}}
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('library/icon/carousel1.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Dapatkan yang kamu mau</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('library/icon/carousel2.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Meet Your Need</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('library/icon/carousel3.jpg')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Semua peralatan ada disini</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="row mt-2">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="worktols">
                    <h2>Work Tools</h2>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore minima totam error autem. Rem doloremque ipsa velit illum! Totam esse similique asperiores voluptatibus, earum et placeat reprehenderit impedit corrupti nisi!</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="comtols">
                    <h2>Commons Tools</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, doloremque ipsum! Voluptatibus cum atque incidunt, dicta quas assumenda veniam, cumque sed nostrum quae delectus ex laboriosam fugiat tempore quo blanditiis.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 16rem;">
                    <img src="{{asset('library/icon/bukuindo.jpg')}}" class="card-img-top" alt="..">
                    <div class="card-body">
                        <h4 class="card-title">Buku Indonesia</h4>
                        <p class="card-text">Ini hanya sebuah keterangan</p>
                        <div class="quantity-counter">
                            <span class="down"  >-</span>
                            <input type="text" name="qty" value="0" id="1" class="input-filled">
                            <span class="up"  >+</span>
                        </div>
                    </div>
                    <a href="#">
                        <div class="card-footer text-center">
                            Pinjam
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 16rem;">
                    <img src="{{asset('library/icon/bukuindo.jpg')}}" class="card-img-top" alt="..">
                    <div class="card-body">
                        <h4 class="card-title">Buku Indonesia</h4>
                        <p class="card-text">Ini hanya sebuah keterangan</p>
                        <div class="quantity-counter">
                            <span class="down"  >-</span>
                            <input type="text" name="qty" value="0" id="2" class="input-filled">
                            <span class="up"  >+</span>
                        </div>
                    </div>
                    <a href="#">
                        <div class="card-footer text-center">
                            Pinjam
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 16rem;">
                    <img src="{{asset('library/icon/bukuindo.jpg')}}" class="card-img-top" alt="..">
                    <div class="card-body">
                        <h4 class="card-title">Buku Indonesia</h4>
                        <p class="card-text">Ini hanya sebuah keterangan</p>
                        <div class="quantity-counter">
                            <span class="down"  >-</span>
                            <input type="text" name="qty" value="0" id="3" class="input-filled">
                            <span class="up"  >+</span>
                        </div>
                    </div>
                    <a href="#">
                        <div class="card-footer text-center">
                            Pinjam
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 16rem;">
                    <img src="{{asset('library/icon/bukuindo.jpg')}}" class="card-img-top" alt="..">
                    <div class="card-body">
                        <h4 class="card-title">Buku Indonesia</h4>
                        <p class="card-text">Ini hanya sebuah keterangan</p>
                        <div class="quantity-counter">
                            <span class="down" >-</span>
                            <input type="text" name="qty" value="0" id="4" class="input-filled">
                            <span class="up" >+</span>
                        </div>
                    </div>
                    <a href="#">
                        <div class="card-footer text-center">
                            Pinjam
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        var incrementButton = document.getElementsByClassName('up');
        var decrementButton = document.getElementsByClassName('down');

        //increment Button
        for(var i=0; i < incrementButton.length; i++){ 
            var button = incrementButton[i];
            button.addEventListener('click',function(event){
                var buttonClicked = event.target;
                var input = buttonClicked.parentElement.children[1];
                var inputValue = input.value;
                var newValue = parseInt(inputValue) + 1;
                input.value = newValue;
            })
        }

        //decrement Button
        for(var i=0; i < decrementButton.length; i++){ 
            var button = decrementButton[i];
            button.addEventListener('click',function(event){
                var buttonClicked = event.target;
                var input = buttonClicked.parentElement.children[1];
                var inputValue = input.value;
                var newValue = parseInt(inputValue) - 1;
                if(newValue>= 0){
                    input.value = newValue;
                }else{
                    input.value = 0;
                }
            })
        }
    </script>
@endsection