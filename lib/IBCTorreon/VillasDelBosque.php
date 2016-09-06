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
 * Clase VillasDelBosque
 */
class VillasDelBosque extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas Del Bosque';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-del-bosque';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas Del Bosque de IBC Torreón.';
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
                'Población total' => '3077',
                'Porcentaje de población masculina' => '48.52',
                'Porcentaje de población femenina' => '51.48',
                'Porcentaje de población de 0 a 14 años' => '36.17',
                'Porcentaje de población de 15 a 64 años' => '62.59',
                'Porcentaje de población de 65 y más años' => '0.91',
                'Porcentaje de población no especificada' => '0.33',
                'Fecundidad promedio' => '1.82',
                'Porcentaje de población nacida en otro estado' => '16.97',
                'Porcentaje de población con discapacidad' => '2.21'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.82',
                'Grado Promedio de Escolaridad masculina' => '9.87',
                'Grado Promedio de Escolaridad femenina' => '9.77'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '59.33',
                'Población Económicamente Activa masculina' => '64.82',
                'Población Económicamente Activa femenina' => '35.18',
                'Población Ocupada' => '93.19',
                'Población Ocupada masculina' => '64.27',
                'Población Ocupada femenina' => '35.73',
                'Población Desocupada' => '6.81',
                'Derechohabiencia' => '74.39'
            ),
            'Viviendas' => array(
                'Hogares' => '840',
                'Hogares Jefatura masculina' => '80.12',
                'Hogares Jefatura femenina' => '19.88',
                'Ocupación por Vivienda' => '3.66',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.64',
                'Viviendas con Drenaje' => '99.88',
                'Viviendas con Televisión' => '97.98',
                'Viviendas con Automóvil' => '41.71',
                'Viviendas con Computadora' => '22.60',
                'Viviendas con Celular' => '88.57',
                'Viviendas con Internet' => '10.37'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '70',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '55.71',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '17.14',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '17.14',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '4.29',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '2.86'
            )
        );
    } // datos

} // Clase VillasDelBosque

?>
