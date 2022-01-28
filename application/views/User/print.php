
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>User</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">User</li>
        </ol>
      </div>
    </div>
    <script>
		            window.print();
	              </script>     
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
             <div class="card-header">
                <h3 class="card-title">Total User :</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th style="width: 10px">no</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>No HP</th>
                        <th>level</th>
                      
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $no = 1;
                            foreach($row->result() as $key => $data) {
                        ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$data->nama?></td>
                                <td><?=$data->username?></td>
                                <td><?=$data->no_hp?></td>
                                <td> 
                                <?php if($data->level == 1) {?>
                                  admin
                                <?php } else if($data->level == 2){?>
                                  user
                                <?php } ?>
                                </td>
                            </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
                 
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
 