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
 * Clase ExHaciendaLaPerla
 */
class ExHaciendaLaPerla extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ex-Hacienda La Perla';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ex-hacienda-la-perla';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ex-Hacienda La Perla de IBC Torreón.';
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
                'Población total' => '1268',
                'Porcentaje de población masculina' => '51.10',
                'Porcentaje de población femenina' => '48.90',
                'Porcentaje de población de 0 a 14 años' => '40.22',
                'Porcentaje de población de 15 a 64 años' => '57.81',
                'Porcentaje de población de 65 y más años' => '0.32',
                'Porcentaje de población no especificada' => '1.65',
                'Fecundidad promedio' => '1.91',
                'Porcentaje de población nacida en otro estado' => '18.30',
                'Porcentaje de población con discapacidad' => '1.07'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.72',
                'Grado Promedio de Escolaridad masculina' => '8.82',
                'Grado Promedio de Escolaridad femenina' => '8.62'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '59.34',
                'Población Económicamente Activa masculina' => '70.39',
                'Población Económicamente Activa femenina' => '29.61',
                'Población Ocupada' => '89.33',
                'Población Ocupada masculina' => '70.87',
                'Población Ocupada femenina' => '29.13',
                'Población Desocupada' => '10.67',
                'Derechohabiencia' => '67.11'
            ),
            'Viviendas' => array(
                'Hogares' => '329',
                'Hogares Jefatura masculina' => '91.49',
                'Hogares Jefatura femenina' => '8.51',
                'Ocupación por Vivienda' => '3.85',
                'Viviendas con Electricidad' => '99.39',
                'Viviendas con Agua' => '99.39',
                'Viviendas con Drenaje' => '99.70',
                'Viviendas con Televisión' => '99.09',
                'Viviendas con Automóvil' => '40.12',
                'Viviendas con Computadora' => '23.09',
                'Viviendas con Celular' => '85.41',
                'Viviendas con Internet' => '16.00'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '20',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '55.00',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '30.00',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '5.00',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '5.00',
                'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Quinta actividad porcentaje' => '5.00'
            )
        );
    } // datos

} // Clase ExHaciendaLaPerla

?>
