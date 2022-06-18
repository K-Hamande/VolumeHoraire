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
                        <li class="breadcrumb-item"><a href="{{Route('Accueil')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{Route('etablissement')}}">Ajout D'etablissement</a></li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid mt-3">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center"> LISTE DES ETABLISSEMENTS </h4>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Etablissements</th>
                                                    <th>Sigles</th>
                                                    <th>Departements</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @forelse  ($ListEtablissement as $Etablissement)

                                                    @foreach ($Etablissement->departements as $departement)

                                                        @foreach ($departement->filieres as $filiere)
                                                <tr>
                                                   
                                                    <td>
                                                        <span>{{ $Etablissement->intitule}} </span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $Etablissement->sigle }} </span>
                                                    </td>
                                                  
                                                   <td>
                                                        <span>{{$departement->intituleDepartement}} </span>
                                                    </td>
                                                        <td> 
                                                            
                                                            <a href="{{Route('formation',['id'=>$filiere->id])}}"> <button type="button" class="btn btn-info">Ajouter une Formation</button> </a>
                                                            <a href="{{Route('editEtablissement',['id'=>$Etablissement->id])}}"> <button type="button" class="btn btn-warning">Modifier</button> </a>
                                                           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Supprimer</button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModalCenter">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"> Suppression d'un Etablissement</h5>
                                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" style="color: red">
                                                                            Voulez vous vraiment supprimer l etablissement  ?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-info" data-dismiss="modal">NON</button>
                                                                        <a href="{{Route('deletEtablissement',['id'=>$Etablissement->id])}}"> <button type="button" class="btn btn-danger">OUI</button></a>
                                                                    </div>
                                                                    </div>       
                                                            </div>
                                                            </div>
                                                    </td>
                                                </tr>
                                                    
                                                @endforeach

                                                @endforeach

                                                @empty
                                                    
                                                @endforelse

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('layouts.script')