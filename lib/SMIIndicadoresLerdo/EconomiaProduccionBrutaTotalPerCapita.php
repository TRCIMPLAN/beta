<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo EconomiaProduccionBrutaTotalPerCapita
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
 * Clase EconomiaProduccionBrutaTotalPerCapita
 */
class EconomiaProduccionBrutaTotalPerCapita extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Producción Bruta Total Per Cápita en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-produccion-bruta-total-per-capita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Producción bruta total (de los sectores industria, comercio y servicios) entre población total. Indicador incluido en el índice de competitividad 2012 del Centro de Investigación y Docencia Económicas (CIDE).';
        $this->claves      = 'IMPLAN, Lerdo, Macroeconomía, Finanzas Públicas';
        // Para el Organizador
        $this->categorias  = array('Macroeconomía', 'Finanzas Públicas');
        $this->fuentes     = array('Elaboración propia con datos obtenidos del INEGI');
        $this->regiones    = array('Lerdo');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'dinero'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // datos_estructura

    /**
     * Datos
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos() {
        return array(
            array('fecha' => '1998-12-31', 'valor' => '12093.88', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => 'La producción bruta total per cápita en dólares es de $1,222.06. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 9.89630'),
            array('fecha' => '2003-12-31', 'valor' => '21705.57', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => 'La producción bruta total per cápita en dólares es de $1,931.58. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 11.23720'),
            array('fecha' => '2008-12-31', 'valor' => '16746.04', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => 'La producción bruta total per cápita en dólares es de $1,210.63. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250'),
            array('fecha' => '2013-12-31', 'valor' => '26085.15', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'));
    } // datos

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones_estructura() {
        return NULL;
    } // otras_regiones_estructura

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones() {
        return NULL;
    } // otras_regiones

    /**
     * Mapas
     *
     * @return string Código HTML con el iframe de Carto
     */
    public function mapas() {
        return NULL;
    } // mapas

    /**
     * Observaciones
     *
     * @return string Markdown
     */
    public function observaciones() {
        return <<<OBSERVACIONES_FINAL
La producción bruta total per cápita a nivel nacional es de:

- 2008 = $103,094.93 
- 2003 = $60,324.54 
- 1998 = $37,765.57 

La producción bruta total per cápita en dólares a nivel nacional es de:

- 2008 = $7,453.09 
- 2003 = $5,368.29 
- 1998 = $3,816.13 

Calculados con el tipo de cambio Fix publicado por el Banxico al cierre del año correspondiente.

Datos obtenidos de [INEGI Censos económicos.](http://www3.inegi.org.mx/sistemas/saic/)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaProduccionBrutaTotalPerCapita

?>
