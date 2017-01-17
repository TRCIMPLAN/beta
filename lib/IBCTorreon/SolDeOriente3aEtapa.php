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
 * Clase SolDeOriente3aEtapa
 */
class SolDeOriente3aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Sol de Oriente 3a. Etapa';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-17 13:11:23';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'sol-de-oriente-3a-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Sol de Oriente 3a. Etapa en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 906,
                    'Porcentaje de población masculina' => 49.12,
                    'Porcentaje de población femenina' => 50.88,
                    'Porcentaje de población de 0 a 14 años' => 34.88,
                    'Porcentaje de población de 15 a 64 años' => 63.36,
                    'Porcentaje de población de 65 y más años' => 1.43,
                    'Porcentaje de población no especificada' => 0.33,
                    'Fecundidad promedio' => 1.60,
                    'Porcentaje de población con discapacidad' => 1.80
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.56,
                    'Población Económicamente Activa masculina' => 59.34,
                    'Población Económicamente Activa femenina' => 40.66,
                    'Población Ocupada' => 95.74,
                    'Población Ocupada masculina' => 60.00,
                    'Población Ocupada femenina' => 40.00,
                    'Población Desocupada' => 4.26,
                    'Derechohabiencia' => 83.89
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 258,
                    'Ocupación por Vivienda' => 3.51,
                    'Viviendas con Electricidad' => 98.84,
                    'Viviendas con Agua' => 99.22,
                    'Viviendas con Drenaje' => 99.22,
                    'Viviendas con Televisión' => 98.45,
                    'Viviendas con Automóvil' => 75.97,
                    'Viviendas con Computadora' => 52.33
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 13,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 53.85,
                    'Segunda actividad nombre' => 'Financieros y Seguros',
                    'Segunda actividad porcentaje' => 23.08,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 7.69,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 7.69,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 7.69
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
            'Centro latitud'  => 25.5381718833565,
            'Centro longitud' => -103.327554195822
        );
    } // mapas

} // Clase SolDeOriente3aEtapa

?>
