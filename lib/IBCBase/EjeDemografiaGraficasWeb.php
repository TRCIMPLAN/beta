<?php
/**
 * TrcIMPLAN IBCBase - EjeDemografiaGraficasWeb
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
 * Clase EjeDemografiaGraficasWeb
 */
class EjeDemografiaGraficasWeb extends EjeDemografia implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $demografia;
    // protected $preparado;
    protected $graf_pob_mas_fem;
    protected $graf_pob_rang;
    protected $graf_pob_nac_otro_edo;
    protected $graf_pob_disc;

    /**
     * Preparar
     */
    protected function prepapar() {
        if (!$this->preparado) {
            parent::prepapar();
            // Gráfica Población Masculina Femenina
            $this->graf_pob_mas_fem = new GraficaPayWeb();
            $this->graf_pob_mas_fem->definir_titulo('Población por género');
            $this->graf_pob_mas_fem->agregar('Masculina', $this->demografia['Porcentaje de población masculina'], '#006AC8');
            $this->graf_pob_mas_fem->agregar('Femenina',  $this->demografia['Porcentaje de población femenina'],  '#C80083');
            // Gráfica Población Rangos
            $this->graf_pob_rang = new GraficaPayWeb();
            $this->graf_pob_rang->definir_titulo('Población por rangos de edad');
            $this->graf_pob_rang->agregar('De 0 a 14 años',   $this->demografia['Porcentaje de población de 0 a 14 años'],   '#89BE85');
            $this->graf_pob_rang->agregar('De 15 a 64 años',  $this->demografia['Porcentaje de población de 15 a 64 años'],  '#57A550');
            $this->graf_pob_rang->agregar('De 65 y más años', $this->demografia['Porcentaje de población de 65 y más años'], '#15630E');
            $this->graf_pob_rang->agregar('No especificada',  $this->demografia['Porcentaje de población no especificada'],  '#BFBFBF');
            // Gráfica Población Nacida en Otro Estado
            $this->graf_pob_nac_otro_edo = new GraficaPayWeb();
            $this->graf_pob_nac_otro_edo->definir_titulo('Nacida en otro estado');
            $this->graf_pob_nac_otro_edo->agregar('Nacida en OTRO estado',       $this->demografia['Porcentaje de población nacida en otro estado'], '#7E00A8');
            $this->graf_pob_nac_otro_edo->agregar('Nacida en este estado', 100 - $this->demografia['Porcentaje de población nacida en otro estado'], '#BFBFBF');
            // Gráfica Población con Discapacidad
            $this->graf_pob_disc = new GraficaPayWeb();
            $this->graf_pob_disc->definir_titulo('Con discapacidad');
            $this->graf_pob_disc->agregar('CON discapacidad',       $this->demografia['Porcentaje de población con discapacidad'], '#A80021');
            $this->graf_pob_disc->agregar('Sin discapacidad', 100 - $this->demografia['Porcentaje de población con discapacidad'], '#BFBFBF');
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
        $a[] = $this->graf_pob_mas_fem->html();
        $a[] = $this->graf_pob_rang->html();
        $a[] = $this->graf_pob_nac_otro_edo->html();
        $a[] = $this->graf_pob_disc->html();
        // Entregar
        return implode("\n", $a);
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
        $a[] = $this->graf_pob_mas_fem->javascript();
        $a[] = $this->graf_pob_rang->javascript();
        $a[] = $this->graf_pob_nac_otro_edo->javascript();
        $a[] = $this->graf_pob_disc->javascript();
        // Entregar
        return implode("\n", $a);
    } // javascript

} // Clase EjeDemografiaGraficasWeb

?>
