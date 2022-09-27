@extends('layouts.app')
@section('content')
<div >
    <div class="container-fluid p-0 m-0">
        <div class="row p-0 m-0">
            <div class="col-12 p-0 m-0">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-block d-flex justify-content-center align-items-center" style="height:100vh;background-repeat:no-repeat;width:100%; ;background-image:url(http://dev.aljawadain.org/assets/images/backgrounds/bk005.jpg);background-size:cover;background-position:center" >
                                    <div class="u-bg-primary-trans-50 bg-light p-4 rounded" style="width:80%;">
                                        <h5 class="mb-4">
                                            يقول الكاظم عليه السلام
                                        </h5>
                                        <p style="font-size:1.6rem">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla similique veritatis cumque dicta unde debitis excepturi perspiciatis aspernatur dolorum. Rem.
                                        </p>
                                    </div>
                        </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-block " style="height:100vh;background-repeat:no-repeat;width:100%; ;background-image:url(https://images.pexels.com/photos/13673726/pexels-photo-13673726.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load);background-size:cover;background-position:center" >
                        </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-block " style="height:100vh;background-repeat:no-repeat;width:100%; ;background-image:url(https://images.pexels.com/photos/13693805/pexels-photo-13693805.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load);background-size:cover;background-position:center" >
                        </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection