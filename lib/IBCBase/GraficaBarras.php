<?php
/**
 * TrcIMPLAN IBCBase - GraficaBarras
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
 * Clase GraficaBarras
 */
class GraficaBarras implements SalidaWeb {

    protected $identificador     = '';
    protected $titulo            = '';
    protected $valor_minimo;
    protected $valor_maximo;
    protected $eje_horizontal_etiqueta;
    protected $etiquetas_valores = array();
    protected $etiquetas_colores = array();
    const     COLOR_POR_DEFECTO  = '#FF7F37';

    /**
     * Constructor
     *
     * @param string Identificador, parámetro id que va en el div
     * @param string Opcional, título
     */
    public function __construct($in_identificador, $in_titulo='') {
        $this->identificador = $in_identificador;
        $this->titulo        = $in_titulo;
    } // constructor

    /**
     * Agregar
     *
     * @param string Etiqueta
     * @param string Valor
     * @param string Opcional, color en hexadecimal como #rrggbb
     */
    public function agregar($etiqueta, $valor, $color=false) {
        $this->etiquetas_valores[$etiqueta] = $valor;
        if (is_string($color) && ($color != '')) {
            $this->etiquetas_colores[$etiqueta] = $color;
        } else {
            $this->etiquetas_colores[$etiqueta] = self::COLOR_POR_DEFECTO;
        }
    } // agregar

    /**
     * Validar
     */
    protected function validar() {
        if ($this->identificador == '') {
            throw new \Exception("Error: Falta el identificador.");
        }
        if (count($this->etiquetas_valores) == 0) {
            throw new \Exception("Error: Falta agregar valores.");
        }
    } // validar

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
        // Google Charts
        $a[] = "    google.charts.setOnLoadCallback(elaborarGrafica{$this->identificador});";
        $a[] = "    function elaborarGrafica{$this->identificador}() {";
        $a[] = "        var data = google.visualization.arrayToDataTable([";
        $a[] = "            ['Etiqueta', 'Valor', { role: 'style' }, { role: 'annotation' }],";
        $b   = array();
        foreach ($this->etiquetas_valores as $etiqueta => $valor) {
            $b[] = sprintf("            ['%s', %s, '%s', '%s']", $etiqueta, $valor, $this->etiquetas_colores[$etiqueta], $valor.' %');
        }
        $a[] = implode(",\n    ", $b);
        $a[] = "        ]);";
        $a[] = "        var options = {";
        if ($this->titulo != '') {
            $a[] = "          title: '{$this->titulo}',";
        }
        $a[] = "          width: 400,";
        $a[] = "          height: 300,";
        $a[] = "          chartArea: { width:'60%' },";
        $a[] = "          hAxis: { title:'Porcentaje', minValue:0, maxValue:100 },";
        $a[] = "          legend: { position:'none' }";
        $a[] = "        };";
        $a[] = "        var chart = new google.visualization.BarChart(document.getElementById('grafica{$this->identificador}'));";
        $a[] = "        chart.draw(data, options);";
        $a[] = "    }";
        // Morris.js
    /*  $a[] = "if (typeof varGrafica{$this->identificador} === 'undefined') {";
        $a[] = "    varGrafica{$this->identificador} = Morris.Bar({";
        $a[] = "        element: 'grafica{$this->identificador}',";
        $a[] = "        data: [";
        foreach ($this->etiquetas_valores as $etiqueta => $valor) {
            $a[] = "            {y: '$etiqueta', a: $valor},";
        }
        $a[] = "        ],";
        $a[] = "        xkey: 'y',";
        $a[] = "        ykeys: ['a'],";
        $a[] = sprintf("        labels: ['%s'],", implode("', '", array_keys($this->etiquetas_valores)));
        $a[] = sprintf("        barColors: ['%s'],", implode("', '", $this->etiquetas_colores));
        $a[] = "        hideHover: false"; // false para mostrar siempre las leyendas en cada barra, true sólo cuando pasa el puntero
        $a[] = "    });";
        $a[] = "}"; */
        return implode("\n    ", $a);
    } // javascript

} // Clase GraficaBarras

?>
