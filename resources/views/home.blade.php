@extends('layouts.app')

@section('content')
<div class="container">

    <!-- User profile info--> 
    <div class="row">
        <!-- Profile pic-->
        <div class="col-3 p-5">
        <img src="https://media-exp1.licdn.com/dms/image/C4D03AQGYCYK6L_MgXw/profile-displayphoto-shrink_200_200/0?e=1593648000&v=beta&t=oRbXTza4haDLzJpBLwbkMl2wN1YzAuTl3kJrt0kXHxY" class="rounded-circle">
        </div>
        
        <!-- user/profile info-->
        <div class="col-9 pt-5">
            <div><h1>Julio Rivas</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>12</strong> posts</div>
                <div class="pr-5"><strong>400</strong> follwers</div>
                <div class="pr-5"><strong>300</strong> following</div>
            </div>
            <div class="pt-3 font-weight-bold">
                Software Engineer Graduate
            </div>
            <div>
                Software Engineer Graduate currently looking for new, exciting opportunities.
            </div>
            <div>
                <a href="https://www.linkedin.com/in/julio-rivas-570209176">Linkedin Profile</a>
            </div>
        </div>
    </div>

    <!-- User profile posts -->
    <div class="row">
        <div class="col-4 pt-5">
            <img src="https://scontent-ort2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.124.1080.1080a/s640x640/59411479_602460800237394_4920708199529775114_n.jpg?_nc_ht=scontent-ort2-1.cdninstagram.com&_nc_cat=106&_nc_ohc=WJKurkL8o-0AX_OsL6R&oh=108045c6e9d2bc829fdf6c45a948ee90&oe=5ED0F130" class="w-100">
        </div>

        <div class="col-4 pt-5">
            <img src="https://scontent-ort2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/65841751_2542110882507378_6968734270547791359_n.jpg?_nc_ht=scontent-ort2-1.cdninstagram.com&_nc_cat=106&_nc_ohc=ERth3GmFXrwAX_6bzUO&oh=c4feb4310369fb9617495fab959c192a&oe=5ED193E2" class="w-100">
        </div>

        <div class="col-4 pt-5">
            <img src="https://instagram.fymy1-1.fna.fbcdn.net/v/t51.2885-15/e35/57244855_179678473014955_7772569941194777467_n.jpg?_nc_ht=instagram.fymy1-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=o-6w8ONAAB0AX-tPTPx&oh=4d6c489646f766ac6ba25262eb65dffd&oe=5ED42DCE" class="w-100">
        </div>
    </div>

</div>
@endsection
