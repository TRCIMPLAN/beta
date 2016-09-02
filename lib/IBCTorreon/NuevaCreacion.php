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
 * Clase NuevaCreacion
 */
class NuevaCreacion extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Nueva Creacion';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'nueva-creacion';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Nueva Creacion de IBC Torreón.';
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
                'Población total' => '366',
                'Porcentaje de población masculina' => '50.15',
                'Porcentaje de población femenina' => '49.85',
                'Porcentaje de población de 0 a 14 años' => '35.43',
                'Porcentaje de población de 15 a 64 años' => '59.47',
                'Porcentaje de población de 65 y más años' => '3.37',
                'Porcentaje de población no especificada' => '1.73',
                'Fecundidad promedio' => '2.54',
                'Porcentaje de población nacida en otro estado' => '20.36',
                'Porcentaje de población con discapacidad' => '1.79'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '6.88',
                'Grado Promedio de Escolaridad masculina' => '6.85',
                'Grado Promedio de Escolaridad femenina' => '6.92'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.52',
                'Población Económicamente Activa masculina' => '71.54',
                'Población Económicamente Activa femenina' => '28.46',
                'Población Ocupada' => '92.58',
                'Población Ocupada masculina' => '71.66',
                'Población Ocupada femenina' => '28.34',
                'Población Desocupada' => '7.42',
                'Derechohabiencia' => '60.11'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '84.81',
                'Hogares Jefatura femenina' => '15.19',
                'Ocupación por Vivienda' => '4.63',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.80',
                'Viviendas con Drenaje' => '95.95',
                'Viviendas con Televisión' => '98.49',
                'Viviendas con Automóvil' => '17.41',
                'Viviendas con Computadora' => '2.49',
                'Viviendas con Celular' => '55.90',
                'Viviendas con Internet' => '0.00'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '100.00',
                'Segunda actividad nombre' => 'Salud',
                'Segunda actividad porcentaje' => '0.00',
                'Tercera actividad nombre' => 'Información Medios Masivos',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase NuevaCreacion

?>
