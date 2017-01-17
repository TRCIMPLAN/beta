<?php
/**
 * TrcIMPLAN Índice Básico de Colonias
 *
 * Copyright (C) 2016 Guillermo Valdes Lozano
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
 * @package TrcIMPLAN
 */

namespace IBCTorreon;

/**
 * Clase AeropuertoInternacionalFranciscoSarabiaTinoco
 */
class AeropuertoInternacionalFranciscoSarabiaTinoco extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Aeropuerto Internacional Francisco Sarabia Tinoco';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-17 13:11:23';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'aeropuerto-internacional-francisco-sarabia-tinoco';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Aeropuerto Internacional Francisco Sarabia Tinoco en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación, Colonia';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio  = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu = 'Indicadores Básicos por Colonias > Colonias de Torreón';
        // Para el Organizador
        $this->categorias  = array();
        $this->fuentes     = array();
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 1,
                    'Porcentaje de población masculina' => 47.93,
                    'Porcentaje de población femenina' => 52.07,
                    'Porcentaje de población de 0 a 14 años' => 29.30,
                    'Porcentaje de población de 15 a 64 años' => 67.43,
                    'Porcentaje de población de 65 y más años' => 2.65,
                    'Porcentaje de población no especificada' => 0.62,
                    'Fecundidad promedio' => 1.62,
                    'Porcentaje de población con discapacidad' => 1.54
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.34,
                    'Población Económicamente Activa masculina' => 63.54,
                    'Población Económicamente Activa femenina' => 36.46,
                    'Población Ocupada' => 96.17,
                    'Población Ocupada masculina' => 62.78,
                    'Población Ocupada femenina' => 37.22,
                    'Población Desocupada' => 3.83,
                    'Derechohabiencia' => 73.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 0
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 35,
                    'Primer actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Primer actividad porcentaje' => 28.57,
                    'Segunda actividad nombre' => 'Inmobiliarios',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Comercio Menudeo',
                    'Tercera actividad porcentaje' => 14.29,
                    'Cuarta actividad nombre' => 'Gubernamentales',
                    'Cuarta actividad porcentaje' => 14.29,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 8.57
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.5637970683578,
            'Centro longitud' => -103.405018973435
        );
    } // mapas

} // Clase AeropuertoInternacionalFranciscoSarabiaTinoco

?>
