<div id="sf_admin_container" class="admin_list">

  <h1>Listado de páginas</h1>


  <div class="admin_container">
    <div id="sf_admin_header">
          </div>

        <div id="sf_admin_bar">

      <nav class="menu">
        <a class="opt_filter" title="Filtro">Filtro</a>
      </nav>


<div class="sf_admin_filter">

  <form action="/backend.php/pages/filter/action" method="post">
    <table cellspacing="0">
      <tfoot>
        <tr>

          <td colspan="2">
            <a class="filter_cancel">Cancel</a>
            <input type="hidden" name="page_filters[_csrf_token]" value="6eb54152c59a512bb158ae61151516e2" id="page_filters__csrf_token" />            <a onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit();return false;" href="/backend.php/pages/filter/action?_reset">Reiniciar</a>            <input type="submit" value="Filtrar" />
          </td>
        </tr>
      </tfoot>
      <tbody>

                            <tr class="sf_admin_form_row sf_admin_foreignkey sf_admin_filter_field_parent_id">
    <td>
      <label for="page_filters_parent_id">Parent</label>    </td>
    <td>

      <select name="page_filters[parent_id]" id="page_filters_parent_id">
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
</select>

          </td>
  </tr>
                            <tr class="sf_admin_form_row sf_admin_foreignkey sf_admin_filter_field_author_id">
    <td>
      <label for="page_filters_author_id">Autor</label>    </td>
    <td>

      <select name="page_filters[author_id]" id="page_filters_author_id">
<option value="" selected="selected"></option>

<option value="1">admin</option>
<option value="2">damian</option>
<option value="3">davo</option>
</select>
          </td>
  </tr>
                            <tr class="sf_admin_form_row sf_admin_text sf_admin_filter_field_title">
    <td>
      <label for="page_filters_title">Título</label>    </td>

    <td>

      <input type="text" id="page_filters_title" name="page_filters[title][text]" value="" /><br />
          </td>
  </tr>
                            <tr class="sf_admin_form_row sf_admin_text sf_admin_filter_field_description">
    <td>
      <label for="page_filters_description">Descripción</label>    </td>
    <td>


      <input type="text" id="page_filters_description" name="page_filters[description][text]" value="" /><br /><input type="checkbox" name="page_filters[description][is_empty]" id="page_filters_description_is_empty" /> <label for="page_filters_description_is_empty">is empty</label>
          </td>
  </tr>
                            <tr class="sf_admin_form_row sf_admin_text sf_admin_filter_field_abstract">
    <td>
      <label for="page_filters_abstract">Resúmen</label>    </td>
    <td>


      <input type="text" id="page_filters_abstract" name="page_filters[abstract][text]" value="" /><br /><input type="checkbox" name="page_filters[abstract][is_empty]" id="page_filters_abstract_is_empty" /> <label for="page_filters_abstract_is_empty">is empty</label>
          </td>
  </tr>
                            <tr class="sf_admin_form_row sf_admin_text sf_admin_filter_field_picture">
    <td>
      <label for="page_filters_picture">Imagen</label>    </td>
    <td>


      <input type="text" id="page_filters_picture" name="page_filters[picture][text]" value="" /><br /><input type="checkbox" name="page_filters[picture][is_empty]" id="page_filters_picture_is_empty" /> <label for="page_filters_picture_is_empty">is empty</label>
          </td>
  </tr>
                            <tr class="sf_admin_form_row sf_admin_date sf_admin_filter_field_created_at">
    <td>
      <label for="page_filters_created_at">Creado en</label>    </td>
    <td>


      from <select name="page_filters[created_at][from][month]" id="page_filters_created_at_from_month">
<option value="" selected="selected"></option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>

<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>/<select name="page_filters[created_at][from][day]" id="page_filters_created_at_from_day">
<option value="" selected="selected"></option>
<option value="1">01</option>
<option value="2">02</option>

<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>

<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>

<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>

<option value="30">30</option>
<option value="31">31</option>
</select>/<select name="page_filters[created_at][from][year]" id="page_filters_created_at_from_year">
<option value="" selected="selected"></option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>

<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
</select><br />to <select name="page_filters[created_at][to][month]" id="page_filters_created_at_to_month">
<option value="" selected="selected"></option>
<option value="1">01</option>

<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>

<option value="11">11</option>
<option value="12">12</option>
</select>/<select name="page_filters[created_at][to][day]" id="page_filters_created_at_to_day">
<option value="" selected="selected"></option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>

<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>

<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>

<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>/<select name="page_filters[created_at][to][year]" id="page_filters_created_at_to_year">

<option value="" selected="selected"></option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>

