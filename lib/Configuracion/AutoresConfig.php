<?php
/**
 * TrcIMPLAN Sitio Web - Autores Config
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package TrcIMPLANSitioWeb
 */

namespace Configuracion;

/**
 * Clase AutoresConfig
 */
class AutoresConfig {

    public $autores              = array();            // Arreglo asociativo con instancias de \Base\Autor
    public $vinculos_indice      = 'VinculosTarjetas'; // Nombre de la clase para el índice de autores, en autores/index.html
    public $vinculos_individual  = 'VinculosListado';  // Nombre de la clase para listar las publicaciones de cada autor, a usarse en las páginas de los autores
    public $mostrar_no_definidos = true;               // Verdadero pone todos los autores encontrados, falso solo los definidos aquí

    /**
     * Constructor
     */
    public function __construct() {
        // apodo, titulo, nombre_completo, icono, empresa, cargo, semblanza, email, twitter, estatus
        //~ $this->autores[] = new \Base\Autor('', 'Arq.', 'Ángeles Melisa Rodríguez Salas',    'arq-angeles-melisa-rodriguez-salas', '', '', '', '', '');
        $this->autores[] = new \Base\Autor('', 'Arq.', 'Cecilio Pedro Secunza Schott',      'arq-cecilio-pedro-secunza-schott', '', '', '', '', '');
        //~ $this->autores[] = new \Base\Autor('', 'Arq.', 'Daniela Patricia Corral Hernández', 'arq-daniela-patricia-corral-hernandez', '', '', '', '', '');
        //~ $this->autores[] = new \Base\Autor('', 'Arq.', 'Ilse Ávila García',                 'arq-ilse-avila-garcia', '', '', '', '', '');
        //~ $this->autores[] = new \Base\Autor('', 'Arq.', 'Jair Miramontes Chávez',            'arq-jair-miramontes-chavez', '', '', '', '', '');
        $this->autores[] = new \Base\Autor('', 'Arq.', 'Susana Montano',                    'arq-susana-montano', '', '', '', '', '');
        //~ $this->autores[] = new \Base\Autor('', 'Arq.', 'Teresita Benítez Saludado',         'arq-teresita-benitez-saludado', '', '', '', '', '');
        //~ $this->autores[] = new \Base\Autor('', '',     'Francisco Valdés Perezgasga',       'francisco-valdes-perezgasga', '', '', '', '', '');
        $this->autores[] = new \Base\Autor('', 'Ing.', 'Guillermo Valdés Lozano',           'ing-guillermo-valdes-lozano', 'IMPLAN Torreón', 'Programación y Software', '', 'guivaloz@movimientolibre.com', 'guivaloz');
        //~ $this->autores[] = new \Base\Autor('', 'Ing.', 'Luis Campos Hinojosa',              'ing-luis-campos-hinojosa', '', '', '', '', '');
        //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'Adriana Vargas Flores',             'lic-adriana-vargas-flores', '', '', '', '', '');
        //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'Alfredo Viesca Domínguez',          'lic-alfredo-viesca-dominguez', '', '', '', '', '');
        //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'Alicia Valdez Ibarra',              'lic-alicia-valdez-ibarra', '', '', '', '', '');
        //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'Eduardo Holguín Zehfuss',           'lic-eduardo-holguin-zehfuss', '', '', '', '', '');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Luis A. Gutiérrez Arizpe',          'lic-luis-a-gutierrez-arizpe', '', '', '', '', '');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Rodrigo González Morales',          'lic-rodrigo-gonzalez-morales', '', '', '', '', '');
    } // constructor

    /**
     * Obtener con apodo
     *
     * @param  string Apodo del autor a obtener
     * @return mixed  La instancia de Autor encontrada, falso si no se haya
     */
    public function obtener_con_apodo($apodo) {
        foreach ($this->autores as $autor) {
            if ($autor->apodo == $apodo) {
                return $autor;
            }
        }
        return false;
    } // obtener_con_apodo

    /**
     * Obtener con titulo y nombre completo
     *
     * @param  string Título y nombre completo del autor a obtener
     * @return mixed  La instancia de Autor encontrada, falso si no se haya
     */
    public function obtener_con_titulo_nombre_completo($titulo_nombre_completo) {
        foreach ($this->autores as $autor) {
            if ("{$autor->titulo} {$autor->nombre_completo}" == $titulo_nombre_completo) {
                return $autor;
            }
        }
        return false;
    } // obtener_con_titulo_nombre_completo

} // Clase AutoresConfig

?>
