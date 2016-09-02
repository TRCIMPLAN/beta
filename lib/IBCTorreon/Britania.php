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
 * Clase Britania
 */
class Britania extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Britania';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'britania';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Britania de IBC Torreón.';
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
                'Población total' => '392',
                'Porcentaje de población masculina' => '49.49',
                'Porcentaje de población femenina' => '50.51',
                'Porcentaje de población de 0 a 14 años' => '25.51',
                'Porcentaje de población de 15 a 64 años' => '70.15',
                'Porcentaje de población de 65 y más años' => '4.34',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.86',
                'Porcentaje de población nacida en otro estado' => '20.15',
                'Porcentaje de población con discapacidad' => '5.40'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.60',
                'Grado Promedio de Escolaridad masculina' => '12.73',
                'Grado Promedio de Escolaridad femenina' => '12.48'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.18',
                'Población Económicamente Activa masculina' => '58.92',
                'Población Económicamente Activa femenina' => '41.08',
                'Población Ocupada' => '95.49',
                'Población Ocupada masculina' => '58.19',
                'Población Ocupada femenina' => '41.81',
                'Población Desocupada' => '4.51',
                'Derechohabiencia' => '81.38'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '76.07',
                'Hogares Jefatura femenina' => '23.93',
                'Ocupación por Vivienda' => '3.35',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.29',
                'Viviendas con Automóvil' => '71.79',
                'Viviendas con Computadora' => '52.99',
                'Viviendas con Celular' => '88.03',
                'Viviendas con Internet' => '40.17'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '66.67',
                'Segunda actividad nombre' => 'Salud',
                'Segunda actividad porcentaje' => '33.33',
                'Tercera actividad nombre' => 'Información Medios Masivos',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase Britania

?>
