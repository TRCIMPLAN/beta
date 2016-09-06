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
 * Clase ResidencialHaciendaElRosario
 */
class ResidencialHaciendaElRosario extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Hacienda El Rosario';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-hacienda-el-rosario';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Hacienda El Rosario de IBC Torreón.';
        $this->claves          = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'IBC > IBC Torreón';
        // Para el Organizador
        $this->categorias      = array();
        $this->fuentes         = array();
        $this->regiones        = array();
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                'Población total' => '736',
                'Porcentaje de población masculina' => '49.05',
                'Porcentaje de población femenina' => '50.95',
                'Porcentaje de población de 0 a 14 años' => '29.48',
                'Porcentaje de población de 15 a 64 años' => '64.95',
                'Porcentaje de población de 65 y más años' => '2.72',
                'Porcentaje de población no especificada' => '2.85',
                'Fecundidad promedio' => '1.71',
                'Porcentaje de población nacida en otro estado' => '22.55',
                'Porcentaje de población con discapacidad' => '1.17'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.21',
                'Grado Promedio de Escolaridad masculina' => '13.46',
                'Grado Promedio de Escolaridad femenina' => '12.95'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '55.72',
                'Población Económicamente Activa masculina' => '64.17',
                'Población Económicamente Activa femenina' => '35.83',
                'Población Ocupada' => '96.98',
                'Población Ocupada masculina' => '63.76',
                'Población Ocupada femenina' => '36.24',
                'Población Desocupada' => '3.02',
                'Derechohabiencia' => '76.49'
            ),
            'Viviendas' => array(
                'Hogares' => '174',
                'Hogares Jefatura masculina' => '92.53',
                'Hogares Jefatura femenina' => '7.47',
                'Ocupación por Vivienda' => '4.23',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '98.28',
                'Viviendas con Drenaje' => '98.85',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '89.08',
                'Viviendas con Computadora' => '79.89',
                'Viviendas con Celular' => '90.80',
                'Viviendas con Internet' => '71.84'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '12',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '66.67',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '25.00',
                'Tercera actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                'Tercera actividad porcentaje' => '8.33',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Información Medios Masivos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase ResidencialHaciendaElRosario

?>
