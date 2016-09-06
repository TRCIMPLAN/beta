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
 * Clase ResidencialLasVillasEtapaX
 */
class ResidencialLasVillasEtapaX extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Las Villas Etapa X';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-las-villas-etapa-x';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Las Villas Etapa X de IBC Torreón.';
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
                'Población total' => '1',
                'Porcentaje de población masculina' => '46.79',
                'Porcentaje de población femenina' => '53.21',
                'Porcentaje de población de 0 a 14 años' => '28.26',
                'Porcentaje de población de 15 a 64 años' => '68.42',
                'Porcentaje de población de 65 y más años' => '2.20',
                'Porcentaje de población no especificada' => '1.12',
                'Fecundidad promedio' => '1.81',
                'Porcentaje de población nacida en otro estado' => '15.91',
                'Porcentaje de población con discapacidad' => '1.86'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.88',
                'Grado Promedio de Escolaridad masculina' => '11.00',
                'Grado Promedio de Escolaridad femenina' => '10.78'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.95',
                'Población Económicamente Activa masculina' => '62.21',
                'Población Económicamente Activa femenina' => '37.79',
                'Población Ocupada' => '94.53',
                'Población Ocupada masculina' => '60.81',
                'Población Ocupada femenina' => '39.19',
                'Población Desocupada' => '5.47',
                'Derechohabiencia' => '76.75'
            ),
            'Viviendas' => array(
                'Hogares' => '0'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '0'
            )
        );
    } // datos

} // Clase ResidencialLasVillasEtapaX

?>
