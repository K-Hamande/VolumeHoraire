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
                        <li class="breadcrumb-item active"><a href=" {{Route('user')}} ">Liste des utilisateurs</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ Route('register') }}" id="step-form-horizontal" class="step-form-horizontal" method="post">
                            @csrf
                            <div>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Nom" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="prenom" class="form-control" placeholder="Prénom" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="telephone" name="phone" class="form-control" placeholder="Téléphone" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="pseudo" class="form-control" placeholder="Nom d'Utilisateur" required>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="" class="form-control" placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="Mot de passe " required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="password" name="confirmPassword" class="form-control" placeholder="Confirmation du mot de passe" required>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Selectionner le rôle:</label>
                                                <select class="form-control" id="sel1" name="intituleRole">
                                                    <option>Admin</option>
                                                    <option>Sp</option>
                                                    <option>Enseignant</option>
                                                    <option>Delegué</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Sexe:</label>
                                                <select class="form-control" id="sel1" name="sexe">
                                                    <option>Masculin</option>
                                                    <option>Feminin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Selectionner l'UFR:</label>
                                                <select class="form-control" id="sel1" name="ufr">
                                                    <option>ST</option>
                                                    <option>SJP</option>
                                                    <option>SEG</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Selectionner l'UFR:</label>
                                                <select class="form-control" id="sel1" name="filiere">
                                                    <option>Informatique</option>
                                                    <option>Mathemetique</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </section> 
                                <div>

                                    <button type="submit" class="btn mb-4 btn-rounded btn-success" style="width: 50%">ENREGISTRER</button>
                                </div>
                                            
                            
                        </form>



                        {{-- <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Customers</th>
                                                    <th>Product</th>
                                                    <th>Country</th>
                                                    <th>Status</th>
                                                    <th>Payment Method</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">Sarah Smith</td>
                                                    <td>iPhone X</td>
                                                    <td>
                                                        <span>United States</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-success" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class="m-0 pl-3">10 sec ago</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>--}}

                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>




        <div class="row">
            <div class="col-lg-12">
                {{-- <div class="card">
                    <div class="card-body">
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <thead>
                                        <tr>
                                            <th>Customers</th>
                                            <th>Product</th>
                                            <th>Country</th>
                                            <th>Status</th>
                                            <th>Payment Method</th>
                                            <th>Activity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">Sarah Smith</td>
                                            <td>iPhone X</td>
                                            <td>
                                                <span>United States</span>
                                            </td>
                                            <td>
                                                <div>
                                                    <div class="progress" style="height: 6px">
                                                        <div class="progress-bar bg-success" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                            <td>
                                                <span>Last Login</span>
                                                <span class="m-0 pl-3">10 sec ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="./images/avatar/2.jpg" class=" rounded-circle mr-3" alt="">Walter R.</td>
                                            <td>Pixel 2</td>
                                            <td><span>Canada</span></td>
                                            <td>
                                                <div>
                                                    <div class="progress" style="height: 6px">
                                                        <div class="progress-bar bg-success" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                            <td>
                                                <span>Last Login</span>
                                                <span class="m-0 pl-3">50 sec ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                </div>                        
            </div>
        </div>
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

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>


    <script src="./plugins/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="./plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="./js/plugins-init/jquery-steps-init.js"></script>

</body>

</html>