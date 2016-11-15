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
 * Clase JoseDeLasFuentes
 */
class JoseDeLasFuentes extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Jose De Las Fuentes';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'jose-de-las-fuentes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Jose De Las Fuentes de Torreón.';
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
                    'Población total' => 3,
                    'Porcentaje de población masculina' => 45.45,
                    'Porcentaje de población femenina' => 54.55,
                    'Porcentaje de población de 0 a 14 años' => 26.06,
                    'Porcentaje de población de 15 a 64 años' => 70.30,
                    'Porcentaje de población de 65 y más años' => 3.64,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.82,
                    'Porcentaje de población nacida en otro estado' => 19.39,
                    'Porcentaje de población con discapacidad' => 3.64,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 67.88,
                    'Porcentaje de población de 18 y más postbásicos' => 49.70
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.95,
                    'Grado Promedio de Escolaridad masculina' => 12.60,
                    'Grado Promedio de Escolaridad femenina' => 11.49
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.57,
                    'Población Económicamente Activa masculina' => 52.44,
                    'Población Económicamente Activa femenina' => 47.56,
                    'Población Ocupada' => 94.89,
                    'Población Ocupada masculina' => 51.28,
                    'Población Ocupada femenina' => 48.72,
                    'Población Desocupada' => 5.11,
                    'Derechohabiencia' => 88.48
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1,
                    'Hogares Jefatura masculina' => 61.82,
                    'Hogares Jefatura femenina' => 38.18,
                    'Ocupación por Vivienda' => 3.00,
                    'Viviendas con Electricidad' => 98.18,
                    'Viviendas con Agua' => 98.18,
                    'Viviendas con Drenaje' => 98.18,
                    'Viviendas con Televisión' => 98.18,
                    'Viviendas con Automóvil' => 81.82,
                    'Viviendas con Computadora' => 40.00,
                    'Viviendas con Celular' => 94.55,
                    'Viviendas con Internet' => 14.55
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Comercio Menudeo',
                    'Cuarta actividad porcentaje' => 20.00
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

} // Clase JoseDeLasFuentes

?>
