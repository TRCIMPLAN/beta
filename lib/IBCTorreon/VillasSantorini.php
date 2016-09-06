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
 * Clase VillasSantorini
 */
class VillasSantorini extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas Santorini';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-santorini';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas Santorini de IBC Torreón.';
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
                'Población total' => '880',
                'Porcentaje de población masculina' => '50.68',
                'Porcentaje de población femenina' => '49.32',
                'Porcentaje de población de 0 a 14 años' => '34.09',
                'Porcentaje de población de 15 a 64 años' => '58.30',
                'Porcentaje de población de 65 y más años' => '3.18',
                'Porcentaje de población no especificada' => '4.43',
                'Fecundidad promedio' => '1.49',
                'Porcentaje de población nacida en otro estado' => '26.59',
                'Porcentaje de población con discapacidad' => '1.26'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '15.29',
                'Grado Promedio de Escolaridad masculina' => '15.50',
                'Grado Promedio de Escolaridad femenina' => '15.08'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '69.49',
                'Población Económicamente Activa masculina' => '57.11',
                'Población Económicamente Activa femenina' => '42.89',
                'Población Ocupada' => '98.97',
                'Población Ocupada masculina' => '56.67',
                'Población Ocupada femenina' => '43.33',
                'Población Desocupada' => '1.03',
                'Derechohabiencia' => '81.48'
            ),
            'Viviendas' => array(
                'Hogares' => '245',
                'Hogares Jefatura masculina' => '76.33',
                'Hogares Jefatura femenina' => '23.67',
                'Ocupación por Vivienda' => '3.59',
                'Viviendas con Electricidad' => '99.59',
                'Viviendas con Agua' => '98.37',
                'Viviendas con Drenaje' => '98.78',
                'Viviendas con Televisión' => '99.59',
                'Viviendas con Automóvil' => '98.37',
                'Viviendas con Computadora' => '90.61',
                'Viviendas con Celular' => '97.55',
                'Viviendas con Internet' => '82.86'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '19',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '47.37',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '10.53',
                'Tercera actividad nombre' => 'Comercio Mayoreo',
                'Tercera actividad porcentaje' => '10.53',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '10.53',
                'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Quinta actividad porcentaje' => '10.53'
            )
        );
    } // datos

} // Clase VillasSantorini

?>