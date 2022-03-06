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
                        {{-- <div class="col-md-4 col-sm-12">
                            <a href="/user/peminjaman/create">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset ('/library/icon/infocus.png')}}" alt="Card image cap" height="150" />
                                    <div class="card-body">
                                        <h4 class="card-title">Infocus</h4>
                                        <p class="card-desc">Some quick example text to build on the card title.</p>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                        {{-- <div class="col-md-4 col-sm-12">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset ('/library/icon/infocus.png')}}" alt="Card image cap" height="150" />
                                    <div class="card-body">
                                        <h4 class="card-title">Infocus</h4>
                                        <p class="card-desc">Some quick example text to build on the card title.</p>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                        {{-- <div class="col-md-4 col-sm-12">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset ('/library/icon/infocus.png')}}" alt="Card image cap" height="150" />
                                    <div class="card-body">
                                        <h4 class="card-title">Infocus</h4>
                                        <p class="card-desc">Some quick example text to build on the card title.</p>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                        {{-- <div class="col-md-4 col-sm-12">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset ('/library/icon/infocus.png')}}" alt="Card image cap" height="150" />
                                    <div class="card-body">
                                        <h4 class="card-title">Infocus</h4>
                                        <p class="card-desc">Some quick example text to build on the card title.</p>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                        @foreach ($barang as $row)
                        {{-- <td>{{$loop->iteration}}</td> --}}
                        <div class="col-md-4 col-sm-12">
                            <a href="/user/peminjaman/create">
                                <div class="card">
                                    <img class="card-img-top" src="{{url('') . '/' . $row->image}}" alt="Card image cap" height="150" />
                                    <div class="card-body">
                                        <h4 class="card-title">{{$row->namab}}</h4>
                                        <p class="card-desc">{{$row->jenisb}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
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