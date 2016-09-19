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
 * Clase ExHaciendaLaPerla3raEtapa
 */
class ExHaciendaLaPerla3raEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ex-Hacienda La Perla 3Ra. Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ex-hacienda-la-perla-3ra-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ex-Hacienda La Perla 3Ra. Etapa de Torreón.';
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
                    'Población total' => 838,
                    'Porcentaje de población masculina' => 51.19,
                    'Porcentaje de población femenina' => 48.81,
                    'Porcentaje de población de 0 a 14 años' => 39.74,
                    'Porcentaje de población de 15 a 64 años' => 58.00,
                    'Porcentaje de población de 65 y más años' => 1.91,
                    'Porcentaje de población no especificada' => 0.35,
                    'Fecundidad promedio' => 2.08,
                    'Porcentaje de población nacida en otro estado' => 16.56,
                    'Porcentaje de población con discapacidad' => 2.75
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.12,
                    'Grado Promedio de Escolaridad masculina' => 8.11,
                    'Grado Promedio de Escolaridad femenina' => 8.14
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.89,
                    'Población Económicamente Activa masculina' => 70.91,
                    'Población Económicamente Activa femenina' => 29.09,
                    'Población Ocupada' => 84.54,
                    'Población Ocupada masculina' => 70.18,
                    'Población Ocupada femenina' => 29.82,
                    'Población Desocupada' => 15.46,
                    'Derechohabiencia' => 70.17
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 215,
                    'Hogares Jefatura masculina' => 88.22,
                    'Hogares Jefatura femenina' => 11.78,
                    'Ocupación por Vivienda' => 3.90,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.53,
                    'Viviendas con Televisión' => 98.60,
                    'Viviendas con Automóvil' => 24.83,
                    'Viviendas con Computadora' => 24.98,
                    'Viviendas con Celular' => 85.12,
                    'Viviendas con Internet' => 10.18
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 27,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 29.63,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 25.93,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 18.52,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 7.41,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 7.41
                )
            )
        );
    } // datos

} // Clase ExHaciendaLaPerla3raEtapa

?>
