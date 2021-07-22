<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE-Edge">
        <title>Export Data</title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
   <script src="<?php echo base_url();?>asset/jqery.min.js"></script>
    </head>
    <body>
        <section style='padding-top:60px;'>
            <div class="container">
                <div class="row">
                     <div class="col-md-6 offset-md-3">
                         <div class="card">
                             <div class="card-header">
                                 Import
                             </div>
                             <div class="card-body">
                                 <form action="Excel_import" method="post" enctype="multipart/form-data">
                                    
                                     <div class="form-group">
                                         <label for="file">Choose CSV</label>
                                         <input type="file" name="file" class="form-control"/>
                                     </div>
                                     <button type="submit" class="btn btn-primary">Submit</button> 
                                 </form>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
            <div class="container box">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>Name</td>
                            <td>Address</td>
                            <td>Gender</td>
                            <td>Designation</td>
                            <td>Age</td>
                        </tr>
                        <?php
                        foreach($employee_data as $row){
                            echo'
                            <tr>
                            <td>'.$row->name.'</td>
                            <td>'.$row->address.'</td>
                            <td>'.$row->gender.'</td>
                            <td>'.$row->designation.'</td>
                            <td>'.$row->age.'</td>
                            </tr>
                            ';
                            
                        }
                        ?>
                    </table>
                    <div align="center">
                               <form action="<?php echo base_url();?>excel export/action">
                               <input type="submit" name="export" class="btn btn-success" value="Export"/>
                                </form>
                            </div>
                </div>
            </div>
        </section>
    </body>
</html>
