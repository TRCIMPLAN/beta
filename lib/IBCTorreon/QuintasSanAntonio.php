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
 * Clase QuintasSanAntonio
 */
class QuintasSanAntonio extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Quintas San Antonio';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'quintas-san-antonio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas San Antonio de Torreón.';
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
                    'Población total' => 589,
                    'Porcentaje de población masculina' => 47.37,
                    'Porcentaje de población femenina' => 52.63,
                    'Porcentaje de población de 0 a 14 años' => 37.01,
                    'Porcentaje de población de 15 a 64 años' => 60.10,
                    'Porcentaje de población de 65 y más años' => 2.89,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.54,
                    'Porcentaje de población nacida en otro estado' => 24.79,
                    'Porcentaje de población con discapacidad' => 1.63,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 58.91,
                    'Porcentaje de población de 18 y más postbásicos' => 54.33
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.64,
                    'Grado Promedio de Escolaridad masculina' => 14.95,
                    'Grado Promedio de Escolaridad femenina' => 14.37
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.85,
                    'Población Económicamente Activa masculina' => 57.49,
                    'Población Económicamente Activa femenina' => 42.51,
                    'Población Ocupada' => 96.22,
                    'Población Ocupada masculina' => 56.72,
                    'Población Ocupada femenina' => 43.28,
                    'Población Desocupada' => 3.78,
                    'Derechohabiencia' => 84.38
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 163,
                    'Hogares Jefatura masculina' => 44.79,
                    'Hogares Jefatura femenina' => 55.21,
                    'Ocupación por Vivienda' => 3.61,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 95.09,
                    'Viviendas con Computadora' => 85.28,
                    'Viviendas con Celular' => 95.09,
                    'Viviendas con Internet' => 77.30
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Inmobiliarios',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Financieros y Seguros',
                    'Cuarta actividad porcentaje' => 16.67,
                    'Quinta actividad nombre' => 'Comercio Menudeo',
                    'Quinta actividad porcentaje' => 16.67
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

} // Clase QuintasSanAntonio

?>
