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
 * Clase SanEduardo
 */
class SanEduardo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'San Eduardo';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'san-eduardo';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia San Eduardo de IBC Torreón.';
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
                'Población total' => '139',
                'Porcentaje de población masculina' => '49.64',
                'Porcentaje de población femenina' => '50.36',
                'Porcentaje de población de 0 a 14 años' => '39.57',
                'Porcentaje de población de 15 a 64 años' => '58.99',
                'Porcentaje de población de 65 y más años' => '1.44',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.19',
                'Porcentaje de población nacida en otro estado' => '15.11',
                'Porcentaje de población con discapacidad' => '3.07'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.92',
                'Grado Promedio de Escolaridad masculina' => '11.60',
                'Grado Promedio de Escolaridad femenina' => '10.18'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '61.96',
                'Población Económicamente Activa masculina' => '64.91',
                'Población Económicamente Activa femenina' => '35.09',
                'Población Ocupada' => '94.46',
                'Población Ocupada masculina' => '62.96',
                'Población Ocupada femenina' => '37.04',
                'Población Desocupada' => '5.54',
                'Derechohabiencia' => '79.14'
            ),
            'Viviendas' => array(
                'Hogares' => '36',
                'Hogares Jefatura masculina' => '83.33',
                'Hogares Jefatura femenina' => '16.67',
                'Ocupación por Vivienda' => '3.86',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '69.44',
                'Viviendas con Computadora' => '38.89',
                'Viviendas con Celular' => '88.89',
                'Viviendas con Internet' => '13.89'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '14',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '21.43',
                'Segunda actividad nombre' => 'Comercio Mayoreo',
                'Segunda actividad porcentaje' => '14.29',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '14.29',
                'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Cuarta actividad porcentaje' => '7.14',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '7.14'
            )
        );
    } // datos

} // Clase SanEduardo

?>
