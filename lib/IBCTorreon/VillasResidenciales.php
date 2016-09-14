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
 * Clase VillasResidenciales
 */
class VillasResidenciales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas Residenciales';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-residenciales';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas Residenciales de IBC Torreón.';
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
                'Población total' => '322',
                'Porcentaje de población masculina' => '47.52',
                'Porcentaje de población femenina' => '52.48',
                'Porcentaje de población de 0 a 14 años' => '18.63',
                'Porcentaje de población de 15 a 64 años' => '76.09',
                'Porcentaje de población de 65 y más años' => '4.35',
                'Porcentaje de población no especificada' => '0.93',
                'Fecundidad promedio' => '1.53',
                'Porcentaje de población nacida en otro estado' => '26.09',
                'Porcentaje de población con discapacidad' => '0.93'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.84',
                'Grado Promedio de Escolaridad masculina' => '15.36',
                'Grado Promedio de Escolaridad femenina' => '14.39'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.71',
                'Población Económicamente Activa masculina' => '56.64',
                'Población Económicamente Activa femenina' => '43.36',
                'Población Ocupada' => '92.52',
                'Población Ocupada masculina' => '54.89',
                'Población Ocupada femenina' => '45.11',
                'Población Desocupada' => '7.48',
                'Derechohabiencia' => '79.81'
            ),
            'Viviendas' => array(
                'Hogares' => '92',
                'Hogares Jefatura masculina' => '71.74',
                'Hogares Jefatura femenina' => '28.26',
                'Ocupación por Vivienda' => '3.50',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.91',
                'Viviendas con Automóvil' => '90.22',
                'Viviendas con Computadora' => '88.04',
                'Viviendas con Celular' => '95.65',
                'Viviendas con Internet' => '81.52'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '12',
                'Primer actividad nombre' => 'Manejo de Residuos',
                'Primer actividad porcentaje' => '25.00',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '16.67',
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => '16.67',
                'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Cuarta actividad porcentaje' => '8.33',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '8.33'
            )
        );
    } // datos

} // Clase VillasResidenciales

?>
