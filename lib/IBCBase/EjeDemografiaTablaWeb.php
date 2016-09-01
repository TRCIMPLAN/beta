<?php
/**
 * TrcIMPLAN IBCBase - EjeDemografiaTablaWeb
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
 * Clase EjeDemografiaTablaWeb
 */
class EjeDemografiaTablaWeb extends EjeDemografia implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $demografia;
    // protected $preparado;
    protected $tabla;
    const     IDENTIFICADOR = 'TablaDemografia';

    /**
     * Preparar
     */
    protected function prepapar() {
        if (!$this->preparado) {
            parent::prepapar();
            $this->tabla = new TablaWeb(self::IDENTIFICADOR);
            $this->tabla->definir_estructura(
                array(
                    'indicador' => array('enca' => 'Indicador'),
                    'valor'     => array('enca' => 'Valor')
                )
            );
            $this->tabla->definir_panal(
                array(
                    array('indicador' => 'Población total',                               'valor' => $this->demografia['Población total']),
                    array('indicador' => 'Porcentaje de población masculina',             'valor' => $this->demografia['Porcentaje de población masculina']),
                    array('indicador' => 'Porcentaje de población femenina',              'valor' => $this->demografia['Porcentaje de población femenina']),
                    array('indicador' => 'Porcentaje de población de 0 a 14 años',        'valor' => $this->demografia['Porcentaje de población de 0 a 14 años']),
                    array('indicador' => 'Porcentaje de población de 15 a 64 años',       'valor' => $this->demografia['Porcentaje de población de 15 a 64 años']),
                    array('indicador' => 'Porcentaje de población de 65 y más años',      'valor' => $this->demografia['Porcentaje de población de 65 y más años']),
                    array('indicador' => 'Porcentaje de población no especificada',       'valor' => $this->demografia['Porcentaje de población no especificada']),
                    array('indicador' => 'Fecundidad promedio',                           'valor' => $this->demografia['Fecundidad promedio']),
                    array('indicador' => 'Porcentaje de población nacida en otro estado', 'valor' => $this->demografia['Porcentaje de población nacida en otro estado']),
                    array('indicador' => 'Porcentaje de población con discapacidad',      'valor' => $this->demografia['Porcentaje de población con discapacidad'])
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
        return $this->tabla->html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->prepapar();
        return $this->tabla->javascript();
    } // javascript

} // Clase EjeDemografiaTablaWeb

?>