<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
</select><br />
          </td>
  </tr>
                            <tr class="sf_admin_form_row sf_admin_date sf_admin_filter_field_updated_at">
    <td>
      <label for="page_filters_updated_at">Actualizado en</label>    </td>

    <td>

      from <select name="page_filters[updated_at][from][month]" id="page_filters_updated_at_from_month">
<option value="" selected="selected"></option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>

<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>/<select name="page_filters[updated_at][from][day]" id="page_filters_updated_at_from_day">
<option value="" selected="selected"></option>
<option value="1">01</option>

<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>

<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>

<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>

<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>/<select name="page_filters[updated_at][from][year]" id="page_filters_updated_at_from_year">
<option value="" selected="selected"></option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>

<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
</select><br />to <select name="page_filters[updated_at][to][month]" id="page_filters_updated_at_to_month">
<option value="" selected="selected"></option>

<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>

<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>/<select name="page_filters[updated_at][to][day]" id="page_filters_updated_at_to_day">
<option value="" selected="selected"></option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>

<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>

<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>

<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>

</select>/<select name="page_filters[updated_at][to][year]" id="page_filters_updated_at_to_year">
<option value="" selected="selected"></option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>

<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
</select><br />
          </td>
  </tr>
                            <tr class="sf_admin_form_row sf_admin_text sf_admin_filter_field_categories_list">
    <td>
      <label for="page_filters_categories_list">Lista de categorías</label>    </td>

    <td>

      <select name="page_filters[categories_list][]" multiple="multiple" id="page_filters_categories_list">
<option value="1">Main Menu</option>
<option value="2">Main Slideshow</option>
<option value="3">Shows</option>
<option value="4">Main Events</option>
<option value="5">Belterra</option>
<option value="6">Rainbow</option>
<option value="7">Jokers</option>

</select>
          </td>
  </tr>
                      </tbody>
    </table>
  </form>
</div>
    </div>

    <div id="sf_admin_content">
            <form action="/backend.php/pages/batch/action" method="post">

                <div class="sf_admin_list">
  <div class="placelholder"></div>
      <table cellspacing="0">
      <thead>
        <tr>
          <th id="sf_admin_list_batch_actions"><input id="sf_admin_list_batch_checkbox" type="checkbox" onclick="checkAll();" /></th>
          <th class="sf_admin_text sf_admin_list_th_parent">
  Página padre</th>

<th class="sf_admin_text sf_admin_list_th_author">
  Autor</th>
<th class="sf_admin_text sf_admin_list_th_title">
      <a href="/backend.php/pages?sort=title&amp;sort_type=asc">Título</a>  </th>
<th class="sf_admin_date sf_admin_list_th_created_at">
      <a href="/backend.php/pages?sort=created_at&amp;sort_type=asc">Creado en</a>  </th>
          <th id="sf_admin_list_th_actions">Acciones</th>

        </tr>
      </thead>
      <tfoot>
        <tr>
          <th colspan="6">
                          <div class="sf_admin_pagination">
  <a href="/backend.php/pages?page=1">
    <span class="rreview">&laquo;&laquo;</span>
  </a>

  <a href="/backend.php/pages?page=1" class="link-review">
    <span class="review">&laquo;</span>
  </a>

          <span class="page">1</span>
                <a href="/backend.php/pages?page=2">2</a>

  <a href="/backend.php/pages?page=2" class="link-forward">
    <span class="forward">&raquo;</span>

  </a>

  <a href="/backend.php/pages?page=2">
    <span class="fforward">&raquo;&raquo;</span>
  </a>
</div>                        <div class="pagination-details">
              35 resultados                              (página 1/2)                          </div>
          </th>
        </tr>

      </tfoot>
      <tbody>
                  <tr class="sf_admin_row odd">
            <td>
  <input type="checkbox" name="ids[]" value="1" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  </td>
<td class="sf_admin_text sf_admin_list_td_author">
  damian</td>

<td class="sf_admin_text sf_admin_list_td_title">
  Hotel</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  30 de marzo de 2010 19:50</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>

                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/1/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/1">Borrar</a></li>                  </ul>
  </div>
</td>
          </tr>
                  <tr class="sf_admin_row even">
            <td>
  <input type="checkbox" name="ids[]" value="2" class="sf_admin_batch_checkbox" />

</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  </td>
<td class="sf_admin_text sf_admin_list_td_author">
  damian</td>
<td class="sf_admin_text sf_admin_list_td_title">
  Casino</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  30 de marzo de 2010 19:50</td>

            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/2/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/2">Borrar</a></li>                  </ul>
  </div>

</td>
          </tr>
                  <tr class="sf_admin_row odd">
            <td>
  <input type="checkbox" name="ids[]" value="3" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  </td>
<td class="sf_admin_text sf_admin_list_td_author">
  admin</td>

