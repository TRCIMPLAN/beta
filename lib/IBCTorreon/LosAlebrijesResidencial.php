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
 * Clase LosAlebrijesResidencial
 */
class LosAlebrijesResidencial extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Los Alebrijes Residencial';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'los-alebrijes-residencial';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Los Alebrijes Residencial de IBC Torreón.';
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
                'Población total' => '221',
                'Porcentaje de población masculina' => '48.42',
                'Porcentaje de población femenina' => '51.58',
                'Porcentaje de población de 0 a 14 años' => '24.43',
                'Porcentaje de población de 15 a 64 años' => '65.61',
                'Porcentaje de población de 65 y más años' => '1.81',
                'Porcentaje de población no especificada' => '8.15',
                'Fecundidad promedio' => '1.47',
                'Porcentaje de población nacida en otro estado' => '33.48',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '15.26',
                'Grado Promedio de Escolaridad masculina' => '15.56',
                'Grado Promedio de Escolaridad femenina' => '15.00'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '64.78',
                'Población Económicamente Activa masculina' => '53.40',
                'Población Económicamente Activa femenina' => '46.60',
                'Población Ocupada' => '94.91',
                'Población Ocupada masculina' => '53.06',
                'Población Ocupada femenina' => '46.94',
                'Población Desocupada' => '5.09',
                'Derechohabiencia' => '83.71'
            ),
            'Viviendas' => array(
                'Hogares' => '66',
                'Hogares Jefatura masculina' => '72.73',
                'Hogares Jefatura femenina' => '27.27',
                'Ocupación por Vivienda' => '3.35',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '96.97',
                'Viviendas con Computadora' => '86.36',
                'Viviendas con Celular' => '96.97',
                'Viviendas con Internet' => '71.21'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '3',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '33.33',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '33.33',
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => '33.33'
            )
        );
    } // datos

} // Clase LosAlebrijesResidencial

?>
