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
 * Clase LasArboledas
 */
class LasArboledas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Las Arboledas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'las-arboledas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Las Arboledas de Torreón.';
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
                'Población total' => '1348',
                'Porcentaje de población masculina' => '48.52',
                'Porcentaje de población femenina' => '51.48',
                'Porcentaje de población de 0 a 14 años' => '27.89',
                'Porcentaje de población de 15 a 64 años' => '68.18',
                'Porcentaje de población de 65 y más años' => '3.04',
                'Porcentaje de población no especificada' => '0.89',
                'Fecundidad promedio' => '1.62',
                'Porcentaje de población nacida en otro estado' => '17.43',
                'Porcentaje de población con discapacidad' => '3.14'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.41',
                'Grado Promedio de Escolaridad masculina' => '12.62',
                'Grado Promedio de Escolaridad femenina' => '12.22'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '55.48',
                'Población Económicamente Activa masculina' => '55.50',
                'Población Económicamente Activa femenina' => '44.50',
                'Población Ocupada' => '96.99',
                'Población Ocupada masculina' => '54.69',
                'Población Ocupada femenina' => '45.31',
                'Población Desocupada' => '3.01',
                'Derechohabiencia' => '80.79'
            ),
            'Viviendas' => array(
                'Hogares' => '379',
                'Hogares Jefatura masculina' => '73.74',
                'Hogares Jefatura femenina' => '26.26',
                'Ocupación por Vivienda' => '3.56',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.74',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.94',
                'Viviendas con Automóvil' => '76.20',
                'Viviendas con Computadora' => '59.63',
                'Viviendas con Celular' => '87.60',
                'Viviendas con Internet' => '44.85'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '21',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '33.33',
                'Segunda actividad nombre' => 'Industria Manufacturera',
                'Segunda actividad porcentaje' => '19.05',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '9.52',
                'Cuarta actividad nombre' => 'Gubernamentales',
                'Cuarta actividad porcentaje' => '9.52',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '9.52'
            )
        );
    } // datos

} // Clase LasArboledas

?>
