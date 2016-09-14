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
 * Clase ZaragozaSur
 */
class ZaragozaSur extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Zaragoza Sur';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'zaragoza-sur';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Zaragoza Sur de IBC Torreón.';
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
                'Población total' => '1487',
                'Porcentaje de población masculina' => '51.31',
                'Porcentaje de población femenina' => '48.69',
                'Porcentaje de población de 0 a 14 años' => '38.26',
                'Porcentaje de población de 15 a 64 años' => '58.71',
                'Porcentaje de población de 65 y más años' => '2.96',
                'Porcentaje de población no especificada' => '0.07',
                'Fecundidad promedio' => '2.55',
                'Porcentaje de población nacida en otro estado' => '19.10',
                'Porcentaje de población con discapacidad' => '5.58'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.52',
                'Grado Promedio de Escolaridad masculina' => '7.52',
                'Grado Promedio de Escolaridad femenina' => '7.52'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '55.19',
                'Población Económicamente Activa masculina' => '70.30',
                'Población Económicamente Activa femenina' => '29.70',
                'Población Ocupada' => '89.62',
                'Población Ocupada masculina' => '68.35',
                'Población Ocupada femenina' => '31.65',
                'Población Desocupada' => '10.38',
                'Derechohabiencia' => '69.47'
            ),
            'Viviendas' => array(
                'Hogares' => '348',
                'Hogares Jefatura masculina' => '77.87',
                'Hogares Jefatura femenina' => '22.13',
                'Ocupación por Vivienda' => '4.27',
                'Viviendas con Electricidad' => '99.14',
                'Viviendas con Agua' => '93.97',
                'Viviendas con Drenaje' => '94.83',
                'Viviendas con Televisión' => '95.69',
                'Viviendas con Automóvil' => '34.44',
                'Viviendas con Computadora' => '29.80',
                'Viviendas con Celular' => '62.64',
                'Viviendas con Internet' => '12.97'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '87',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '41.38',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '21.84',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '13.79',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '9.20',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '4.60'
            )
        );
    } // datos

} // Clase ZaragozaSur

?>
