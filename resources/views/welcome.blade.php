@extends('layouts.app')
@section('content')
<div class="container-fluid p-0 m-0">
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://dev.aljawadain.org/assets/images/backgrounds/bk005.jpg" class="d-block " style="width:100%; height:90vh;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/13673726/pexels-photo-13673726.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="d-block " style="width:100%; height:90vh;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/13693805/pexels-photo-13693805.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="d-block " style="width:100%; height:90vh;" alt="...">
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
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h2>Welcome Page</h2>
            <hr />
            current Locale: {{ app()->getLocale() }} <br />
            current Cookie: {{ request()->cookie('language') }} <br />
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="container px-4 py-5" id="hanging-icons">
                <h2 class="pb-2 border-bottom">Hanging icons</h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="col d-flex align-items-start">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#toggles2" />
                            </svg>
                        </div>
                        <div>
                            <h2>Featured title</h2>
                            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                            <a href="#" class="btn btn-primary">
                                Primary button
                            </a>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#cpu-fill" />
                            </svg>
                        </div>
                        <div>
                            <h2>Featured title</h2>
                            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                            <a href="#" class="btn btn-primary">
                                Primary button
                            </a>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#tools" />
                            </svg>
                        </div>
                        <div>
                            <h2>Featured title</h2>
                            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                            <a href="#" class="btn btn-primary">
                                Primary button
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-footer">
                    Card footer
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-footer">
                    Card footer
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-footer">
                    Card footer
                </div>
            </div>
        </div>
    </div>

    <div class="row">
		<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="our-services-wrapper mb-60">
							<div class="services-inner">
								<div class="our-services-img">
								<img src="https://www.orioninfosolutions.com/assets/img/icon/Agricultural-activities.png" width="68px" alt="">
								</div>
								<div class="our-services-text">
									<h4>business growth</h4>
									<p>Proin varius pellentesque nuncia tincidunt ante. In id lacus</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="our-services-wrapper mb-60">
							<div class="services-inner">
								<div class="our-services-img">
								<img src="https://www.orioninfosolutions.com/assets/img/icon/Agricultural-activities.png" width="68px" alt="">
								</div>
								<div class="our-services-text">
									<h4>business growth</h4>
									<p>Proin varius pellentesque nuncia tincidunt ante. In id lacus</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="our-services-wrapper mb-60">
							<div class="services-inner">
								<div class="our-services-img">
								<img src="https://www.orioninfosolutions.com/assets/img/icon/Agricultural-activities.png" width="68px" alt="">
								</div>
								<div class="our-services-text">
									<h4>business growth</h4>
									<p>Proin varius pellentesque nuncia tincidunt ante. In id lacus</p>
								</div>
							</div>
						</div>
					</div>
	</div>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-footer">
                    Card footer
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-footer">
                    Card footer
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-footer">
                    Card footer
                </div>
            </div>
        </div>
    </div>
</div>
@endsection