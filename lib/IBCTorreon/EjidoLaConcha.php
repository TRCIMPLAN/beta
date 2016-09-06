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
 * Clase EjidoLaConcha
 */
class EjidoLaConcha extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ejido La Concha';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ejido-la-concha';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ejido La Concha de IBC Torreón.';
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
                'Población total' => '3513',
                'Porcentaje de población masculina' => '50.15',
                'Porcentaje de población femenina' => '49.85',
                'Porcentaje de población de 0 a 14 años' => '31.16',
                'Porcentaje de población de 15 a 64 años' => '63.40',
                'Porcentaje de población de 65 y más años' => '5.18',
                'Porcentaje de población no especificada' => '0.26',
                'Fecundidad promedio' => '2.47',
                'Porcentaje de población nacida en otro estado' => '9.83',
                'Porcentaje de población con discapacidad' => '4.96'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.96',
                'Grado Promedio de Escolaridad masculina' => '8.10',
                'Grado Promedio de Escolaridad femenina' => '7.83'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.04',
                'Población Económicamente Activa masculina' => '71.44',
                'Población Económicamente Activa femenina' => '28.56',
                'Población Ocupada' => '91.19',
                'Población Ocupada masculina' => '69.91',
                'Población Ocupada femenina' => '30.09',
                'Población Desocupada' => '8.81',
                'Derechohabiencia' => '65.94'
            ),
            'Viviendas' => array(
                'Hogares' => '844',
                'Hogares Jefatura masculina' => '81.21',
                'Hogares Jefatura femenina' => '18.79',
                'Ocupación por Vivienda' => '4.16',
                'Viviendas con Electricidad' => '99.77',
                'Viviendas con Agua' => '96.63',
                'Viviendas con Drenaje' => '95.55',
                'Viviendas con Televisión' => '98.80',
                'Viviendas con Automóvil' => '48.61',
                'Viviendas con Computadora' => '22.13',
                'Viviendas con Celular' => '64.23',
                'Viviendas con Internet' => '12.51'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '98',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '46.94',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '16.33',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '9.18',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '7.14',
                'Quinta actividad nombre' => 'Inmobiliarios',
                'Quinta actividad porcentaje' => '5.10'
            )
        );
    } // datos

} // Clase EjidoLaConcha

?>
