<?php
/**
 * TrcIMPLAN IBCBase - GraficaPayWeb
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
 * Clase GraficaPayWeb
 */
class GraficaPayWeb extends Grafica implements SalidaWeb {

    // protected $identificador;
    // protected $titulo;
    // protected $etiquetas_valores;
    // protected $etiquetas_colores;
    // protected $post_nota;
    // const     COLOR_POR_DEFECTO;

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->validar();
        return "    <div id=\"grafica{$this->identificador}\" class=\"grafica\"></div>";
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->validar();
        $a   = array();
        $a[] = "    // GraficaPayWeb {$this->identificador}";
        // Google Charts
        $a[] = "    google.charts.setOnLoadCallback(elaborarGrafica{$this->identificador});";
        $a[] = "    function elaborarGrafica{$this->identificador}() {";
        $a[] = "        var data = google.visualization.arrayToDataTable([";
        $a[] = "            ['Etiqueta', 'Valor'],";
        $b   = array();
        foreach ($this->etiquetas_valores as $etiqueta => $valor) {
            $b[] = sprintf("            ['%s', %s]", $etiqueta, $valor);
        }
        $a[] = implode(",\n", $b);
        $a[] = "        ]);";
        $a[] = "        var options = {";
        $a[] = "          chartArea: { width: '100%', height: '80%' },";
        $c   = array();
        foreach ($this->etiquetas_colores as $color) {
            $c[] = "{color: '$color'}";
        }
        if ($this->titulo !== NULL) {
            $a[] = sprintf("          title: '%s',", $this->titulo);
        }
        $a[] = sprintf("          slices: [%s]", implode(', ', $c));
        $a[] = "        };";
        $a[] = "        var chart = new google.visualization.PieChart(document.getElementById('grafica{$this->identificador}'));";
        $a[] = "        chart.draw(data, options);";
        $a[] = "    }";
        // Morris.js
    /*  $a[] = "if (typeof varGrafica{$this->identificador} === 'undefined') {";
        $a[] = "    varGrafica{$this->identificador} = Morris.Donut({";
        $a[] = "        element: 'grafica{$this->identificador}',";
        $a[] = "        formatter: function(y){return y + ' %'},";
        $a[] = '        data: [';
        foreach ($this->etiquetas_valores as $etiqueta => $valor) {
            $a[] = "            {label: \"$etiqueta\", value: \"$valor\"},";
        }
        $a[] = '        ],';
        $a[] = sprintf("        colors: ['%s']", implode("', '", $this->etiquetas_colores));
        $a[] = '    });';
        if ($this->indice_valor_a_resaltar !== false) {
            $a[] = "    varGrafica{$this->identificador}.select({$this->indice_valor_a_resaltar});";
        }
        $a[] = '}'; */
        // Entregar
        return implode("\n", $a);
    } // javascript

} // Clase GraficaPayWeb

?>
