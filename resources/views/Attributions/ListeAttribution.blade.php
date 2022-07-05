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
                                <h4 class="card-title" style="text-align: center"> LISTE DES ENSEIGNANTS AYANT UN VOLUME HORAIRE STATUTAIRE  </h4>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Nom</th>
                                                    <th>Prénom(s)</th>
                                                    <th>Matricule </th>
                                                    <th>Grade</th>
                                                    <th>Responsabilite</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                @foreach ($Permanent as $Permanents)
                                                

                                                <tr>
                                                    <td>
                                                        <span> {{$Permanents->nom}} </span>
                                                    </td>
                                                    <td>
                                                        <span> {{$Permanents->prenom}} </span>
                                                    </td>
                                                    <td>
                                                        <span> {{$Permanents->matricule}} </span>
                                                    </td>
                                                    <td> 
                                                        <span> {{$Permanents->grade->intituleGrade}} </span>
                                                    </td>
                                                    <td>
                                                        <span> {{$Permanents->responsabilite->intituleResponsabilite}} </span>
                                                    </td>
                                                        <td> 
                                                            <a href="{{Route('newAttribution',['id'=>$Permanents->id])}}"> <button type="button" class="btn btn-info">Voir</button> </a>
                                                          
                                                    </td>
                                                </tr>

                                                @endforeach
                                               
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