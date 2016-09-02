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
 * Clase LasJulietas
 */
class LasJulietas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Las Julietas';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'las-julietas';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Las Julietas de IBC Torreón.';
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
                'Población total' => '2816',
                'Porcentaje de población masculina' => '50.49',
                'Porcentaje de población femenina' => '49.51',
                'Porcentaje de población de 0 a 14 años' => '32.81',
                'Porcentaje de población de 15 a 64 años' => '62.17',
                'Porcentaje de población de 65 y más años' => '4.69',
                'Porcentaje de población no especificada' => '0.33',
                'Fecundidad promedio' => '2.60',
                'Porcentaje de población nacida en otro estado' => '21.83',
                'Porcentaje de población con discapacidad' => '2.66'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.68',
                'Grado Promedio de Escolaridad masculina' => '7.74',
                'Grado Promedio de Escolaridad femenina' => '7.61'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.54',
                'Población Económicamente Activa masculina' => '70.30',
                'Población Económicamente Activa femenina' => '29.70',
                'Población Ocupada' => '89.96',
                'Población Ocupada masculina' => '68.63',
                'Población Ocupada femenina' => '31.37',
                'Población Desocupada' => '10.04',
                'Derechohabiencia' => '60.96'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '80.02',
                'Hogares Jefatura femenina' => '19.98',
                'Ocupación por Vivienda' => '4.32',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.51',
                'Viviendas con Drenaje' => '98.58',
                'Viviendas con Televisión' => '97.19',
                'Viviendas con Automóvil' => '41.70',
                'Viviendas con Computadora' => '15.98',
                'Viviendas con Celular' => '66.85',
                'Viviendas con Internet' => '7.69'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '44.34',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '22.64',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '13.21',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '6.60',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '5.66'
            )
        );
    } // datos

} // Clase LasJulietas

?>
