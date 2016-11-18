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
 * Clase NarcisoMendoza
 */
class NarcisoMendoza extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Narciso Mendoza';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'narciso-mendoza';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Narciso Mendoza de Torreón.';
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
                    'Población total' => 1795,
                    'Porcentaje de población masculina' => 48.25,
                    'Porcentaje de población femenina' => 51.75,
                    'Porcentaje de población de 0 a 14 años' => 29.03,
                    'Porcentaje de población de 15 a 64 años' => 62.56,
                    'Porcentaje de población de 65 y más años' => 7.08,
                    'Porcentaje de población no especificada' => 1.33,
                    'Fecundidad promedio' => 2.70,
                    'Porcentaje de población nacida en otro estado' => 19.61,
                    'Porcentaje de población con discapacidad' => 1.34,
                    'Porcentaje de población de 15 y más analfabeta' => 2.71,
                    'Porcentaje de población de 18 y más' => 64.07,
                    'Porcentaje de población de 18 y más postbásicos' => 17.21
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.95,
                    'Grado Promedio de Escolaridad masculina' => 8.13,
                    'Grado Promedio de Escolaridad femenina' => 7.79
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.93,
                    'Población Económicamente Activa masculina' => 63.96,
                    'Población Económicamente Activa femenina' => 36.04,
                    'Población Ocupada' => 91.87,
                    'Población Ocupada masculina' => 62.20,
                    'Población Ocupada femenina' => 37.80,
                    'Población Desocupada' => 8.13,
                    'Derechohabiencia' => 62.01
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 424,
                    'Hogares Jefatura masculina' => 60.61,
                    'Hogares Jefatura femenina' => 39.39,
                    'Ocupación por Vivienda' => 4.23,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.76,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 96.46,
                    'Viviendas con Automóvil' => 40.67,
                    'Viviendas con Computadora' => 28.29,
                    'Viviendas con Celular' => 67.45,
                    'Viviendas con Internet' => 21.22
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 33,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 54.55,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 15.15,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 15.15,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 9.09,
                    'Quinta actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Quinta actividad porcentaje' => 3.03
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

} // Clase NarcisoMendoza

?>
