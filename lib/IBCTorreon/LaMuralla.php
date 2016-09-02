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
 * Clase LaMuralla
 */
class LaMuralla extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La Muralla';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'la-muralla';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia La Muralla de IBC Torreón.';
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
                'Población total' => '119',
                'Porcentaje de población masculina' => '47.06',
                'Porcentaje de población femenina' => '52.94',
                'Porcentaje de población de 0 a 14 años' => '37.82',
                'Porcentaje de población de 15 a 64 años' => '57.98',
                'Porcentaje de población de 65 y más años' => '4.20',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.79',
                'Porcentaje de población nacida en otro estado' => '28.80',
                'Porcentaje de población con discapacidad' => '1.74'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '15.07',
                'Grado Promedio de Escolaridad masculina' => '15.85',
                'Grado Promedio de Escolaridad femenina' => '14.35'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '61.54',
                'Población Económicamente Activa masculina' => '62.22',
                'Población Económicamente Activa femenina' => '37.78',
                'Población Ocupada' => '100.00',
                'Población Ocupada masculina' => '62.13',
                'Población Ocupada femenina' => '37.87',
                'Población Desocupada' => '0.00',
                'Derechohabiencia' => '84.87'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '93.11',
                'Hogares Jefatura femenina' => '6.89',
                'Ocupación por Vivienda' => '3.61',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '93.31',
                'Viviendas con Computadora' => '86.08',
                'Viviendas con Celular' => '98.68',
                'Viviendas con Internet' => '72.67'
            ),
            'Unidades Económicas' => array(
        );
    } // datos

} // Clase LaMuralla

?>
