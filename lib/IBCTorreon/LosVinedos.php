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
 * Clase LosVinedos
 */
class LosVinedos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Los Viñedos';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'los-vinedos';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Los Viñedos de IBC Torreón.';
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
                'Población total' => '1082',
                'Porcentaje de población masculina' => '49.61',
                'Porcentaje de población femenina' => '50.39',
                'Porcentaje de población de 0 a 14 años' => '26.08',
                'Porcentaje de población de 15 a 64 años' => '55.50',
                'Porcentaje de población de 65 y más años' => '8.34',
                'Porcentaje de población no especificada' => '10.08',
                'Fecundidad promedio' => '1.57',
                'Porcentaje de población nacida en otro estado' => '30.46',
                'Porcentaje de población con discapacidad' => '2.11'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.94',
                'Grado Promedio de Escolaridad masculina' => '15.44',
                'Grado Promedio de Escolaridad femenina' => '14.50'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '55.54',
                'Población Económicamente Activa masculina' => '61.10',
                'Población Económicamente Activa femenina' => '38.90',
                'Población Ocupada' => '98.30',
                'Población Ocupada masculina' => '61.00',
                'Población Ocupada femenina' => '39.00',
                'Población Desocupada' => '1.70',
                'Derechohabiencia' => '73.56'
            ),
            'Viviendas' => array(
                'Hogares' => '237',
                'Hogares Jefatura masculina' => '87.57',
                'Hogares Jefatura femenina' => '12.43',
                'Ocupación por Vivienda' => '4.57',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.84',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.84',
                'Viviendas con Automóvil' => '99.03',
                'Viviendas con Computadora' => '92.12',
                'Viviendas con Celular' => '96.73',
                'Viviendas con Internet' => '91.13'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '52',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '21.15',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '19.23',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '19.23',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '11.54',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '7.69'
            )
        );
    } // datos

} // Clase LosVinedos

?>
