

<?php require_once 'auth.php'; ?>
<?php require_once 'head.php'; ?>
<?php require_once 'Sidebar.php'; ?>
<?php require_once 'Topbar.php'; ?>
                <!-- End of Topbar -->
<center> 
                <!-- Begin Page Content -->
                <div class="container-fluid">
                     
                    <!-- Content Row -->
                    <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h1 style="font-family:Impact;" class="pull-left">Bem vindo ao Clean your Garden!!</h2>
                        <br><br>
                        <h3 style="font-family:Impact;" class="pull-left">Como ja deves saber o clean your garden é um jogo educativo 
                                              que te vai ajudar a melhorar  
                                              </h2>
                                              <h3 style="font-family:Impact;" class="pull-left">as tuas abilidades de reciclagem 
                                              em tempo real, de uma forma divertida.
                                              </h2>

                                              <h3 style="font-family:Impact;" class="pull-left">Aproveita o teu tempo a 
                                              jogar jogos de realidade virtual
                                              </h2>
                                              <h3 style="font-family:Impact;" class="pull-left"> enquanto descobres este novo 
                                              mundo.
                                              </h2>
                        <br><br><br><br>

                        <a class="btn btn-success pull-right" style="height: 100px;width: 450px;font-size: 57px;"><i class="fa fa-download"></i> DOWNLOAD</a>
                        
                        <BR></BR><BR></BR><BR></BR>
                        <h2 style="font-family:Impact;" class="pull-left">Para acessesares o jogo é simples quanto clicar no butão acima.</h2>
                        <h2 style="font-family:Impact;" class="pull-left">Boa sorte!!</h2>
                        <br>
                                              
                        <IMG > </IMG>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Salary</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pen"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            $result->free();
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } 
                    
                    // Close connection
                    $mysqli->close();
                    ?>
                </div>
            </div>        
                    

                           
                            </div>
                        </div>

                       
                           
                               
                                   
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>

            </center>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php require_once 'Footer.php'; ?>