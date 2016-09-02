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
 * Clase QuintasSanIsidro
 */
class QuintasSanIsidro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Quintas San Isidro';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'quintas-san-isidro';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Quintas San Isidro de IBC Torreón.';
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
                'Población total' => '887',
                'Porcentaje de población masculina' => '48.25',
                'Porcentaje de población femenina' => '51.75',
                'Porcentaje de población de 0 a 14 años' => '28.48',
                'Porcentaje de población de 15 a 64 años' => '68.25',
                'Porcentaje de población de 65 y más años' => '2.94',
                'Porcentaje de población no especificada' => '0.33',
                'Fecundidad promedio' => '1.51',
                'Porcentaje de población nacida en otro estado' => '23.60',
                'Porcentaje de población con discapacidad' => '1.50'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.43',
                'Grado Promedio de Escolaridad masculina' => '14.91',
                'Grado Promedio de Escolaridad femenina' => '14.00'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.72',
                'Población Económicamente Activa masculina' => '61.42',
                'Población Económicamente Activa femenina' => '38.58',
                'Población Ocupada' => '97.21',
                'Población Ocupada masculina' => '60.62',
                'Población Ocupada femenina' => '39.38',
                'Población Desocupada' => '2.79',
                'Derechohabiencia' => '72.09'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '85.19',
                'Hogares Jefatura femenina' => '14.81',
                'Ocupación por Vivienda' => '3.65',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.39',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.39',
                'Viviendas con Automóvil' => '99.78',
                'Viviendas con Computadora' => '89.46',
                'Viviendas con Celular' => '96.08',
                'Viviendas con Internet' => '85.41'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '25.93',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '18.52',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '11.11',
                'Cuarta actividad nombre' => 'Financieros y Seguros',
                'Cuarta actividad porcentaje' => '11.11',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '7.41'
            )
        );
    } // datos

} // Clase QuintasSanIsidro

?>
