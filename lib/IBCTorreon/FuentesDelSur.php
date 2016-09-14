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
 * Clase FuentesDelSur
 */
class FuentesDelSur extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Fuentes Del Sur';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'fuentes-del-sur';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Fuentes Del Sur de IBC Torreón.';
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
                'Población total' => '4449',
                'Porcentaje de población masculina' => '47.00',
                'Porcentaje de población femenina' => '53.00',
                'Porcentaje de población de 0 a 14 años' => '20.70',
                'Porcentaje de población de 15 a 64 años' => '71.34',
                'Porcentaje de población de 65 y más años' => '6.74',
                'Porcentaje de población no especificada' => '1.22',
                'Fecundidad promedio' => '2.01',
                'Porcentaje de población nacida en otro estado' => '18.32',
                'Porcentaje de población con discapacidad' => '4.50'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.02',
                'Grado Promedio de Escolaridad masculina' => '12.40',
                'Grado Promedio de Escolaridad femenina' => '11.68'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.18',
                'Población Económicamente Activa masculina' => '60.11',
                'Población Económicamente Activa femenina' => '39.89',
                'Población Ocupada' => '88.85',
                'Población Ocupada masculina' => '58.75',
                'Población Ocupada femenina' => '41.25',
                'Población Desocupada' => '11.15',
                'Derechohabiencia' => '76.58'
            ),
            'Viviendas' => array(
                'Hogares' => '1237',
                'Hogares Jefatura masculina' => '69.60',
                'Hogares Jefatura femenina' => '30.40',
                'Ocupación por Vivienda' => '3.60',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.60',
                'Viviendas con Drenaje' => '99.76',
                'Viviendas con Televisión' => '99.60',
                'Viviendas con Automóvil' => '73.57',
                'Viviendas con Computadora' => '57.33',
                'Viviendas con Celular' => '83.19',
                'Viviendas con Internet' => '43.08'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '67',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '31.34',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '19.40',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '13.43',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '10.45',
                'Quinta actividad nombre' => 'Gubernamentales',
                'Quinta actividad porcentaje' => '8.96'
            )
        );
    } // datos

} // Clase FuentesDelSur

?>
