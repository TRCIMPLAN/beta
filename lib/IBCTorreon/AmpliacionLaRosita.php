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
 * Clase AmpliacionLaRosita
 */
class AmpliacionLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ampliacion La Rosita';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ampliacion-la-rosita';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ampliacion La Rosita de IBC Torreón.';
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
                'Población total' => '3429',
                'Porcentaje de población masculina' => '48.22',
                'Porcentaje de población femenina' => '51.78',
                'Porcentaje de población de 0 a 14 años' => '14.53',
                'Porcentaje de población de 15 a 64 años' => '76.93',
                'Porcentaje de población de 65 y más años' => '6.10',
                'Porcentaje de población no especificada' => '2.44',
                'Fecundidad promedio' => '1.67',
                'Porcentaje de población nacida en otro estado' => '27.93',
                'Porcentaje de población con discapacidad' => '2.45'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.37',
                'Grado Promedio de Escolaridad masculina' => '14.96',
                'Grado Promedio de Escolaridad femenina' => '13.83'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '55.96',
                'Población Económicamente Activa masculina' => '59.23',
                'Población Económicamente Activa femenina' => '40.77',
                'Población Ocupada' => '94.68',
                'Población Ocupada masculina' => '58.96',
                'Población Ocupada femenina' => '41.04',
                'Población Desocupada' => '5.32',
                'Derechohabiencia' => '77.89'
            ),
            'Viviendas' => array(
                'Hogares' => '933',
                'Hogares Jefatura masculina' => '78.09',
                'Hogares Jefatura femenina' => '21.91',
                'Ocupación por Vivienda' => '3.68',
                'Viviendas con Electricidad' => '99.92',
                'Viviendas con Agua' => '99.50',
                'Viviendas con Drenaje' => '99.60',
                'Viviendas con Televisión' => '99.60',
                'Viviendas con Automóvil' => '95.38',
                'Viviendas con Computadora' => '86.89',
                'Viviendas con Celular' => '94.46',
                'Viviendas con Internet' => '82.58'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '156',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '32.05',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '14.10',
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => '10.90',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '10.90',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '7.69'
            )
        );
    } // datos

} // Clase AmpliacionLaRosita

?>
