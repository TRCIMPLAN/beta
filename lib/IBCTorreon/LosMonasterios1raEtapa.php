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
 * Clase LosMonasterios1raEtapa
 */
class LosMonasterios1raEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Los Monasterios 1Ra. Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'los-monasterios-1ra-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Los Monasterios 1Ra. Etapa de Torreón.';
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
                    'Población total' => 389,
                    'Porcentaje de población masculina' => 46.91,
                    'Porcentaje de población femenina' => 53.09,
                    'Porcentaje de población de 0 a 14 años' => 38.70,
                    'Porcentaje de población de 15 a 64 años' => 60.19,
                    'Porcentaje de población de 65 y más años' => 1.08,
                    'Porcentaje de población no especificada' => 0.03,
                    'Fecundidad promedio' => 2.11,
                    'Porcentaje de población nacida en otro estado' => 12.96,
                    'Porcentaje de población con discapacidad' => 1.59,
                    'Porcentaje de población de 15 y más analfabeta' => 1.05,
                    'Porcentaje de población de 18 y más' => 56.29,
                    'Porcentaje de población de 18 y más postbásicos' => 15.81
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.59,
                    'Grado Promedio de Escolaridad masculina' => 8.51,
                    'Grado Promedio de Escolaridad femenina' => 8.65
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.41,
                    'Población Económicamente Activa masculina' => 65.70,
                    'Población Económicamente Activa femenina' => 34.30,
                    'Población Ocupada' => 97.23,
                    'Población Ocupada masculina' => 64.77,
                    'Población Ocupada femenina' => 35.23,
                    'Población Desocupada' => 2.77,
                    'Derechohabiencia' => 74.78
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 104,
                    'Hogares Jefatura masculina' => 80.44,
                    'Hogares Jefatura femenina' => 19.56,
                    'Ocupación por Vivienda' => 3.74,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.40,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.40,
                    'Viviendas con Automóvil' => 40.79,
                    'Viviendas con Computadora' => 20.99,
                    'Viviendas con Celular' => 78.89,
                    'Viviendas con Internet' => 4.60
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 18,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.89,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 22.22,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 5.56
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array('Límites' => \Configuracion\IBCTorreonConfig::LIMITES);
    } // mapas

} // Clase LosMonasterios1raEtapa

?>
