@extends ('layouts.master')
@section('content')


<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Añadir película
            </div>
            <form method="POST" class="card-body" style="padding:30px">

                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Año</label>
                    <input type="text" name="year" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Director</label>
                    <input type="text" name="director" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Póster</label>
                    <input type="text" name="poster" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="synopsis">Resumen</label>
                    <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Añadir película
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection