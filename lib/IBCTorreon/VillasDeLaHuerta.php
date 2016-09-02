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
 * Clase VillasDeLaHuerta
 */
class VillasDeLaHuerta extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas De La Huerta';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-de-la-huerta';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas De La Huerta de IBC Torreón.';
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
                'Población total' => '972',
                'Porcentaje de población masculina' => '48.46',
                'Porcentaje de población femenina' => '51.54',
                'Porcentaje de población de 0 a 14 años' => '38.79',
                'Porcentaje de población de 15 a 64 años' => '60.19',
                'Porcentaje de población de 65 y más años' => '1.03',
                'Porcentaje de población no especificada' => '-0.01',
                'Fecundidad promedio' => '1.71',
                'Porcentaje de población nacida en otro estado' => '15.14',
                'Porcentaje de población con discapacidad' => '1.30'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.99',
                'Grado Promedio de Escolaridad masculina' => '9.98',
                'Grado Promedio de Escolaridad femenina' => '10.01'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '56.99',
                'Población Económicamente Activa masculina' => '67.65',
                'Población Económicamente Activa femenina' => '32.35',
                'Población Ocupada' => '93.42',
                'Población Ocupada masculina' => '66.95',
                'Población Ocupada femenina' => '33.05',
                'Población Desocupada' => '6.58',
                'Derechohabiencia' => '75.82'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '84.50',
                'Hogares Jefatura femenina' => '15.50',
                'Ocupación por Vivienda' => '3.59',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.63',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.89',
                'Viviendas con Automóvil' => '54.76',
                'Viviendas con Computadora' => '25.64',
                'Viviendas con Celular' => '84.87',
                'Viviendas con Internet' => '17.59'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '44.44',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '33.33',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '16.67',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '5.56',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase VillasDeLaHuerta

?>
