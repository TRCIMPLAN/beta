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
 * Clase FovisssteLaRosita
 */
class FovisssteLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Fovissste La Rosita';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'fovissste-la-rosita';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Fovissste La Rosita de IBC Torreón.';
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
                'Población total' => '1983',
                'Porcentaje de población masculina' => '47.27',
                'Porcentaje de población femenina' => '52.73',
                'Porcentaje de población de 0 a 14 años' => '19.97',
                'Porcentaje de población de 15 a 64 años' => '71.51',
                'Porcentaje de población de 65 y más años' => '8.26',
                'Porcentaje de población no especificada' => '0.26',
                'Fecundidad promedio' => '2.13',
                'Porcentaje de población nacida en otro estado' => '21.73',
                'Porcentaje de población con discapacidad' => '4.61'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.49',
                'Grado Promedio de Escolaridad masculina' => '13.10',
                'Grado Promedio de Escolaridad femenina' => '11.97'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.20',
                'Población Económicamente Activa masculina' => '55.05',
                'Población Económicamente Activa femenina' => '44.95',
                'Población Ocupada' => '88.41',
                'Población Ocupada masculina' => '54.50',
                'Población Ocupada femenina' => '45.50',
                'Población Desocupada' => '11.59',
                'Derechohabiencia' => '83.88'
            ),
            'Viviendas' => array(
                'Hogares' => '572',
                'Hogares Jefatura masculina' => '68.06',
                'Hogares Jefatura femenina' => '31.94',
                'Ocupación por Vivienda' => '3.47',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '99.93',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '67.70',
                'Viviendas con Computadora' => '65.26',
                'Viviendas con Celular' => '83.43',
                'Viviendas con Internet' => '56.34'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '51',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '27.45',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '23.53',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '13.73',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '7.84',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '7.84'
            )
        );
    } // datos

} // Clase FovisssteLaRosita

?>