<td class="sf_admin_text sf_admin_list_td_title">
  Banquetes &amp; Convenciones</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  30 de marzo de 2010 19:50</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>

    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/3/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/3">Borrar</a></li>                  </ul>
  </div>
</td>
          </tr>
                  <tr class="sf_admin_row even">
            <td>

  <input type="checkbox" name="ids[]" value="4" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  </td>
<td class="sf_admin_text sf_admin_list_td_author">
  damian</td>
<td class="sf_admin_text sf_admin_list_td_title">
  Espectáculos</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  30 de marzo de 2010 19:50</td>

            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/4/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/4">Borrar</a></li>                  </ul>
  </div>

</td>
          </tr>
                  <tr class="sf_admin_row odd">
            <td>
  <input type="checkbox" name="ids[]" value="5" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  </td>
<td class="sf_admin_text sf_admin_list_td_author">
  damian</td>

<td class="sf_admin_text sf_admin_list_td_title">
  Promociones</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  30 de marzo de 2010 19:50</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>

                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/5/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/5">Borrar</a></li>                  </ul>
  </div>
</td>
          </tr>
                  <tr class="sf_admin_row even">
            <td>
  <input type="checkbox" name="ids[]" value="6" class="sf_admin_batch_checkbox" />

</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Hotel</td>
<td class="sf_admin_text sf_admin_list_td_author">
  </td>
<td class="sf_admin_text sf_admin_list_td_title">
  Promos</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  4 de mayo de 2010 14:43</td>

            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/6/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/6">Borrar</a></li>                  </ul>
  </div>

</td>
          </tr>
                  <tr class="sf_admin_row odd">
            <td>
  <input type="checkbox" name="ids[]" value="7" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Promos</td>
<td class="sf_admin_text sf_admin_list_td_author">
  damian</td>

<td class="sf_admin_text sf_admin_list_td_title">
  Noche de Bodas</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  4 de mayo de 2010 12:02</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>

                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/7/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/7">Borrar</a></li>                  </ul>
  </div>
</td>
          </tr>
                  <tr class="sf_admin_row even">
            <td>
  <input type="checkbox" name="ids[]" value="8" class="sf_admin_batch_checkbox" />

</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  </td>
<td class="sf_admin_text sf_admin_list_td_author">
  damian</td>
<td class="sf_admin_text sf_admin_list_td_title">
  Gastronomía</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  30 de marzo de 2010 19:50</td>

            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/8/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/8">Borrar</a></li>                  </ul>
  </div>

</td>
          </tr>
                  <tr class="sf_admin_row odd">
            <td>
  <input type="checkbox" name="ids[]" value="9" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Gastronomía</td>
<td class="sf_admin_text sf_admin_list_td_author">
  </td>

<td class="sf_admin_text sf_admin_list_td_title">
  Seasons</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  3 de mayo de 2010 05:57</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>

                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/9/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/9">Borrar</a></li>                  </ul>
  </div>
</td>
          </tr>
                  <tr class="sf_admin_row even">
            <td>
  <input type="checkbox" name="ids[]" value="10" class="sf_admin_batch_checkbox" />

</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Gastronomía</td>
<td class="sf_admin_text sf_admin_list_td_author">
  </td>
<td class="sf_admin_text sf_admin_list_td_title">
  Belterra</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  3 de mayo de 2010 06:05</td>

            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/10/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/10">Borrar</a></li>                  </ul>
  </div>

</td>
          </tr>
                  <tr class="sf_admin_row odd">
            <td>
  <input type="checkbox" name="ids[]" value="11" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Gastronomía</td>
<td class="sf_admin_text sf_admin_list_td_author">
  </td>

<td class="sf_admin_text sf_admin_list_td_title">
  Jokers</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  3 de mayo de 2010 06:08</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>

                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/11/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/11">Borrar</a></li>                  </ul>
  </div>
</td>
          </tr>
                  <tr class="sf_admin_row even">
            <td>
  <input type="checkbox" name="ids[]" value="12" class="sf_admin_batch_checkbox" />

</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  </td>
<td class="sf_admin_text sf_admin_list_td_author">
  damian</td>
<td class="sf_admin_text sf_admin_list_td_title">
  Gift Shop</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  30 de marzo de 2010 19:50</td>

            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/12/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/12">Borrar</a></li>                  </ul>
  </div>

</td>
          </tr>
                  <tr class="sf_admin_row odd">
            <td>
  <input type="checkbox" name="ids[]" value="13" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Banquetes &amp; Convenciones</td>

<td class="sf_admin_text sf_admin_list_td_author">
  </td>
<td class="sf_admin_text sf_admin_list_td_title">
  Salón Belterra</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  1 de mayo de 2010 15:21</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>

    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/13/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/13">Borrar</a></li>                  </ul>
  </div>
