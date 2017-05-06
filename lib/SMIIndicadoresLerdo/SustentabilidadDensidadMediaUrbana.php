<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SustentabilidadDensidadMediaUrbana
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace SMIIndicadoresLerdo;

/**
 * Clase SustentabilidadDensidadMediaUrbana
 */
class SustentabilidadDensidadMediaUrbana extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Densidad Media Urbana en Lerdo';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-03-14T11:27:37';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-densidad-media-urbana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Muestra la cantidad de personas que viven en una Área Geoestadística Básica urbana, medida en HECTÁREAS.';
        $this->claves      = 'IMPLAN, Lerdo, Población, Infraestructura';
        // Para el Organizador
        $this->categorias  = array('Población', 'Infraestructura');
        $this->fuentes     = array('CONAPO-SEDESOL-INEGI');
        $this->regiones    = array('Lerdo');
    } // constructor

    /**
     * Sección Datos HTML
     *
     * @return string Código HTML
     */
    protected function seccion_datos_html() {
        $this->datos_tabla->definir_estructura(array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto')));
        $this->datos_tabla->definir_panal(array(
            array('fecha' => '2010-12-31', 'valor' => '52.6000', 'fuente_nombre' => 'CONAPO-SEDESOL-INEGI', 'notas' => '')));
        // Entregar
        return $this->datos_tabla->html();
    } // seccion_datos_html

    /**
     * Sección Datos JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_datos_javascript() {
        return $this->datos_tabla->javascript();
    } // seccion_datos_javascript

    /**
     * Sección Otras Regiones HTML
     *
     * @return string Código HTML
     */
    protected function seccion_otras_regiones_html() {
        return <<<FINAL
      <h3>Gráfica con los últimos datos de Densidad Media Urbana</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Densidad Media Urbana</h3>
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
            <td>31/12/2010</td>
            <td>81.3000</td>
            <td>CONAPO-SEDESOL-INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>31/12/2010</td>
            <td>82.2000</td>
            <td>CONAPO-SEDESOL-INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>31/12/2010</td>
            <td>52.6000</td>
            <td>CONAPO-SEDESOL-INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>31/12/2010</td>
            <td>58.8000</td>
            <td>CONAPO-SEDESOL-INEGI</td>
            <td>Consulta y descarga la [base de datos](http://www.conapo.gob.mx/en/CONAPO/Catalogo_Sistema_Urbano_Nacional_2012)</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Da idea de lo compacta o dispersa que es una ciudad y por
tanto del carácter urbano de las unidades territoriales que conforman el SUN. Para su estimación se toman los datos por Área Geoestadística Básica (AGEB) Urbana.</p>

FINAL;
    } // seccion_otras_regiones_html

    /**
     * Sección Otras Regiones JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_otras_regiones_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 81.3000 },{ region: 'Gómez Palacio', dato: 82.2000 },{ region: 'Lerdo', dato: 52.6000 },{ region: 'Matamoros', dato: 58.8000 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
FINAL;
    } // seccion_otras_regiones_javascript

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Ejecutar los métodos que alimentan cada lengüeta
        $this->lenguetas->agregar('smi-indicador-datos', 'Datos', $this->seccion_datos_html());
        $this->lenguetas->agregar('smi-indicador-otras-regiones', 'Otras regiones', $this->seccion_otras_regiones_html());
        $this->lenguetas->agregar_javascript($this->seccion_otras_regiones_javascript());
        $this->lenguetas->definir_activa(); // Primer lengüeta activa
        // Definir el contenido de esta publicación que es un SchemaArticle
        $this->contenido->articleBody = $this->lenguetas->html();
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript de las lengüetas, es el de las gráficas
        $this->javascript[] = $this->lenguetas->javascript();
        // JavaScript para la carga completa del documento, es el de la tabla con los datos
        $this->javascript[] = $this->datos_tabla->javascript();
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SustentabilidadDensidadMediaUrbana

?>