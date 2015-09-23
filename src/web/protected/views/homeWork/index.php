<div id="dashBoard" style="margin-top: 30px;">
    <div class="div_tabla_editar_empleados">
        <div class="contenidos_columnas">
            
             <div class="secundario form-group">
                 <a href="#" data-toggle="modal" data-target="#sori_options"><img  src="/themes/metronic/admin/pages/img/icono_ribela-01.png" class="zoom" style="width: 26%; margin-left: 30% " /></a> 
            </div>
            <div class="secundario form-group">
                <!--<a href="http://renoc.ribela.net/" target="_blank"><img  src="/themes/metronic/admin/pages/img/icono_ribela-02.png" class="zoom" style="width: 25%; margin-left: 13%"/></a>-->
                <?= "<a href='http://".SERVER_NAME_RENOC."/site/autoLogin?id=$model->id' ><img  src='/themes/metronic/admin/pages/img/icono_ribela-02.png' class='zoom' style='width: 25%; margin-left: 13%'/></a>" ?>
            </div>
            <div  class="secundarioderecha form-group">
                 <?= "<a href='http://alfa9.ribela.net' ><img  src='/themes/metronic/admin/pages/img/rps.png' class='zoom' style='width: 31%; margin-left: -9%'/></a>" ?>
                 <label class="control-label letra_empleado" style="margin-left: -4%"></label>
            </div>
           
            <div class="secundario form-group">
                <a href="#"><img src="/themes/metronic/admin/pages/img/ribela-soon.png" class="zoom" style="width: 48%; margin-left: -9%"/></a>
                 <label class="control-label letra_empleado" style="margin-left: 12%"></label>
            </div>
        </div>
        <div class="contenidos_columnas">
            <div class="secundario form-group">
                <a href="#" data-toggle="modal" data-target="#sinca_options"><img src="/themes/metronic/admin/pages/img/icono_ribela-03.png" class="zoom" style="width: 25%; margin-left: 30% "/></a>
            </div>
            <div class="secundario form-group">
                <a href="#" data-toggle="modal" data-target="#sine_options"><img src="/themes/metronic/admin/pages/img/icono_ribela-04.png" class="zoom" style="width: 25%; margin-left: 13%"/></a> 
            </div>
            <div class="secundarioderecha form-group">
                 <?= "<a href='http://".SERVER_NAME_IMEKA."/site/autologin?id=$model->id'><img src='/themes/metronic/admin/pages/img/iconos_ribela-12-imeka.png' class='zoom' style='width: 31%; margin-left: -9%'/></a>" ?> 
                 <label class="control-label letra_empleado" style="margin-left: 1%"></label>
            </div>
            <div class="secundario form-group">
                <a href="#"><img src="/themes/metronic/admin/pages/img/ribela-soon.png" class="zoom" style="width: 48%; margin-left: -9%"/></a>
                 <label class="control-label letra_empleado" style="margin-left: 8%"></label>
            </div>
        </div>
        <div class="contenidos_columnas">
            <div class="secundario form-group">
                   <?="<a href='http://".SERVER_NAME_ARU."/site/autoLogin?id=$model->id'><img src='/themes/metronic/admin/pages/img/icono_ribela-05.png' class='zoom' alt='' style='width: 25%; margin-left: 30% ' /></a>"?>                         
            </div>
            <div class="secundario form-group">
                  <?="<a href='http://".SERVER_NAME_PIG."/site/autoLogin?id=$model->id'><img id ='load_photo' src='/themes/metronic/admin/pages/img/icono_ribela-07.png' class='zoom' alt='' style='width: 25%; margin-left: 13%' /></a>"?>
            </div>
            <div class="secundarioderecha form-group">
                <a href="http://tv.ribela.net/" target="_blank"><img id ="load_photo" src="/themes/metronic/admin/pages/img/icono_ribela-08.png" class="zoom" alt="" style="width: 33%; margin-left: -9%"/></a> 
            </div>
            <div class="secundario form-group">
                <a href="#"><img id ="load_photo" src="/themes/metronic/admin/pages/img/ribela-soon.png" class="zoom" alt="" style="width: 48%; margin-left: -9%"/></a>
                  <label class="control-label letra_empleado " ></label>
            </div>
        </div>
        <div class="contenidos_columnas">
            <div class="secundario form-group">
              <a href="http://etts.ribela.net/" target="_blank"><img id ="load_photo" src="/themes/metronic/admin/pages/img/icono_ribela-06.png" class="zoom" alt="" style="width: 25%; margin-left: 30% "/></a> 
            </div>
            <div class="secundario form-group">
              <a href="#" data-toggle="modal" data-target="#atc_options"><img id ="load_photo" src="/themes/metronic/admin/pages/img/icono_ribela-09.png" class="zoom" alt="" style="width: 25%; margin-left: 13%"/></a>
                <?php // "<a href='http://".SERVER_NAME_ATC."/user/autoLogin?id=$model->id' ><img id ='load_photo' src='/themes/metronic/admin/pages/img/icono_ribela-09.png' class='zoom' alt='' style='width: 25%; margin-left: 13%'/></a>"?>
            </div>
            <div class="secundarioderecha form-group">
                <a href="#" target="_blank"><img id ="load_photo" src="/themes/metronic/admin/pages/img/ribela-soon.png" class="zoom" alt="" style="width: 33%; margin-left: -9%"/></a>
            </div>
            <div class="secundario form-group">
                <a href="#"><img id ="load_photo" src="/themes/metronic/admin/pages/img/ribela-soon.png" class="zoom" alt="" style="width: 48%; margin-left: -9%"/></a>
                  <label class="control-label letra_empleado " ></label>
            </div>
        </div>
    </div>