</td>
          </tr>
                  <tr class="sf_admin_row even">
            <td>

  <input type="checkbox" name="ids[]" value="14" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Banquetes &amp; Convenciones</td>
<td class="sf_admin_text sf_admin_list_td_author">
  </td>
<td class="sf_admin_text sf_admin_list_td_title">
  Catering &amp; Menús</td>

<td class="sf_admin_date sf_admin_list_td_created_at">
  1 de mayo de 2010 17:08</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/14/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/14">Borrar</a></li>                  </ul>

  </div>
</td>
          </tr>
                  <tr class="sf_admin_row odd">
            <td>
  <input type="checkbox" name="ids[]" value="15" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Hotel</td>

<td class="sf_admin_text sf_admin_list_td_author">
  damian</td>
<td class="sf_admin_text sf_admin_list_td_title">
  Habitaciones</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  30 de marzo de 2010 19:50</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>

    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/15/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/15">Borrar</a></li>                  </ul>
  </div>
</td>
          </tr>
                  <tr class="sf_admin_row even">
            <td>

  <input type="checkbox" name="ids[]" value="16" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Hotel</td>
<td class="sf_admin_text sf_admin_list_td_author">
  damian</td>
<td class="sf_admin_text sf_admin_list_td_title">
  Restaurante</td>
<td class="sf_admin_date sf_admin_list_td_created_at">

  30 de marzo de 2010 19:50</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/16/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/16">Borrar</a></li>                  </ul>

  </div>
</td>
          </tr>
                  <tr class="sf_admin_row odd">
            <td>
  <input type="checkbox" name="ids[]" value="17" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Hotel</td>

<td class="sf_admin_text sf_admin_list_td_author">
  damian</td>
<td class="sf_admin_text sf_admin_list_td_title">
  Piscina</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  30 de marzo de 2010 19:50</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>

    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/17/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/17">Borrar</a></li>                  </ul>
  </div>
</td>
          </tr>
                  <tr class="sf_admin_row even">
            <td>

  <input type="checkbox" name="ids[]" value="18" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Hotel</td>
<td class="sf_admin_text sf_admin_list_td_author">
  damian</td>
<td class="sf_admin_text sf_admin_list_td_title">
  Spa &amp; Fitness</td>

<td class="sf_admin_date sf_admin_list_td_created_at">
  30 de marzo de 2010 19:50</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/18/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/18">Borrar</a></li>                  </ul>

  </div>
</td>
          </tr>
                  <tr class="sf_admin_row odd">
            <td>
  <input type="checkbox" name="ids[]" value="19" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Hotel</td>

<td class="sf_admin_text sf_admin_list_td_author">
  damian</td>
<td class="sf_admin_text sf_admin_list_td_title">
  Servicios</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  30 de marzo de 2010 19:50</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>

    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/19/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/19">Borrar</a></li>                  </ul>
  </div>
</td>
          </tr>
                  <tr class="sf_admin_row even">
            <td>

  <input type="checkbox" name="ids[]" value="20" class="sf_admin_batch_checkbox" />
</td>
            <td class="sf_admin_text sf_admin_list_td_parent">
  Banquetes &amp; Convenciones</td>
<td class="sf_admin_text sf_admin_list_td_author">
  </td>
<td class="sf_admin_text sf_admin_list_td_title">
  Salón Rainbow</td>

<td class="sf_admin_date sf_admin_list_td_created_at">
  1 de mayo de 2010 15:08</td>
            <td class="object_actions">
  <div class="object_actions_container">
    <span class="label_action">acciones</span>
    <ul>
                        <li class="sf_admin_action_edit"><a href="/backend.php/pages/20/edit">Editar</a></li>                                <li class="sf_admin_action_delete"><a onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '8d623fd14f05d02f79b3a9fe568e246d'); f.appendChild(m);f.submit(); };return false;" href="/backend.php/pages/20">Borrar</a></li>                  </ul>

  </div>
</td>
          </tr>
              </tbody>
    </table>
  </div>

        <ul class="sf_admin_actions">
          <li class="sf_admin_batch_actions_choice">

  <select name="batch_action" class="widget">
    <option value="">Selecciona una acción</option>
    <option value="batchDelete">Borrar</option>
  </select>
      <input type="hidden" name="_csrf_token" value="8d623fd14f05d02f79b3a9fe568e246d" />
      <input type="submit" value="&nbsp;" title="Ejecutar" />
</li>
          <li class="sf_admin_action_new"><a title="Agregar página" href="/backend.php/pages/new">&nbsp;</a></li>        </ul>

              </form>
          </div>

    <div id="sf_admin_footer">
          </div>

  </div>
</div>
