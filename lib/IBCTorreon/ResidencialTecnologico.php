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
 * Clase ResidencialTecnologico
 */
class ResidencialTecnologico extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Tecnologico';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-tecnologico';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Tecnologico de IBC Torreón.';
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
                'Población total' => '92',
                'Porcentaje de población masculina' => '41.30',
                'Porcentaje de población femenina' => '58.70',
                'Porcentaje de población de 0 a 14 años' => '16.30',
                'Porcentaje de población de 15 a 64 años' => '81.52',
                'Porcentaje de población de 65 y más años' => '2.17',
                'Porcentaje de población no especificada' => '0.01',
                'Fecundidad promedio' => '1.38',
                'Porcentaje de población nacida en otro estado' => '16.30',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.14',
                'Grado Promedio de Escolaridad masculina' => '15.27',
                'Grado Promedio de Escolaridad femenina' => '13.22'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.00',
                'Población Económicamente Activa masculina' => '56.10',
                'Población Económicamente Activa femenina' => '43.90',
                'Población Ocupada' => '100.00',
                'Población Ocupada masculina' => '56.10',
                'Población Ocupada femenina' => '43.90',
                'Población Desocupada' => '0.00',
                'Derechohabiencia' => '84.78'
            ),
            'Viviendas' => array(
                'Hogares' => '24',
                'Hogares Jefatura masculina' => '83.33',
                'Hogares Jefatura femenina' => '16.67',
                'Ocupación por Vivienda' => '3.83',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '95.83',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '100.00',
                'Viviendas con Computadora' => '91.67',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '83.33'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '102',
                'Primer actividad nombre' => 'Salud',
                'Primer actividad porcentaje' => '58.82',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '22.55',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '11.76',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '1.96',
                'Quinta actividad nombre' => 'Información Medios Masivos',
                'Quinta actividad porcentaje' => '0.98'
            )
        );
    } // datos

} // Clase ResidencialTecnologico

?>
