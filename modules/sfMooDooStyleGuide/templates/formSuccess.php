<div id="sf_admin_container" class="admin_new">
  <h1>Página nueva</h1>
  <div class="admin_container">


    <div id="sf_admin_header">
    </div>

    <div id="sf_admin_content">


      <div class="sf_admin_form">
        <form method="post" action="/backend.php/pages" enctype="multipart/form-data">    <input type="hidden" name="page[id]" id="page_id" /><input type="hidden" name="page[_csrf_token]" value="95bcc5a63ff0499510f6ccdd2d4f4d40" id="page__csrf_token" />

          <fieldset id="sf_fieldset_none">

            <div class="sf_admin_form_row sf_admin_foreignkey sf_admin_form_field_parent_id">
              <div>
                <label for="page_parent_id">Página padre</label>
                <div class="content"><select name="page[parent_id]" id="page_parent_id">
                    <option value="" selected="selected"></option>
                    <option value="1">Hotel</option>

                    <option value="2">Casino</option>
                    <option value="3">Banquetes &amp; Convenciones</option>
                    <option value="4">Espectáculos</option>
                    <option value="5">Promociones</option>
                    <option value="6">Promos</option>
                    <option value="7">Noche de Bodas</option>
                    <option value="8">Gastronomía</option>
                    <option value="9">Seasons</option>

                    <option value="10">Belterra</option>
                    <option value="11">Jokers</option>
                    <option value="12">Gift Shop</option>
                    <option value="13">Salón Belterra</option>
                    <option value="14">Catering &amp; Menús</option>
                    <option value="15">Habitaciones</option>
                    <option value="16">Restaurante</option>
                    <option value="17">Piscina</option>

                    <option value="18">Spa &amp; Fitness</option>
                    <option value="19">Servicios</option>
                    <option value="20">Salón Rainbow</option>
                    <option value="21">Club Magic - VIP</option>
                    <option value="22">Torneos de Póker</option>
                    <option value="23">Mesas de Juego</option>
                    <option value="24">Habitacion Standard</option>
                    <option value="25">Habitacion Superior</option>

                    <option value="26">Habitacion Presidencial</option>
                    <option value="27">Business Center</option>
                    <option value="28">Formatos y Capacidades</option>
                    <option value="29">Equipamiento Audio Visual  </option>
                    <option value="30">Eventos Destacadados</option>
                    <option value="31">Belterra</option>
                    <option value="32">Rainbow</option>
                    <option value="33">Jokers</option>
                    <option value="34">American Exprerss Select</option>

                    <option value="35">Aerolíneas Argentinas y Socios Aerolíneas Plus</option>
                  </select></div>

              </div>
            </div>
            <div class="sf_admin_form_row sf_admin_foreignkey sf_admin_form_field_author_id">
              <div>
                <label for="page_author_id">Autor</label>
                <div class="content"><select name="page[author_id]" id="page_author_id">

                    <option value="" selected="selected"></option>
                    <option value="1">admin</option>
                    <option value="2">damian</option>
                    <option value="3">davo</option>
                  </select></div>

              </div>
            </div>
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_title">
              <div>

                <label for="page_title">Título</label>
                <div class="content"><input type="text" name="page[title]" id="page_title" /></div>

              </div>
            </div>
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_description">
              <div>
                <label for="page_description">Descripción</label>

                <div class="content"><textarea name="page[description]" id="page_description"></textarea><script type="text/javascript">
                  tinyMCE.init({
                    mode:                              "exact",
                    elements:                          "page_description",
                    theme:                             "advanced",
                    width:                             "500px",
                    height:                            "250px",
                    theme_advanced_toolbar_location:   "top",
                    theme_advanced_toolbar_align:      "left",
                    theme_advanced_statusbar_location: "bottom",
                    theme_advanced_resizing:           true
                    ,
                    theme_advanced_disable: "cleanup, help, charmap, visualaid, styleselect"
                  });
                  </script></div>

              </div>
            </div>
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_abstract">
              <div>
                <label for="page_abstract">Resúmen</label>
                <div class="content"><textarea rows="2" cols="50" name="page[abstract]" id="page_abstract"></textarea></div>

              </div>
            </div>
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_picture">
              <div>
                <label for="page_picture">Imagen</label>
                <div class="content"><input type="file" name="page[picture]" id="page_picture" /></div>

              </div>

            </div>
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_categories_list">
              <div>
                <label for="page_categories_list">Lista de categorías</label>
                <div class="content"><ul class="checkbox_list"><li><input name="page[categories_list][]" type="checkbox" value="1" id="page_categories_list_1" />&nbsp;<label for="page_categories_list_1">Main Menu</label></li>
                    <li><input name="page[categories_list][]" type="checkbox" value="2" id="page_categories_list_2" />&nbsp;<label for="page_categories_list_2">Main Slideshow</label></li>
                    <li><input name="page[categories_list][]" type="checkbox" value="3" id="page_categories_list_3" />&nbsp;<label for="page_categories_list_3">Shows</label></li>
                    <li><input name="page[categories_list][]" type="checkbox" value="4" id="page_categories_list_4" />&nbsp;<label for="page_categories_list_4">Main Events</label></li>

                    <li><input name="page[categories_list][]" type="checkbox" value="5" id="page_categories_list_5" />&nbsp;<label for="page_categories_list_5">Belterra</label></li>
                    <li><input name="page[categories_list][]" type="checkbox" value="6" id="page_categories_list_6" />&nbsp;<label for="page_categories_list_6">Rainbow</label></li>
                    <li><input name="page[categories_list][]" type="checkbox" value="7" id="page_categories_list_7" />&nbsp;<label for="page_categories_list_7">Jokers</label></li></ul></div>

              </div>
           </div>
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_users_list">
              <div>
                <label for="sf_guard_permission_users_list">Usuarios</label>
                <div class="content"><select name="sf_guard_permission[users_list][]" multiple="multiple" id="sf_guard_permission_users_list">

                    <option value="1">admin</option>
                    <option value="2">damian</option>
                    <option value="3">davo</option>
                  </select></div>

              </div>
            </div>


          </fieldset>

          <ul class="sf_admin_actions">
            <li class="sf_admin_action_list"><a title="Volver al listado" href="/backend.php/pages">&nbsp;</a></li>  <li class="sf_admin_action_save"><input title="Guardar"  type="submit" value="&nbsp;" name="_save" /></li>  <li class="sf_admin_action_save_and_add"><input title="Guardar y agregar nuevo"  type="submit" value="&nbsp;" name="_save_and_add" /></li></ul>

        </form>
      </div>
    </div>

    <div id="sf_admin_footer">
    </div>

  </div>
</div>
