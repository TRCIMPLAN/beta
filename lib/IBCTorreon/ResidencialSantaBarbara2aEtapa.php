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
 * Clase ResidencialSantaBarbara2aEtapa
 */
class ResidencialSantaBarbara2aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Santa Barbara 2A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-santa-barbara-2a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Santa Barbara 2A. Etapa de IBC Torreón.';
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
                'Población total' => '74',
                'Porcentaje de población masculina' => '48.65',
                'Porcentaje de población femenina' => '51.35',
                'Porcentaje de población de 0 a 14 años' => '40.54',
                'Porcentaje de población de 15 a 64 años' => '47.30',
                'Porcentaje de población de 65 y más años' => '4.05',
                'Porcentaje de población no especificada' => '8.11',
                'Fecundidad promedio' => '1.84',
                'Porcentaje de población nacida en otro estado' => '10.81',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '15.29',
                'Grado Promedio de Escolaridad masculina' => '16.75',
                'Grado Promedio de Escolaridad femenina' => '14.23'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '61.36',
                'Población Económicamente Activa masculina' => '59.26',
                'Población Económicamente Activa femenina' => '40.74',
                'Población Ocupada' => '92.05',
                'Población Ocupada masculina' => '56.00',
                'Población Ocupada femenina' => '44.00',
                'Población Desocupada' => '7.95',
                'Derechohabiencia' => '74.32'
            ),
            'Viviendas' => array(
                'Hogares' => '18',
                'Hogares Jefatura masculina' => '83.33',
                'Hogares Jefatura femenina' => '16.67',
                'Ocupación por Vivienda' => '4.11',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '100.00',
                'Viviendas con Computadora' => '88.89',
                'Viviendas con Celular' => '94.44',
                'Viviendas con Internet' => '88.89'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '0'
            )
        );
    } // datos

} // Clase ResidencialSantaBarbara2aEtapa

?>
