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
 * Clase CiudadNazasPoligono24a
 */
class CiudadNazasPoligono24a extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ciudad Nazas Poligono 24A';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ciudad-nazas-poligono-24a';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ciudad Nazas Poligono 24A de IBC Torreón.';
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
                'Población total' => '655',
                'Porcentaje de población masculina' => '50.84',
                'Porcentaje de población femenina' => '49.16',
                'Porcentaje de población de 0 a 14 años' => '38.78',
                'Porcentaje de población de 15 a 64 años' => '59.69',
                'Porcentaje de población de 65 y más años' => '1.53',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.05',
                'Porcentaje de población nacida en otro estado' => '16.30',
                'Porcentaje de población con discapacidad' => '3.75'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.87',
                'Grado Promedio de Escolaridad masculina' => '10.06',
                'Grado Promedio de Escolaridad femenina' => '9.71'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.93',
                'Población Económicamente Activa masculina' => '70.00',
                'Población Económicamente Activa femenina' => '30.00',
                'Población Ocupada' => '93.36',
                'Población Ocupada masculina' => '68.89',
                'Población Ocupada femenina' => '31.11',
                'Población Desocupada' => '6.64',
                'Derechohabiencia' => '71.45'
            ),
            'Viviendas' => array(
                'Hogares' => '162',
                'Hogares Jefatura masculina' => '83.33',
                'Hogares Jefatura femenina' => '16.67',
                'Ocupación por Vivienda' => '4.04',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.38',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.38',
                'Viviendas con Automóvil' => '50.62',
                'Viviendas con Computadora' => '27.64',
                'Viviendas con Celular' => '85.19',
                'Viviendas con Internet' => '13.16'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '8',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Manejo de Residuos',
                'Segunda actividad porcentaje' => '12.50',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '12.50',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '12.50',
                'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Quinta actividad porcentaje' => '12.50'
            )
        );
    } // datos

} // Clase CiudadNazasPoligono24a

?>
