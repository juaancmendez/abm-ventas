<?php 
  $pg = "Inicio";
  include_once "menu.php";
  include_once "entidades/venta.php";
  
  $venta = new Venta();
  $facturacionMensual = $venta->obtenerFacturacionMensual(date('m'));
  $facturacionAnual = $venta->obtenerFacturacionAnual(date('Y')); 
?>
  <!-- Begin Page Content -->
  <div class="container-fluid">
      <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo $pg ?></h1>
    </div>

    <div class="row">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Facturacion (mensual)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$ " .number_format($facturacionMensual,2,",","."); ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Facturacion (Anual)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$ " .number_format($facturacionAnual,2,",","."); ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>  
  </div>
  <!-- /.container-fluid -->
<?php include_once "footer.php"; ?>
