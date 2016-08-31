<?php
/**
 * TrcIMPLAN IBCBase - EjeViviendasTablas
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
 * @package PlataformaDeConocimiento
 */

namespace IBCBase;

/**
 * Clase EjeViviendasTablas
 */
class EjeViviendasTablas extends EjeViviendas implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $viviendas;
    // protected $preparado;
    protected $tabla_viv_jef;
    protected $tabla_viv_ser;

    /**
     * Preparar
     */
    protected function prepapar() {
        if (!$this->preparado) {
            parent::preparado();
            // Tabla Vivendas Jefatura
            $this->tabla_viv_jef = new TablaWeb();
            $this->tabla_viv_jef->definir_estructura(
                array(
                    'nombre'     => array('enca' => 'Hogares con'),
                    'porcentaje' => array('enca' => 'Porcentaje')
                )
            );
            $this->tabla_viv_jef->definir_panal(
                array(
                    array('nombre' => 'Jefatura masculina', 'porcentaje' => $this->viviendas['Hogares Jefatura masculina']),
                    array('nombre' => 'Jefatura femenina',  'porcentaje' => $this->viviendas['Hogares Jefatura femenina'])
                )
            );
            // Tabla Vivendas Servicios
            $this->tabla_viv_ser = new TablaWeb();
            $this->tabla_viv_ser->definir_estructura(
                array(
                    'nombre'     => array('enca' => 'Servicio'),
                    'porcentaje' => array('enca' => 'Porcentaje')
                )
            );
            $this->tabla_viv_ser->definir_panal(
                array(
                    array('nombre' => 'Viviendas con Electricidad', 'porcentaje' => $this->viviendas['Viviendas con Electricidad']),
                    array('nombre' => 'Viviendas con Agua',         'porcentaje' => $this->viviendas['Viviendas con Agua']),
                    array('nombre' => 'Viviendas con Drenaje',      'porcentaje' => $this->viviendas['Viviendas con Drenaje']),
                    array('nombre' => 'Viviendas con Televisión',   'porcentaje' => $this->viviendas['Viviendas con Televisión']),
                    array('nombre' => 'Viviendas con Automóvil',    'porcentaje' => $this->viviendas['Viviendas con Automóvil']),
                    array('nombre' => 'Viviendas con Computadora',  'porcentaje' => $this->viviendas['Viviendas con Computadora']),
                    array('nombre' => 'Viviendas con Celular',      'porcentaje' => $this->viviendas['Viviendas con Celular']),
                    array('nombre' => 'Viviendas con Internet',     'porcentaje' => $this->viviendas['Viviendas con Internet']),
                )
            );
        }
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->prepapar();
        // Acumular
        $a   = array();
        $a[] = $this->tabla_viv_jef->html();
        $a[] = $this->tabla_viv_ser->html();
        // Entregar
        return implode("\n    ", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->prepapar();
        // Acumular
        $a   = array();
        $a[] = $this->tabla_viv_jef->javascript();
        $a[] = $this->tabla_viv_ser->javascript();
        // Entregar
        return implode("\n    ", $a);
    } // javascript

} // Clase EjeViviendasTablas

?>
