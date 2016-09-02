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
 * Clase CondominioPuntoDiamante
 */
class CondominioPuntoDiamante extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Condominio Punto Diamante';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'condominio-punto-diamante';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Condominio Punto Diamante de IBC Torreón.';
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
                'Población total' => '215',
                'Porcentaje de población masculina' => '48.84',
                'Porcentaje de población femenina' => '51.16',
                'Porcentaje de población de 0 a 14 años' => '32.56',
                'Porcentaje de población de 15 a 64 años' => '65.12',
                'Porcentaje de población de 65 y más años' => '2.33',
                'Porcentaje de población no especificada' => '-0.01',
                'Fecundidad promedio' => '1.58',
                'Porcentaje de población nacida en otro estado' => '33.49',
                'Porcentaje de población con discapacidad' => '3.72'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.44',
                'Grado Promedio de Escolaridad masculina' => '13.09',
                'Grado Promedio de Escolaridad femenina' => '11.83'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '61.44',
                'Población Económicamente Activa masculina' => '65.96',
                'Población Económicamente Activa femenina' => '34.04',
                'Población Ocupada' => '95.56',
                'Población Ocupada masculina' => '65.56',
                'Población Ocupada femenina' => '34.44',
                'Población Desocupada' => '4.44',
                'Derechohabiencia' => '84.19'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '88.14',
                'Hogares Jefatura femenina' => '11.86',
                'Ocupación por Vivienda' => '3.64',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.31',
                'Viviendas con Automóvil' => '79.66',
                'Viviendas con Computadora' => '72.88',
                'Viviendas con Celular' => '89.83',
                'Viviendas con Internet' => '55.93'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '80.00',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Información Medios Masivos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase CondominioPuntoDiamante

?>
