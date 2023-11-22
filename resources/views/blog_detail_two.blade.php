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

<div class="container py-5">
    <strong class="text-dark">
        Join to bring the change !! Citizens make cities !!
    </strong>
    <hr>
    <img src="{{ asset('images/joinus.jpg') }}" alt="jack" width="100%" height="65%">
    <hr>
    <strong ><p class="py-3">“Democracy isn’t a spectator sport but a participatory event.”</p></strong>
        <p>
            Keeping this in mind and with a view of increasing citizens participation, citizens
            from diverse fields have joined hands for making Thane the best livable city.
        </p>
        <p>
            The city has many civic issues which demands active  citizen participation
        </p>
        <div class="text-center">
            <p class="text-danger">Join to bring the change !!</p>
            <p class="text-danger">Citizens make cities !!</p>
        </div>
        <strong><p class="py-3">"लोकशाही हा प्रेक्षकांचा खेळ नसून एक सहभागी कार्यक्रम आहे.”</p></strong>
            <p>
                हे लक्षात घेऊन आणि नागरिकांचा वाढता सहभाग लक्षात घेऊन ठाणे हे राहण्यायोग्य शहर
                बनवण्यासाठी विविध क्षेत्रातील नागरिकांनी हातमिळवणी केली आहे.
            </p>
            <p>
                शहरात अनेक नागरी समस्या आहेत ज्यात सक्रिय नागरिकांचा सहभाग आवश्यक आहे.
            </p>
            <div class="text-center">
                <p class="text-danger">बदल घडवून आणण्यासाठी सामील व्हा !!</p>
                <p class="text-danger">केवळ नागरिकच आपली शहरे बनवू शकतात !!</p>
            </div>
            <hr>
        <strong><p class="py-3">Why should i join? (मी का सामील व्हावे ?)</p></strong>

        <div class="row">
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
        </div>
        <hr>
        <strong>Sectors to be addressed :</strong>
        <p class="title mb-3" >1. Solid waste management :</p>

        <p>Thane city generates close to 9 metric tons of waste every day which currently
            goes to landfill. Hence it needs to be addressed on a war footing. Steps towards
            waste reduction, waste segregation, and collection of segregated waste for safe
            disposal need to be implemented. For this to happen, all Thanekars  will need
            to participate along with the Municipal Corporation.
        </p>

        <p>This citizen forum is created for every Thanekar who wishes to contribute and
            take active steps in creating awareness to reduce waste and manage
            segregated waste responsibly.
        </p>
        <p >2. Lakes :  will be addressed shortly</p>
        <p >3. Biodiversity : will be addressed shortly</p>
        <p  >4. Roads : will be addressed shortly</p>
        <p >5. Healthcare : will be addressed shortly</p>
        <p >6. Water: will be addressed shortly</p>
        <p >7. Garden: will be addressed shortly</p>
        <hr>
        <strong>क्षेत्रे:</strong>
        <p class="title mb-3" >1. घनकचरा व्यवस्थापन :</p>

        <p>ठाणे शहरात दररोज जवळपास ९ मेट्रिक टन कचरा निर्माण होतो जो सध्या लँडफिलमध्ये
            जातो. त्यामुळे याकडे युद्धपातळीवर लक्ष देण्याची गरज आहे. कचरा कमी करणे, कचऱ्याचे
            विलगीकरण आणि सुरक्षित विल्हेवाट लावण्यासाठी विलगित कचऱ्याचे संकलन या दिशेने पावले
            उचलण्याची गरज आहे. हे होण्यासाठी महापालिकेसह सर्व ठाणेकरांचा सहभाग आवश्यक
            आहे.  हा सिटीझन फोरम प्रत्येक ठाणेकरासाठी तयार करण्यात आला आहे ज्यांना कचरा कमी
            करण्यासाठी आणि विलगीकरण केलेल्या कचऱ्याचे जबाबदारीने व्यवस्थापन करण्यासाठी
            जागरूकता निर्माण करण्यासाठी योगदान देण्याची आणि सक्रिय पावले उचलण्याची इच्छा
            आहे.
        </p>
        
        <p >2. तलाव: लवकरच संबोधित केले जाईल</p>
        <p >3.जैवविविधता: लवकरच संबोधित केले जाईल</p>
        <p  >4.रस्ते: लवकरच संबोधित केले जाईल</p>
        <p >5. आरोग्य सेवा: लवकरच संबोधित केले जाईल</p>
        <p >6.पाणी: लवकरच संबोधित केले जाईल</p>
        <p >7. बाग: लवकरच संबोधित केले जाईल</p>
        <hr>
</div>

@endsection

@push('js')

@endpush