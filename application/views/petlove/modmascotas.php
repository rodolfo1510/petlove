<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Bienvenido!! modifica los datos que necesites de tu mascota</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <form action="<?php echo base_url(); ?>index.php/Gestion/update/<?php echo $id_mascota; ?>" method="post" role="form" class="php-email-form">
              <h2>Editar a: <?php echo $nom_mascota; ?></h2>
              <div class="form-row">
                <div class="col form-group">
                  <label>Nombre</label>
                  <input type="text" name="nombre" class="form-control" id="nombre" required placeholder="Ingresa el nombre de la mascota"  data-msg="Ingresa un nombre valido" pattern="[a-zA-Z ]{1,}" value="<?php echo $nom_mascota; ?>" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                    <label>Tipo</label>
                  <input type="text" class="form-control" name="tipo" id="tipo" required placeholder="Ingresa tipo de mascota"  data-msg="Ingresa un tipo valido" pattern="[a-zA-Z ]{1,}" value="<?php echo $tip_mascota; ?>" />
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="col form-group">
                  <label>Edad</label>
                  <input type="text" name="edad" class="form-control" id="edad" required placeholder="Ingresa edad de la mascota(meses)" data-msg="Ingresa una edad valida" pattern="[0-9]{1,}" value="<?php echo $ed_mascota; ?>" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                    <label>Tamaño</label>
                  <input type="text" class="form-control" name="tamanio" id="tamanio" required placeholder="Ingresa tamanio de mascota" data-msg="Ingresa un tamanio valido" pattern="[0-9]{1,}" value="<?php echo $tmn_mascota; ?>" />
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="col form-group">
                    <label>Genero</label>
                        <select class="form-control" name="genero" id="genero" data-msg="Seleciona un genero" >
                            <?php if($gnr_mascota == "1"){?>
                            <option disabled selected>Seleccione</option>
                            <option value="Masculino" selected>Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <?php }else{?>
                            <option disabled selected>Seleccione</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino" selected>Masculino</option>
                            <?php }?>
                            </select>
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <label>Descripcion</label>
                  <input type="text" name="descripcion" class="form-control" id="descripcion" required placeholder="Describe tu mascota"  data-msg="Ingresa algo valido" pattern="[a-zA-Z ]{1,}" value="<?php echo $des_mascota; ?>" />
                  <div class="validate"></div>
                </div>
              </div>
              

              <div class="form-row">
                <div class="col form-group">
                  <label>Departamento</label>
                  <input type="text" name="departamento" required class="form-control" id="departamento" placeholder="Ingresa el departamento de tu mascota"  data-msg="Ingresa un departamento valido" pattern="[a-zA-Z ]{1,}" value="<?php echo $dep_mascota; ?>" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                    <label>Municipio</label>
                  <input type="text" class="form-control" name="municipio" id="municipio" required placeholder="Ingresa el municipio de tu mascota"  data-msg="Ingresa un municipio valido" pattern="[a-zA-Z ]{1,}" value="<?php echo $mun_mascota; ?>" />
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="col form-group">
                  <label>Fecha de tu publicacion</label>
                  <input type="text" name="fecha" class="form-control" id="name" disabled value="<?php echo $fec_mascota; ?>" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Modificar datos</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->