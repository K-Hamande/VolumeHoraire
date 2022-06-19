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







        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{Route('Accueil')}} ">Accueil</a></li>
                        <li class="breadcrumb-item active"><a href=" {{Route('listFormation')}} ">Liste des Formations</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col lg-1"></div>
                    <div class="col-lg-10 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center">Modifier une Formation </h4>
                                <form action="{{ Route('updatFormation',['id'=>$Formation->id]) }}" id="step-form-horizontal" class="step-form-horizontal" method="post">
                                    @csrf
                                    <div>
                                        <section>
                                            <div class="row">
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="codeFormation" value="{{$Formation->codeFormation}}" class="form-control" placeholder="Code Formation"required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="intituleFormation" value="{{$Formation->intituleFormation}}"class="form-control" placeholder="Intitulé Formation" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    
                                        <div class="row">

                                                <div class="col-lg-4"></div>
                                            <div class="col-lg-4">
            
                                                    <button type="submit" class="btn mb-4 btn-rounded btn-success" style="width: 100%">MODIFIER</button>
                                            </div>

                                            <div class="col-lg-4"></div>
                                        <div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col lg-1"></div>
                
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
       
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('layouts.script')