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
 * Clase RealDelSolIi
 */
class RealDelSolIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Real Del Sol Ii';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'real-del-sol-ii';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Real Del Sol Ii de IBC Torreón.';
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
                'Población total' => '574',
                'Porcentaje de población masculina' => '46.68',
                'Porcentaje de población femenina' => '53.32',
                'Porcentaje de población de 0 a 14 años' => '38.35',
                'Porcentaje de población de 15 a 64 años' => '60.58',
                'Porcentaje de población de 65 y más años' => '1.06',
                'Porcentaje de población no especificada' => '0.01',
                'Fecundidad promedio' => '1.94',
                'Porcentaje de población nacida en otro estado' => '17.77',
                'Porcentaje de población con discapacidad' => '2.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.91',
                'Grado Promedio de Escolaridad masculina' => '8.93',
                'Grado Promedio de Escolaridad femenina' => '8.89'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.76',
                'Población Económicamente Activa masculina' => '65.60',
                'Población Económicamente Activa femenina' => '34.40',
                'Población Ocupada' => '96.76',
                'Población Ocupada masculina' => '64.49',
                'Población Ocupada femenina' => '35.51',
                'Población Desocupada' => '3.24',
                'Derechohabiencia' => '68.30'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '81.10',
                'Hogares Jefatura femenina' => '18.90',
                'Ocupación por Vivienda' => '3.85',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.05',
                'Viviendas con Automóvil' => '34.64',
                'Viviendas con Computadora' => '14.90',
                'Viviendas con Celular' => '81.17',
                'Viviendas con Internet' => '15.15'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '100.00',
                'Segunda actividad nombre' => 'Salud',
                'Segunda actividad porcentaje' => '0.00',
                'Tercera actividad nombre' => 'Información Medios Masivos',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase RealDelSolIi

?>
