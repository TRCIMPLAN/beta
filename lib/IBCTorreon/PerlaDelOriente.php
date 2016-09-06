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
 * Clase PerlaDelOriente
 */
class PerlaDelOriente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Perla Del Oriente';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'perla-del-oriente';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Perla Del Oriente de IBC Torreón.';
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
                'Población total' => '559',
                'Porcentaje de población masculina' => '49.19',
                'Porcentaje de población femenina' => '50.81',
                'Porcentaje de población de 0 a 14 años' => '35.96',
                'Porcentaje de población de 15 a 64 años' => '62.61',
                'Porcentaje de población de 65 y más años' => '0.89',
                'Porcentaje de población no especificada' => '0.54',
                'Fecundidad promedio' => '1.71',
                'Porcentaje de población nacida en otro estado' => '16.93',
                'Porcentaje de población con discapacidad' => '1.82'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.95',
                'Grado Promedio de Escolaridad masculina' => '10.09',
                'Grado Promedio de Escolaridad femenina' => '9.81'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '63.82',
                'Población Económicamente Activa masculina' => '63.97',
                'Población Económicamente Activa femenina' => '36.03',
                'Población Ocupada' => '92.65',
                'Población Ocupada masculina' => '62.17',
                'Población Ocupada femenina' => '37.83',
                'Población Desocupada' => '7.35',
                'Derechohabiencia' => '72.81'
            ),
            'Viviendas' => array(
                'Hogares' => '158',
                'Hogares Jefatura masculina' => '77.22',
                'Hogares Jefatura femenina' => '22.78',
                'Ocupación por Vivienda' => '3.54',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.37',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '96.84',
                'Viviendas con Automóvil' => '48.21',
                'Viviendas con Computadora' => '29.78',
                'Viviendas con Celular' => '91.14',
                'Viviendas con Internet' => '1.90'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '26',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '42.31',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '23.08',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '19.23',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '7.69',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '7.69'
            )
        );
    } // datos

} // Clase PerlaDelOriente

?>
