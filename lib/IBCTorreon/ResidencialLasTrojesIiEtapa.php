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
 * Clase ResidencialLasTrojesIiEtapa
 */
class ResidencialLasTrojesIiEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Las Trojes Ii Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:02';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-las-trojes-ii-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Las Trojes Ii Etapa de Torreón.';
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
                'Población total' => 57,
                'Porcentaje de población masculina' => 43.47,
                'Porcentaje de población femenina' => 56.53,
                'Porcentaje de población de 0 a 14 años' => 23.22,
                'Porcentaje de población de 15 a 64 años' => 76.06,
                'Porcentaje de población de 65 y más años' => 0.50,
                'Porcentaje de población no especificada' => 0.22,
                'Fecundidad promedio' => 1.33,
                'Porcentaje de población nacida en otro estado' => 30.45,
                'Porcentaje de población con discapacidad' => 0.70
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 14.42,
                'Grado Promedio de Escolaridad masculina' => 15.12,
                'Grado Promedio de Escolaridad femenina' => 13.83
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 66.04,
                'Población Económicamente Activa masculina' => 59.20,
                'Población Económicamente Activa femenina' => 40.80,
                'Población Ocupada' => 99.64,
                'Población Ocupada masculina' => 59.10,
                'Población Ocupada femenina' => 40.90,
                'Población Desocupada' => 0.36,
                'Derechohabiencia' => 97.60
            ),
            'Viviendas' => array(
                'Hogares' => 19,
                'Hogares Jefatura masculina' => 87.60,
                'Hogares Jefatura femenina' => 12.40,
                'Ocupación por Vivienda' => 3.00,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 100.00,
                'Viviendas con Automóvil' => 97.89,
                'Viviendas con Computadora' => 96.47,
                'Viviendas con Celular' => 99.94,
                'Viviendas con Internet' => 88.35
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 1,
                'Primer actividad nombre' => 'Transportes, Correo, Almacenamiento',
                'Primer actividad porcentaje' => 100.00
            )
        );
    } // datos

} // Clase ResidencialLasTrojesIiEtapa

?>
