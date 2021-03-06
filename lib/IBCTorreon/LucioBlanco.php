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
 * Clase LucioBlanco
 */
class LucioBlanco extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Lucio Blanco';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'lucio-blanco';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Lucio Blanco de IBC Torreón.';
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
                'Población total' => '1727',
                'Porcentaje de población masculina' => '46.38',
                'Porcentaje de población femenina' => '53.62',
                'Porcentaje de población de 0 a 14 años' => '19.69',
                'Porcentaje de población de 15 a 64 años' => '65.49',
                'Porcentaje de población de 65 y más años' => '14.82',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.70',
                'Porcentaje de población nacida en otro estado' => '16.16',
                'Porcentaje de población con discapacidad' => '8.52'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.27',
                'Grado Promedio de Escolaridad masculina' => '9.63',
                'Grado Promedio de Escolaridad femenina' => '8.97'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '47.15',
                'Población Económicamente Activa masculina' => '56.61',
                'Población Económicamente Activa femenina' => '43.39',
                'Población Ocupada' => '95.97',
                'Población Ocupada masculina' => '56.20',
                'Población Ocupada femenina' => '43.80',
                'Población Desocupada' => '4.03',
                'Derechohabiencia' => '70.41'
            ),
            'Viviendas' => array(
                'Hogares' => '489',
                'Hogares Jefatura masculina' => '60.53',
                'Hogares Jefatura femenina' => '39.47',
                'Ocupación por Vivienda' => '3.53',
                'Viviendas con Electricidad' => '99.80',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '99.80',
                'Viviendas con Televisión' => '98.16',
                'Viviendas con Automóvil' => '44.83',
                'Viviendas con Computadora' => '36.27',
                'Viviendas con Celular' => '65.44',
                'Viviendas con Internet' => '29.24'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '77',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '24.68',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '23.38',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '18.18',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '16.88',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '5.19'
            )
        );
    } // datos

} // Clase LucioBlanco

?>
