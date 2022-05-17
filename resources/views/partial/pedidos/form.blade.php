<form
    action="@if ($pedido->idPedido > 0)
                {{ route('pedido.update', $pedido->idPedido) }}
            @else
                {{ route('pedido.store') }}
            @endif"
    method="post"
>

    @if ($pedido->idPedido > 0)
    {{ method_field('PUT') }}
    @endif

    {{csrf_field()}}

    <div class="row">
        <div class="col-sm-6">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" value="{{$pedido->cantidad}}" required="">
        </div>

        <div class="col-sm-6">
            <label for="idProducto" class="form-label">Producto</label>
            <input type="text" class="form-control" id="idProducto" name="idProducto" placeholder="Producto" value="{{$pedido->idProducto}}" required="">
        </div>

        <div class="col-12">
            <label for="idProveedor" class="form-label">Proveedor</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="idProveedor" name="idProveedor" placeholder="Proveedor" value="{{$pedido->idProveedor}}" required="">
            </div>
        </div>

        <div class="col-12">
            <label for="idEmpleado" class="form-label">Empleado</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="idEmpleado" name="idEmpleado" placeholder="Empleado" value="{{$pedido->idEmpleado}}" required="">
            </div>
        </div>

        <hr class="my-4">

        <input type="submit" class="w-100 btn btn-sm btn-outline-info" value="Guardar">
    </div>






</form>


