<?php
/**
 * TrcIMPLAN - SMI Indicadores La Laguna Seguridad Tasa de Robo de Vehículo con Violencia (Creado por Central:SmiLanzadera)
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SeguridadTasaDeRoboDeVehiculoConViolencia
 */
class SeguridadTasaDeRoboDeVehiculoConViolencia extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Tasa de Robo de Vehículo con Violencia en La Laguna';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2015-04-29T14:04';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'seguridad-tasa-de-robo-de-vehiculo-con-violencia';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = '';
        $this->claves            = 'IMPLAN, La Laguna, Seguridad, Delincuencia';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-la-laguna';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = '';
        $region->addressLocality = '';
        // Instancia de SchemaPlace agrupa la región y el mapa
        $lugar                   = new \Base\SchemaPlace();
        $lugar->address          = $region;
        // El contenido es estructurado en un esquema
        $schema                  = new \Base\SchemaArticle();
        $schema->name            = $this->nombre;
        $schema->description     = $this->descripcion;
        $schema->datePublished   = $this->fecha;
        $schema->image           = $this->imagen;
        $schema->image_show      = false;
        $schema->author          = $this->autor;
        $schema->contentLocation = $lugar;
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $schema;
        // Para el Organizador
        $this->categorias        = array('Seguridad', 'Delincuencia');
        $this->fuentes           = array('Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública');
        $this->regiones          = 'La Laguna';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el HTML de las lengüetas
        $this->contenido->articleBody = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>31/03/2015</td>
            <td>No disponible</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Fuente: <a href="http://secretariadoejecutivo.gob.mx/incidencia-delictiva/incidencia-delictiva-fuero-comun.php">Secretariado Ejecutivo del Sistema Nacional de Seguridad</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Tasa de Robo de Vehículo con Violencia</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Tasa de Robo de Vehículo con Violencia</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Región</th>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Torreón</td>
            <td>2015-03-31</td>
            <td>No disponible</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2015-03-31</td>
            <td>No disponible</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2015-03-31</td>
            <td>No disponible</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2015-03-31</td>
            <td>No disponible</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2015-03-31</td>
            <td>No disponible</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2016-07-31</td>
            <td>3.14 %</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2016-07-31</td>
            <td>5.67 %</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // JavaScript
        $this->javascript[] = <<<FINAL
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 0 },{ region: 'Gómez Palacio', dato: 0 },{ region: 'Lerdo', dato: 0 },{ region: 'Matamoros', dato: 0 },{ region: 'La Laguna', dato: 0 },{ region: 'Coahuila', dato: 3.1400 },{ region: 'Durango', dato: 5.6700 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion = <<<FINAL
      <h3>Descripción</h3>


      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>31/03/2015</td>
            <td>No disponible</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Fuente: <a href="http://secretariadoejecutivo.gob.mx/incidencia-delictiva/incidencia-delictiva-fuero-comun.php">Secretariado Ejecutivo del Sistema Nacional de Seguridad</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SeguridadTasaDeRoboDeVehiculoConViolencia

?>
