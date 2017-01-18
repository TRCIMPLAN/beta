<?php
/**
 * TrcIMPLAN Sitio Web - IBC Torreón Antigua Aceitera
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano
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

namespace IBCTorreon;

/**
 * Clase AntiguaAceitera
 */
class AntiguaAceitera extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Antigua Aceitera';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-18 14:53:48';
        // El nombre del archivo a crear
        $this->archivo     = 'antigua-aceitera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Antigua Aceitera en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 2463,
                    'Porcentaje de población masculina' => 49.61,
                    'Porcentaje de población femenina' => 50.39,
                    'Porcentaje de población de 0 a 14 años' => 22.90,
                    'Porcentaje de población de 15 a 64 años' => 63.03,
                    'Porcentaje de población de 65 y más años' => 10.01,
                    'Porcentaje de población no especificada' => 4.06,
                    'Fecundidad promedio' => 2.46,
                    'Porcentaje de población con discapacidad' => 4.11
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.33,
                    'Población Económicamente Activa masculina' => 65.39,
                    'Población Económicamente Activa femenina' => 34.61,
                    'Población Ocupada' => 86.97,
                    'Población Ocupada masculina' => 64.25,
                    'Población Ocupada femenina' => 35.75,
                    'Población Desocupada' => 13.03,
                    'Derechohabiencia' => 59.57
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 570,
                    'Ocupación por Vivienda' => 4.32,
                    'Viviendas con Electricidad' => 99.03,
                    'Viviendas con Agua' => 98.51,
                    'Viviendas con Drenaje' => 98.68,
                    'Viviendas con Televisión' => 97.80,
                    'Viviendas con Automóvil' => 31.32,
                    'Viviendas con Computadora' => 25.15
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 74,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 52.70,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 13.51,
                    'Tercera actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Tercera actividad porcentaje' => 12.16,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 6.76,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.05
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
            'Centro latitud'  => 25.5344778652951,
            'Centro longitud' => -103.4601706237
        );
    } // mapas

} // Clase AntiguaAceitera

?>
