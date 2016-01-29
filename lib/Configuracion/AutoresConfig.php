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

    public $autores             = array();            // Arreglo asociativo con instancias de \Base\Autor
    public $vinculos_indice     = 'VinculosTarjetas'; // Nombre de la clase para el índice de autores, en autores/index.html
    public $vinculos_individual = 'VinculosListado';  // Nombre de la clase para listar las publicaciones de cada autor, a usarse en las páginas de los autores

    /**
     * Constructor
     */
    public function __construct() {
        // apodo, titulo, nombre_completo, icono, empresa, cargo, semblanza, email, twitter, estatus
        $this->autores[] = new \Base\Autor('guivaloz', 'Ing.', 'Guillermo Valdés Lozano',        'preferences-desktop-user', 'IMPLAN Torreón', 'Desarrollador y Divulgador', '', 'guivaloz@movimientolibre.com', 'guivaloz');
        $this->autores[] = new \Base\Autor('rosy',     '',     'Rosa Elena Espinoza Villarreal', 'preferences-desktop-user', 'Nemosíntesis',   'Escritora',                  '', 'rosyespin@gmail.com',          'hielitodelimon');
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
