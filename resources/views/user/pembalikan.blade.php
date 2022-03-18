@include('user.layout.navbar')
@extends('user.layout.app')

@section('content') 

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="container">
                    <div class="row match-height">
                        {{--  <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="{{asset ('/library/icon/infocus.png')}}" alt="#" width="80">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-title">
                                                <h3>Infocus</h3>
                                            </div>
                                            <div class="card-description">
                                                <p>ini adalah sebuah deskripsi</p>
                                            </div>
                                            <div class="quantity-counter">
                                                <span class="down"  >-</span>
                                                <input type="text" name="qty" value="0" id="1" class="input-filled">
                                                <span class="up"  >+</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                <div class="card-footer text-center">
                                        Pinjam
                                    </div>
                                </a>
                            </div>
                        </div>  --}}
                        {{--  @foreach ($kembali as $barang)
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <img class="card-img-top" src="{{asset ('/library/icon/infocus.png')}}" alt="Card image cap" height="150" />
                                <div class="card-body">
                                    <h4 class="card-title">{{$barang->nama_barang}}</h4>
                                    <p class="card-desc">{{$barang->jumlah_pinjam}}</p>
                                </div>
                                <a href="#">
                                    <div class="card-footer text-center">
                                        Kembalikan
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach  --}}
                        @foreach ($kembali as $barang)
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <img class="img-fluid my-2" src="{{asset ('/library/icon/infocus.png')}}" alt="Card image cap" />
                                    <h4 class="card-title">{{$barang->nama_barang}}</h4>
                                    <h6 class="card-subtitle text-muted">{{$barang->jumlah_pinjam}}</h6>
                                    <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                                    <form action="{{ route('pengembalian.update',$barang->id) }}" name="status" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="3">
                                        <button type="submit" class="btn btn-primary">kembalikan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <img class="card-img-top" src="{{asset ('/library/icon/infocus.png')}}" alt="Card image cap" height="150" />
                                <div class="card-body">
                                    <h4 class="card-title">Infocus</h4>
                                    <p class="card-desc">Some quick example text to build on the card title.</p>
                                </div>
                                <a href="#">
                                    <div class="card-footer text-center">
                                        Kembalikan
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <img class="card-img-top" src="{{asset ('/library/icon/infocus.png')}}" alt="Card image cap" height="150" />
                                <div class="card-body">
                                    <h4 class="card-title">Infocus</h4>
                                    <p class="card-desc">Some quick example text to build on the card title.</p>
                                </div>
                                <a href="#">
                                    <div class="card-footer text-center">
                                        Kembalikan
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <img class="card-img-top" src="{{asset ('/library/icon/infocus.png')}}" alt="Card image cap" height="150" />
                                <div class="card-body">
                                    <h4 class="card-title">Infocus</h4>
                                    <p class="card-desc">Some quick example text to build on the card title.</p>
                                </div>
                                <a href="#">
                                    <div class="card-footer text-center">
                                        Kembalikan
                                    </div>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

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