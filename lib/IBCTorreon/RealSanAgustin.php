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
 * Clase RealSanAgustin
 */
class RealSanAgustin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Real San Agustin';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'real-san-agustin';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Real San Agustin de IBC Torreón.';
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
                'Población total' => '617',
                'Porcentaje de población masculina' => '49.76',
                'Porcentaje de población femenina' => '50.24',
                'Porcentaje de población de 0 a 14 años' => '37.93',
                'Porcentaje de población de 15 a 64 años' => '60.29',
                'Porcentaje de población de 65 y más años' => '1.78',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.94',
                'Porcentaje de población nacida en otro estado' => '17.02',
                'Porcentaje de población con discapacidad' => '3.80'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.81',
                'Grado Promedio de Escolaridad masculina' => '8.76',
                'Grado Promedio de Escolaridad femenina' => '8.86'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '55.10',
                'Población Económicamente Activa masculina' => '70.04',
                'Población Económicamente Activa femenina' => '29.96',
                'Población Ocupada' => '89.90',
                'Población Ocupada masculina' => '68.45',
                'Población Ocupada femenina' => '31.55',
                'Población Desocupada' => '10.10',
                'Derechohabiencia' => '76.34'
            ),
            'Viviendas' => array(
                'Hogares' => '166',
                'Hogares Jefatura masculina' => '81.33',
                'Hogares Jefatura femenina' => '18.67',
                'Ocupación por Vivienda' => '3.72',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '98.80',
                'Viviendas con Drenaje' => '98.19',
                'Viviendas con Televisión' => '98.80',
                'Viviendas con Automóvil' => '37.81',
                'Viviendas con Computadora' => '16.77',
                'Viviendas con Celular' => '76.51',
                'Viviendas con Internet' => '4.36'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '6',
                'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Primer actividad porcentaje' => '33.33',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '33.33',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '16.67',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '16.67',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase RealSanAgustin

?>
