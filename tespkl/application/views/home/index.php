<div class="container-fluid text-center bg-white" style="min-height: 45rem;">
  <br>  
  <br>
  <br>
    <div class="container">
        <div class="row" >
            <div class="col">
                <div class="card text-white bg-primary mb-3">
                    <h1 class="card-header">PEMOHON UMUM</h1>
                    <div class="card-body">
                        <!-- <h1 class="card-title">PEMOHON UMUM</h1> -->
                        <form class="form-action" action="<?php echo base_url().'antri/simpan_no'?>" method="post">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="no_antri" class="sr-only">No Antrian</label>
                                <input type="text"  name="no_antri" readonly value="<?php echo $antri;?>" >
                            </div>
                            <button type="submit"><h1>Cetak</h1></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3">
                    <h1 class="card-header">PEMOHON PRIORITAS</h1>
                    <div class="card-body">
                        <!-- <h1 class="card-title">PEMOHON DISABILITAS</h1> -->
                        <form class="form-action" action="<?php echo base_url().'antri/simpan_nob'?>" method="post">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="no_antrib" class="sr-only">No Antrian</label>
                                <input type="text"  name="no_antrib" readonly value="<?php echo $antrib;?>" >
                            </div>
                            <button type="submit"><h1>Cetak</h1></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="card text-white bg-danger mb-3">
                    <h1 class="card-header">PEMOHON ASING</h1>
                    <div class="card-body">
                        <!-- <h1 class="card-title">PEMOHON ASING</h1> -->
                        <form class="form-action" action="<?php echo base_url().'antri/simpan_noc'?>" method="post">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="no_antric" class="sr-only">No Antrian</label>
                                <input type="text"  name="no_antric" readonly value="<?php echo $antric;?>" >
                            </div>
                            <button type="submit"><h1>Cetak</h1></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning mb-3">
                    <h1 class="card-header">PENGAMBILAN PASPOR</h1>
                    <div class="card-body">
                        <!-- <h1 class="card-title">PENGAMBILAN PASPOR</h1> -->
                        <form class="form-action" action="<?php echo base_url().'antri/simpan_nod'?>" method="post">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="no_antrid" class="sr-only">No Antrian</label>
                                <input type="text"  name="no_antrid" readonly value="<?php echo $antrid;?>" >
                            </div>
                            <button type="submit"><h1>Cetak</h1></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>       
</div>