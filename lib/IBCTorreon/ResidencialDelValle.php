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
 * Clase ResidencialDelValle
 */
class ResidencialDelValle extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Del Valle';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-del-valle';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Del Valle de IBC Torreón.';
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
                'Población total' => '425',
                'Porcentaje de población masculina' => '46.12',
                'Porcentaje de población femenina' => '53.88',
                'Porcentaje de población de 0 a 14 años' => '22.82',
                'Porcentaje de población de 15 a 64 años' => '72.94',
                'Porcentaje de población de 65 y más años' => '4.24',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.56',
                'Porcentaje de población nacida en otro estado' => '25.18',
                'Porcentaje de población con discapacidad' => '5.28'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.41',
                'Grado Promedio de Escolaridad masculina' => '13.90',
                'Grado Promedio de Escolaridad femenina' => '12.98'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '51.12',
                'Población Económicamente Activa masculina' => '59.02',
                'Población Económicamente Activa femenina' => '40.98',
                'Población Ocupada' => '95.44',
                'Población Ocupada masculina' => '58.29',
                'Población Ocupada femenina' => '41.71',
                'Población Desocupada' => '4.56',
                'Derechohabiencia' => '85.41'
            ),
            'Viviendas' => array(
                'Hogares' => '120',
                'Hogares Jefatura masculina' => '78.33',
                'Hogares Jefatura femenina' => '21.67',
                'Ocupación por Vivienda' => '3.54',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.17',
                'Viviendas con Automóvil' => '88.33',
                'Viviendas con Computadora' => '79.17',
                'Viviendas con Celular' => '92.50',
                'Viviendas con Internet' => '69.17'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '4',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '75.00',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '25.00',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Información Medios Masivos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase ResidencialDelValle

?>
