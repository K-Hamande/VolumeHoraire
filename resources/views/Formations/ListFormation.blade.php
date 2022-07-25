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
                                <h4 class="card-title" style="text-align: center"> LISTE DES FORMATIONS </h4>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Filière</th>
                                                    <th>Code Formation</th>
                                                    <th>Intitué Formation</th>
                                                    <th>Niveaux</th>
                                                    <th>Annee</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @forelse ($Formation as $Values)

                                                        @foreach ($Values->niveaux as $niveau)  

                                                            @foreach ($Values->filieres as $filiere)  
                                                                <tr>
                                                                <td>{{$filiere->intituleFiliere}}</td>
                                                                
                                                                <td>
                                                                    {{$Values->codeFormation}}</td> 
                                                                <td>
                                                                    
                                                                    <span>{{$Values->intituleFormation}}</span> 
                                                                </td>
                                                                <td
                                                                     <span> {{$niveau->abreviation}} </span>   
                                                                </td>
                                                                <td>
                                                                     <span>{{$Values->annee->annee}}</</span>
                                                                </td>
                                                                    <td> 
                                                                        <a href="{{Route('detailFormation',['id'=>$Values->id])}}"> <button type="button" class="btn btn-warning">Voir</button> </a>
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
@include('layouts.script2')