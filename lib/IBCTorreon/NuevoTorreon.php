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
 * Clase NuevoTorreon
 */
class NuevoTorreon extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Nuevo Torreon';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'nuevo-torreon';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Nuevo Torreon de IBC Torreón.';
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
                'Población total' => '2469',
                'Porcentaje de población masculina' => '47.63',
                'Porcentaje de población femenina' => '52.37',
                'Porcentaje de población de 0 a 14 años' => '19.98',
                'Porcentaje de población de 15 a 64 años' => '64.45',
                'Porcentaje de población de 65 y más años' => '10.99',
                'Porcentaje de población no especificada' => '4.58',
                'Fecundidad promedio' => '2.16',
                'Porcentaje de población nacida en otro estado' => '17.90',
                'Porcentaje de población con discapacidad' => '3.29'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.34',
                'Grado Promedio de Escolaridad masculina' => '11.55',
                'Grado Promedio de Escolaridad femenina' => '11.16'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.77',
                'Población Económicamente Activa masculina' => '60.23',
                'Población Económicamente Activa femenina' => '39.77',
                'Población Ocupada' => '92.72',
                'Población Ocupada masculina' => '60.28',
                'Población Ocupada femenina' => '39.72',
                'Población Desocupada' => '7.28',
                'Derechohabiencia' => '68.49'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '69.40',
                'Hogares Jefatura femenina' => '30.60',
                'Ocupación por Vivienda' => '3.78',
                'Viviendas con Electricidad' => '99.85',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '99.38',
                'Viviendas con Televisión' => '98.77',
                'Viviendas con Automóvil' => '72.15',
                'Viviendas con Computadora' => '54.91',
                'Viviendas con Celular' => '78.07',
                'Viviendas con Internet' => '44.37'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '28.57',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '14.29',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '8.57',
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => '6.43'
            )
        );
    } // datos

} // Clase NuevoTorreon

?>
