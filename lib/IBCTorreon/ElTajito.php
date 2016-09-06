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
 * Clase ElTajito
 */
class ElTajito extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'El Tajito';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'el-tajito';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia El Tajito de IBC Torreón.';
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
                'Población total' => '2643',
                'Porcentaje de población masculina' => '47.67',
                'Porcentaje de población femenina' => '52.33',
                'Porcentaje de población de 0 a 14 años' => '19.69',
                'Porcentaje de población de 15 a 64 años' => '73.03',
                'Porcentaje de población de 65 y más años' => '6.12',
                'Porcentaje de población no especificada' => '1.16',
                'Fecundidad promedio' => '1.89',
                'Porcentaje de población nacida en otro estado' => '21.64',
                'Porcentaje de población con discapacidad' => '3.99'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.71',
                'Grado Promedio de Escolaridad masculina' => '13.36',
                'Grado Promedio de Escolaridad femenina' => '12.13'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '57.73',
                'Población Económicamente Activa masculina' => '57.92',
                'Población Económicamente Activa femenina' => '42.08',
                'Población Ocupada' => '95.13',
                'Población Ocupada masculina' => '57.69',
                'Población Ocupada femenina' => '42.31',
                'Población Desocupada' => '4.87',
                'Derechohabiencia' => '77.94'
            ),
            'Viviendas' => array(
                'Hogares' => '748',
                'Hogares Jefatura masculina' => '72.19',
                'Hogares Jefatura femenina' => '27.81',
                'Ocupación por Vivienda' => '3.53',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.87',
                'Viviendas con Drenaje' => '99.87',
                'Viviendas con Televisión' => '99.60',
                'Viviendas con Automóvil' => '79.28',
                'Viviendas con Computadora' => '65.78',
                'Viviendas con Celular' => '84.76',
                'Viviendas con Internet' => '55.35'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '85',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '35.29',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '22.35',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '9.41',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '8.24',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '5.88'
            )
        );
    } // datos

} // Clase ElTajito

?>
