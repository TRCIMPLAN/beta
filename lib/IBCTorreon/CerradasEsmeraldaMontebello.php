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
 * Clase CerradasEsmeraldaMontebello
 */
class CerradasEsmeraldaMontebello extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Cerradas Esmeralda - Montebello';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'cerradas-esmeralda-montebello';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Cerradas Esmeralda - Montebello de IBC Torreón.';
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
                'Población total' => '156',
                'Porcentaje de población masculina' => '48.72',
                'Porcentaje de población femenina' => '51.28',
                'Porcentaje de población de 0 a 14 años' => '30.36',
                'Porcentaje de población de 15 a 64 años' => '67.95',
                'Porcentaje de población de 65 y más años' => '1.55',
                'Porcentaje de población no especificada' => '0.14',
                'Fecundidad promedio' => '1.63',
                'Porcentaje de población nacida en otro estado' => '33.33',
                'Porcentaje de población con discapacidad' => '0.63'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.15',
                'Grado Promedio de Escolaridad masculina' => '14.88',
                'Grado Promedio de Escolaridad femenina' => '13.53'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '64.35',
                'Población Económicamente Activa masculina' => '51.35',
                'Población Económicamente Activa femenina' => '48.65',
                'Población Ocupada' => '100.00',
                'Población Ocupada masculina' => '51.35',
                'Población Ocupada femenina' => '48.65',
                'Población Desocupada' => '0.00',
                'Derechohabiencia' => '82.05'
            ),
            'Viviendas' => array(
                'Hogares' => '42',
                'Hogares Jefatura masculina' => '83.33',
                'Hogares Jefatura femenina' => '16.67',
                'Ocupación por Vivienda' => '3.71',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '100.00',
                'Viviendas con Computadora' => '92.86',
                'Viviendas con Celular' => '97.62',
                'Viviendas con Internet' => '88.10'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '0'
            )
        );
    } // datos

} // Clase CerradasEsmeraldaMontebello

?>
