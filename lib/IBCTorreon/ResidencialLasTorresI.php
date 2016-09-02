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
 * Clase ResidencialLasTorresI
 */
class ResidencialLasTorresI extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Las Torres I';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-las-torres-i';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Las Torres I de IBC Torreón.';
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
                'Población total' => '1783',
                'Porcentaje de población masculina' => '49.07',
                'Porcentaje de población femenina' => '50.93',
                'Porcentaje de población de 0 a 14 años' => '18.62',
                'Porcentaje de población de 15 a 64 años' => '75.77',
                'Porcentaje de población de 65 y más años' => '5.61',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.98',
                'Porcentaje de población nacida en otro estado' => '15.27',
                'Porcentaje de población con discapacidad' => '3.64'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.35',
                'Grado Promedio de Escolaridad masculina' => '12.78',
                'Grado Promedio de Escolaridad femenina' => '11.94'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.98',
                'Población Económicamente Activa masculina' => '58.95',
                'Población Económicamente Activa femenina' => '41.05',
                'Población Ocupada' => '95.05',
                'Población Ocupada masculina' => '58.66',
                'Población Ocupada femenina' => '41.34',
                'Población Desocupada' => '4.95',
                'Derechohabiencia' => '78.52'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '72.34',
                'Hogares Jefatura femenina' => '27.66',
                'Ocupación por Vivienda' => '3.65',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.18',
                'Viviendas con Automóvil' => '73.77',
                'Viviendas con Computadora' => '64.14',
                'Viviendas con Celular' => '85.04',
                'Viviendas con Internet' => '48.36'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '45.65',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '13.04',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '13.04',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '6.52',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '6.52'
            )
        );
    } // datos

} // Clase ResidencialLasTorresI

?>
