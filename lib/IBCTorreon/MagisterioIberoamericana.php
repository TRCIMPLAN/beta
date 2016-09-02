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
 * Clase MagisterioIberoamericana
 */
class MagisterioIberoamericana extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Magisterio-Iberoamericana';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'magisterio-iberoamericana';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Magisterio-Iberoamericana de IBC Torreón.';
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
                'Población total' => '33',
                'Porcentaje de población masculina' => '52.63',
                'Porcentaje de población femenina' => '47.37',
                'Porcentaje de población de 0 a 14 años' => '36.63',
                'Porcentaje de población de 15 a 64 años' => '57.32',
                'Porcentaje de población de 65 y más años' => '1.30',
                'Porcentaje de población no especificada' => '4.75',
                'Fecundidad promedio' => '1.56',
                'Porcentaje de población nacida en otro estado' => '23.94',
                'Porcentaje de población con discapacidad' => '1.15'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.24',
                'Grado Promedio de Escolaridad masculina' => '14.33',
                'Grado Promedio de Escolaridad femenina' => '14.16'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '62.02',
                'Población Económicamente Activa masculina' => '63.39',
                'Población Económicamente Activa femenina' => '36.61',
                'Población Ocupada' => '97.11',
                'Población Ocupada masculina' => '62.96',
                'Población Ocupada femenina' => '37.04',
                'Población Desocupada' => '2.89',
                'Derechohabiencia' => '73.18'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '87.87',
                'Hogares Jefatura femenina' => '12.13',
                'Ocupación por Vivienda' => '4.12',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '94.26',
                'Viviendas con Computadora' => '86.83',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '83.12'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '33.33',
                'Segunda actividad nombre' => 'Industria Manufacturera',
                'Segunda actividad porcentaje' => '33.33',
                'Tercera actividad nombre' => 'Comercio Mayoreo',
                'Tercera actividad porcentaje' => '16.67',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '16.67',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase MagisterioIberoamericana

?>
