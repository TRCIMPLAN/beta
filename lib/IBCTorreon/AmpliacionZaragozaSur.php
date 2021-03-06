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
 * Clase AmpliacionZaragozaSur
 */
class AmpliacionZaragozaSur extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ampliacion Zaragoza Sur';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ampliacion-zaragoza-sur';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ampliacion Zaragoza Sur de IBC Torreón.';
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
                'Población total' => '7071',
                'Porcentaje de población masculina' => '50.79',
                'Porcentaje de población femenina' => '49.21',
                'Porcentaje de población de 0 a 14 años' => '39.96',
                'Porcentaje de población de 15 a 64 años' => '57.25',
                'Porcentaje de población de 65 y más años' => '2.42',
                'Porcentaje de población no especificada' => '0.37',
                'Fecundidad promedio' => '2.48',
                'Porcentaje de población nacida en otro estado' => '18.95',
                'Porcentaje de población con discapacidad' => '2.90'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '6.97',
                'Grado Promedio de Escolaridad masculina' => '6.88',
                'Grado Promedio de Escolaridad femenina' => '7.06'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.80',
                'Población Económicamente Activa masculina' => '74.55',
                'Población Económicamente Activa femenina' => '25.45',
                'Población Ocupada' => '90.35',
                'Población Ocupada masculina' => '73.76',
                'Población Ocupada femenina' => '26.24',
                'Población Desocupada' => '9.65',
                'Derechohabiencia' => '62.81'
            ),
            'Viviendas' => array(
                'Hogares' => '1859',
                'Hogares Jefatura masculina' => '77.31',
                'Hogares Jefatura femenina' => '22.69',
                'Ocupación por Vivienda' => '3.80',
                'Viviendas con Electricidad' => '99.37',
                'Viviendas con Agua' => '41.97',
                'Viviendas con Drenaje' => '78.39',
                'Viviendas con Televisión' => '92.96',
                'Viviendas con Automóvil' => '34.95',
                'Viviendas con Computadora' => '13.80',
                'Viviendas con Celular' => '58.90',
                'Viviendas con Internet' => '3.85'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '128',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '58.59',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '16.41',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '10.16',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '8.59',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '3.12'
            )
        );
    } // datos

} // Clase AmpliacionZaragozaSur

?>