</div>


<!-- BEGIN MODALS -->
<!-- SORI OPTIONS -->
<div class="modal" id="sori_options" tabindex="-1" role="dialog" aria-labelledby="sori_options" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Seleccione una opción para Sori <img src="/images/sori_logo.png" alt="" width="21"></h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <!--<div class="col-md-6 margin-bottom-10"><a href="http://sori.ribela.net" class="btn btn-block" target="_blank"><img src="/images/etelix.png" alt="" width="160"></a></div>-->
            <?= "<div class='col-md-6 margin-bottom-10'><a href='http://".SERVER_NAME_SORI ."/site/autoLogin?id=".$model->id."' class='btn btn-block'><img src='/images/etelix.png' alt='' width='160'></a></div>" ?>
            <div class="col-md-6 margin-bottom-10"><a href="http://sorifullred.ribela.net" class="btn btn-block" target="_blank"><img src="/images/fullred.png" alt="" width="162"></a></div>
        </div>
        <div class="row">
            <div class="col-md-6 margin-bottom-10"><a href="http://sorilatincom.ribela.net" class="btn btn-block" target="_blank"><img src="/images/latincom.png" alt="" width="160"></a></div>
            <div class="col-md-6 margin-bottom-10"><a href="http://sorimitelco.ribela.net" class="btn btn-block" target="_blank"><img src="/images/mitelco.png" alt="" width="160"></a></div>
        </div>
        <div class="row">
            <div class="col-md-12"><a href="http://comvozsori.ribela.net" class="btn btn-block" target="_blank"><img src="/images/comvoz.png" alt=""></a></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- SINE OPTIONS -->
<div class="modal" id="sine_options" tabindex="-1" role="dialog" aria-labelledby="sine_options" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Seleccione una opción para SINE <img src="/images/sine_logo.png" alt="" width="21"></h4>
      </div>
      <div class="modal-body">
        <div class="modal-body">
            <div class="row">
                <?= "<div class='col-md-6 margin-bottom-10'><a href='http://".SERVER_NAME_SINE."/site/autoLogin?id=".$model->id."' class='btn btn-block' ><img src='/images/etelix.png' alt='' width='160'></a></div>" ?>
                <div class="col-md-6 margin-bottom-10"><a href="http://sinefullred.ribela.net" class="btn btn-block" target="_blank"><img src="/images/fullred.png" alt="" width="162"></a></div>
            </div>
            <div class="row">
                <div class="col-md-6 margin-bottom-10"><a href="http://sinelatincom.ribela.net" class="btn btn-block" target="_blank"><img src="/images/latincom.png" alt="" width="160"></a></div>
                <div class="col-md-6 margin-bottom-10"><a href="http://sinemitelco.ribela.net" class="btn btn-block" target="_blank"><img src="/images/mitelco.png" alt="" width="160"></a></div>
            </div>
            <div class="row">
                <div class="col-md-12"><a href="http://sinecomvoz.ribela.net" class="btn btn-block" target="_blank"><img src="/images/comvoz.png" alt=""></a></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- SINCA OPTIONS -->
<div class="modal" id="sinca_options" tabindex="-1" role="dialog" aria-labelledby="sinca_options" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Seleccione una opción para SINCA <img src="/images/sinca_logo.png" alt="" width="21"></h4>
      </div>
      <div class="modal-body">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6 margin-bottom-10"><a href="http://sinca.ribela.net" class="btn btn-block" target="_blank"><img src="/images/etelix.png" alt="" width="160"></a></div>
                <div class="col-md-6 margin-bottom-10"><a href="http://sincafullred.ribela.net" class="btn btn-block" target="_blank"><img src="/images/fullred.png" alt="" width="162"></a></div>
            </div>
            <div class="row">
                <div class="col-md-6 margin-bottom-10"><a href="http://sincalatincom.ribela.net" class="btn btn-block" target="_blank"><img src="/images/latincom.png" alt="" width="160"></a></div>
                <div class="col-md-6 margin-bottom-10"><a href="http://sincamitelco.ribela.net" class="btn btn-block" target="_blank"><img src="/images/mitelco.png" alt="" width="160"></a></div>
            </div>
            <div class="row">
                <div class="col-md-12"><a href="http://sincacomvoz.ribela.net" class="btn btn-block" target="_blank"><img src="/images/comvoz.png" alt=""></a></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ATC OPTIONS -->
<div class="modal" id="atc_options" tabindex="-1" role="dialog" aria-labelledby="atc_options" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Seleccione una opción para ATC <img src="/images/atc_logo.png" alt="" width="21"></h4>
      </div>
      <div class="modal-body">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6 margin-bottom-10"><a href="http://atcsacet.ribela.net" class="btn btn-block" target="_blank"><img src="/images/etelix.png" alt="" width="160"></a></div>
                <div class="col-md-6 margin-bottom-10"><a href="http://atcfullred.ribela.net" class="btn btn-block" target="_blank"><img src="/images/fullred.png" alt="" width="162"></a></div>
            </div>
            <div class="row">
                <div class="col-md-6 margin-bottom-10"><a href="http://atclatincom.ribela.net" class="btn btn-block" target="_blank"><img src="/images/latincom.png" alt="" width="160"></a></div>
                <div class="col-md-6 margin-bottom-10"><a href="http://atcmitelco.ribela.net" class="btn btn-block" target="_blank"><img src="/images/mitelco.png" alt="" width="160"></a></div>
            </div>
            <div class="row">
                <div class="col-md-12"><a href="http://atc.ribela.net" class="btn btn-block" target="_blank"><img src="/images/comvoz.png" alt=""></a></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- END MODALS -->
