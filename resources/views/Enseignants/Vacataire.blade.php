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
                        <li class="breadcrumb-item active"><a href=" {{Route('listeEnseignant')}}">Liste des enseignants</a></li>
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


            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg"></div>
                    <div class="col-lg-8 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center"> ENSEIGNANT VACATAIRE</h4>
                                <form action="{{Route('vacataireRegister')}}" id="step-form-horizontal" class="step-form-horizontal" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="nom" class="form-control  @error('nom') is-invalid  @enderror" placeholder="Nom"  value="{{old('nom')}}">
                                                </div>
                                                    @error('nom')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="prenom" class="form-control  @error('prenom') is-invalid  @enderror" placeholder="Prénom" value="{{old('prenom')}}">
                                                    </div>
                                                @error('prenom')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="telephone" name="telephone" class="form-control" placeholder="Téléphone"  @error('telephone') is-invalid  @enderror value="{{old('telephone')}}">
                                                    </div>
                                                @error('telephone')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="cnib" class="form-control  @error('cnib') is-invalid  @enderror" placeholder="Numero CNIB" value="{{old('cnib')}}">
                                                    </div>
                                                    @error('cnib')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="autorisation" class="form-control  @error('autorisation') is-invalid  @enderror" placeholder="Numero Autorisation" value="{{old('autorisation')}}" >
                                                    </div>
                                                @error('autorisation')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>

                                                <div class="col-lg-6">
                                                    
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control  @error('nom') is-invalid  @enderror" placeholder="Email" value="{{old('email')}}" >
                                                    </div>
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>

                                            </div>
                                        </section>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file ">
                                                            <input type="file" class="custom-file-input @error('fichier') is-invalid  @enderror" name="fichier" value="{{old('fichier')}}">
                                                            <label class="custom-file-label"> {{old('fichier')}} </label>
                                                        </div>
                                                    </div>
                                                    @error('fichier')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                            
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>selectionner l'Etablisement :</label>
                                                        <select class="form-control" id="sel1" name="etabissement">
                                                            @foreach ($Etablissement  as $etablissements)
                                                            <option value="{{$etablissements->id}}"> {{$etablissements->intitule }} || {{$etablissements->sigle }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                        </section>
                                        
                                        <section>
                                            <div class="row">
 
                                                
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
                <div class="col-lg"></div>
                </div>

       
                </div>                        
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        {{-- ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div> --}}
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('layouts.script')