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
 * Clase TorreonJardin
 */
class TorreonJardin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Torreon Jardin';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'torreon-jardin';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Torreon Jardin de Torreón.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación';
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
                'Población total' => '6784',
                'Porcentaje de población masculina' => '46.57',
                'Porcentaje de población femenina' => '53.43',
                'Porcentaje de población de 0 a 14 años' => '11.93',
                'Porcentaje de población de 15 a 64 años' => '65.49',
                'Porcentaje de población de 65 y más años' => '15.79',
                'Porcentaje de población no especificada' => '6.79',
                'Fecundidad promedio' => '1.97',
                'Porcentaje de población nacida en otro estado' => '23.50',
                'Porcentaje de población con discapacidad' => '4.91'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.16',
                'Grado Promedio de Escolaridad masculina' => '14.98',
                'Grado Promedio de Escolaridad femenina' => '13.47'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.60',
                'Población Económicamente Activa masculina' => '58.18',
                'Población Económicamente Activa femenina' => '41.82',
                'Población Ocupada' => '95.15',
                'Población Ocupada masculina' => '58.09',
                'Población Ocupada femenina' => '41.91',
                'Población Desocupada' => '4.85',
                'Derechohabiencia' => '76.56'
            ),
            'Viviendas' => array(
                'Hogares' => '1988',
                'Hogares Jefatura masculina' => '70.93',
                'Hogares Jefatura femenina' => '29.07',
                'Ocupación por Vivienda' => '3.41',
                'Viviendas con Electricidad' => '99.58',
                'Viviendas con Agua' => '99.43',
                'Viviendas con Drenaje' => '99.27',
                'Viviendas con Televisión' => '98.81',
                'Viviendas con Automóvil' => '92.54',
                'Viviendas con Computadora' => '82.53',
                'Viviendas con Celular' => '91.24',
                'Viviendas con Internet' => '78.44'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '201',
                'Primer actividad nombre' => 'Salud',
                'Primer actividad porcentaje' => '27.36',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '14.93',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '11.44',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '10.95',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '10.95'
            )
        );
    } // datos

} // Clase TorreonJardin

?>
