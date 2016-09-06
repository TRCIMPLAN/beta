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
 * Clase VillasCentenario
 */
class VillasCentenario extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas Centenario';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-centenario';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas Centenario de IBC Torreón.';
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
                'Población total' => '279',
                'Porcentaje de población masculina' => '47.82',
                'Porcentaje de población femenina' => '52.18',
                'Porcentaje de población de 0 a 14 años' => '32.20',
                'Porcentaje de población de 15 a 64 años' => '65.25',
                'Porcentaje de población de 65 y más años' => '2.53',
                'Porcentaje de población no especificada' => '0.02',
                'Fecundidad promedio' => '1.66',
                'Porcentaje de población nacida en otro estado' => '19.66',
                'Porcentaje de población con discapacidad' => '1.78'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.62',
                'Grado Promedio de Escolaridad masculina' => '10.66',
                'Grado Promedio de Escolaridad femenina' => '10.59'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '62.92',
                'Población Económicamente Activa masculina' => '66.89',
                'Población Económicamente Activa femenina' => '33.11',
                'Población Ocupada' => '96.56',
                'Población Ocupada masculina' => '66.13',
                'Población Ocupada femenina' => '33.87',
                'Población Desocupada' => '3.44',
                'Derechohabiencia' => '85.05'
            ),
            'Viviendas' => array(
                'Hogares' => '87',
                'Hogares Jefatura masculina' => '85.06',
                'Hogares Jefatura femenina' => '14.94',
                'Ocupación por Vivienda' => '3.21',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.94',
                'Viviendas con Automóvil' => '53.01',
                'Viviendas con Computadora' => '44.32',
                'Viviendas con Celular' => '90.59',
                'Viviendas con Internet' => '10.12'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '10',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '60.00',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Tercera actividad porcentaje' => '10.00',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '10.00',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase VillasCentenario

?>
