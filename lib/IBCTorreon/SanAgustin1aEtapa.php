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
 * Clase SanAgustin1aEtapa
 */
class SanAgustin1aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'San Agustin 1A. Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'san-agustin-1a-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia San Agustin 1A. Etapa de Torreón.';
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
                'Población total' => '228',
                'Porcentaje de población masculina' => '54.54',
                'Porcentaje de población femenina' => '45.46',
                'Porcentaje de población de 0 a 14 años' => '38.55',
                'Porcentaje de población de 15 a 64 años' => '56.56',
                'Porcentaje de población de 65 y más años' => '0.78',
                'Porcentaje de población no especificada' => '4.11',
                'Fecundidad promedio' => '2.43',
                'Porcentaje de población nacida en otro estado' => '21.45',
                'Porcentaje de población con discapacidad' => '8.45'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.20',
                'Grado Promedio de Escolaridad masculina' => '8.19',
                'Grado Promedio de Escolaridad femenina' => '8.21'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.74',
                'Población Económicamente Activa masculina' => '70.23',
                'Población Económicamente Activa femenina' => '29.77',
                'Población Ocupada' => '85.43',
                'Población Ocupada masculina' => '66.94',
                'Población Ocupada femenina' => '33.06',
                'Población Desocupada' => '14.57',
                'Derechohabiencia' => '54.92'
            ),
            'Viviendas' => array(
                'Hogares' => '60',
                'Hogares Jefatura masculina' => '68.58',
                'Hogares Jefatura femenina' => '31.42',
                'Ocupación por Vivienda' => '3.80',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '87.10',
                'Viviendas con Drenaje' => '65.43',
                'Viviendas con Televisión' => '95.44',
                'Viviendas con Automóvil' => '43.55',
                'Viviendas con Computadora' => '25.21',
                'Viviendas con Celular' => '83.00',
                'Viviendas con Internet' => '1.78'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '2',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Salud',
                'Segunda actividad porcentaje' => '50.00'
            )
        );
    } // datos

} // Clase SanAgustin1aEtapa

?>
