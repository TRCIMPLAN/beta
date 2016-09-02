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
 * Clase QuintasAnna
 */
class QuintasAnna extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Quintas Anna';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'quintas-anna';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Quintas Anna de IBC Torreón.';
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
                'Población total' => '372',
                'Porcentaje de población masculina' => '47.31',
                'Porcentaje de población femenina' => '52.69',
                'Porcentaje de población de 0 a 14 años' => '34.14',
                'Porcentaje de población de 15 a 64 años' => '58.33',
                'Porcentaje de población de 65 y más años' => '1.08',
                'Porcentaje de población no especificada' => '6.45',
                'Fecundidad promedio' => '1.97',
                'Porcentaje de población nacida en otro estado' => '9.68',
                'Porcentaje de población con discapacidad' => '2.10'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.95',
                'Grado Promedio de Escolaridad masculina' => '8.98',
                'Grado Promedio de Escolaridad femenina' => '8.93'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '63.07',
                'Población Económicamente Activa masculina' => '67.11',
                'Población Económicamente Activa femenina' => '32.89',
                'Población Ocupada' => '96.60',
                'Población Ocupada masculina' => '67.35',
                'Población Ocupada femenina' => '32.65',
                'Población Desocupada' => '3.40',
                'Derechohabiencia' => '74.73'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '77.55',
                'Hogares Jefatura femenina' => '22.45',
                'Ocupación por Vivienda' => '3.80',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '97.96',
                'Viviendas con Automóvil' => '42.86',
                'Viviendas con Computadora' => '22.45',
                'Viviendas con Celular' => '85.71',
                'Viviendas con Internet' => '9.18'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '61.54',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '23.08',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '7.69',
                'Cuarta actividad nombre' => 'Agricultura',
                'Cuarta actividad porcentaje' => '7.69',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase QuintasAnna

?>
