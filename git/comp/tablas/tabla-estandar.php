<table class="tabla-estandar">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Fecha de registro</th>
            <th class="u-textRight">Monto</th>
            <th class="u-textCenter">Estado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Ana Rodríguez</td>
            <td>Administradora</td>
            <td>12/04/2026</td>
            <td class="u-textRight">$ 45.300</td>
            <td class="u-textCenter"><span class="tag tag--exito">Activo</span></td>
        </tr>
        <tr>
            <td>Juan Pérez</td>
            <td>Editor</td>
            <td>05/05/2026</td>
            <td class="u-textRight">$ 32.100</td>
            <td class="u-textCenter"><span class="tag tag--exito">Activo</span></td>
        </tr>
        <tr>
            <td>María López</td>
            <td>Redactora</td>
            <td>28/05/2026</td>
            <td class="u-textRight">$ 28.500</td>
            <td class="u-textCenter"><span class="tag tag--advertencia">Pendiente</span></td>
        </tr>
        <tr>
            <td>Carlos Gomez</td>
            <td>Supervisor</td>
            <td>14/06/2026</td>
            <td class="u-textRight">$ 54.000</td>
            <td class="u-textCenter"><span class="tag tag--error">Inactivo</span></td>
        </tr>
    </tbody>
</table>

<style>
.tabla-estandar {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    color: var(--neutro-900, #111111);
}

.tabla-estandar th {
    background-color: var(--neutro-50, #f3f3f3);
    color: var(--neutro-700, #444444);
    font-weight: 600;
    text-align: left;
    padding: 12px 16px;
    border-bottom: 2px solid var(--neutro-200, #cccccc);
}

.tabla-estandar td {
    padding: 12px 16px;
    border-bottom: 1px solid var(--neutro-100, #eeeeee);
    vertical-align: middle;
}

.tabla-estandar tr:hover {
    background-color: var(--decorativo-celeste-claro, #e2e9f1);
}

/* Clases utilitarias de alineación básicas para la tabla */
.tabla-estandar .u-textRight {
    text-align: right !important;
}

.tabla-estandar .u-textCenter {
    text-align: center !important;
}

/* Estilo para los tags dentro de la tabla si no estuvieran cargados en main.css */
.tag {
    display: inline-flex;
    align-items: center;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 600;
}
.tag--exito {
    background-color: #d4edda;
    color: #155724;
}
.tag--advertencia {
    background-color: #fff3cd;
    color: #856404;
}
.tag--error {
    background-color: #f8d7da;
    color: #721c24;
}
</style>
