{{-- debut inclusion du head --}}

        @include('layouts.head')

{{-- debut inclusion du head --}}

<body>

{{-- *******************
       debut inclusion du Preloader 
 ******************** --}}
   
            @include('layouts.preloader')

{{-- *******************
        fin inclusion  Preloader 
******************** --}}


{{-- 
     **********************************
        debut inclusion de la barre de navigation horizontale
    *********************************** --}}

                @include('layouts.navbar')


{{-- **********************************
        fin inclusion de la barre de navigation horizontale
*********************************** --}}





  
{{-- **********************************
   debut inclusion de la barre de navigation verticale
*********************************** --}}


        @include('layouts.sidebar')

{{-- 
  **********************************
              fin inclusion de la barre de navigation verticale
        *********************************** --}}





 {{-- **********************************
            debut  body 
*********************************** --}}


        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <a href=" {{Route('activiteProgrammer')}} ">

                                <div class="card-body">
                                    <h3 class="card-title text-white">Activité Pédagogique</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white">4565</h2>
                                    </div>
                                    <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                                </div>


                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <a href="{{Route('listEtablissement')}}">
                                <div class="card-body">
                                    <h3 class="card-title text-white">UFR(s) et Instituts</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white">{{$Etablissement->count()}}</h2>
                                    </div>
                                    <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                                </div>
                            </div>
                            </a>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                                <a href=" {{Route('user')}} ">
                                    <div class="card-body">
                                            <h3 class="card-title text-white">Utilisateurs</h3>
                                            <div class="d-inline-block">
                                            <h2 class="text-white">{{ $User->count()}}</h2>
                                    </div>
                                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                                </div>
                               </a>
                           
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                           <a href=" {{Route('listeEnseignant')}} ">

                            <div class="card-body">
                                <h3 class="card-title text-white">Enseignants</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">99%</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>

                           </a>
                        </div>
                    </div>
                </div>
                    </div>
            </div>
            <!-- #/ container -->
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
       @include('layouts.footer')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('layouts.script2')