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
 * Clase VillasUniversidad3aEtapa
 */
class VillasUniversidad3aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas Universidad 3A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-universidad-3a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas Universidad 3A. Etapa de IBC Torreón.';
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
                'Población total' => '994',
                'Porcentaje de población masculina' => '47.79',
                'Porcentaje de población femenina' => '52.21',
                'Porcentaje de población de 0 a 14 años' => '39.74',
                'Porcentaje de población de 15 a 64 años' => '57.75',
                'Porcentaje de población de 65 y más años' => '2.21',
                'Porcentaje de población no especificada' => '0.30',
                'Fecundidad promedio' => '2.02',
                'Porcentaje de población nacida en otro estado' => '12.78',
                'Porcentaje de población con discapacidad' => '1.43'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.69',
                'Grado Promedio de Escolaridad masculina' => '9.72',
                'Grado Promedio de Escolaridad femenina' => '9.66'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '62.88',
                'Población Económicamente Activa masculina' => '66.33',
                'Población Económicamente Activa femenina' => '33.67',
                'Población Ocupada' => '88.35',
                'Población Ocupada masculina' => '66.57',
                'Población Ocupada femenina' => '33.43',
                'Población Desocupada' => '11.65',
                'Derechohabiencia' => '76.26'
            ),
            'Viviendas' => array(
                'Hogares' => '273',
                'Hogares Jefatura masculina' => '85.71',
                'Hogares Jefatura femenina' => '14.29',
                'Ocupación por Vivienda' => '3.64',
                'Viviendas con Electricidad' => '99.63',
                'Viviendas con Agua' => '99.63',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.63',
                'Viviendas con Automóvil' => '41.76',
                'Viviendas con Computadora' => '19.41',
                'Viviendas con Celular' => '81.68',
                'Viviendas con Internet' => '18.83'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '18',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '16.67',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '16.67',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '11.11',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '5.56'
            )
        );
    } // datos

} // Clase VillasUniversidad3aEtapa

?>
