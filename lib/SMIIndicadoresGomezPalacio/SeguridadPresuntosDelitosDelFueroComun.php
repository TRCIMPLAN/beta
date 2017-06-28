<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SeguridadPresuntosDelitosDelFueroComun
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

namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SeguridadPresuntosDelitosDelFueroComun
 */
class SeguridadPresuntosDelitosDelFueroComun extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Presuntos Delitos del Fuero Común en Gómez Palacio';
        $this->fecha       = '2015-04-29T15:20:25';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-presuntos-delitos-del-fuero-comun';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = '';
        $this->claves      = 'IMPLAN, Gómez Palacio, Seguridad, Delincuencia';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Delincuencia');
        $this->fuentes     = array('INEGI');
        $this->regiones    = array('Gómez Palacio');
    } // constructor

    /**
     * Estructura
     *
     * @return array Arreglo asociativo
     */
    public function estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // estructura

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            array('fecha' => '2012-12-31', 'valor' => '13584', 'fuente_nombre' => 'INEGI', 'notas' => 'Fuente: [INEGI](http://www.inegi.org.mx/est/lista_cubos/consulta.aspx?p=gob&c=5)'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '6647', 'fuente_nombre' => 'INEGI', 'notas' => 'Fuente: [INEGI](http://www.inegi.org.mx/est/lista_cubos/consulta.aspx?p=gob&c=5)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '13584', 'fuente_nombre' => 'INEGI', 'notas' => 'Fuente: [INEGI](http://www.inegi.org.mx/est/lista_cubos/consulta.aspx?p=gob&c=5)'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-12-31', 'valor' => 'X', 'fuente_nombre' => 'INEGI', 'notas' => 'Fuente: [INEGI](http://www.inegi.org.mx/est/lista_cubos/consulta.aspx?p=gob&c=5)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '1100', 'fuente_nombre' => 'INEGI', 'notas' => 'Fuente: [INEGI](http://www.inegi.org.mx/est/lista_cubos/consulta.aspx?p=gob&c=5)'));
    } // otras_regiones

} // Clase SeguridadPresuntosDelitosDelFueroComun

?>
