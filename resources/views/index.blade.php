@extends('master.master')
@section('content')
    <div class="front container-fluid">
        <h1>Service<span>Box</span></h1>
        <h3><span>Expertos en almacenaje y servicios asociados</span></h3>
    </div>

    <div class="informacion">
        <div class="info">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar erat nec enim vehicula, nec venenatis sem placerat. Nullam eget placerat ante. Vivamus sagittis eros elit, eget auctor mi vehicula at. Quisque id pretium tortor. Mauris vulputate fringilla tristique. Aliquam erat volutpat. Phasellus pellentesque turpis vitae accumsan gravida. Nam maximus mattis eros, in tempus est pellentesque facilisis. Nulla varius mi vel neque auctor ullamcorper. Vestibulum aliquet risus magna, pulvinar condimentum justo sollicitudin nec. Sed vitae nulla efficitur, pellentesque sem at, sollicitudin dui. Fusce sit amet sagittis purus. Mauris in finibus quam, non sollicitudin sapien. Nunc ut gravida velit, sit amet tempus odio. Pellentesque volutpat convallis mauris hendrerit tincidunt. Etiam sit amet tincidunt tortor. </p>
            <p> Cras sit amet tristique sapien. Praesent vel mauris sollicitudin, tempor enim a, consequat odio. Donec cursus est a velit accumsan, vel tincidunt mauris tincidunt. Duis et vestibulum massa, sit amet venenatis magna. Nam dolor mauris, porta eu neque eget, fringilla suscipit ligula. Donec bibendum quam nulla, sit amet vestibulum metus scelerisque eu. Pellentesque iaculis nisl id nunc fermentum, quis posuere tellus ultrices. Nullam feugiat sapien at elit congue, sit amet auctor nulla dapibus. Maecenas ac lorem at enim consequat mollis id at libero. Ut iaculis diam non enim porta, ac ultricies sem vehicula. Aenean mollis felis nec diam maximus pharetra. Morbi ut libero consectetur, consectetur elit et, pretium odio. Nunc in aliquet neque. </p>
            <p>Nunc venenatis sapien eget dui ultrices, dapibus efficitur leo vestibulum. Sed a viverra urna. Nulla congue nisi eu eleifend dignissim. Mauris facilisis dapibus fringilla. Donec gravida leo tortor, in rhoncus nunc facilisis vitae. Pellentesque iaculis pellentesque ante in ultricies. Maecenas id bibendum diam, vel viverra risus. Nam feugiat elit molestie massa sagittis, quis ornare velit gravida. Donec vitae ipsum vel dolor ultricies tempus. Mauris metus lorem, laoreet ut hendrerit vitae, scelerisque vel urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam vestibulum mollis eleifend. Pellentesque luctus a enim sed rutrum. Praesent ac luctus metus. Maecenas ante turpis, auctor eget mi et, vestibulum euismod leo. Curabitur auctor sollicitudin suscipit. </p>
        </div>
    </div>

    <div class="form">
        <div class="form-inside">
            <h2>Contáctanos!</h2>
            <form action="/contactSend" method="post" class="form-horizontal well">
                {{ csrf_field() }}
                <fieldset>
                    <legend>Legend</legend>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email de contacto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone" class="col-lg-2 control-label">Phone</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="Número de contacto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" name="text" id="textArea"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            <div class="error">
                @if ($errors->any())
                    <script>
                        swal("Error!","Has introducido mal los datos", "error");
                    </script>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
