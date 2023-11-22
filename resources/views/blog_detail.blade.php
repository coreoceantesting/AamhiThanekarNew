@extends('common.layout')

@section('content')
{{-- main banner section start --}}
<section class="ban_sec">
    <div class="container-fluid px-0">
        <div class="ban_img">
            <img src="{{ asset('images/banner3.jpg') }}" alt="banner" border="0">
            <div class="ban_text">
                <strong>
                    <span>Aamhi Thanekar</span>
                </strong>
                <nav aria-label="breadcrumb" style="padding-left: 25%;padding-top: 5%;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Aamhi Thanekar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
{{-- main banner section end --}}
<br>
{{-- blog details section start --}}
<div class="container" >
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <img src="{{ asset('images/joinus.jpg') }}" width="100%" alt="">
        </div>
        <div class="col-md-6 col-sm-6" style="padding: 10px;">
            <h4 class="text-center"><strong class="text-danger">Thane City</strong></h4>
            <div class="line"></div>
            {{-- <p><h2><strong>Your Donation Can Change Someone’s Life</strong></h2></p> --}}
            <p><strong> Area:</strong> 147 sq km</p>
            <p><strong> Admin Wards:</strong> 9</p>
            <p><strong> Population:</strong> 25 lakh </p>
            <p><strong> Male : female :</strong> 1000:888</p>
            <p><strong> Slum population:</strong> 18%</p>
            <p><strong> Population density:</strong> 14,000/sq km</p>
            <p><strong> Avg Literacy :</strong> 89.41 %</p>
            <p><strong>Statistics :</strong> <a href="https://www.census2011.co.in/census/city/367-thane.html">https://www.census2011.co.in/census/city/367-thane.html</a></p>

        </div>
    </div>
</div>
{{-- blog details section end--}}
<br>
{{-- middle banner section start --}}
<section class="ban_sec">
    <div class="container-fluid px-0">
        <div class="ban_img">
            <img src="{{ asset('images/banner3.jpg') }}" alt="banner" border="0">
            <div class="ban_text text-center" style="left: 30% !important;">
                <strong>
                    <span>Why should i join?</span><br> <span>मी का सामील व्हावे ?</span>
                </strong>
            </div>
        </div>
    </div>
</section>
{{-- middle banner section end --}}

<br>

