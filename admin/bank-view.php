<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php
                $bankAccount=ejecutarSQL::consultar("SELECT * FROM cuentabanco");
                if(mysqli_num_rows($bankAccount)>=1){
                  $bankD=mysqli_fetch_array($bankAccount, MYSQLI_ASSOC);
            ?>
                  <div class="container-form-admin">
                  <form action="./process/updateBank.php" method="POST" role="form" class="form-content FormCatElec" data-form="update">
                    <h3 class="text-info text-center">Actualizar Cuenta de banco</h3>
                    <input type="hidden" name="id" value="<?php echo $bankD['id']; ?>">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Número de cuenta</label>
                                    <input class="form-control" type="number" name="bancoCuenta" value="<?php echo $bankD['NumeroCuenta']; ?>" maxlength="20" required="" pattern="[0-9]{10,20}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre del banco</label>
                                    <input class="form-control" type="text" name="bancoNombre" value="<?php echo $bankD['NombreBanco']; ?>" required="" pattern="[ |a-zA-Z]{10,30}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre del beneficiario</label>
                                    <input class="form-control" type="text" name="bancoBeneficiario" value="<?php echo $bankD['NombreBeneficiario']; ?>" required=""pattern="[ |a-zA-Z]{1,50}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Tipo de cuenta</label>
                                    <input class="form-control" type="text" name="bancoTipo" value="<?php echo $bankD['TipoCuenta']; ?>" required="" pattern="[ |a-zA-Z]{1,30}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center"><button type="submit" class="btn btn-success btn-raised">Actualizar cuenta de banco</button></p>
                  </form>
                  </div>
            <?php
                }else{
            ?>
              <div class="container-form-admin">
              <form action="./process/regBank.php" method="POST" role="form" class="FormCatElec" data-form="save">
                <h3 class="text-info text-center">Agregar Cuenta de banco</h3>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Numero de cuenta</label>
                                <input class="form-control" type="number" name="bancoCuenta" maxlength="20" required="" pattern="[0-9]{10,20}">
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Nombre del banco</label>
                                <input class="form-control" type="text" name="bancoNombre" maxlength="30" required="" pattern="[ |a-zA-Z]{1,30}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Nombre del beneficiario</label>
                                <input class="form-control" type="text" name="bancoBeneficiario" maxlength="50" required="" pattern="[ |a-zA-Z]{1,50}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Tipo de cuenta</label>
                                <input class="form-control" type="text" name="bancoTipo" maxlength="30" required="" pattern="[ |a-zA-Z]{1,30}">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center"><button type="submit" class="btn btn-primary btn-raised">Agregar cuenta de banco</button></p>
              </form>
              </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>