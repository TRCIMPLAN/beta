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
 * Clase Esparza
 */
class Esparza extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Esparza';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'esparza';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Esparza de IBC Torreón.';
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
                'Población total' => '1150',
                'Porcentaje de población masculina' => '49.13',
                'Porcentaje de población femenina' => '50.87',
                'Porcentaje de población de 0 a 14 años' => '22.65',
                'Porcentaje de población de 15 a 64 años' => '65.59',
                'Porcentaje de población de 65 y más años' => '10.37',
                'Porcentaje de población no especificada' => '1.39',
                'Fecundidad promedio' => '2.36',
                'Porcentaje de población nacida en otro estado' => '17.86',
                'Porcentaje de población con discapacidad' => '6.20'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.47',
                'Grado Promedio de Escolaridad masculina' => '9.55',
                'Grado Promedio de Escolaridad femenina' => '9.40'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '56.53',
                'Población Económicamente Activa masculina' => '62.81',
                'Población Económicamente Activa femenina' => '37.19',
                'Población Ocupada' => '91.26',
                'Población Ocupada masculina' => '61.43',
                'Población Ocupada femenina' => '38.57',
                'Población Desocupada' => '8.74',
                'Derechohabiencia' => '71.68'
            ),
            'Viviendas' => array(
                'Hogares' => '319',
                'Hogares Jefatura masculina' => '67.09',
                'Hogares Jefatura femenina' => '32.91',
                'Ocupación por Vivienda' => '3.61',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.54',
                'Viviendas con Drenaje' => '99.23',
                'Viviendas con Televisión' => '99.23',
                'Viviendas con Automóvil' => '44.60',
                'Viviendas con Computadora' => '34.65',
                'Viviendas con Celular' => '65.32',
                'Viviendas con Internet' => '26.57'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '24',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '41.67',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '29.17',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '20.83',
                'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Cuarta actividad porcentaje' => '4.17',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '4.17'
            )
        );
    } // datos

} // Clase Esparza

?>
