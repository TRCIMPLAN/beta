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
 * Clase QuintasIsabela
 */
class QuintasIsabela extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Quintas Isabela';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'quintas-isabela';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas Isabela de Torreón.';
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
                    'Población total' => 28,
                    'Porcentaje de población masculina' => 53.57,
                    'Porcentaje de población femenina' => 46.43,
                    'Porcentaje de población de 0 a 14 años' => 21.43,
                    'Porcentaje de población de 15 a 64 años' => 60.71,
                    'Porcentaje de población de 65 y más años' => 17.86,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.09,
                    'Porcentaje de población nacida en otro estado' => 17.86,
                    'Porcentaje de población con discapacidad' => 0.00,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 71.43,
                    'Porcentaje de población de 18 y más postbásicos' => 67.86
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.68,
                    'Grado Promedio de Escolaridad masculina' => 14.91,
                    'Grado Promedio de Escolaridad femenina' => 14.45
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 45.83,
                    'Población Económicamente Activa masculina' => 63.64,
                    'Población Económicamente Activa femenina' => 36.36,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 63.64,
                    'Población Ocupada femenina' => 36.36,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 100.00
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 11,
                    'Hogares Jefatura masculina' => 72.73,
                    'Hogares Jefatura femenina' => 27.27,
                    'Ocupación por Vivienda' => 2.55,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 90.91,
                    'Viviendas con Computadora' => 81.82,
                    'Viviendas con Celular' => 81.82,
                    'Viviendas con Internet' => 81.82
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 0
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

} // Clase QuintasIsabela

?>
