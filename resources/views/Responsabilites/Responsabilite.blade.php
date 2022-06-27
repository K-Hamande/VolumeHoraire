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
                        <li class="breadcrumb-item"><a href="{{Route('Accueil')}}">Accueil</a></li>
                        <li class="breadcrumb-item active"><a href="{{Route('listResponsabilite')}}">liste des Responsabilites</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col lg-2"></div>

                @if (session('Message'))
                <div   class="alert alert-success text-center">
                    <div class="col lg-8">
                        {{session('Message')}}
                    </div>
                </div>
                @endif

                <div class="col lg-2"></div>
            </div>
           

            <div class="container-fluid">
                <div class="row">
                    <div class="col lg-2"></div>
                    <div class="col-lg-8 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center"> RESPONSABILITE ENSEIGNANTS </h4>
                                <form action=" {{Route('responsabiliteRegister')}} " id="step-form-horizontal" class="step-form-horizontal" method="post">
                                    @csrf
                                    <div>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="intituleResponsabilite" class="form-control @error('intituleResponsabilite') is-invalid @enderror" placeholder="Responsabilite"  value="{{ old('intituleResponsabilite') }}">
                                                    </div>
                                                    @error('intituleResponsabilite')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror

                                                </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Type d’abattement horaire:</label>
                                                            <select class="form-control" id="sel1" name="type">
                                                                <option> Pourcentage(%)</option>
                                                                <option> Nombre d'heure </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label></label>
                                                            <input type="number" name="abattement" class="form-control  @error('abattement') is-invalid @enderror" placeholder="abattement horaire"  value="{{ old('abattement')}}">
                                                        </div>   
                                                @error('abattement')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
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