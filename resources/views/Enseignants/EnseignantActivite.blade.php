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
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Matricule </th>
                                                    <th>Nom</th>
                                                    <th>Prénom(s)</th>
                                                    <th>Grade</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">Sarah Smith</td>
                                                    <td>iPhone X</td>
                                                    <td>
                                                        <span>United States</span>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                                        <td> 
                                                            <a href="#"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">Notifier</button></a>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModalCenter">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"> Notification</h5>
                                                                            <button type="button" class="close" data-dismiss="modal"><span> &times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" style="color: red">
                                                                            <form>
                                                                                <div class="form-group">
                                                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                                                    <textarea class="form-control" id="message-text"></textarea>
                                                                                </div>
                                                                            </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Annuler</button>
                                                                        <button type="submit" class="btn btn-danger">Envoyer</button>
                                                                    </div>
                                                                            </form>
                                                                    </div>       
                                                            </div>
                                                            </div>
                                                    </td>
                                                </tr>
                                               
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