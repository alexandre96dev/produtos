<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                Pedidos
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#btnAddProductModal">Cadastrar</button>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($requests as $item) : ?> <tr>
                                <td>
                                    <?= $item->id ?>
                                </td>

                                <td><?= $item->descricao ?></td>

                                <td>
                                    <?= $item->quantidade ?>
                                </td>
                                <td><?= $item->ativo ?></td>
                                <td>
                                    <a href="/products/delete?id=<?= $item->id ?>">Ativar</a>
                                    <a href="/products/delete?id=<?= $item->id ?>">Excluir</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-body-secondary">
                2 days ago
            </div>
        </div>
    </div>
    <div class="modal fade" id="btnAddProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Criar Pedido</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/requests/save" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Produto</label>
                            <select class="form-select" aria-label="Default select example" id="createProductId" name="createProductId">
                                <?php foreach ($products as $item) : ?>
                                    <option value="<?= $item->id ?>"><?= $item->descricao ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Quantidade</label>
                            <input type="text" class="form-control" id="createQuantity" name="createQuantity" min="1" placeholder="1">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>