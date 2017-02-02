@extends('master')

@section('sidebar-up')
        <div class="container roundCorner">
                <table class="calc" align="center">
                    <tr>
                        <td colspan="4"><div id="screen" class="well text-right"></div></td>
                    </tr>
                    <tr>
                        <td class="equalCell" colspan="3">
                            <button id="AC" value="AC" class="btn btn-danger fullCellWidth">AC</button>
                        </td>
                        <td class="equalCell"><button id="/" value="/" class="btn btn-warning fullCellWidth">/</button></td>
                    </tr>
                    <tr>
                        <td class="equalCell"><button id="7" value="7" class="btn fullCellWidth">7</button></td>
                        <td class="equalCell"><button id="8" value="8" class="btn fullCellWidth">8</button></td>
                        <td class="equalCell"><button id="9" value="9" class="btn fullCellWidth">9</button></td>
                        <td class="equalCell"><button id="x" value="*" class="btn btn-warning fullCellWidth">x</button></td>
                    </tr>
                    <tr>
                        <td class="equalCell"><button id="4" value="4" class="btn fullCellWidth">4</button></td>
                        <td class="equalCell"><button id="5" value="5" class="btn fullCellWidth">5</button></td>
                        <td class="equalCell"><button id="6" value="6" class="btn fullCellWidth">6</button></td>
                        <td class="equalCell"><button id="-" value="-" class="btn btn-warning fullCellWidth">-</button></td>
                    </tr>
                    <tr>
                        <td class="equalCell"><button id="1" value="1" class="btn fullCellWidth">1</button></td>
                        <td class="equalCell"><button id="2" value="2" class="btn fullCellWidth">2</button></td>
                        <td class="equalCell"><button id="3" value="3" class="btn fullCellWidth">3</button></td>
                        <td class="equalCell"><button id="+" value="+" class="btn btn-warning fullCellWidth">+</button></td>
                    </tr>
                    <tr>
                        <td class="equalCell" colspan="2"><button id="0" value="0" class="btn fullCellWidth">0</button></td>
                        <td class="equalCell"><button id="." value="." class="btn fullCellWidth">.</button></td>
                        <td class="equalCell">
                            <button id="equals" value="=" class="btn btn-warning fullCellWidth" onclick="return equals()">=</button>
                        </td>
                    </tr>
                </table>
        </div>
@stop