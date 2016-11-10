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
 * Clase CampoNuevoZaragoza2aEtapa
 */
class CampoNuevoZaragoza2aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Campo Nuevo Zaragoza 2A. Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:28';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'campo-nuevo-zaragoza-2a-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Campo Nuevo Zaragoza 2A. Etapa de Torreón.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio  = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu = 'Indicadores Básicos por Colonias > Colonias de Torreón';
        // Para el Organizador
        $this->categorias  = array();
        $this->fuentes     = array();
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 2695,
                    'Porcentaje de población masculina' => 49.53,
                    'Porcentaje de población femenina' => 50.47,
                    'Porcentaje de población de 0 a 14 años' => 39.20,
                    'Porcentaje de población de 15 a 64 años' => 59.38,
                    'Porcentaje de población de 65 y más años' => 1.18,
                    'Porcentaje de población no especificada' => 0.24,
                    'Fecundidad promedio' => 1.72,
                    'Porcentaje de población nacida en otro estado' => 15.72,
                    'Porcentaje de población con discapacidad' => 2.56,
                    'Porcentaje de población de 15 y más analfabeta' => 0.06,
                    'Porcentaje de población de 18 y más' => 56.00,
                    'Porcentaje de población de 18 y más postbásicos' => 32.27
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.08,
                    'Grado Promedio de Escolaridad masculina' => 11.21,
                    'Grado Promedio de Escolaridad femenina' => 10.96
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 63.81,
                    'Población Económicamente Activa masculina' => 63.43,
                    'Población Económicamente Activa femenina' => 36.57,
                    'Población Ocupada' => 94.01,
                    'Población Ocupada masculina' => 62.75,
                    'Población Ocupada femenina' => 37.25,
                    'Población Desocupada' => 5.99,
                    'Derechohabiencia' => 79.38
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 744,
                    'Hogares Jefatura masculina' => 86.28,
                    'Hogares Jefatura femenina' => 13.72,
                    'Ocupación por Vivienda' => 3.62,
                    'Viviendas con Electricidad' => 99.78,
                    'Viviendas con Agua' => 98.17,
                    'Viviendas con Drenaje' => 99.78,
                    'Viviendas con Televisión' => 98.84,
                    'Viviendas con Automóvil' => 64.01,
                    'Viviendas con Computadora' => 35.09,
                    'Viviendas con Celular' => 87.98,
                    'Viviendas con Internet' => 25.33
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 36,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.89,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 8.33,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 5.56
                )
            )
        );
    } // datos

} // Clase CampoNuevoZaragoza2aEtapa

?>
