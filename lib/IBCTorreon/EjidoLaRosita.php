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
 * Clase EjidoLaRosita
 */
class EjidoLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ejido La Rosita';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ejido-la-rosita';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ejido La Rosita de IBC Torreón.';
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
                'Población total' => '570',
                'Porcentaje de población masculina' => '49.47',
                'Porcentaje de población femenina' => '50.53',
                'Porcentaje de población de 0 a 14 años' => '32.74',
                'Porcentaje de población de 15 a 64 años' => '61.56',
                'Porcentaje de población de 65 y más años' => '5.68',
                'Porcentaje de población no especificada' => '0.02',
                'Fecundidad promedio' => '2.41',
                'Porcentaje de población nacida en otro estado' => '13.08',
                'Porcentaje de población con discapacidad' => '6.22'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '6.64',
                'Grado Promedio de Escolaridad masculina' => '6.43',
                'Grado Promedio de Escolaridad femenina' => '6.87'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '47.16',
                'Población Económicamente Activa masculina' => '77.85',
                'Población Económicamente Activa femenina' => '22.15',
                'Población Ocupada' => '81.84',
                'Población Ocupada masculina' => '74.85',
                'Población Ocupada femenina' => '25.15',
                'Población Desocupada' => '18.16',
                'Derechohabiencia' => '56.29'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '81.83',
                'Hogares Jefatura femenina' => '18.17',
                'Ocupación por Vivienda' => '4.07',
                'Viviendas con Electricidad' => '99.30',
                'Viviendas con Agua' => '92.85',
                'Viviendas con Drenaje' => '88.53',
                'Viviendas con Televisión' => '94.20',
                'Viviendas con Automóvil' => '33.62',
                'Viviendas con Computadora' => '15.90',
                'Viviendas con Celular' => '58.94',
                'Viviendas con Internet' => '4.65'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '33.33',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => '20.00',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '13.33',
                'Quinta actividad nombre' => 'Gubernamentales',
                'Quinta actividad porcentaje' => '6.67'
            )
        );
    } // datos

} // Clase EjidoLaRosita

?>
