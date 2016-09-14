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
 * Clase ResidencialElFresno
 */
class ResidencialElFresno extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial El Fresno';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-el-fresno';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial El Fresno de IBC Torreón.';
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
                'Población total' => '995',
                'Porcentaje de población masculina' => '46.95',
                'Porcentaje de población femenina' => '53.05',
                'Porcentaje de población de 0 a 14 años' => '24.63',
                'Porcentaje de población de 15 a 64 años' => '69.34',
                'Porcentaje de población de 65 y más años' => '5.33',
                'Porcentaje de población no especificada' => '0.70',
                'Fecundidad promedio' => '1.61',
                'Porcentaje de población nacida en otro estado' => '20.00',
                'Porcentaje de población con discapacidad' => '2.85'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.22',
                'Grado Promedio de Escolaridad masculina' => '14.97',
                'Grado Promedio de Escolaridad femenina' => '13.61'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.61',
                'Población Económicamente Activa masculina' => '58.43',
                'Población Económicamente Activa femenina' => '41.57',
                'Población Ocupada' => '99.36',
                'Población Ocupada masculina' => '58.47',
                'Población Ocupada femenina' => '41.53',
                'Población Desocupada' => '0.64',
                'Derechohabiencia' => '86.56'
            ),
            'Viviendas' => array(
                'Hogares' => '259',
                'Hogares Jefatura masculina' => '88.10',
                'Hogares Jefatura femenina' => '11.90',
                'Ocupación por Vivienda' => '3.84',
                'Viviendas con Electricidad' => '99.66',
                'Viviendas con Agua' => '99.65',
                'Viviendas con Drenaje' => '99.66',
                'Viviendas con Televisión' => '99.23',
                'Viviendas con Automóvil' => '97.76',
                'Viviendas con Computadora' => '93.30',
                'Viviendas con Celular' => '95.86',
                'Viviendas con Internet' => '88.12'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '127',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '31.50',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '18.11',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '10.24',
                'Cuarta actividad nombre' => 'Financieros y Seguros',
                'Cuarta actividad porcentaje' => '8.66',
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => '5.51'
            )
        );
    } // datos

} // Clase ResidencialElFresno

?>
