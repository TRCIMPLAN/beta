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
        $this->fecha       = '2016-09-14 08:25:21';
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
                'Población total' => '3898',
                'Porcentaje de población masculina' => '49.59',
                'Porcentaje de población femenina' => '50.41',
                'Porcentaje de población de 0 a 14 años' => '39.08',
                'Porcentaje de población de 15 a 64 años' => '58.94',
                'Porcentaje de población de 65 y más años' => '1.59',
                'Porcentaje de población no especificada' => '0.39',
                'Fecundidad promedio' => '1.76',
                'Porcentaje de población nacida en otro estado' => '14.87',
                'Porcentaje de población con discapacidad' => '2.50'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.82',
                'Grado Promedio de Escolaridad masculina' => '10.94',
                'Grado Promedio de Escolaridad femenina' => '10.70'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '62.12',
                'Población Económicamente Activa masculina' => '63.98',
                'Población Económicamente Activa femenina' => '36.02',
                'Población Ocupada' => '93.85',
                'Población Ocupada masculina' => '63.45',
                'Población Ocupada femenina' => '36.55',
                'Población Desocupada' => '6.15',
                'Derechohabiencia' => '78.20'
            ),
            'Viviendas' => array(
                'Hogares' => '1060',
                'Hogares Jefatura masculina' => '84.71',
                'Hogares Jefatura femenina' => '15.29',
                'Ocupación por Vivienda' => '3.68',
                'Viviendas con Electricidad' => '99.75',
                'Viviendas con Agua' => '98.62',
                'Viviendas con Drenaje' => '99.75',
                'Viviendas con Televisión' => '98.81',
                'Viviendas con Automóvil' => '61.62',
                'Viviendas con Computadora' => '33.01',
                'Viviendas con Celular' => '87.79',
                'Viviendas con Internet' => '24.67'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '63',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '36.51',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '20.63',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '15.87',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '12.70',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '6.35'
            )
        );
    } // datos

} // Clase CampoNuevoZaragoza2aEtapa

?>
