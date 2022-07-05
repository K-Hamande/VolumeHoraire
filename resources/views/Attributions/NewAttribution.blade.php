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
                        <li class="breadcrumb-item"><a href="{{Route('Accueil')}}"><i class="icon-copy fa fa-home" aria-hidden="true"></i>Accueil</a></li>
                        <li class="breadcrumb-item active"><a href="{{Route('listGrade')}}">liste des attribution</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            @if (session('Message'))
            <div   class="alert alert-success text-center">
                <div class="col lg-8">
                    {{session('Message')}}
                </div>
            </div>
            @endif

            <div class="container-fluid">
                <div class="row">
                    <div class="col lg-2"></div>
                    <div class="col-lg-8 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center"> ATTRIBUTION DE VOLUME HORAIRE  Á   {{ Str::of($Permanent->nom)->upper() }} {{$Permanent->prenom }} </h4>
                                <form action=" {{Route('attributionRegister',['id'=>$Permanent->id])}} " id="step-form-horizontal" class="step-form-horizontal" method="post">
                                    @csrf
                                    <div>
                                        <section>
                                            <div class="row">
                                               
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="">Responsabilité</label>
                                                            <input type="text" disabled class="form-control" value="{{$Permanent->responsabilite->intituleResponsabilite}}" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="">Grade</label>
                                                            <input type="text" disabled  class="form-control" value="{{$Permanent->grade->intituleGrade}} ">
                                                        </div>
                                                        
                                                    </div>
                                              
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="number" name="CoursMagistral" class="form-control @error('CoursMagistral') is-invalid  @enderror" placeholder="Cour Magistral "  value="{{ old('CoursMagistral')}}">
                                                    </div>
                                                @error('CoursMagistral')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="number" name="TravauxDiriges" class="form-control @error('TravauxDiriges') is-invalid  @enderror" placeholder="Travaux Pratique" value="{{ old('TravauxDiriges')}}" >
                                                    </div>
                                                @error('TravauxDiriges')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>

                                                
                                                <div class="form-group">
                                                    <input type="text" name="idReponsabilite" hidden class="form-control" value="{{$Permanent->responsabilite->id}}" >
                                                </div>
                                            </div>
                                        </section>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            
                                        </div>
                                        <div class="col-lg-4">
        
                                                <button type="submit" class="btn mb-4 btn-rounded btn-success" style="width: 100%">ENREGISTRER</button>
                                        </div>
                                        <div class="col-lg-4">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col lg-2"></div>
                </div>
            <!-- #/ container -->
        </div>

        <!--**********************************
            Content body end
        ***********************************-->
    
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('layouts.script')