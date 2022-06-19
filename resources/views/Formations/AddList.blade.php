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

            <div class="container-fluid mt-3">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center"> LISTE DES FORMATIONS AYANT DES UE  </h4>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                
                                                <tr>
                                                    <th>Filière</th>
                                                    <th>Formation</th>
                                                    <th> UE </th>
                                                    <th>Niveaux</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @forelse ($Formation as $Values)

                                                        @foreach ($Values->niveaux as $niveau)  

                                                            @foreach ($Values->filieres as $filiere) 

                                                                @foreach ($Values->ues as $ue)  
                                                                        <tr>

                                                                            <td>
                                                                                <span>{{$filiere->intituleFiliere}}</span>
                                                                            </td>

                                                                            <td> 
                                                                                <span>{{$Values->intituleFormation}}</span> 
                                                                            </td>

                                                                            <td> 
                                                                                <span>{{$ue->intituleUE}}</span> 
                                                                            </td>
                                                                          
                                                                            <td>
                                                                                <span>{{$niveau->abreviation}}</</span>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="basic-dropdown">
                                                                                    <!-- Default dropright button -->
                                                                                    <div class="btn-group dropright mb-2">
                                                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Action</button>
                                                                                        <div class="dropdown-menu">
                                                                                            <a class="dropdown-item btn btn-secondary" href="{{Route('addFormationUe',['id'=>$Values->id])}}">Administrer une UE </a> 
                                                                                            <a class="dropdown-item btn btn-secondary" href="{{Route('editFormation',['id'=>$Values->id])}}"> Modifier </a>
                                                                                            <a class="dropdown-item btn btn-secondary" href="#">Voir</a> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        </td>
                                                                        
                                                                    </tr>

                                                             @endforeach
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
@include('layouts.script2')