<div class="container" style="background-image: url(https://projectmumbai.org/wp-content/uploads/2021/09/Hands.png)">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card border-danger">
                <div class="card-header border-danger">
                  <strong>“Democracy isn’t a spectator sport but a participatory event.”</strong>  
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p class="text-center">Join to bring the change !! </p><div class="line"></div> <p class="text-center"> Citizens make cities !!</p><div class="line"></div>
                    <p>Keeping this in mind and with a view of increasing citizens participation, citizens
                        from diverse fields have joined hands for making Thane the best livable city.</p>
                        <p>The city has many civic issues which demands active  citizen participation.</p>
                    {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card border-danger">
                <div class="card-header border-danger">
                   <strong>"लोकशाही हा प्रेक्षकांचा खेळ नसून एक सहभागी कार्यक्रम आहे.”</strong> 
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p class="text-center">बदल घडवून आणण्यासाठी सामील व्हा !! </p><div class="line"></div> <p class="text-center"> केवळ नागरिकच आपली शहरे बनवू शकतात !! !!</p><div class="line"></div>
                    <p>हे लक्षात घेऊन आणि नागरिकांचा वाढता सहभाग लक्षात घेऊन ठाणे हे राहण्यायोग्य शहर
                        बनवण्यासाठी विविध क्षेत्रातील नागरिकांनी हातमिळवणी केली आहे.</p>
                        <p>शहरात अनेक नागरी समस्या आहेत ज्यात सक्रिय नागरिकांचा सहभाग आवश्यक आहे.</p>
                    {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 py-3">
            <div class="card">
                <div class="card-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/vlDzYIIOYmM" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 py-3">
            <div class="card">
                <div class="card-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/vlDzYIIOYmM" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 py-3">
            <div class="card">
                <div class="card-header">
                    Sectors to be addressed :
                </div>
                <div class="card-body">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              <strong class="text-danger">1. Solid waste management :</strong>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <p>
                                    Thane city generates close to 9 metric tons of waste every day which currently
                                    goes to landfill. Hence it needs to be addressed on a war footing. Steps towards
                                    waste reduction, waste segregation, and collection of segregated waste for safe
                                    disposal need to be implemented. For this to happen, all Thanekars  will need
                                    to participate along with the Municipal Corporation.
                                </p>
                                <p>
                                    This citizen forum is created for every Thanekar who wishes to contribute and
                                    take active steps in creating awareness to reduce waste and manage
                                    segregated waste responsibly.
                                </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                              <strong class="text-danger">2. Lakes :  will be addressed shortly</strong>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                              <strong class="text-danger">
                                3. Biodiversity : will be addressed shortly
                              </strong>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                              
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                                <strong class="text-danger">
                                    4.Roads : will be addressed shortly
                                </strong>
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                              <div class="accordion-body">
                                
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                                <strong class="text-danger">
                                    5. Healthcare : will be addressed shortly
                                </strong>
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfive">
                              <div class="accordion-body">
                                
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingsix">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsesix" aria-expanded="false" aria-controls="panelsStayOpen-collapsesix">
                                <strong class="text-danger">
                                    6. Water: will be addressed shortly
                                </strong>
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingsix">
                              <div class="accordion-body">
                                
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingseven">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseseven" aria-expanded="false" aria-controls="panelsStayOpen-collapseseven">
                                <strong class="text-danger">
                                    7. Garden: will be addressed shortly
                                </strong>
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapseseven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingseven">
                              <div class="accordion-body">
                                
                              </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 py-3">
            <div class="card">
                <div class="card-header">
                    क्षेत्रे :
                </div>
                <div class="card-body">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              <strong class="text-danger">1. घनकचरा व्यवस्थापन   :</strong>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <p>
                                    ठाणे शहरात दररोज जवळपास ९ मेट्रिक टन कचरा निर्माण होतो जो सध्या लँडफिलमध्ये
                                    जातो. त्यामुळे याकडे युद्धपातळीवर लक्ष देण्याची गरज आहे. कचरा कमी करणे, कचऱ्याचे
                                    विलगीकरण आणि सुरक्षित विल्हेवाट लावण्यासाठी विलगित कचऱ्याचे संकलन या दिशेने पावले
                                    उचलण्याची गरज आहे. हे होण्यासाठी महापालिकेसह सर्व ठाणेकरांचा सहभाग आवश्यक
                                    आहे.
                                </p>
                                <p>
                                    हा सिटीझन फोरम प्रत्येक ठाणेकरासाठी तयार करण्यात आला आहे ज्यांना कचरा कमी
                                    करण्यासाठी आणि विलगीकरण केलेल्या कचऱ्याचे जबाबदारीने व्यवस्थापन करण्यासाठी
                                    जागरूकता निर्माण करण्यासाठी योगदान देण्याची आणि सक्रिय पावले उचलण्याची इच्छा
                                    आहे.
                                </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                              <strong class="text-danger">2. तलाव: लवकरच संबोधित केले जाईल</strong>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                              <strong class="text-danger">
                                3. जैवविविधता: लवकरच संबोधित केले जाईल
                              </strong>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                              
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                                <strong class="text-danger">
                                    4. रस्ते: लवकरच संबोधित केले जाईल
                                </strong>
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                              <div class="accordion-body">
                                
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                                <strong class="text-danger">
                                    5. आरोग्य सेवा: लवकरच संबोधित केले जाईल
                                </strong>
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfive">
                              <div class="accordion-body">
                                
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingsix">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsesix" aria-expanded="false" aria-controls="panelsStayOpen-collapsesix">
                                <strong class="text-danger">
                                    6.पाणी: लवकरच संबोधित केले जाईल
                                </strong>
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingsix">
                              <div class="accordion-body">
                                
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingseven">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseseven" aria-expanded="false" aria-controls="panelsStayOpen-collapseseven">
                                <strong class="text-danger">
                                    7. बाग: लवकरच संबोधित केले जाईल
                                </strong>
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapseseven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingseven">
                              <div class="accordion-body">
                                
                              </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    
</div>



<br>
@endsection

@push('js')

@endpush