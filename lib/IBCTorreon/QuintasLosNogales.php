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
 * Clase QuintasLosNogales
 */
class QuintasLosNogales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Quintas Los Nogales';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'quintas-los-nogales';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Quintas Los Nogales de IBC Torreón.';
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
                'Población total' => '320',
                'Porcentaje de población masculina' => '49.69',
                'Porcentaje de población femenina' => '50.31',
                'Porcentaje de población de 0 a 14 años' => '30.99',
                'Porcentaje de población de 15 a 64 años' => '64.92',
                'Porcentaje de población de 65 y más años' => '4.08',
                'Porcentaje de población no especificada' => '0.01',
                'Fecundidad promedio' => '1.99',
                'Porcentaje de población nacida en otro estado' => '22.05',
                'Porcentaje de población con discapacidad' => '0.60'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.61',
                'Grado Promedio de Escolaridad masculina' => '9.67',
                'Grado Promedio de Escolaridad femenina' => '9.55'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.12',
                'Población Económicamente Activa masculina' => '64.66',
                'Población Económicamente Activa femenina' => '35.34',
                'Población Ocupada' => '91.95',
                'Población Ocupada masculina' => '65.03',
                'Población Ocupada femenina' => '34.97',
                'Población Desocupada' => '8.05',
                'Derechohabiencia' => '71.79'
            ),
            'Viviendas' => array(
                'Hogares' => '99',
                'Hogares Jefatura masculina' => '77.61',
                'Hogares Jefatura femenina' => '22.39',
                'Ocupación por Vivienda' => '3.23',
                'Viviendas con Electricidad' => '99.67',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.65',
                'Viviendas con Automóvil' => '44.95',
                'Viviendas con Computadora' => '29.50',
                'Viviendas con Celular' => '85.81',
                'Viviendas con Internet' => '10.34'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '23',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '47.83',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '17.39',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '13.04',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '8.70',
                'Quinta actividad nombre' => 'Construcción',
                'Quinta actividad porcentaje' => '4.35'
            )
        );
    } // datos

} // Clase QuintasLosNogales

?>
