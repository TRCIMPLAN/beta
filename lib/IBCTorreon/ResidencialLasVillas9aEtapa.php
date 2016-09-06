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
 * Clase ResidencialLasVillas9aEtapa
 */
class ResidencialLasVillas9aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Las Villas 9A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-las-villas-9a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Las Villas 9A. Etapa de IBC Torreón.';
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
                'Población total' => '25',
                'Porcentaje de población masculina' => '52.00',
                'Porcentaje de población femenina' => '48.00',
                'Porcentaje de población de 0 a 14 años' => '48.00',
                'Porcentaje de población de 15 a 64 años' => '52.00',
                'Porcentaje de población de 65 y más años' => '0.00',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.86',
                'Porcentaje de población nacida en otro estado' => '15.91',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '15.15',
                'Grado Promedio de Escolaridad masculina' => '15.33',
                'Grado Promedio de Escolaridad femenina' => '15.00'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.33',
                'Población Económicamente Activa masculina' => '60.83',
                'Población Económicamente Activa femenina' => '39.17',
                'Población Ocupada' => '100.00',
                'Población Ocupada masculina' => '60.31',
                'Población Ocupada femenina' => '39.69',
                'Población Desocupada' => '0.00',
                'Derechohabiencia' => '88.00'
            ),
            'Viviendas' => array(
                'Hogares' => '5',
                'Hogares Jefatura masculina' => '91.94',
                'Hogares Jefatura femenina' => '8.06',
                'Ocupación por Vivienda' => '5.00',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '91.07',
                'Viviendas con Computadora' => '84.36',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '36.58'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '0'
            )
        );
    } // datos

} // Clase ResidencialLasVillas9aEtapa

?>
