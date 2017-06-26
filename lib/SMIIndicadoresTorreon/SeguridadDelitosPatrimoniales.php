<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SeguridadDelitosPatrimoniales
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

namespace SMIIndicadoresTorreon;

/**
 * Clase SeguridadDelitosPatrimoniales
 */
class SeguridadDelitosPatrimoniales extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Delitos Patrimoniales en Torreón';
        $this->fecha       = '2015-06-04T11:25:18';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-delitos-patrimoniales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.';
        $this->claves      = 'IMPLAN, Torreón, Seguridad, Delincuencia';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Delincuencia');
        $this->fuentes     = array('Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública');
        $this->regiones    = array('Torreón');
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
            array('fecha' => '2015-01-31', 'valor' => '120', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-02-28', 'valor' => '111', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-03-31', 'valor' => '115', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-04-30', 'valor' => '167', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-05-31', 'valor' => '134', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '118', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-07-31', 'valor' => '127', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-08-31', 'valor' => '148', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-09-30', 'valor' => '135', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-10-31', 'valor' => '156', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-11-30', 'valor' => '122', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '90', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-01-31', 'valor' => '110', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-02-29', 'valor' => '175', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-03-31', 'valor' => '152', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-04-30', 'valor' => '179', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-05-31', 'valor' => '166', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-06-30', 'valor' => '194', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-07-31', 'valor' => '125', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-08-31', 'valor' => '147', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-09-30', 'valor' => '201', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-10-31', 'valor' => '160', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-11-30', 'valor' => '129', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-12-31', 'valor' => '156', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2017-01-31', 'valor' => '145', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2017-02-28', 'valor' => '167', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2017-03-31', 'valor' => '171', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2017-04-30', 'valor' => '118', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''));
    } // datos

} // Clase SeguridadDelitosPatrimoniales

?>
