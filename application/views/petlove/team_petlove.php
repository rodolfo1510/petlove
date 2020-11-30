    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <div class="col-lg-12 col-md-12 footer-newsletter">
            <form action="<?php echo base_url(); ?>index.php/Gestion/buscar" method="post">
                <table width="50%" style="float:left;">
                  <td colspan="3">
                      <input type="text" class="form-control" placeholder="Introduce el pin de tu mascota" id="buscar" name="buscar" pattern="[a-zA-Z0-9 ]{0,}">
                  </td>
                  <td></td>
                  <td>
                  <button type="submit">
                     <span class="icofont-search"></span>
                  </button>
                  </td>
                </table>
            </form>
          </div><br><br><br>
          <p>..................................................................................</p>
        </div>
        <?php if($mascotas) { ?>
          <div class="row">
            <?php foreach ($mascotas as $key => $mascota) {?>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="<?php echo base_url(); ?>assets/img/team/team-1.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href="<?php echo base_url(); ?>index.php/Gestion/eliminar/<?php echo $mascota->id_mascota; ?>"><i class="icofont-delete"></i></a>
                      <a href="<?php echo base_url(); ?>index.php/Gestion/actualizar/<?php echo $mascota->id_mascota; ?>"><i class="icofont-update"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4><?php echo $mascota->nom_mascota; ?></h4>
                    <span><?php echo $mascota->des_mascota; ?></span>
                  </div>
                </div>
              </div>
            <?php } ?>
        <?php }else{ ?>
          <div class="section-title">
            <p>Deseas eliminar o modificar tu mascota!!!</p>
            <p>Ingresa tu identificador de mascota</p>
            <p>Que te fue dado al publicara</p>
            <p>!!!</p>
          </div>
          <?php } ?>
        </div>
    
      </div>
    </section><!-- End Team Section -->