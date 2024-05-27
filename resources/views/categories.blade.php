@include('welcome')<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <div>
                <h1 class="text-start">Sistemas de Tierra Física</h1>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="bread-a">Protección</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sistemas de Tierra Fisica</li>
                    </ol>
                </nav>
            </div>
            <div class="row ">
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="mb-4 shadow-img card text-bg-dark">
                        <img class="img-fluid rounded" src="https://i.pinimg.com/originals/23/af/dc/23afdc70ab9c1a45d2d6b356374d2b6b.gif" alt="">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <span class="badge text-bg-light">Sistema Tierras Fisicas</span>
                            <span class="card-title fw-bolder">Kits de Tierras</span>
                          </div>
                    </div>
                    <div class="mb-4 shadow-img">
                        <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/1299339/screenshots/16895521/dsirf_s_loop.gif" alt="">
                    </div>
                    <div class="mb-4 shadow-img">
                        <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/4225597/screenshots/10972608/media/e9ff16e9c985f3b98e3472d6d779e75d.gif" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="mb-4 shadow-img bg-dark ">
                        <img class="img-fluid rounded" style="height: 350px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbnZHMhUFapbKFxenfpQQ6usjh6ddC4-6zImwd4Nlg5DFrPufPht5Z2W2XTQO0encm3ic&usqp=CAU" alt="">
                    </div>
                    <div class="mb-4 shadow-img">
                        <img class="img-fluid rounded" src="https://i.pinimg.com/originals/23/af/dc/23afdc70ab9c1a45d2d6b356374d2b6b.gif" alt="">
                    </div>
                    <div class="mb-4 shadow-img">
                        <img class="img-fluid rounded" src="https://i.pinimg.com/originals/23/af/dc/23afdc70ab9c1a45d2d6b356374d2b6b.gif" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="mb-4 shadow-img">
                        <img class="img-fluid rounded" src="https://i.pinimg.com/originals/23/af/dc/23afdc70ab9c1a45d2d6b356374d2b6b.gif" alt="">
                    </div>
                    <div class="mb-4 shadow-img bg-dark">
                        <img class="img-fluid rounded" style="height: 350px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbnZHMhUFapbKFxenfpQQ6usjh6ddC4-6zImwd4Nlg5DFrPufPht5Z2W2XTQO0encm3ic&usqp=CAU" alt="">
                    </div>
                    <div class="mb-4 shadow-img">
                        <img class="img-fluid rounded" src="https://i.pinimg.com/originals/23/af/dc/23afdc70ab9c1a45d2d6b356374d2b6b.gif" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="mb-4 shadow-img">
                        <img class="img-fluid rounded" src="https://i.pinimg.com/originals/23/af/dc/23afdc70ab9c1a45d2d6b356374d2b6b.gif" alt="">
                    </div>
                    <div class="mb-4 shadow-img">
                        <img class="img-fluid rounded" src="https://i.pinimg.com/originals/23/af/dc/23afdc70ab9c1a45d2d6b356374d2b6b.gif" alt="">
                    </div>
                    <div class="mb-4 shadow-img bg-dark">
                        <img class="img-fluid rounded" src="https://i.pinimg.com/originals/23/af/dc/23afdc70ab9c1a45d2d6b356374d2b6b.gif" alt="">
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- col-lg-12 -->
    </div> <!-- row -->
</div> <!-- container -->
@if ($tierras_fisicas->isEmpty())
    <p>No hay datos disponibles.</p>
@else
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tierras_fisicas as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->categoria }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
