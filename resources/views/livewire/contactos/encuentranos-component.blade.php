      <!-- Contact information-->
      <section class="section section-sm section-first bg-default" style="padding: 60px 0px 60px 0px; padding-bottom: 0px">
        <div class="container" style=" max-width: 968px">
          <div class="row row-14 gutters-14">
            <div class="col-md-6">
              <div class="form-wrap">
                <div class="contenedor1" style="padding: 20px">
                    <a href="#">
                        <figure>
                         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63836.83105893815!2d-78.480322!3d-0.16417500000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb97a862b2246c7b7!2sFundacion%20Diabetes%20Juvenil%20Ecuador!5e0!3m2!1ses!2sec!4v1637962438359!5m2!1ses!2sec" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </figure>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-wrap">
                <div class="contenedor1" style="padding: 20px">
                    <a href="#">
                        <figure>
                         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63792.56731525672!2d-79.894675!3d-2.140091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfe05a50490b05b24!2sFundaci%C3%B3n%20Diabetes%20Juvenil%20del%20Ecuador!5e0!3m2!1ses-419!2sec!4v1637962381061!5m2!1ses-419!2sec" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </figure>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container" style=" max-width: 968px">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <p class="box-contacts-link"><a href="#">Quito</a></p>
                  <br>
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">Isla Santa Fé N43-65 y Tomás de Berlanga.</a></p>
                  <p class="box-contacts-link"><a href="tel:#">(02) 2462-439</a></p>
                  <p class="box-contacts-link"><a href="tel:#">(02) 2447-140</a></p>
                  <div class="unit-body" style="padding-top: 10px;"><a class="link-phone" href="https://api.whatsapp.com/send/?phone=593998740762&text&app_absent=0" target="_blank"><span class="icon fa fa-whatsapp" style="padding-right: 5px"></span>Más información escribenos al 0998740762</a></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <p class="box-contacts-link"><a href="#">Guayaquil</a></p>
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">Alborada 4ta. Etapa, Mz Fi, Villa 8 (3 cuadras atrás de Albocentro 1).</a></p>
                  <p class="box-contacts-link"><a href="https://api.whatsapp.com/send/?phone=593988522172&text&app_absent=0">0988522172</a></p>
                  <br>
                  <div class="unit-body" style="padding-top: 10px;"><a class="link-phone" href="https://api.whatsapp.com/send/?phone=593988522172&text&app_absent=0" target="_blank"><span class="icon fa fa-whatsapp" style="padding-right: 5px"></span>Más información escribenos al 0988522172</a></div>
                </div>
              </article>
            </div>
            {{-- <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></p>
                </div>
              </article>
            </div> --}}
            {{-- <div class="col-sm-6 col-md-6 col-lg-6">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:#">mail@demolink.org</a></p>
                  <p class="box-contacts-link"><a href="mailto:#">info@demolink.org</a></p>
                </div>
              </article>
            </div> --}}
          </div>
        </div>
      <!-- Contact Form-->
        <div class="container"  style="padding-bottom: 60px; max-width: 968px">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Escríbenos</h3>
            </div>
          </article>
          <form class="rd-form rd-form-variant-2 rd-mailform formulario-guardar" wire:submit.prevent="sendMessage">
            <div class="row row-14 gutters-14">
              <div class="col-md-6">
                <label>Nombres y Apellidos</label>
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" wire:model="name">
                </div>
              </div>
              <div class="col-md-6">
                <label>Correo Electrónico</label>
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email" wire:model="email">
                </div>
              </div>
              <div class="col-md-6">
                <label>Teléfono de contacto (WhatsApp)</label>
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone" wire:model="phone">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-wrap">
                  <label  >Selecione la Provincia</label>
                  <br>
                  <select class="form-control" wire:model="province">
                    <option value="Azuay">Azuay</option>
                    <option value="Cañar">Cañar</option>
                    <option value="Loja">Loja</option>
                    <option value="Carchi">Carchi</option>
                    <option value="Imbabura">Imbabura</option>
                    <option value="Pichincha">Pichincha</option>
                    <option value="Cotopaxi">Cotopaxi</option>
                    <option value="Tungurahua">Tungurahua</option>
                    <option value="Bolívar">Bolívar</option>
                    <option value="Chimborazo">Chimborazo</option>
                    <option value="Sto. Domingo de los Tsachilas">Sto. Domingo de los Tsachilas</option>
                    <option value="Esmeraldas">Esmeraldas</option>
                    <option value="Manabí">Manabí</option>
                    <option value="Guayas">Guayas</option>
                    <option value="Los Ríos">Los Ríos</option>
                    <option value="El Oro">El Oro</option>
                    <option value="Santa Elena">Santa Elena</option>
                    <option value="Sucumbíos">Sucumbíos</option>
                    <option value="Napo">Napo</option>
                    <option value="Pastaza">Pastaza</option>
                    <option value="Orellana">Orellana</option>
                    <option value="Morona Santiago">Morona Santiago</option>
                    <option value="Zamora Chinchipe">Zamora Chinchipe</option>
                    <option value="Galápagos">Galápagos</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <label >¿Cuál es su necesidad?</label>
                <div class="form-wrap">
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message"  wire:model="comment"></textarea>
                </div>
              </div>
            </div>
            <input class="button button-primary" type="submit" name="ok" value="Enviar mensaje" >
          </form>
        </div>
      </section>
