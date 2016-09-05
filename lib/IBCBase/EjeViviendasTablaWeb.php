<?php
/**
 * TrcIMPLAN IBCBase - EjeViviendasTablaWeb
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
 * Clase EjeViviendasTablaWeb
 */
class EjeViviendasTablaWeb extends EjeViviendas implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $viviendas;
    // protected $preparado;
    protected $tabla;
    const     IDENTIFICADOR = 'TablaViviendas';

    /**
     * Preparar
     */
    protected function prepapar() {
        if (!$this->preparado) {
            try {
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
                        array('indicador' => 'Hogares con jefatura masculina', 'valor' => $this->viviendas['Hogares Jefatura masculina']),
                        array('indicador' => 'Hogares con jefatura femenina',  'valor' => $this->viviendas['Hogares Jefatura femenina']),
                        array('indicador' => 'Viviendas con Electricidad',     'valor' => $this->viviendas['Viviendas con Electricidad']),
                        array('indicador' => 'Viviendas con Agua',             'valor' => $this->viviendas['Viviendas con Agua']),
                        array('indicador' => 'Viviendas con Drenaje',          'valor' => $this->viviendas['Viviendas con Drenaje']),
                        array('indicador' => 'Viviendas con Televisión',       'valor' => $this->viviendas['Viviendas con Televisión']),
                        array('indicador' => 'Viviendas con Automóvil',        'valor' => $this->viviendas['Viviendas con Automóvil']),
                        array('indicador' => 'Viviendas con Computadora',      'valor' => $this->viviendas['Viviendas con Computadora']),
                        array('indicador' => 'Viviendas con Celular',          'valor' => $this->viviendas['Viviendas con Celular']),
                        array('indicador' => 'Viviendas con Internet',         'valor' => $this->viviendas['Viviendas con Internet'])
                    )
                );
            } catch (EjeExceptionSinDatos $e) {
                $this->tabla = new MensajeWeb();
                $this->tabla->definir_mensaje_aviso('', $e->getMessage());
            }
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

} // Clase EjeViviendasTablaWeb

?>
