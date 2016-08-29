<?php
/**
 * TrcIMPLAN IBCBase - EjeUnidadesEconomicas
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
 * Clase EjeUnidadesEconomicas
 */
class EjeUnidadesEconomicas implements SalidaWeb {

    protected $publicacion_ficha;
    protected $unidades_economicas;
    protected $graf_uni_eco;
    protected $graficas_preparadas = false;

    /**
     * Constructor
     *
     * @param mixed Instancia de PublicacionFicha
     */
    public function __construct(PublicacionFicha $in_publicacion_ficha) {
        $this->publicacion_ficha = $in_publicacion_ficha;
    } // constructor

    /**
     * Preparar gráficas
     */
    protected function preparar_graficas() {
        // Si ya fueron preparadas
        if ($this->graficas_preparadas) {
            return;
        }
        // Tomar datos
        $datos = $this->publicacion_ficha->datos();
        if (isset($datos['Unidades Económicas'])) {
            $this->unidades_economicas = $datos['Unidades Económicas'];
        } else {
            throw new \Exception("Error: Faltan datos sobre Unidades Económicas.");
        }
        // Grafica Unidades Economicas
        $this->graf_uni_eco = new GraficaBarras();
        $this->graf_uni_eco->definir_titulo('Unidades Económicas');
        $this->graf_uni_eco->agregar('Primera', $this->unidades_economicas[''], '#80C0FF');
        $this->graf_uni_eco->agregar('Segunda', $this->unidades_economicas[''], '#59BFC3');
        $this->graf_uni_eco->agregar('Tercera', $this->unidades_economicas[''], '#59C38E');
        $this->graf_uni_eco->agregar('Cuarta',  $this->unidades_economicas[''], '#8EC359');
        $this->graf_uni_eco->agregar('Quinta',  $this->unidades_economicas[''], '#C38E59');
        // Levantar bandera
        $this->graficas_preparadas = true;
    } // preparar_graficas
/*
            'Unidades Económicas' => array(
                'Primer actividad' => 'AEComercioMenu 22.63%',
                'Segunda actividad' => 'AEOtros 13.74%',
                'Tercera actividad' => 'AEProfesional 13.74%',
                'Cuarta actividad' => 'AEAlimentos 12.22%',
                'Quinta actividad' => 'AESalud 9.9%'
            )
 */
    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->preparar_graficas();
        // Acumular
        $a   = array();
        // Entregar
        return '    '.implode("\n    ", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->preparar_graficas();
        // Acumular
        $a   = array();
        // Entregar
        return '    '.implode("\n    ", $a);
    } // javascript

} // Clase EjeUnidadesEconomicas

?>
