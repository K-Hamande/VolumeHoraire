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
                        <li class="breadcrumb-item active"><a href="{{Route('listEcue')}}"> Liste des Ecue(s) </a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col lg-2"></div>
                    <div class="col-lg-8 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center"> MODIFICATION D'UNE ECUE</h4>
                                <form action=" {{Route('updatEcue',['id'=>$Ecue->id])}} " id="step-form-horizontal" class="step-form-horizontal" method="post">
                                    @csrf
                                    <div>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Selectionner le UE:</label>
                                                        <select class="form-control" id="sel1" name="choix">
                                                           @foreach($UE as $UE)
                                                           <option value="{{$UE->id }}"> {{$UE->intituleUE }} </option>
                                                           @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="code"  value="{{$Ecue->codeEcue }}" class="form-control" placeholder="Code de l'ECUE" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="intitule" value="{{$Ecue->intituleEcue}}" class="form-control" placeholder="Intitulé de l'ECUE" required>
                                                    </div>
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